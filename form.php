<?php 
include("connection.php");
?> 
 
 

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<style>


.container{

background: brown   
;

border: 5px dashed white   ;

}
.form-control{

background: white;
border: 3px solid grey;
}
h1{
color: white

}
label{

color : white;

}

</style>

</head>
 <body>
<div class="container">
 <center><h1>data validation form</h1>  </center> 
<br>

<form action="form.php" class="form-group" method="post">

<label for="id">id</label>
<input type="number" name="id" class="form-control">
<br>


<label for="Name">name</label>
<input type="text" name="name" class="form-control">
<br>

<label for="Name">age</label>
<input type="numbers-format" name="age" class="form-control">
<br>

<label for="Name">gender</label>
<input type="text" name="gender" class="form-control">
<br>

<input type="submit" name="submit" class="btn btn-danger">



</form>

</div>

<?php

if(isset($_POST['submit'])){

   $id=$_POST['id'];
   $name=$_POST['name'];
   $age=$_POST['age'];
   $gender=$_POST['gender'];

$query ="INSERT INTO `assign` (`id`, `name`, `age`, `gender`) VALUES ('$id', '$name', '$age', '$gender')";

$result =mysqli_query($connection, $query);


}




?>

 </body>
 </html>