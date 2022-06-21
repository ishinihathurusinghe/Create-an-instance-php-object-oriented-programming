<?php
 
 class Employee{


 }

 class Customer{

 }
 
$mike = new Employee;
$richard = new Employee;
$david = new Customer;

echo get_class($mike);

echo '<br>';

echo get_class($david);

?>