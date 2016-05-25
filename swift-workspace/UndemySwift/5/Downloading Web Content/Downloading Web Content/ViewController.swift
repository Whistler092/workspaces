//
//  ViewController.swift
//  Downloading Web Content
//
//  Created by Ramiro Andres on 14/04/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    @IBOutlet var webView: UIWebView!
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        
        let url = NSURL(string: "http://stackoverflow.com/")
        
        let task = NSURLSession.sharedSession().dataTaskWithURL(url!){
            (data , response, error) in
            
            if error == nil{
                var urlContent = NSString(data: data , encoding: NSUTF8StringEncoding)
                println(urlContent)
                
                self.webView.loadHTMLString(urlContent! as String, baseURL: nil)
            
            }
        }
        
        task.resume()
        
        
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


}

