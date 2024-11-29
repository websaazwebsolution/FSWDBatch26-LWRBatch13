<?php 

// function add(){

// }

function hello(){
   echo "abdullah <br>";
}

hello();




// function add($a,$b){

//    echo  $a + $b . "<br>";

// }

// add(100,400);


// add(200,550);


// add(8000,433);

$myname = $_POST['name'];
$age = $_POST['age'];

function welcome($name){
    echo "welcome $name <br>";
}


welcome($myname);

welcome($age);

?>