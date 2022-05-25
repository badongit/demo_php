<?php
  namespace Models;
  include "index.php";

  class Customer extends Model {
    public $name;
    public $email;
    private $password;
    public $country;
    public $city;
    public $phone;
    public $address;
    public $image;
    const TABLE_NAME = "customers";

    function __construct($row) 
    {
      $this -> id = $row["customer_id"];
      $this -> name = $row["customer_name"];
      $this -> email = $row["customer_email"];
      $this -> password = $row["customer_password"];
      $this -> country = $row["customer_country"];
      $this -> city = $row["customer_city"];
      $this -> phone = $row["customer_phone"];
      $this -> address = $row["customer_address"];
      $this -> image = $row["customer_image"];
      $this -> createdAt = $row["createdAt"];
      $this -> updatedAt = $row["updatedAt"];
    } 

    public static function findByPk($con, $id) {
      $query = "select * from ".self::TABLE_NAME." where customer_id = $id";
      $result = mysqli_query($con, $query);

      if($result -> num_rows == 0) {
        return null;
      }

      $row = mysqli_fetch_array($result);
      $customer = new Customer($row);

      return $customer;
    }

    public static function create($con, $form) {
      [
        "name" => $name, 
        "email" => $email,
        "password" => $password,
        "country" => $country,
        "city" => $city,
        "phone" => $phone,
        "address" => $address,
        "image" => $image,
      ] = $form;
      $query = "insert into ".self::TABLE_NAME."(customer_name, customer_email, customer_password, customer_country, 
              customer_city, customer_phone, customer_address, customer_image)
              values ('$name', '$email', '$password', '$country', '$city', '$phone', '$address', '$image')";
      
      if(mysqli_query($con, $query)) {
        $id = mysqli_insert_id($con);
        $customer = self::findByPk($con, $id);

        return $customer;
      }

      return null;
    }
  }
?>