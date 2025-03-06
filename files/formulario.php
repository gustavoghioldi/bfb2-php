<?php 
include_once 'poo.php';

if (isset($_POST["isEmployee"])) {
    $user = new Employee($_POST["name"], $_POST["email"], $_POST["password"], 1000);
} else {
    $user = new User($_POST["name"], $_POST["email"], $_POST["password"]);	
}

if ($_POST["name"] == "Gustavo Ghioldi") {
    $user->setName("Barba");
}

echo $user->getName()."<br>"; 
echo $user->getEmail()."<br>";
echo $user->getPassword()."<br>"; 

try {
    echo $user->getSalary();
    $user->setID();
    echo $user->getID();
} catch (Throwable $th) {
    echo "no es un empelado";
}
