<h1>about</h1>
<?php
  use Models\Customer as Customer;
  include_once "models/Customer.php";
  include_once "configs/db.php";

  $customer = Customer::findByPk($con, 1);
  print_r($customer);
?>
