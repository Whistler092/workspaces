//
//  ViewController.swift
//  NavTutorial
//
//  Created by Ramiro Andres on 30/05/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }

    @IBAction func ClickView2Pressed(sender: AnyObject) {
        let view2 = self.storyboard?.instantiateViewControllerWithIdentifier("View2") as! Vista2
        
        self.navigationController?.pushViewController(view2, animated: true)
        
        
    }

}

