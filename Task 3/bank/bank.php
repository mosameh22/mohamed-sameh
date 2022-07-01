<?php
$messge="";
$message="";
$messege1="";
if($_POST){
  if($_POST['name'] ){
      $messge = "your name is " .$_POST['name'];
  }
}
if($_POST){
    if($_POST['years'] <=3){
        $message = "your loan is " .$_POST['amount'] * 0.10;
    }else{
        $message = "your loan  is " .$_POST['amount'] * 0.15 ;
    }
  }
  if($_POST){
    if($_POST['years']<=3 ){
        $messege1 = "your loan after interest " .$_POST['amount'] * 0.10 + $_POST['amount'] ;
    }else{
        $messege1 = "your loan after interest " .$_POST['amount'] * 0.15 + $_POST['amount'] ;
    }
  }
  if($_POST){
    if($_POST['years']<=3 ){
        $messege2 = "your monthly loan " . ($_POST['amount'] * 0.10 + $_POST['amount']) / ($_POST['years']*12 );
    }else{
        $messege2 = "your monthly loan " .( $_POST['amount'] * 0.15 + $_POST['amount']) / ($_POST['years']*12) ;
    }
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
                     <label for="my-input">Enter Your Name</label>
                     <input id="Number1" class="form-control" type="text" name="name" placeholder="Enter First Number">
                 </div>
                 <div class="form-group">
                     <label for="my-input">Enter loan amount</label>
                     <input id="Number2" class="form-control" type="number" name="amount" placeholder="Enter Second Number">
                 </div>
                 <div class="form-group">
                     <label for="my-input">Enter loann years</label>
                     <input id="Number3" class="form-control" type="number" name="years" placeholder="Enter Third Number">
                 </div>
                 <button class="btn btn-outline-dark btn-lg mb-5">Submit</button>
                 </form>
                 <div class="col-12">
                     <table border ="2px solid">
                         <tr>
<td>
<p>  <?php echo $messge; ?></p>
</td>
<td>
<p>  <?php echo $message; ?></p>  
</td>
<td>
<p>  <?php echo $messege1; ?></p>
</td>
<td>
<p>  <?php echo $messege2; ?></p>
</td>
</tr>

</table>
    
                   
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