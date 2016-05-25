//
//  FirstViewController.swift
//  To Do List
//
//  Created by Ramiro Andres on 14/04/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit

//Si creo una variable afuera de la clase las podrán ver los otros Controller
var toDoList = [String]()

class FirstViewController: UIViewController, UITableViewDelegate {

    //En la vista, arrastrar la tabla al Controller.
    
    @IBOutlet var toDoListTable: UITableView!

    
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        
        if NSUserDefaults.standardUserDefaults().objectForKey("toDoList") != nil {
            toDoList = NSUserDefaults.standardUserDefaults().objectForKey("toDoList") as![String]
        }
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }

    //Metodos de la tabla
    
    func tableView(tableView: UITableView, numberOfRowsInSection section: Int) -> Int
    {
        return toDoList.count
    }
    
    func tableView(tableView: UITableView, cellForRowAtIndexPath indexPath: NSIndexPath) -> UITableViewCell
    {
        let cell = UITableViewCell(style: UITableViewCellStyle.Default, reuseIdentifier: "Cell")
        cell.textLabel?.text = toDoList[indexPath.row]
        
        return cell;
    }

    //SE Ejecuta cada ves que se cambia la vista
    override func viewDidAppear(animated: Bool) {
        toDoListTable.reloadData()
    }
    
   //El metodo será llamado cuando el item se elimine
    func tableView(tableView: UITableView, commitEditingStyle editingStyle: UITableViewCellEditingStyle, forRowAtIndexPath indexPath: NSIndexPath)
    {
        if editingStyle == UITableViewCellEditingStyle.Delete{
            toDoList.removeAtIndex(indexPath.row)
            
            NSUserDefaults.standardUserDefaults().setObject(toDoList, forKey: "toDoList")
            
            toDoListTable.reloadData()
        }
    }
    
    
}

