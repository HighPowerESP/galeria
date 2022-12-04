<div class="login-box">
  <h2>Registrarse</h2>
  <form name="register" method="post" action="/admin/actions/registro.act.php">
    <div class="user-box">
      <input type="text" name="display_name" required="required">
      <label>Usuario * </label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="required">
      <label>Contraseña * </label>
    </div>
    <div class="user-box">
      <input type="email" name="email" required="required">
      <label>Email *</label>
    </div>
    <div class="user-box">
      <input type="checkbox" name="enabled" required="">
      <label>Activo</label>
    </div>
    <p style="color: red;" id="errorP"></p>
    <a href="#" onclick="checkForm();">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Registrarse
    </a>
  </form>
</div>


<script>
  const formReg = document.register;
  const errorP = document.getElementById("errorP");
  function checkForm(){
    if(formReg.display_name.value != "" && formReg.password.value != "" && formReg.email.value != ""){
      formReg.submit();
    }else{
      errorP.textContent = "Hay campos obligatorios vacios";
    }
  }


</script>