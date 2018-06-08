
<div class="container bd-navbar">
	<form id="cadastroDeCliente" action="./?controller=clientes&action=createupdate" method="post">
	
	<div class="row">
		<div class="form-group col-md-9">
			<label for="nome">Nome :</label> <input type="text"
				class="form-control" name="nome" value="<?=$nome?>" id="nome"
				/>
		</div>

		<div class="form-group col-md-3">
			<label for="email">Email:</label> <input type="text" class="form-control"
				name="email" id="email" value="<?=$usuario?>" placeholder="Informe o CPF" />
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-9">
			<label for="senha">Senha:</label> <input type="password" class="form-control"
				name="senha" id="senha" value="<?=$senha?>" placeholder="Informe o endereço" />
		</div>	
	</div>
	
		<input type="hidden" name="id" value="<?=$id?>">
		<input type="hidden" name="controller" value="usuarios"> 
		<input type="hidden" name="action" value="createupdate">
		
		<div style="text-align: center;">
			<button type="submit" class="btn btn-outline-success">Criar conta</button>
			<button type="reset" class="btn btn-outline-warning">Limpar</button>
		</div>
	</form>
	<br />
</div>
<script>
$(document).ready(function($){

	$('#email').mask('email@email.com');
	$('#cep').mask('00000-000');
	$('#telefone').mask('(00)0000-0000');
	$('#celular').mask('(00)00000-0000');
	
});
</script>