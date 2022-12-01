<div class="login-box">
  <h2>Registrarse</h2>
  <form name="register" method="post" action="../actions/registro.act.php">
    <div class="user-box">
      <input type="text" name="display_name" required="">
      <label>Usuario</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Contraseña</label>
    </div>
    <div class="user-box">
      <input type="email" name="email" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="checkbox" name="enabled" required="">
      <label>Activo</label>
    </div>
    <a href="#" onclick="document.register.submit();">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Registrarse
    </a>
  </form>
</div>

