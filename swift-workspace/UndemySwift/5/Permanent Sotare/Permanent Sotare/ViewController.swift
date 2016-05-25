//
//  ViewController.swift
//  Permanent Sotare
//
//  Created by Ramiro Andres on 8/04/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        
        //Valores por defecto de la aplicación
        //NSUserDefaults.standardUserDefaults().setObject("Ramiro", forKey: "name")
        
        //Obtenerlo
        //println(NSUserDefaults.standardUserDefaults().objectForKey("name"))
        
        //Sin Opcional
        var name = NSUserDefaults.standardUserDefaults().objectForKey("name")! as String
        
        println(name)
        
        /*
        Optional(Ramiro)
        Ramiro
        */
        
        
        var arr = [1,2,3]
        
        NSUserDefaults.standardUserDefaults().setObject(arr, forKey: "array")
        var recalledArray = NSUserDefaults.standardUserDefaults().objectForKey("array")! as NSArray
        
        println(arr[2])
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


}

