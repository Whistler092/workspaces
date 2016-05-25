//
//  MasterViewController.swift
//  Blog Reader
//
//  Created by Ramiro Andres on 23/05/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit
import CoreData

class MasterViewController: UITableViewController , NSFetchedResultsControllerDelegate {

    var managedObjectContext: NSManagedObjectContext? = nil

    override func awakeFromNib() {
        super.awakeFromNib()
    }

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        LoadPostFromService()
    }
    
    func LoadPostFromService()
    {
        var appDel: AppDelegate = UIApplication.sharedApplication().delegate as! AppDelegate
        var context: NSManagedObjectContext = appDel.managedObjectContext!
        
        let url = NSURL(string: "https://www.googleapis.com/blogger/v3/blogs/3384974651632264887/posts?key=AIzaSyCodgPClvuqxV-zN0e9r-_jhzNPtI4yBNw")
        
        let session = NSURLSession.sharedSession()
        let task = session.dataTaskWithURL(url!, completionHandler: { (data, response, error) -> Void in
            if error != nil {
                println(error)
            }else {
                //println(NSString(data: data, encoding: NSUTF8StringEncoding))
                let jsonResut = NSJSONSerialization.JSONObjectWithData(data, options: NSJSONReadingOptions.MutableContainers, error: nil) as! NSDictionary
                
                if jsonResut.count > 0{
                    if let items = jsonResut["items"] as? NSArray{
                        
                        //Borramos todos los registros
                        var request = NSFetchRequest(entityName: "Posts")
                        request.returnsObjectsAsFaults = false
                        var results = context.executeFetchRequest(request, error: nil)!
                        
                        if results.count > 0
                        {
                            for result in results{
                                context.deleteObject(result as! NSManagedObject)
                                context.save(nil)
                            }
                            println("Registros de la app borrados")
                            
                        }
                        
                        for item in items{
                            //println(item)
                            
                            if let title = item["title"] as? String{
                                if let content = item["content"] as? String{
                                    //println(content)
                                    var newPost: NSManagedObject = NSEntityDescription.insertNewObjectForEntityForName("Posts", inManagedObjectContext: context) as! NSManagedObject
                                    
                                    //Set Values To atributes
                                    newPost.setValue(title, forKey: "title")
                                    newPost.setValue(content, forKey: "content")
                                    
                                    context.save(nil)
                                    //context.mergeChangesFromContextDidSaveNotification(notification: NSNotification)
                                }
                            }
                        }
                    }
                }
                //Consultar todos los Posts guardados
                /*var request = NSFetchRequest(entityName: "Posts")
                request.returnsObjectsAsFaults = false
                var results = context.executeFetchRequest(request, error: nil)!
                println(results)*/
                
                //self._fetchedResultsController = nil
                self.tableView.reloadData()
                
                //self._fetchedResultsController!.performFetch(nil)

                //[self.tableView.reloadData()]
                
                //self.controllerDidChangeContent()
            }
        })
        task.resume()

    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    

    // MARK: - Segues

    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        if segue.identifier == "showDetail" {
           //Mostrando el objeto, 
            if let indexPath = self.tableView.indexPathForSelectedRow() {
                let object = self.fetchedResultsController.objectAtIndexPath(indexPath) as! NSManagedObject
                let controller = (segue.destinationViewController as! UINavigationController).topViewController as! DetailViewController
                controller.detailItem = object
                controller.navigationItem.leftBarButtonItem = self.splitViewController?.displayModeButtonItem()
                controller.navigationItem.leftItemsSupplementBackButton = true
            }
        }
    }

    // MARK: - Table View

    override func numberOfSectionsInTableView(tableView: UITableView) -> Int {
        return 1
    }

    override func tableView(tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        let sectionInfo = self.fetchedResultsController.sections![section] as! NSFetchedResultsSectionInfo
        return sectionInfo.numberOfObjects
    }

    override func tableView(tableView: UITableView, cellForRowAtIndexPath indexPath: NSIndexPath) -> UITableViewCell {
        let cell = tableView.dequeueReusableCellWithIdentifier("Cell", forIndexPath: indexPath) as! UITableViewCell
        self.configureCell(cell, atIndexPath: indexPath)

        return cell
    }

    
    func configureCell(cell: UITableViewCell, atIndexPath indexPath: NSIndexPath) {
        let object = self.fetchedResultsController.objectAtIndexPath(indexPath) as! NSManagedObject
        cell.textLabel!.text = object.valueForKey("title")!.description
    }
    

    
    override func tableView(tableView: UITableView, canEditRowAtIndexPath indexPath: NSIndexPath) -> Bool {
        // Return false if you do not want the specified item to be editable.
        return false
    }
    
    
    // MARK: - Fetched results controller
    //Buscar en todo el Core Data y despues mostrar en al vista
    var fetchedResultsController: NSFetchedResultsController {
        if _fetchedResultsController != nil {
            return _fetchedResultsController!
        }
        
        let fetchRequest = NSFetchRequest()
        // Edit the entity name as appropriate.
        let entity = NSEntityDescription.entityForName("Posts", inManagedObjectContext: self.managedObjectContext!)
        fetchRequest.entity = entity
        
        // Set the batch size to a suitable number.
        fetchRequest.fetchBatchSize = 20
        
        // Edit the sort key as appropriate.
        let sortDescriptor = NSSortDescriptor(key: "title", ascending: true)
        let sortDescriptors = [sortDescriptor]
        
        fetchRequest.sortDescriptors = [sortDescriptor]
        
        // Edit the section name key path and cache name if appropriate.
        // nil for section name key path means "no sections".
        let aFetchedResultsController = NSFetchedResultsController(fetchRequest: fetchRequest, managedObjectContext: self.managedObjectContext!, sectionNameKeyPath: nil, cacheName: "Master")
        aFetchedResultsController.delegate = self
        _fetchedResultsController = aFetchedResultsController
        
        var error: NSError? = nil
        if !_fetchedResultsController!.performFetch(&error) {
            // Replace this implementation with code to handle the error appropriately.
            // abort() causes the application to generate a crash log and terminate. You should not use this function in a shipping application, although it may be useful during development.
            println("Unresolved error \(error), \(error!.userInfo)")
            //abort()
        }
        
        return _fetchedResultsController!
    }
    var _fetchedResultsController: NSFetchedResultsController? = nil
    
    func controllerDidChangeContent(controller: NSFetchedResultsController) {
        self.tableView.endUpdates()
    }

}
