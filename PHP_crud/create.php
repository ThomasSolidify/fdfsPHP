<?php

include('dcon.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $q = " INSERT INTO `student`(`name`, `email`, `phone`) VALUES ( '$name', '$email', '$phone' )";

    $query = mysqli_query($con,$q);
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Add new member</h1>
<form method="post">
    <label>Name:</label>
    <input type="text" name="name" class="form-control"> <br>

    
    <label>Phone:</label>
    <input type="text" name="phone" class="form-control"> <br>

    <label>email:</label>
    <input type="text" name="email" class="form-control"> <br>
    <button type="submit" name="submit"> Submit</button>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>