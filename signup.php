<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Checkout example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
  <style>

    .container {
    max-width: 960px;
  }
  
  .border-top { border-top: 1px solid #e5e5e5; }
  .border-bottom { border-bottom: 1px solid #e5e5e5; }
  .border-top-gray { border-top-color: #adb5bd; }
  
  .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
  
  .lh-condensed { line-height: 1.25; }

  .form-body{
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      width: auto;
      margin: auto;
      padding: 30px;
      background-color: grey;
     
  }
  </style>
  </head>

  <body class="bg-light">

    <div class="container form-body" >
      <?php if($_SESSION["msg"]){?>
    <div class="alert alert-danger"><?php echo @$_SESSION["msg"]; ?></div><?php }?>
            <form action="signup/index.php" method="POST">
                    <div class="form-group ">
                        <label for="inputAddress">Firstname</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="firstname" name="first_name">
                        </div>
                    <div class="form-group ">
                            <label for="inputAddress">Lastname</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="lastname" name="last_name">
                            </div>
                      <div class="form-group ">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                      </div>
                      <div class="form-group ">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
                      </div>

                    <div class="form-group ">
                      <label for="inputAddress">Address</label>
                      <input type="text" class="form-control"  id="inputAddress" placeholder="1234 Main St" name="address">
                    </div>
                              <div class="form-group ">
                      <label for="inputAddress">phone</label>
                      <input type="tel" class="form-control"  id="inputPhone" placeholder="08162099..." name="phone">
                    </div>

                      <div class="form-group ">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" name="city" id="inputCity">
                      </div>




                    <input type="submit" name="submit" value="Sign Up"> 
                  </form>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
<?php $_SESSION["msg"]="";?>