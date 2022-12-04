<div class="login-box">
  <h2>Iniciar sesion</h2>
  <form name="login" method="post" action="/admin/actions/login.act.php">
    <div class="user-box">
      <input type="text" name="username" required="" autofocus>
      <label>Username</label>
    </div>
    <div class="user-box pass">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <p style="color: red;" id="errorP"></p>
    <a href="#" onclick="document.login.submit();">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Iniciar sesion
    </a>
    <p style="color: white;">¿No tienes cuenta?</p>
    <a href="index.php?page=register">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Registrarse
    </a>
  </form>
</div>

<?php
  if(isset($_GET['error'])){
?>
  <script>
    const error = document.getElementById("errorP");
    error.textContent = "Uno de los datos introducidos es incorrecto";

  </script>

  <?php
  }
  ?>

<script>
  const formReg = document.login;
  const loginBox = document.querySelector('div.login-box');
  function checkForm(){
    if(formReg.username.value != "" && formReg.password.value != ""){
      formReg.submit();
    }else{
      alert("Hay campos obligatorios vacios");
    }
  }
</script>
