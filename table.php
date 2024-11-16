<?php 

$name = "Abdullah Waseem";
$email = "waseem@gmail.com";
$contact = "0123456789";

?>
<?php 
    include_once("header.php");
?>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"><?php echo $name; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php  echo $contact; ?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
         
    
      <?php 
        include_once("footer.php"); 
 ?>