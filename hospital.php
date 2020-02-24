<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>

<h3 class="text-center">Hospital survey</h3>
<form method="POST">

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Questions</th>
      <th scope="col" value="0">Bad <br> 0 </th>
      <th scope="col" value="3">Good <br> 3</th>
      <th scope="col" value="5">Very Good <br> 5</th>
      <th scope="col" value="10">Excellent <br> 10</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Are you satisfied with the level of hygiene?</th>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios1"  value="0" checked></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios1"  value="3" ></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios1"  value="5" ></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios1"  value="10" ></td>
    </tr>
    <tr>
      <th scope="row">Are you satisfied with the prices of services</th>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios2"  value="0"checked ></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios2" value="3"  ></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios2"  value="5" ></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios2"  value="10" ></td>
    </tr>
    <tr>
      <th scope="row">Are you satisfied with the nursing service?</th>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios3"  value="0" checked></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios3"  value="3" ></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios3"  value="5" ></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios3"  value="10" ></td>
    </tr>
    <tr>
      <th scope="row">Are you satisfied with the level of doctors?</th>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios4"  value="0" checked></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios4"  value="3" ></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios4" value="5" ></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios4"  value="10" ></td>
    </tr>
    <tr>
      <th scope="row">Are you satisfied with the calm in the hospital?</th>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios5"  value="0"checked ></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios5"  value="3" ></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios5"  value="5" ></td>
      <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios5"  value="10" ></td>
    </tr>
  </tbody>
</table>
<input  type="submit" class="btn btn-primary float-right" value="Submit" name="btnsubmit"></input>
<?php 
session_start();
if(isset($_POST['btnsubmit'])){
    $_SESSION['r1'] =$_POST['exampleRadios1'];
    $_SESSION['r2']=$_POST['exampleRadios2'];
    $_SESSION['r3']=$_POST['exampleRadios3'];
    $_SESSION['r4']=$_POST['exampleRadios4'];
    $_SESSION['r5']=$_POST['exampleRadios5'];
    $sum;
    $sum=$_SESSION['r1']+$_SESSION['r2']+$_SESSION['r3']+$_SESSION['r4']+$_SESSION['r5'];
    $_SESSION['sum']=$sum;
    header('location:hospitalmssg.php');



}


?>
</form>
</body>
</html>