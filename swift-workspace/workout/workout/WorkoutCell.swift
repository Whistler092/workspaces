//
//  WorkoutCell.swift
//  workout
//
//  Created by Ramiro Andres on 19/05/15.
//  Copyright (c) 2015 Ramiro Andres. All rights reserved.
//

import UIKit

class WorkoutCell: UITableViewCell {

    @IBOutlet weak var countCell: UILabel!
    @IBOutlet weak var textCell: UILabel!
    
    override func awakeFromNib() {
        super.awakeFromNib()
        // Initialization code
    }

    override func setSelected(selected: Bool, animated: Bool) {
        super.setSelected(selected, animated: animated)

        // Configure the view for the selected state
    }

}
