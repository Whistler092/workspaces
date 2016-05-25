//
//  ViewController.swift
//  Core Data Demo
//
//  Created by Ramiro Andres on 15/05/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit
import CoreData

class ViewController: UIViewController {

    @IBOutlet weak var output: UILabel!
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        
        //Acceder al CoreData
        var appDel:AppDelegate = UIApplication.sharedApplication().delegate as! AppDelegate
        
        var context:NSManagedObjectContext = appDel.managedObjectContext!
        //le da acceso al framework que acceda a la base de datos
        
        //Guardar en la Tabla
        
        /*
        //entityName Es una Tabla
        var newUser = NSEntityDescription.insertNewObjectForEntityForName("EntityTable", inManagedObjectContext: context) as! NSManagedObject
        //Nuevo Registro en la tabla
        newUser.setValue("Julian", forKey: "username")
        newUser.setValue("Julian123" ,forKey: "password")
        
        context.save(nil)
       */

        
        //Obtener la Información dela Base de detaos
        
        var request = NSFetchRequest(entityName: "EntityTable")
        request.returnsObjectsAsFaults = false
        
        
        //Like
        request.predicate = NSPredicate(format: "username = %@", "Ramiro")
        var results =  context.executeFetchRequest(request, error: nil)
        
        
        
        //println(results);
        
        //Parsear los resultados 
        /*
        <NSManagedObject: 0x7fc2514440c0> (entity: EntityTable; id: 0xd000000000080000 <x-coredata://D7CC259E-A15F-448A-8314-EF5CFE4F1780/EntityTable/p2> ; data: {
        password = "contrase\U00f1a";
        username = Ramiro;
        })])

*/
        
       
        
        if results?.count > 0{
            
            for result: AnyObject in results!{
                
                if let user = result.valueForKey("username") as? String{
                    
                    let pass = result.valueForKey("password") as? String
                    println(user + " : con contraseña \(pass!)")
                    
                    if user == "Ramiro" {
                        //context.deleteObject(result as! NSManagedObject)
                        //println(user + " ha sido eliminado")
                        
                        //Actualizar un Valor
                        result.setValue("pas6", forKey: "password")
                    }
                }
                
                /*if let pass = result.password!
                {
                    println(pass)
                }*/
            }
            context.save(nil)
        }
        else
        {
            println("Sin Resultados")
        }
        
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


}

