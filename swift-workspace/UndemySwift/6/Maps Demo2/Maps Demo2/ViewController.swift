//
//  ViewController.swift
//  Maps Demo2
//
//  Created by Ramiro Andres on 23/06/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit
import MapKit
import CoreLocation

class ViewController: UIViewController , MKMapViewDelegate , CLLocationManagerDelegate{
    @IBOutlet var map: MKMapView!
    var locationManager = CLLocationManager()

    override func viewDidLoad() {
        super.viewDidLoad()
        
        locationManager.delegate = self
        locationManager.desiredAccuracy = kCLLocationAccuracyBest
        locationManager.requestWhenInUseAuthorization()
        locationManager.startUpdatingLocation()
        
        
        
        var latitude:CLLocationDegrees = 48.85837
        var longitude:CLLocationDegrees = 2.294481
        
        var latDelta:CLLocationDegrees = 0.01
        var lonDelta:CLLocationDegrees = 0.01
        
        var span:MKCoordinateSpan = MKCoordinateSpanMake(latDelta, lonDelta)
        var location:CLLocationCoordinate2D = CLLocationCoordinate2DMake(latitude, longitude)
        
        var region:MKCoordinateRegion = MKCoordinateRegionMake(location, span)
        
        map.setRegion(region, animated: true)
        
        
        var annotation = MKPointAnnotation()
        annotation.coordinate = location
        annotation.title = "Paris"
        annotation.subtitle = "One Day I'll go here..."
        
        map.addAnnotation(annotation)
        
        
        var uilpgr = UILongPressGestureRecognizer(target: self, action: "action:")
        
        uilpgr.minimumPressDuration = 1
        
        map.addGestureRecognizer(uilpgr)
        
        // Do any additional setup after loading the view, typically from a nib.
    }
    
    
    var lastlongitude : CLLocationDegrees = 0
    var lastLatitude : CLLocationDegrees = 0
    func action(gestureReconizer: UIGestureRecognizer) {
        println("Gesture Reconized")
        
        var touchPoint = gestureReconizer.locationInView(self.map)
        var newCoordinate : CLLocationCoordinate2D = map.convertPoint(touchPoint, toCoordinateFromView: self.map)
        
        if newCoordinate.longitude == lastlongitude && newCoordinate.latitude == lastLatitude
        {
            return
        }
        
        lastlongitude = newCoordinate.longitude
        lastLatitude = newCoordinate.latitude
        
        var annotation = MKPointAnnotation()
        annotation.coordinate = newCoordinate
        annotation.title = "New Place"
        annotation.subtitle = "One Day I'll go here..."
        
        map.addAnnotation(annotation)
        
    }
    
    
    func locationManager(manager: CLLocationManager!, didUpdateLocations locations: [AnyObject]!) {
        println(locations)
        
        var userLocation: CLLocation =  locations[0] as! CLLocation
        
        var latitude = userLocation.coordinate.latitude
        var longitude = userLocation.coordinate.longitude
        
        
        var latDelta:CLLocationDegrees = 0.01
        var lonDelta:CLLocationDegrees = 0.01
        
        var span:MKCoordinateSpan = MKCoordinateSpanMake(latDelta, lonDelta)
        var location:CLLocationCoordinate2D = CLLocationCoordinate2DMake(latitude, longitude)
        
        var region:MKCoordinateRegion = MKCoordinateRegionMake(location, span)
        
        self.map.setRegion(region, animated: true)
        
        
    }
    

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


}

