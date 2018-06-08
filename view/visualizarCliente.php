<h2>Informaçoes do cliente</h2>
<div class="container card-clientes">
	<dl class="dl-horizontal">
		<dt>Nome :</dt>
		<dd><?=$cliente->getNome();?></dd>
		<dt>CPF :</dt>
		<dd><?=$cliente->getCpf();?></dd>
		<dt>telefone :</dt>
		<dd><?=$cliente->getTelefone();?></dd>
        <dt>Celular :</dt>
		<dd><?=$cliente->getCelular();?></dd>
	</dl>
	<dl class="dl-horizontal">
		<dt>Endereço:</dt>
		<dd><?=$cliente->getEndereco();?></dd>
		<dt>Bairro:</dt>
		<dd><?=$cliente->getBairro();?></dd>
		<dt>CEP:</dt>
		<dd><?=$cliente->getCep();?></dd>
		<dt>Cidade:</dt>
		<dd><?=$cliente->getCidade();?>/<?=$cliente->getEstado();?></dd>
	</dl>
	<div id="actions" class="row">
		<div class="col-md-12">
                <a class="btn btn-outline-warning icone edit" href="?controller=clientes&action=edit&id=<?=
                $cliente->getId();?>"title="Editar"><i class="fas fa-edit"></i> Editar</a>
                <a class="btn btn-outline-danger icone del" href="?controller=clientes&action=delete&id=<?=
                $cliente->getId();?>"title="Deletar"><i class="fas fa-trash-alt"></i> Excluir</a>
		</div>
	</div>
	</div>