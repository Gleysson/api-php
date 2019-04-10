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
        }catch(PDOException $error){
            return array( 
                "data" => array("error" => $error->getMessage(), "code" => $error->getCode()), 
                "status" => 500
            );
        }

    }


    public function insert($user){
     
        try{

            $stmt = Database::connect()->prepare('INSERT INTO user (nome,email,senha) VALUES (?,?,?)');
            $stmt->execute(array($user->getNome(),$user->getEmail(),$user->getSenha()));
            
            return array(
                "data" => "Usuário Inserido com Sucesso.",
                "status" => 200
            );    

        // -> capturing error
        }catch(PDOException $error){
            return array( 
                "data" => array("error" => $error->getMessage(), "code" => $error->getCode()), 
                "status" => 500
            );
        }

    }
}