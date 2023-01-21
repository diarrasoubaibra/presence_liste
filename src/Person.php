<?php
namespace App;

class Person
{

   private $id;
   private $firstname;
   private $lastname;
   private $email;
   private $phone;



   public function getFirstname()
   {
      return $this->firstname;
   }

   public function setFirstname(string $firstname): self
   {
      $this->firstname = $firstname;
      return $this;
   }


   public function getLastname()
   {
      return $this->lastname;
   }


   public function setLastname(string $lastname): self
   {
      $this->lastname = $lastname;
      return $this;
   }

   public function getEmail()
   {
      return $this->email;
   }

   public function setEmail(string $email): self
   {
      $this->email = $email;
      return $this;
   }


   public function getPhone()
   {
      return $this->phone;
   }


   public function setPhone(string $phone): self
   {
      $this->phone = $phone;
      return $this;
   }


   public function getId()
   {
      return $this->id;
   }


   public function setId($id): self
   {
      $this->id = $id;
      return $this;
   }

}