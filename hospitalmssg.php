<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();

    if($_SESSION['sum']<25){
        
        echo(' Please contact the patient to find out the reason for the correct evaluation');
        echo('
        <table >
            <tr>
              <th >Questions</th>
              <th  value="0">Bad <br> 0 </th>
              <th  value="3">Good <br> 3</th>
              <th  value="5">Very Good <br> 5</th>
              <th value="10">Excellent <br> 10</th>
            </tr>');
       
           echo(' <tr>
           <th scope="row">Are you satisfied with the level of hygiene?</th>
           <td> <input class="form-check-input mx-auto" type="radio" name="exampleRadios1"  value="0"');
           if($_SESSION['r1']==0) echo 'checked';
           
           echo('></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios1"  value="3" ');
           if($_SESSION['r1']==3) echo 'checked';

           echo('></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios1"  value="5"');
           if($_SESSION['r1']==5) echo 'checked';
           echo(' ></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios1"  value="10" ');
           if($_SESSION['r1']==10) echo 'checked';
           echo('></td></tr>') ;

           echo(' <tr>
           <th scope="row">Are you satisfied with the prices of services</th>
           <td> <input class="form-check-input mx-auto" type="radio" name="exampleRadios2"  value="0"');
           if($_SESSION['r2']==0) echo 'checked';
           
           echo('></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios2"  value="3" ');
           if($_SESSION['r2']==3) echo 'checked';

           echo('></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios2"  value="5"');
           if($_SESSION['r2']==5) echo 'checked';
           echo(' ></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios2"  value="10" ');
           if($_SESSION['r2']==10) echo 'checked';
           echo('></td></tr>') ;

           echo(' <tr>
           <th scope="row">Are you satisfied with the nursing service?</th>
           <td> <input class="form-check-input mx-auto" type="radio" name="exampleRadios3"  value="0"');
           if($_SESSION['r3']==0) echo 'checked';
           
           echo('></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios3"  value="3" ');
           if($_SESSION['r3']==3) echo 'checked';

           echo('></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios3"  value="5"');
           if($_SESSION['r3']==5) echo 'checked';
           echo(' ></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios3"  value="10" ');
           if($_SESSION['r3']==10) echo 'checked';
           echo('></td></tr>') ;

           echo(' <tr>
           <th scope="row">Are you satisfied with the level of doctors?</th>
           <td> <input class="form-check-input mx-auto" type="radio" name="exampleRadios4"  value="0"');
           if($_SESSION['r4']==0) echo 'checked';
           
           echo('></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios4"  value="3" ');
           if($_SESSION['r4']==3) echo 'checked';

           echo('></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios4"  value="5"');
           if($_SESSION['r4']==5) echo 'checked';
           echo(' ></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios4"  value="10" ');
           if($_SESSION['r4']==10) echo 'checked';
           echo('></td></tr>') ;

           echo(' <tr>
           <th scope="row">Are you satisfied with the calm in the hospital?</th>
           <td> <input class="form-check-input mx-auto" type="radio" name="exampleRadios5"  value="0"');
           if($_SESSION['r5']==0) echo 'checked';
           
           echo('></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios5"  value="3" ');
           if($_SESSION['r5']==3) echo 'checked';

           echo('></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios5"  value="5"');
           if($_SESSION['r5']==5) echo 'checked';
           echo(' ></td>
           <td><input class="form-check-input mx-auto" type="radio" name="exampleRadios5"  value="10" ');
           if($_SESSION['r5']==10) echo 'checked';
           echo('></td></tr>') ;

        
        echo('</table>');
    }
    else{
        echo('Thanks');
    }
    
    ?>
</body>
</html>