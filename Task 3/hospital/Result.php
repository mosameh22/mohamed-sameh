<?php
session_start();
$result='';
$m1='';
$m2='';
$m3='';
$m4='';
$m5='';


?>

  <?php

if($_POST){
    if($_POST['option1']=='bad'){
        $result = 0;
         }elseif($_POST['option1'] == 'good'){
         $result = 3;
         }elseif($_POST['option1'] == 'very good'){
            $result = 5;
         }elseif($_POST['option1'] == 'Excellent'){
            $result = 10;
         }
     }
     if($_POST){
        if($_POST['option2'] == 'bad' ){
            $result += 0;
             }elseif($_POST['option2'] == 'good'){
             $result += 3;
             }elseif($_POST['option2'] == 'very good'){
                $result+= 5;
             }elseif($_POST['option2'] == 'Excellent'){
                $result+= 10;
             }
         }
         if($_POST){
            if($_POST['option3'] == 'bad' ){
                $result += 0;
                 }elseif($_POST['option3'] == 'good'){
                 $result += 3;
                 }elseif($_POST['option3'] == 'very good'){
                    $result += 5;
                 }elseif($_POST['option3'] == 'Excellent'){
                    $result += 10;
                 }
             }
             if($_POST){
                if($_POST['option4'] == 'bad' ){
                    $result += 0;
                     }elseif($_POST['option4'] == 'good'){
                     $result += 3;
                     }elseif($_POST['option4'] == 'very good'){
                        $result += 5;
                     }elseif($_POST['option4'] == 'Excellent'){
                        $result += 10;
                     }
                 }
                 if($_POST){
                    if($_POST['option5'] == 'bad' ){
                        $result += 0;
                         }elseif($_POST['option5'] == 'good'){
                         $result += 3;
                         }elseif($_POST['option5'] == 'very good'){
                            $result += 5;
                         }elseif($_POST['option5'] == 'Excellent'){
                            $result += 10;
                         }
              }
              if($_POST=='submit'){
                if($_SERVER['REQUEST_METHOD']=="POST"){
                    $_SESSION['option1']=$_POST['option1'];
                    $_SESSION['option2']=$_POST['option2'];
                    $_SESSION['option3']=$_POST['option3'];
                    $_SESSION['option4']=$_POST['option4'];
                    $_SESSION['option5']=$_POST['option5'];
                }
               } 
              if($result>25){
                  echo 'thank you for your time';
              }else{
                   echo'we will call you back on '.$_SESSION['phone'];
              }
            

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <style>
        table, th, td {
  border: 1px solid blue;
};

        </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <table span class="mt-5"></span>
      <tbody>
          <tr>
              <td><p class="text-success">Are you satisfied with the level of cleanliness</p></td>
              <td><p class="text-success">Are you satisfied with the service prices?</p></td>
              <td><p class="text-success">Are you satisfied with the nursing service</p></td>
              <td><p class="text-success">Are you satisfied with the level of the doctor?</p></td>
              <td><p class="text-success">Are you satisfied with the calmness in the hospital?</p></td>
        </tr>  
          <tr>
              <td class="text-primary"><?=$_SESSION['option1']=$_POST['option1'];?></td>
              <td class="text-primary"><?=$_SESSION['option2']=$_POST['option2'];?></td>
              <td class="text-primary"><?=$_SESSION['option3']=$_POST['option3'];?></td>
              <td class="text-primary"><?=$_SESSION['option4']=$_POST['option4'];?></td>
              <td class="text-primary"><?=$_SESSION['option5']=$_POST['option5'];?></td>
          </tr>
      </tbody>
  </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
