//
//  ViewController.swift
//  Controlling the Keyboard
//
//  Created by Ramiro Andres on 8/04/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit

//UITextFieldDelegate El delegado que permitirá obtener el textfield del texto 
class ViewController: UIViewController, UITextFieldDelegate {

    @IBOutlet var text: UITextField!
    @IBOutlet var OutputText: UILabel!
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        
        OutputText.text = ""
        self.text.delegate = self
    }

    @IBAction func CopyButton(sender: AnyObject) {
        OutputText.text = text.text;
    }
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
        
        
    }
    
    //Tap Outside Keyboard
    override func touchesBegan(touches: Set<NSObject>, withEvent event: UIEvent) {
        self.view.endEditing(true)
    }
    
    //Cuando el usuario presiona el boton Return
    func textFiledSouldReturn(textField: UITextField!) -> Bool {
        textField.resignFirstResponder()
        return true
    }


}

