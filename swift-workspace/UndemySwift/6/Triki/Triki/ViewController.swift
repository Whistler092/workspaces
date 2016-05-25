//
//  ViewController.swift
//  Triki
//
//  Created by Ramiro Andres on 12/05/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit

class ViewController: UIViewController {
    //1 Cross && 2 nought
    var activePlayer = 1
    
    var gameStage = [0,0,0,0,0,0,0,0,0]
    var winningCombinations = [[0,1,2],[3,4,5],[6,7,8],[0,3,6],[1,4,7],[2,5,8],[0,4,8],[2,4,6]]
    var gameActive = true
    
    @IBAction func playAgainAction(sender: AnyObject) {
        activePlayer = 1
        gameStage = [0,0,0,0,0,0,0,0,0]
        gameActive = true
        
        var button : UIButton
        
        for var i = 0; i < 9; i++ {
            button = view.viewWithTag(i) as! UIButton
            button.setImage(nil, forState: .Normal)
        }
        

        gameOverLabel.hidden = true
        playAgainButton.hidden = true
        
        gameOverLabel.center = CGPointMake(gameOverLabel.center.x - 400, gameOverLabel.center.y)
        playAgainButton.center = CGPointMake(playAgainButton.center.x - 400, playAgainButton.center.y)

    }
    
    @IBOutlet var gameOverLabel: UILabel!
    @IBOutlet var playAgainButton: UIButton!
    
    @IBOutlet var button: UIButton!
    @IBAction func buttonPressed(sender: AnyObject) {
        
        if(gameStage[sender.tag] == 0 && gameActive == true) {
            
            gameStage[sender.tag] = activePlayer;
        
            var image = UIImage(named: "cross")
            if( activePlayer == 1)
            {
                image = UIImage(named: "cross")!
                activePlayer = 2
            }
            else
            {
                image = UIImage(named: "nought")!
                activePlayer = 1
            }
        
            sender.setImage(image, forState: .Normal)
            
            for combination in winningCombinations{
                if gameStage[combination[0]] != 0 && gameStage[combination[0]] == gameStage[combination[1]]
                    && gameStage[combination[1]] == gameStage[combination[2]]
                {
                    //println("We Have a Winner")
                    
                    
                    if gameStage[combination[0]] == 1{
                        gameOverLabel.text = "Cruz ha ganado!"
                    }
                    else {
                        gameOverLabel.text = "Circulo ha ganado!"
                    }
                    
                    gameOverLabel.hidden = false
                    playAgainButton.hidden = false
                    
                    UIView.animateWithDuration(0.5, animations: { () -> Void in
                        self.gameOverLabel.center = CGPointMake(self.gameOverLabel.center.x + 400, self.gameOverLabel.center.y)
                        self.playAgainButton.center = CGPointMake(self.playAgainButton.center.x + 400, self.playAgainButton.center.y)
                    })
                    
                    gameActive = false
                    
                }
            }
        }
        
    }

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        
        gameOverLabel.hidden = true
        playAgainButton.hidden = true
        
        gameOverLabel.center = CGPointMake(gameOverLabel.center.x - 400, gameOverLabel.center.y)
        playAgainButton.center = CGPointMake(playAgainButton.center.x - 400, playAgainButton.center.y)
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    override func viewDidLayoutSubviews() {
        
        
    }


}

