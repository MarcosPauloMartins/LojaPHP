
<div class="container bd-navbar">
	<form id="cadastroDeCliente" action="./?controller=clientes&action=createupdate" method="post">
	
	<div class="row">
		<div class="form-group col-md-9">
			<label for="nome">Nome :</label> <input type="text"
				class="form-control" name="nome" value="<?=$nome?>" id="nome"
				/>
		</div>

		<div class="form-group col-md-3">
			<label for="cpf">CPF:</label> <input type="text" class="form-control"
				name="cpf" id="cpf" value="<?=$cpf?>" placeholder="Informe o CPF" />
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-9">
			<label for="endereco">Endereco:</label> <input type="text" class="form-control"
				name="endereco" id="endereco" value="<?=$endereco?>" placeholder="Informe o endereço" />
		</div>

		<div class="form-group col-md-3">
			<label for="bairro">Bairro:</label> <input type="text" class="form-control"
				name="bairro" id="bairro" value="<?=$bairro?>" placeholder="Informe o bairro" />
		</div>
	</div>
	
	<div class="row">
		<div class="form-group col-md-3">
			<label for="CEP">CEP:</label> <input type="text" class="form-control"
				name="cep" id="cep" value="<?=$cep?>" placeholder="Informe o CEP" />
		</div>
		
		<div class="form-group col-md-7">
			<label for="cidade">Cidade:</label> <input type="text" class="form-control"
				name="cidade" id="cidade" value="<?=$cidade?>" placeholder="Informe a cidade" />
		</div>
		
		<div class="form-group col-md-2">
			<label for="estado">Estado:</label> <input type="text" class="form-control"
				name="estado" id="estado" value="<?=$estado?>" placeholder="Informe o estado" />
		</div>
	</div>
	
	<div class="row">
		<div class="form-group col-md-4">
			<label for="telefone">telefone residencial / comercial :</label> <input type="text" class="form-control"
				name="telefone" id="telefone" value="<?=$telefone?>" placeholder="Informe o telefone" />
		</div>
		
		<div class="form-group col-md-4">
			<label for="celular">Celular:</label> <input type="text" class="form-control"
				name="celular" id="celular" value="<?=$celular?>" placeholder="Informe o celular" />
		</div>
		
	</div>
	
		<input type="hidden" name="id" value="<?=$id?>">
		<input type="hidden" name="controller" value="clientes"> 
		<input type="hidden" name="action" value="createupdate">
		
		<div style="text-align: center;">
			<button type="submit" class="btn btn-outline-success">Salvar</button>
			<button type="reset" class="btn btn-outline-warning">Limpar</button>
		</div>
	</form>
	<br />
</div>
<?php  $tb_content= "";
    $clientes = cliente::getAll();
    if(sizeof($clientes)){
    $tb_head = '<table class="table lista-itens">
    <thead>
    <tr id="tr-head">
    <th scope="col">#</th>
    <th scope="col">Nome</th>
    <th scope="col">Endereço</th>
    <th scope="col">cidade</th>
    <th scope="col">Opções</th>
    </tr>';
    foreach ($clientes as $cliente){
    $tb_content .= '</thead>
    <tbody>
    <tr><th scope="row">'.$cliente->getId().'</th>
    <td>'.$cliente->getNome().'</td>
    <td>'.$cliente->getEndereco().'</td>
    <td>'.$cliente->getCidade().'</td>
    <td><a class="icone view" href="?controller=clientes&action=view&id='.
                $cliente->getId().'"title="view"><i class="fas fa-eye"></i></a>
                <a class="icone edit" href="?controller=clientes&action=edit&id='.
                $cliente->getId().'"title="Editar"><i class="fas fa-edit"></i></a>
                <a class="icone del" href="?controller=clientes&action=delete&id='.
                $cliente->getId().'"title="Deletar"><i class="fas fa-trash-alt"></i></a> </td>
                </tr>
                </tbody>';
    }
     $tb_end = '</table>';
     $tb = $tb_head . $tb_content . $tb_end;
    }
    echo $tb;
   ?>
<script>
$(document).ready(function($){

	$('#cpf').mask('000.000.000-00');
	$('#cep').mask('00000-000');
	$('#telefone').mask('(00)0000-0000');
	$('#celular').mask('(00)00000-0000');
	
});
</script>