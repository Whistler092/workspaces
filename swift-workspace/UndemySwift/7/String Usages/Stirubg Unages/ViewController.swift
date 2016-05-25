//
//  ViewController.swift
//  Stirubg Unages
//
//  Created by Ramiro Andres on 22/05/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    @IBOutlet weak var niancat: UIImageView!
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        
        /*let url = NSURL(string: "http://upload.wikimedia.org/wikipedia/en/e/ed/Nyan_cat_250px_frame.PNG")
        
        let urlRequest = NSURLRequest(URL: url!)
        
        NSURLConnection.sendAsynchronousRequest(urlRequest, queue: NSOperationQueue.mainQueue(), completionHandler:
            {
                response ,  data , error in
                if error != nil {
                    println("Hubo un error \(error)")
                }
                else {
                    let image = UIImage(data: data)
                    //self.niancat.image = image
                    
                    //Guardamos la Imagen
                    var documentDirectory:String?
                    
                    var paths:[AnyObject] = NSSearchPathForDirectoriesInDomains(NSSearchPathDirectory.DocumentDirectory, NSSearchPathDomainMask.UserDomainMask, true)
                    
                    if paths.count > 0{
                        documentDirectory = paths[0] as? String
                        
                        var savePath = documentDirectory! + "nyanCat.png"
                        NSFileManager.defaultManager().createFileAtPath(savePath, contents: data, attributes: nil)
                        
                        self.niancat.image = UIImage(named: savePath)
                    }
                }
        })
        */
        
        //Guardamos la Imagen
        var documentDirectory:String?
        
        var paths:[AnyObject] = NSSearchPathForDirectoriesInDomains(NSSearchPathDirectory.DocumentDirectory, NSSearchPathDomainMask.UserDomainMask, true)
        
        if paths.count > 0{
            documentDirectory = paths[0] as? String
            
            var savePath = documentDirectory! + "nyanCat.png"
            
            self.niancat.image = UIImage(named: savePath)
        }

    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


}

