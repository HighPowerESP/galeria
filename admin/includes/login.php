<div class="login-box">
  <h2>Iniciar sesion</h2>
  <form name="login" method="post" action="/admin/actions/login.act.php">
    <div class="user-box">
      <input type="text" name="username" required="" autofocus>
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
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