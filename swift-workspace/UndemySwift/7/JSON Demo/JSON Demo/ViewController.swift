//
//  ViewController.swift
//  JSON Demo
//
//  Created by Ramiro Andres on 22/05/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        let urlPath = "http://www.telize.com/geoip"
        let url = NSURL(string: urlPath)!
        
        let session = NSURLSession.sharedSession()
        
        let task = session.dataTaskWithURL(url, completionHandler:
            { data, response, error -> Void in
                if error != nil {
                    println(error)
                }else
                {
                    let jsonResult = NSJSONSerialization.JSONObjectWithData(data, options: NSJSONReadingOptions.MutableContainers, error: nil) as? NSDictionary
                    
                    println(jsonResult)
                }
        })
        task.resume()
        
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


}

