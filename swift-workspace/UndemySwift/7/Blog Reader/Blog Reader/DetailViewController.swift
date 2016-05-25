//
//  DetailViewController.swift
//  Blog Reader
//
//  Created by Ramiro Andres on 23/05/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit

class DetailViewController: UIViewController {
 
    @IBOutlet weak var navigationBar: UINavigationItem!
    @IBOutlet weak var webview: UIWebView!

    var detailItem: AnyObject? {
        didSet {
            // Update the view.
            self.configureView()
        }
    }

    func configureView() {
        // Update the user interface for the detail item.
        if let detail: AnyObject = self.detailItem {
            if let wb = self.webview {
                wb.loadHTMLString(detail.valueForKey("content")!.description, baseURL: nil)
                var nav = self.navigationController?.navigationItem
               navigationBar.title = detail.valueForKey("title")!.description

            }
        }

    }

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        self.configureView()
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


}

