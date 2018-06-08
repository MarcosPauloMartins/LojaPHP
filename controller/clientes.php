<?php

$nome = $cpf = $endereco = $bairro = $cep = "";
$cidade = $estado = $telefone = $celular = $id = "";

$action = "";
if(isset($_GET['action'])) $action = $_GET['action'];
if($action=="createupdate"){
    $cliente = new cliente();
    if($_POST['id']!='')
    $cliente->read($_POST['id']);
    $cliente->setNome($_POST['nome']);
    $cliente->setCpf($_POST['cpf']);
    $cliente->setEndereco($_POST['endereco']);
    $cliente->setBairro($_POST['bairro']);
    $cliente->setCep($_POST['cep']);
    $cliente->setCidade($_POST['cidade']);
    $cliente->setEstado($_POST['estado']);
    $cliente->setTelefone($_POST['telefone']);
    $cliente->setCelular($_POST['celular']); 
    if($_POST['id']!=''){
        $cliente->update();
        $texto = 'atualizado';
    }else{
        $cliente->create();       
        $texto = 'cadastrado';
    }
    echo $res = '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    Cliente <strong>'.$cliente->getNome().'</strong> '.$texto.' com sucesso!!!
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    include './view/cadastroCliente.php';
    
    
}elseif($action=='delete'){
    $cliente = new cliente();
    $cliente->read($_GET[id]);
    $cliente->delete();
    include './view/cadastroCliente.php';  
    
}elseif($action=='edit'){
    $clienteEdicao = new cliente();
    $clienteEdicao->read($_GET[id]);
    $nome = $clienteEdicao->getNome();
    $cpf = $clienteEdicao->getCpf();
    $endereco = $clienteEdicao->getendereco();
    $bairro = $clienteEdicao->getBairro();
    $cep = $clienteEdicao->getCep();
    $cidade = $clienteEdicao->getCidade();
    $estado = $clienteEdicao->getEstado();
    $telefone = $clienteEdicao->getTelefone();
    $celular = $clienteEdicao->getCelular();
    $id = $clienteEdicao->getId();
  include './view/cadastroCliente.php'; 
  
}elseif($action=='filtrar'){
    include './view/cadastroCliente.php';
} 

elseif($action=='view'){
    $id = $_GET['id'];
    $cliente = new cliente();
    $cliente->read($id);
    include './view/visualizarCliente.php';   
}
?>