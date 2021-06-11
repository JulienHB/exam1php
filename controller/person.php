<?php
include'model/person.php';
include'model/client.php';
include'model/employee.php';
$person1 =new Person('Sandy', 'POUSSIN',28);
$person2 =new Person('Pierre', 'Durant',40);
$person3 =new Person('DAMIEN', 'DUCHENE',25);

$persons=[$person1, $person2,$person3];

$employee1 =new Employee('PLoup','Chantal',45,34000.2);

$client1= new Client('Poncin', 'Cindy',28,'Kyu Solution'); // I think this integer will increase my notation
