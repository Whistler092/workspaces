//
//  ViewController.swift
//  Whats the Weather
//
//  Created by Ramiro Andres on 18/04/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit

class ViewController: UIViewController {
    
    @IBOutlet var userCity: UITextField!
    @IBOutlet var resultLabel: UILabel!
    
    @IBAction func findWeather(sender: AnyObject) {
        
        var city = userCity.text.stringByReplacingOccurrencesOfString(" ", withString: "-")
        
        var url = NSURL(string: "http://www.weather-forecast.com/locations/" +  city + "/forecasts/latest")
        
        if url != nil{
            let task = NSURLSession.sharedSession().dataTaskWithURL(url!, completionHandler: {(data, response , error ) -> Void in
                
                var urlError = false
                var weather = ""
                
                if error == nil{
                    var urlContent = NSString(data: data, encoding: NSUTF8StringEncoding) as NSString!
                    //println(urlContent)
                    
                    var urlContentArray = urlContent.componentsSeparatedByString("<span class=\"phrase\">")
                    
                    if urlContentArray.count > 0{
                        
                        var weatherArray = urlContentArray[1].componentsSeparatedByString("</span>")
                        weather = weatherArray[0] as! String
                        
                        weather = weather.stringByReplacingOccurrencesOfString("&deg;", withString: "º")
                    }
                    else
                    {
                        urlError = true
                    }
                    
                    
                }
                else {
                    urlError = true
                }
                
                //async
                dispatch_async(dispatch_get_main_queue()){
                    
                    if urlError == true{
                        self.showErrorMessage()
                    }else {
                        self.resultLabel.text = weather
                    }
                }
            })
            task.resume()
        }
        else
        {
            showErrorMessage()
        }
    }
    
    func showErrorMessage(){
        resultLabel.text = "No fue posible obtener el clima para " + userCity.text + ". Porfavor Intentalo Nuevamente"
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    
}

