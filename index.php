
<?php include './view/header.php';
error_reporting(0); // para o caso de server gratuito.

include_once "./model/database.php";
include_once "./model/cliente.php";
include_once "./model/usuario.php";


if ($_GET['sair'] == 1) {
	$_SESSION = '';
	$logged = 0;
	session_destroy();
}
$logged = $_SESSION['logado'];
//verifica se tem alguem logado, caso não redireciona para a pagina de login.
if (!$logged) {
	include './controller/login.php';
} else {
	if (!empty($_GET['controller'])) {
		$controller = $_GET['controller'];
	}
	/* Verifica se não existe controller setado ou se o controller é "login"
		 *em caso positivo seta o controller como vazio, assim o menu inicial fica vazio
		 */
	if (!$controller || $controller == 'login') $controller = '';
	if ($controller == 'clientes') {
		include './controller/clientes.php';
	} elseif ($controller == 'login') {
		include './controller/login.php';
	} else {
		include './view/menu.php';
	}
}
?>
<?php include './view/footer.php'; ?>