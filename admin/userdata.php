<?php 
// echo "<pre>";
// print_r($_POST);

// if(Jo kam karwana he Condtion){
//     out kya hoga ? 
// }

if(isset($_POST['submit'])){

    $username =  $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conform_password = $_POST['confirm_password'];



// echo $username;

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
          <div class="row mt-5">
              <div class="col-md-12">
                        <div class="card text-left">
                          <img class="card-img-top" src="holder.js/100px180/" alt="">
                          <div class="card-body">
                            <h4 class="card-title">Name: <?php echo $username; ?> </h4>
                            <p class="card-text">Email:  <?php  echo $email;?></p>
                            <p class="card-text">Password: <?php echo $password; ?> </p>
                            <p class="card-text">Conform Password: <?php echo $conform_password; ?> </p>
                          </div>
                        </div>
              </div>
            </div>    
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php 


}

?>