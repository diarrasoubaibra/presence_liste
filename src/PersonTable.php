<?php
namespace App;

use \PDO;
use \PDOException;

class PersonTable
{
   private $pdo;

   public function __construct(PDO $pdo)
   {
      $this->pdo = $pdo;
   }

   public function findAll()
   {
      try {
         $query = $this->pdo->prepare("SELECT * FROM persons ORDER BY id ASC");
         $query->execute();
         $result = $query->fetchAll(PDO::FETCH_ASSOC);
         return $result;
      } catch (PDOException $e) {
         echo "<h4 class='alert alert-info'>Beuhh!🧐 La table ne contient aucun enregistrement</h4>";
      }
   }

   public function create(Person $person)
   {
      try {

         $query = $this->pdo->prepare('INSERT INTO persons SET firstname = :firstname, lastname = :lastname,email=:email, phone = :phone');
         return $query->execute([
            'firstname' => $person->getFirstname(),
            'lastname' => $person->getLastname(),
            'email' => $person->getEmail(),
            'phone' => $person->getPhone()
         ]);
      } catch (PDOException $e) {
         echo "Error: " . $e->getMessage();
      }
   }

   public function delete(int $id)
   {
   }

   public function update(int $id, Person $person)
   {
   }

}