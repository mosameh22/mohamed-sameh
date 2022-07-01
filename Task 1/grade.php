<?php
$messge1="";
$messge2="";
$messge3="";
$messge4="";
$messge5="";
$message6="";
$Number1="";

if($_POST){
    if($_POST['Number1'] < 40  ){
        $messge1 =  "physics Grade F & percentage is" ." ". $_POST['Number1']. "%";
         }elseif($_POST['Number1'] >= 40 && $_POST['Number1']<60){
         $messge1 = "physics Grade E & percentage is" ." ". $_POST['Number1']. "%";
         }elseif($_POST['Number1'] >= 60 && $_POST['Number1']<70){
            $messge1 = "physics Grade D & percentage is" ." ". $_POST['Number1']. "%";
         }elseif($_POST['Number1'] >= 70 && $_POST['Number1']<80 ){
            $messge1 = "physics Grade C & percentage is" ." ". $_POST['Number1']. "%";
         }elseif($_POST['Number1'] >= 80 && $_POST['Number1']<90 ){
            $messge1 = "physics Grade B & percentage is" ." ". $_POST['Number1']. "%";
         }elseif($_POST['Number1'] >= 90 ){
            $messge1 = "physics Grade A & percentage is" ." ". $_POST['Number1']. "%";
         }
        
     }
     if($_POST){
        if($_POST['Number2'] < 40  ){
            $messge2 =  "Chemistry Grade F & percentage is" ." ". $_POST['Number2']. "%";
             }elseif($_POST['Number2'] >= 40 && $_POST['Number2']<60){
             $messge2 = "Chemistry Grade E & percentage is" ." ". $_POST['Number2']. "%";
             }elseif($_POST['Number2'] >= 60 && $_POST['Number2']<70){
                $messge2 = "Chemistry Grade D & percentage is" ." ". $_POST['Number2']. "%";
             }elseif($_POST['Number2'] >= 70 && $_POST['Number2']<80 ){
                $messge2 = "Chemistry Grade C & percentage is" ." ". $_POST['Number2']. "%";
             }elseif($_POST['Number2'] >= 80 && $_POST['Number2']<90 ){
                $messge2 = "Chemistry Grade B & percentage is" ." ". $_POST['Number2']. "%";
             }elseif($_POST['Number2'] >= 90 ){
                $messge2 = "Chemistry Grade A & percentage is" ." ". $_POST['Number2']. "%";
             }
            
         }
         if($_POST){
            if($_POST['Number3'] < 40  ){
                $messge3 =  "Biology Grade F & percentage is" ." ". $_POST['Number3']. "%";
                 }elseif($_POST['Number3'] >= 40 && $_POST['Number3']<60){
                 $messge3 = "Biology Grade E & percentage is" ." ". $_POST['Number3']. "%";
                 }elseif($_POST['Number3'] >= 60 && $_POST['Number3']<70){
                    $messge3 = "Biology Grade D & percentage is" ." ". $_POST['Number3']. "%";
                 }elseif($_POST['Number3'] >= 70 && $_POST['Number3']<80 ){
                    $messge3 = "Biology Grade C & percentage is" ." ". $_POST['Number3']. "%";
                 }elseif($_POST['Number3'] >= 80 && $_POST['Number3']<90 ){
                    $messge3 = "Biology Grade B & percentage is" ." ". $_POST['Number3']. "%";
                 }elseif($_POST['Number3'] >= 90 ){
                    $messge3 = "Biology Grade A & percentage is" ." ". $_POST['Number3']. "%";
                 }
                
             }
             if($_POST){
                if($_POST['Number4'] < 40  ){
                    $messge4 =  "Mathematics  Grade F  & percentage is" ." ". $_POST['Number4']. "%";
                     }elseif($_POST['Number4'] >= 40 && $_POST['Number4']<60){
                     $messge4 = "Mathematics  Grade E  & percentage is" ." ". $_POST['Number4']. "%";
                     }elseif($_POST['Number4'] >= 60 && $_POST['Number4']<70){
                        $messge4 = "Mathematics  Grade D & percentage is" ." ". $_POST['Number4']. "%";
                     }elseif($_POST['Number4'] >= 70 && $_POST['Number4']<80 ){
                        $messge4 = "Mathematics  Grade C & percentage is" ." ". $_POST['Number4']. "%";
                     }elseif($_POST['Number4'] >= 80 && $_POST['Number4']<90 ){
                        $messge4 = "Mathematics  Grade B & percentage is" ." ". $_POST['Number4']. "%";
                     }elseif($_POST['Number4'] >= 90 ){
                        $messge4 = "Mathematics  Grade A & percentage is" ." ". $_POST['Number4']. "%";
                     }
                    
                 }
                 if($_POST){
                    if($_POST['Number5'] < 40  ){
                        $messge5 = "Computer Grade F & percentage is" ." ". $_POST['Number5']. "%";
                         }elseif($_POST['Number5'] >= 40 && $_POST['Number5']<60){
                         $messge5 = "Computer Grade E & percentage is" ." ". $_POST['Number5']. "%" ;
                         }elseif($_POST['Number5'] >= 60 && $_POST['Number5']<70){
                            $messge5 = "Computer Grade D & percentage is " ." ".  $_POST['Number5']."%";
                         }elseif($_POST['Number5'] >= 70 && $_POST['Number5']<80 ){
                            $messge5 = "Computer Grade C & percentage is" ." ". $_POST['Number5']. "%";
                         }elseif($_POST['Number5'] >= 80 && $_POST['Number5']<90 ){
                            $messge5 = "Computer Grade B & percentage is" ." ".  $_POST['Number5']."%" ;
                         }elseif($_POST['Number5'] >= 90 ){
                            $messge5 = "Computer Grade A & percentage is" . " ". $_POST['Number5']."%";
                         }
                        
                     }
                     if($_POST){
      $message6= "The Total Grade is :" . ($_POST['Number5'] + $_POST['Number4'] +  $_POST['Number3'] + $_POST['Number2'] + $_POST['Number1'])/500 *100 ."%";
                     }
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
             <div class="col-6 offset-3 mt-5">
                 <form method="post">
                 <div class="form-group">
                     <label for="my-input">Physics</label>
                     <input id="Number1" class="form-control" type="number" name="Number1" placeholder="Enter physics grade">
                 </div>
                 <div class="form-group">
                     <label for="my-input">Chemistry</label>
                     <input id="Number2" class="form-control" type="number" name="Number2" placeholder="Enter Chemistry grade">
                 </div>
                 <div class="form-group">
                     <label for="my-input">Biology</label>
                     <input id="Number3" class="form-control" type="number" name="Number3" placeholder="Enter Biology grade">
                 </div>
                 <div class="form-group">
                     <label for="my-input">Mathematics </label>
                     <input id="Number4 " class="form-control" type="number" name="Number4" placeholder="Enter Mathematics grade">
                 </div>
                 <div class="form-group">
                     <label for="my-input">Computer</label>
                     <input id="Number5" class="form-control" type="number" name="Number5" placeholder="Enter computer grade">
                 </div>
                 <button class="btn btn-outline-dark btn-lg">Submit</button>
                 </form>
                 <div class="col-12">
                    
                <h6> <?php echo $messge1; ?></h6>
                 <h6> <?php echo $messge2; ?></h6>
                <h6> <?php echo $messge3; ?></h6>
                 <h6> <?php echo $messge4; ?></h6>
                 <h6> <?php echo $messge5; ?></h6>
                 <h6> <?php echo $message6; ?></h6>
                   
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