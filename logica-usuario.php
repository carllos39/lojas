<?php 
session_start();


function usuarioEstaLogado(){
    return isset($_SESSION['usuario_logado']);
}



function verificaUsuario(){  
 if(!usuarioEstaLogado()){
    header("Location: index.php?falhaDeSeguranca=true");
    die();
  
   }
}
function usuarioLogado(){
  return  $_SESSION['usuario_logado'];
}
function logaUsuario($mail){
    $_SESSION['usuario_logado']=$mail;
}

function logout (){
    session_destroy();
}



?>