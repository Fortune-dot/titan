<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text        = $_POST["text"];
//This is the first menu screen or main menu

if ( $text == "" ) {
$response  = "CON  Welcome to AIMS\n";
$response .= "1. Sell Produce  \n";
$response .= "2. Get Loan \n";
$response .= "3. Account \n";
$response .= "4. Exit \n";
}

// Menu for a user who selects '1' from the main menu

else if ($text == "1") {
$response = "CON Select Crop \n";
$response .= "1. Maize \n";
$response .= "2. Soya Beans \n";
$response .= "3. Ground Nuts \n";

}

//Menu for a user who selects '1' from the second menu above

else if ($text == "1*1") {
$response = "CON Enter No of 50 KG bags of Maize \n";
$response .= "Enter Quantity\n";
$response .= "Press 0 for main menu or * For Previous menu ";
}

else if ($text == "1*2") {
$response = "CON Enter No of 50 KG bags of Soya Beans \n";
$response .= "Enter Quantity\n";
$response .= "Press 0 for main menu or * For Previous menu ";
}

else if ($text == "1*3") {
$response = "CON Enter No of 50 KG bags of Ground Nuts\n";
$response .= "Enter Quantity\n";
$response .= "Press 0 for main menu or * For Previous menu ";
//add information collected so far  to the database

}



// Menu for a user who selects "2" from the main menu above

else if ($text == "2") {
$response = "CON Select option 1 to borrow k500 \n";
$response .= "1. borrow k500 \n";

}

//Menu for a user who selects '2*1' from the second menu above

else if ($text == "2*1") {
$response = "CON Enter your pin \n";
$response .= "Enter Pin\n";
$response .= "Press 0 for main menu or * For Previous menu ";
}





else if ($text == "2*5*1") {
$response = "CON You have selected to borrow k500.";
$response .= "Press 1 to continue ";
$response .= "# to return  ";
}

else if ($text == "2*5*1") {
$response  = "END Your loan has been processed successfully ";
}

else if ($text == "2*1*0") {
$response = "END Your loan can not be processed due to unpaid  balance  ";
}
// Menu for a user who enters "3" from the main menu 

else if ($text == "3") {
$response = "CON Account \n";
$response .= "1.Repay loan \n";
$response .= "2.Balance \n";
$response .= "3.Change pin \n";
}

// Menu for a user who enters "1" from the fifth menu
else if ($text == "3*1") {
    $response = "CON account \n";
    $response .= "Enter pin";
    $response .= "Enter 1 to continue \n";
    $response .= "Enter 0 to cancel";
    }

// Menu for a user who enters "1" from the fifth menu
else if ($text == "3*1") {
$response = "CON account \n";
$response .= "Enter amount";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}


else if ($text == "3*2") {
$response = "END Your account balance is k5612";
}

// Menu for a user who enters "3" from the fifth menu
else if ($text == "3*3") {
    $response = "CON account \n";
    $response .= "Enter new password";
    $response .= "Re-enter new password";
    $response .= "Enter 1 to continue \n";
    $response .= "Enter 0 to cancel";
    }



// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
else if ($text == "4") {
$response = "CON Exit \n";
$response .= "Please Enter 1 to confirm \n";
}

// Menu for a user who enters "1" from the sixth menu
else if ($text == "4*1") {
$response = "CON Confirm Exit \n";
$response .= "Enter 1 to Continue \n";
$response .= "Enter 0 to Cancel";
}

else if ($text == "4*1*1") {
$response = "END Thank you";
}

else if ($text == "4*1*0") {
$response = "END  Canceled";
}
//echo response
header('Content-type: text/plain');
echo $response
?>