<?php 

/*
Class used for password generation in the system
@author = Octavian Bodnariu
@date = 03.06.2018
*/
class PasswordGenerator {
    public characters = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890";
        
    /*
    Function used to generate a password for the users
    @arg $length - The length of a password (int)
    */
    function generatePassword($length){
        $pass = array();
        $characters_length = strlen($characters);
        
        for($i = 0; $i < $length ; $i++){
            $n = rand(o, $characters_length);
            $pass[] = $characters[$n];
        }
    }
}

?>