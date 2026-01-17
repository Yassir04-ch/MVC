<?php
namespace App\Models;
use  App\Core\Database;
use PDO;

class User{
    private INT $id;
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $password;
    private string $role;
 

    private PDO $conection;


    public function __construct()
    {
        $database = new Database();
        $this->conection = $database->getConn();
     }
    
     
    public function getId()
    {
        return $this->id;
    }

     
    public function setId($id)
    {
        $this->id = $id;

    }
    public function getFirstname()
    {
        return $this->firstname;
    }
 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

     }

     
    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail($email)
    {
        $this->email = $email;

     }

    public function getPassword()
    {
                return $this->password;
    }

         
    public function setPassword($password)
    {
     $this->password = $password;

    }
    

    public function getRole()
    {
        return $this->role;
    }
 
    public function setRole($role)
    {
        $this->role = $role;

    }

            public function findAll() {
        $query = "SELECT * FROM users";
        $statement = $this->conection->prepare($query);
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $statement->execute();
        return $statement->fetchAll();
    }

    // public function update() {
    //     $query = 
    //         "UPDATE auteurs 
    //         SET firstname='" . $this->firstname . 
    //             "' , lastname='". $this->lastname . 
    //         "' WHERE id = " . $this->id.";";
       
    //     $this->conection->prepare($query)->execute();
    // }

    public function create() {
        $query = "INSERT INTO users (`firstname`, `lastname`,`email`,`password`,`role`)
                 VALUES (?, ?,?,?,?)";
        
        $statement = $this->conection->prepare($query);
        $statement->execute([$this->firstname, $this->lastname, $this->email,$this->password,$this->role]);

        $this->id = $this->conection->lastInsertId();
    }
 

    
}