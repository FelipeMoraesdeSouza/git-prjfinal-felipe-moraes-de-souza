
<section class="caixa mt-4">
	<div class="titulo h5 mb-0"> <h2>Lista de fornecs</h2></div>
	<div class="base-lista">
		<div>
			<div class="text-end d-flex">
				<a href="<?php echo URL_BASE."fornec/create" ?>" class="btn btn-verde d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar fornec</a>
				<a href="" class="btn btn-azul d-inline-block mb-2 filtro"><i class="fas fa fa-filter" aria-hidden="true"></i> Filtrar</a>
			</div>
		</div>
        <!--
		<div class="lst mostraFiltro" style="">
			<form action="" method="">
			<div class="rows">
					<div class="col-4">
						<select name="txt_id_empresa">
							<option selected>Selecione o valor...</option>
							<option value="1">Código</option>
							<option value="2">Nome</option>
							<option value="3">Telefone</option>
							<option value="4">Endereço</option>
							<option value="5">tel</option>										
						</select>
					</div>
					<div class="col-6">
						<input type="text"  name="" placeholder="Valor da pesquisar..." >
					</div>
					<div class="col-2">
						<input type="submit" class="btn btn-azul" value="pesquisar">
					</div>
			</div>
			</form>
		</div>
        -->
			
	<div class="tabela-responsiva tabela">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
			<thead> 
				<tr>				
				<th align="left">Nome</th>
				<th align="left">CNPJ</th>
				<th align="center">Ação</th>
				</tr>
			</thead> 
			<tbody>
				<?php  foreach($lista as $fornec) { ?>
				<tr>
                    <td><?php echo $fornec->fornecedor; ?></td>
					<td><?php echo $fornec->cnpj; ?></td>					
					
					<td align="center">
						<a href="<?php echo URL_BASE."fornec/edit/".$fornec->idF ?>" class="btn btn-editar" title="Editar"></a>
						<a href="<?php echo URL_BASE."fornec/excluir/".$fornec->idF ?>" class="btn btn-exlcuir" title="excluir"></a>
					</td>
				</tr>
				<?php } ?>	
									
			</tbody> 
		</table>
		</div>
					
		</div>
	</div>
</section>