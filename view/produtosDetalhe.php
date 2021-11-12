<?php 
include_once "inc_cabecalho.php" ;
include_once "inc_top.php" ;

include_once '../service/ServiceProdutos.php';
$service = new ServiceProdutos();
$produtoDetalhe = $service->getProdutoDetalhe($_REQUEST);
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">  
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
	$(document).ready(function(){ 		
 		$( "#accordion" ).accordion();
 		 collapsible: false;
	});
</script>

<div class="container">
	<div class="row" style="margin:50px ">		

		<div class="col-lg-5" style="width:250">

			<img src="../images/produtos/<?=$produtoDetalhe['foto']?>" width="400px" height="400px" />
		</div>

		<div class="col-lg-6" style="width:250">
			<div>
				<h4><?=$produtoDetalhe['nome']?></h4>
			</div>
			
			<div>
				<?=$produtoDetalhe['descricao']?>
			</div>
			
			<div>					
			<!--	<br><b>Detalhes</b> -->
				<hr width="100%" ></hr>
			</div>
			

			<div id="accordion" >
				<h3>Detalhes</h3>
				<div>				
					<?=$produtoDetalhe['descricao_tecnica']?>				
				</div>

				<h3>Como usar</h3>
				<div>				
					<?=$produtoDetalhe['instrucao_uso']?>				
				</div>

				<h3>Composi&ccedil;&atilde;o</h3>
				<div>				
					<?=$produtoDetalhe['composicao']?>				
				</div>

				<h3>Outras Informa&ccedil;&otilde;es</h3>
				<div>				
					<?=$produtoDetalhe['outras_info']?>
				</div>


			</div>

		</div>
	</div>			
</div>
<?php include_once "inc_rodape.php" ?>