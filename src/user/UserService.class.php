<?php 

class UserService
{

    public function list(){
     
        try{
            $stmt = Database::connect()->prepare('SELECT * FROM user ');
            $stmt->execute();
            
            return array(
                "data" => $stmt->fetchAll(),
                "status" => 200
            );    

        // -> capturing error
        }catch(Exception $error){
            return array( 
                "data" => array("error" => $error->getMessage(), "code" => $error->getCode()), 
                "status" => 500
            );
        }

    }
}