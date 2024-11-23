<?php 

// Array 

$fruits = ["apple", "mango", "banana", "grapes"];

// $users = [];

// echo $fruits[0]; 

$numbers = [100, 200, 300, 400, 500];

// echo $fruits[0]. $fruits[4];

// $user = ["name" => "abdullah" , "email" => "abdullah@gmail.com" , "phone" => "01700000000" , "password" => "123456"];

// echo "<pre>";
// print_r($user);

$user = [
    ["name" => "abdullah" , "email" => "abdullah@gmail.com" , "phone" => "01700000000" , "password" => "123456"],
    ["name" => "ahmed" , "email" => "ahmed@gmail.com" , "phone" => "01700000001" , "password" => "123456"],
    ["name" => "amin" , "email" => "amin@gmail.com" , "phone" => "01700000002" , "password" => "123456"],
    ["name" => "ali" , "email" => "ali@gmail.com" , "phone" => "01700000003" , "password" => "123456"],
    ["name" => "abdullah" , "email" => "abdullah@gmail.com" , "phone" => "01700000000" , "password" => "123456"],
    ["name" => "ahmed" , "email" => "ahmed@gmail.com" , "phone" => "01700000001" , "password" => "123456"],
    ["name" => "amin" , "email" => "amin@gmail.com" , "phone" => "01700000002" , "password" => "123456"],
    ["name" => "ali" , "email" => "ali@gmail.com" , "phone" => "01700000003" , "password" => "123456"],
    ["name" => "abdullah" , "email" => "abdullah@gmail.com" , "phone" => "01700000000" , "password" => "123456"],
    ["name" => "ahmed" , "email" => "ahmed@gmail.com" , "phone" => "01700000001" , "password" => "123456"],
    ["name" => "amin" , "email" => "amin@gmail.com" , "phone" => "01700000002" , "password" => "123456"],
    ["name" => "ali" , "email" => "ali@gmail.com" , "phone" => "01700000003" , "password" => "123456"],
    ["name" => "abdullah" , "email" => "abdullah@gmail.com" , "phone" => "01700000000" , "password" => "123456"],
    ["name" => "ahmed" , "email" => "ahmed@gmail.com" , "phone" => "01700000001" , "password" => "123456"],
    ["name" => "amin" , "email" => "amin@gmail.com" , "phone" => "01700000002" , "password" => "123456"],
    ["name" => "ali" , "email" => "ali@gmail.com" , "phone" => "01700000003" , "password" => "123456"],
    ["name" => "abdullah" , "email" => "abdullah@gmail.com" , "phone" => "01700000000" , "password" => "123456"],
    ["name" => "ahmed" , "email" => "ahmed@gmail.com" , "phone" => "01700000001" , "password" => "123456"],
    ["name" => "amin" , "email" => "amin@gmail.com" , "phone" => "01700000002" , "password" => "123456"],
    ["name" => "ali" , "email" => "ali@gmail.com" , "phone" => "01700000003" , "password" => "123456"],
    ["name" => "abdullah" , "email" => "abdullah@gmail.com" , "phone" => "01700000000" , "password" => "123456"],
    ["name" => "ahmed" , "email" => "ahmed@gmail.com" , "phone" => "01700000001" , "password" => "123456"],
    ["name" => "amin" , "email" => "amin@gmail.com" , "phone" => "01700000002" , "password" => "123456"],
    ["name" => "ali" , "email" => "ali@gmail.com" , "phone" => "01700000003" , "password" => "123456"],

];

// echo "<pre>";

// echo $user[2]["email"];
// print_r($user);


// echo $user["phone"];


// echo $numbers[0];

// echo "<pre>";

// print_r($fruits);

// print_r($numbers);

// $errors = "";



// $user = "";

// $user = "abdulalh" . "<br>";

// echo $user;

// $user = "waseem";

// echo $user;




$data = [];



$data[] = "abdullah";
$data[] = "ahmed";
$data[] = "amin";
$data[] = "ali";
$data[] = "abdullah";
$data[] = "ahmed";

echo "<pre>";
print_r($data);



?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>password</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($user as $record){  ?>

                                        <tr>
                                          <td><?php echo $record["name"]; ?></td>
                                          <td><?php echo $record["email"]; ?></td>
                                          <td><?php echo $record["phone"]; ?></td>
                                          <td><?php echo $record["password"]; ?></td>
                                          <td><a name="" id="" class="btn btn-danger" href="#" role="button">Delete</a>
                                          <a name="" id="" class="btn btn-" href="#" role="button">Update</a>
                                        </td>
                                      </tr>    
                                <?php         
                                    }
                                    ?>
                                   
                                </tbody>
                        </table>




                        <!-- <div class="card text-left">
                          <img class="card-img-top" src="holder.js/100px180/" alt="">
                          <div class="card-body">
                            <h4 class="card-title"><?php echo $user["name"]; ?></h4>
                            <p class="card-text"><?php echo $user["email"]; ?></p>
                            <p class="card-text"><?php echo $user["phone"]; ?></p>
                          </div>
                        </div>
                    </div> -->
                </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
