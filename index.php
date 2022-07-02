<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculator</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="">
    <script src="./js/validateForm.js"></script>

  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    


    <div class="container">
      <div class="row">
        <h1>Emoji Calculator</h1>
        <form class="inline align-items-center" name="myForm" method="post" action="" onsubmit="return validateForm()">

          <div class="col-sm-4">
            <label class="visually-hidden" for="num1">First Number</label>
            <input type="text" class="form-control" id="num1" name="num1" placeholder="">
          </div>
          
          <div class="col-sm-4">
            <label class="visually-hidden" for="num2">Second Number</label>
              <input type="text" class="form-control" id="num2" name="num2" placeholder="">
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label for="operator">Operator</label>
              <select class="form-control" name="operator">
                <option value="null" selected>Choose...</option>
                <option value="+">👽</option>
                <option value="-">💀</option>
                <option value="*">👻</option>
                <option value="/">😱</option>
              </select>
            </div>
          </div>

          <div class="col-sm-4">
            <button name="submit" type="submit" class="btn btn-primary">Calculate</button>
          </div>

        </form>

      
      

      </div>

      <div class="row" align="center">
        <h3>Result</h3>
        <?php

          include './includes/class-autoload.php';

          // Get the numbers and operator value from form
          if(isset($_POST['num1']) && isset($_POST['num2'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];

            // Create an instance of Clac class
            $calc = new Calc($num1, $num2, $operator);

            try {
                // Print the inputs and output
                echo $num1." ".$operator." ".$num2." = ". $calc->calculator();
            } catch (TypeError $e) {
                echo "Error!: " .$e->getMessage();
            }
          }
          

          ?>
      </div>
    </div>
    
    
  </body>
</html>