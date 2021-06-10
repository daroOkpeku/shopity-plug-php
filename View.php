<?php 
include("./apicode/Login.php");
?>
<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>"/>
    <title>dellyman</title>
  </head>
  <body>
  <nav>
  <h2>dellyman</h2>
  </nav>
<section class="body">
<div class="details">
  <aside id="err"><?php echo $output; ?></aside>
<form method="POST">
  <div class="each">
    <label>
      <span>e-mail</span>
    </label>
    <input type="text" name="email" id="email" placeholder="delly@gmail.com" required/> 
  </div>

<div class="each">
    <label>
    <span>  password</span>
    </label>
    <input type="password" name="password" id="password"  placeholder="******" required/>
  </div>

  <div class="zack">
    <button type="submit" id="btn" name="btn" data-id="delly">Login</button>
  </div>
</form>
</div>
</section>
  </body>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
</html>