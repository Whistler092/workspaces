//
//  ViewController.swift
//  Where am I
//
//  Created by Ramiro Andres on 27/06/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit
import CoreLocation

class ViewController: UIViewController, CLLocationManagerDelegate {
    
    var manager: CLLocationManager!
 
    @IBOutlet var LatitudLabel: UILabel!
    @IBOutlet var LongitudLabel: UILabel!
    @IBOutlet var VelocidadLabel: UILabel!
    @IBOutlet var AlturaLabel: UILabel!
    @IBOutlet var DireccionesCercanas: UILabel!
    
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        
        manager = CLLocationManager()
        manager.delegate = self
        manager.desiredAccuracy = kCLLocationAccuracyBest
        manager.requestAlwaysAuthorization()
        manager.startUpdatingLocation()
        
    }
    var count = 0
    func locationManager(manager: CLLocationManager!, didUpdateLocations locations: [AnyObject]!) {
        count++
        println("\(count) Registro \(locations)")
        
        var userLocation:CLLocation = locations[0] as! CLLocation
        
        self.LatitudLabel.text = "\(userLocation.coordinate.latitude)"
        self.LongitudLabel.text = "\(userLocation.coordinate.longitude)"
        
        self.VelocidadLabel.text = "\(userLocation.speed)"
        self.AlturaLabel.text = "\(userLocation.altitude)"
        
        CLGeocoder().reverseGeocodeLocation(userLocation
            , completionHandler: { (placemarks, error) -> Void in
                if error != nil{
                    println(error)
                }
                else {
                    if let p = CLPlacemark(placemark: placemarks?[0] as! CLPlacemark)
                    {
                        /*var subThoroughfare:String = ""
                        
                        if p.subThoroughfare != nil {
                            subThoroughfare = p.subThoroughfare
                        }
                        */
                        self.DireccionesCercanas.text = " \(p.locality) \(p.administrativeArea) \n \(p.country)"

                        println(p)
                    }
                }
        })
        
    }
    
    

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }

}

