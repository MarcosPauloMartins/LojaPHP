<?php
if(!empty($_POST['login'])){
    $usuario = usuario::search($_POST['login']);
    if($usuario) {
        if($_POST['senha'] == $usuario->getSenha()){
                $_SESSION['logado'] = $usuario->getNome();
                $_SESSION['usuario'] = $usuario->getUsuario();
                $_SESSION['nivel'] = $usuario->getNivel();
                $_SESSION['id'] = $usuario->getId();
                $logged = 1;
                header('Location: ./index.php');
    } else {
        $res = '<div class="alert alert-secondary entrar-div alert-dismissible fade show" role="alert">
    Usuario ou senha não incorreto!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
        }
    }
}
    if(!$logged){
       include './view/login.php';
    }

?>