<?php
session_start();

$result="";
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
<div class="col-6 offset-2 mt-5">
<h4 class="mb-5 ">patient opinions</h4>
<form  action="Result.php" method="post">
 <h5 class="mt-5">Are you satisfied with the level of cleanliness?</h5>
<div class="form-check form-check-inline">
<input class="form-check-input border border-primary" type="radio" name="option1" id="inlineRadio1" value="bad">
<label class="form-check-label" for="inlineRadio1">bad </label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option1" id="inlineRadio2" value="good">
<label class="form-check-label" for="inlineRadio2"> good</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option1" id="inlineRadio2" value="very good">
<label class="form-check-label" for="inlineRadio2">  very good </label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option1" id="inlineRadio2" value="Excellent">
<label class="form-check-label" for="inlineRadio2">Excellent</label>
</div>
<h5 class="mt-5">Are you satisfied with the service prices?</h5>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option2" id="inlineRadio1" value="bad">
<label class="form-check-label" for="inlineRadio1"> bad</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option2" id="inlineRadio2" value="good">
<label class="form-check-label" for="inlineRadio2"> good</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option2" id="inlineRadio2" value="very good">
<label class="form-check-label" for="inlineRadio2">very good </label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option2" id="inlineRadio2" value="Excellent">
<label class="form-check-label" for="inlineRadio2"> Excellent</label>
</div>
<h5 class="mt-5">Are you satisfied with the nursing service</h5>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option3" id="inlineRadio1" value="bad">
<label class="form-check-label" for="inlineRadio1"> bad</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option3" id="inlineRadio2" value="good">
<label class="form-check-label" for="inlineRadio2"> good</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option3" id="inlineRadio2" value="very good">
<label class="form-check-label" for="inlineRadio2"> very good </label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option3" id="inlineRadio2" value="Excellent">
<label class="form-check-label" for="inlineRadio2"> Excellent</label>
</div>
<h5 class="mt-5">Are you satisfied with the level of the doctor?</h5>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option4" id="inlineRadio1" value="bad">
<label class="form-check-label" for="inlineRadio1"> bad</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option4" id="inlineRadio2" value="good">
<label class="form-check-label" for="inlineRadio2"> good</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option4" id="inlineRadio2" value="very good">
<label class="form-check-label" for="inlineRadio2"> very good</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option4" id="inlineRadio2" value="Excellent">
<label class="form-check-label" for="inlineRadio2"> Excellent</label>
</div>
<h5 class="mt-5">Are you satisfied with the calmness in the hospital?
</h5>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option5" id="inlineRadio1" value="bad">
<label class="form-check-label" for="inlineRadio1"> bad</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option5" id="inlineRadio2" value="good">
<label class="form-check-label" for="inlineRadio2"> good</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option5" id="inlineRadio2" value="very good">
<label class="form-check-label" for="inlineRadio2"> very good </label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="option5" id="inlineRadio2" value="Excellent">
<label class="form-check-label" for="inlineRadio2"> Excellent</label>
</div>
<button class="btn btn-outline-dark btn-lg mt-5" value="submit">submit</button>
</form>


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
