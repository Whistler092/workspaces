//
//  ViewController.swift
//  Animations
//
//  Created by Ramiro Andres on 18/04/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    @IBOutlet var catImage: UIImageView!
    var counter = 1
    var timer = NSTimer()
    var isAnimating = true;
    
    
    @IBAction func animateObject(sender: AnyObject) {
        
        if isAnimating == true{
            timer.invalidate()
            isAnimating = false
        }
        else{
            timer = NSTimer.scheduledTimerWithTimeInterval(0.2, target: self, selector: Selector("doAnimation"), userInfo: nil, repeats: true)
            isAnimating = true;
        }
    }
    override func viewDidLoad() {
        super.viewDidLoad()
        
        timer = NSTimer.scheduledTimerWithTimeInterval(0.2, target: self, selector: Selector("doAnimation"), userInfo: nil, repeats: true)
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    //Animación
    func doAnimation()
    {
        
        if counter == 6{
            counter = 1
        }
        else {
            counter++
        }
        
        catImage.image = UIImage(named: "cat\(counter).jpg")
        

    }
   
    
    /*
    //Just Before the View it's display
    override func viewDidLayoutSubviews() {
        //Desde al lado
        //self.catImage.center = CGPointMake(self.catImage.center.x - 400, self.catImage.center.y)
        
        //DIfuminado - Fades
        //self.catImage.alpha = 0
        
        self.catImage.frame =  CGRectMake(100, 20, 0, 0)
        
    }
    
    
    override func viewDidAppear(animated: Bool) {
        UIView.animateWithDuration(1, animations: { () -> Void in
            //self.catImage.center = CGPointMake(self.catImage.center.x + 400, self.catImage.center.y)
            //self.catImage.alpha = 1
            
            self.catImage.frame = CGRectMake(100, 20, 100, 200)
        })
    }*/


}

