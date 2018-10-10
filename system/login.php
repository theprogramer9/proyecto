<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CARNES FRIAS</title>
      <link rel="stylesheet" href="css/style1.css">
</head>
<body>
  <div class="loginpanel">

           <br><?php
          if (isset($_GET["error"]))
          {
            echo("Datos incorrectos");
          }

          ?> 
  <div class="txt">
    <form action="_login.php" method="post" accept-charset="utf-8" >
    <input  type="text" name="Email" required="" placeholder="Usuario">
    <label for="user" class="entypo-user"></label>
  </div>
  <div class="txt">
    <input  type="password" name="Pass" required="" placeholder="Contraseña">
    <label for="pwd" class="entypo-lock"></label>
  </div>
  <div class="buttons">
<input type="submit" value="Ingresar">
    <span>
      <a href="register.php" class="entypo-user-add register">Registrar</a>
    </span>
  </div>
  
  
  
  <div class="social">
    <a href="javascript:void(0)" class="facebook"></a>
   
    <a href="javascript:void(0)" class="googleplus"></a>
  </div>
</div>

<span class="resp-info"></span>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

</body>

</html>
