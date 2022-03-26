<section class="mt-4">
	<div class="titulo h5 mb-0"><h2>Formulario de cadastro</h2></div>
		<div class="base-form">
			<div class="caixa-form">
				<form action="<?php echo URL_BASE."produto/salvar" ?>" method="POST">				
					<div class="rows">
						<div class="col-12 d-flex text-justify-center">
							<span href="" class="msg msg-verde mx-3"><i class="fas fa-check"></i> Cadastro realizado com sucesso <a href="javascrip:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
							<span href="" class="msg msg-vermelho mx-3"><i class="fas fa-exclamation-triangle"></i> O campo é obrigatório <a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>
		
						</div>				
					</div>				
					<div class="rows msg-form">	
						<div class="col-3 position-relative">

							<img src="img/img-usuario.png" class="img-fluido foto">
							<div  class="foto-file">
								<input type="file" id="editarFoto"><label for="editarFoto"><span>Editar foto</span></label>
							</div>
							<small class="d-block text-center pt-1 pb-2"><b>nome_do_arquivo.jpg</b></small>
						
						</div>
						
						<div class="col-9">

							<div class="rows">
								<div class="col-8">
									<label>Nome</label>
									<input name="produto" value="<?php echo isset($produto) ? $produto->produto : "" ?>" type="text" placeholder="Insira o nome do produto" class="form-campo">
								</div>
							<div class="col-4">
								<label>quantidade</label>
								<input name="qtd" value="<?php echo isset($produto) ? $produto->qtd : "" ?>" type="text" placeholder="Insira a quantidade" class="form-campo">
							</div>									
								<div class="col-3">
									<label>quantidade máxima</label>
									<input name="qtdmax" value="<?php echo isset($produto) ? $produto->qtdmax : "" ?>" type="text" placeholder="quantidade máxima deste produto" class="form-campo">
								</div>							
												
							<div class="col-3">
								<label>quantidade minima</label>
								<input name="qtdmin" value="<?php echo isset($produto) ? $produto->qtdmin : "" ?>" type="text" placeholder="quantidade minima deste produto" class="form-campo">
							</div>

                            <div class="col-3">
								<label>preço</label>
								<input name="preco" value="<?php echo isset($produto) ? $produto->preco : "" ?>" type="text" placeholder="preço deste produto" class="form-campo">
							</div>

                            <div class="col-3">
								<label>fornecedor</label>
								<input name="fornecedor" value="<?php echo isset($produto) ? $produto->fornecedor : "" ?>" type="text" placeholder="fornecedor deste produto" class="form-campo">
							</div>

							<div class="col-4 m-auto">
								<input type="hidden" name="idproduto" value="<?php echo isset($produto) ? $produto->idproduto : null ?>" />
								<input type="submit" value="Cadastrar" class="btn btn-verde width-100">
							</div>
						
						</div>
					</div>
						
				</form>
			</div>
		</div>
	</div>
</section>