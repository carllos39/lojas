<?php include("cabecalho.php");
 include("logica-usuario.php");
 
?>

 
<?php if(isset($_GET['logout']) && $_GET['logout']==true) {?>
<p class="alert-success">Deslogado com sucesso!</p>
<?php }?>

<?php if(isset($_GET['login']) && $_GET['login']==false) {?>
<p class="alert-danger">Usuario ou senha incorreta!</p>
<?php }?>

<?php if(isset($_GET['falhaDeSeguranca']) && $_GET['falhaDeSeguranca']==true) {?>
<p class="alert-danger">Você não tem acesso a essa funcionalidade!</p>
<?php }?>


  <h1>Bem vindo!</h1> 
  <?php if( usuarioEstaLogado()) {?>
< <p class="alert-success">Você está logado como <?=usuarioLogado();?> <a href="logout.php">Deslogar</a></p>
<?php }else{?>

  <h2>Login</h2>
  <form action="login.php" method="post" >
  <table class=" table">
    <tr>
      <td>Email</td>
      <td><input form-control type="text" name="email"> </td>
    </tr>
    <td>Senha</td>
      <td><input form-control type="password" name="senha"> </td>
    </tr>
    <tr>
      <td><button class btn btn-primary>Login</button></td>
    </tr>
  </table>
</form>
<?php include("rodape.php")?>
<?php }?>
