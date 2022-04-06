<!doctype html>
<html language="pt-br">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<thead>
		<title>Juan Pablo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/js/datatables/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/js/datatables/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/js/datatables/css/style_dataTable.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>/assets/css/auxiliar.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/css/grade.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/css/style.css">
		<!--font icones-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
		
		<!--bootstrap-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<script src="<?php echo URL_BASE ?>/assets/js/jquery.min.js"></script>
	</thead>

	<style>
		 
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

		*, body {
			font-family: 'Poppins', sans-serif;
			font-weight: 400;
			-webkit-font-smoothing: antialiased;
			text-rendering: optimizeLegibility;
			-moz-osx-font-smoothing: grayscale;
		}

		html, body {
			height: 100%;
			background-color: #152733;
			overflow: hidden;
		}


		.form-holder {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			text-align: center;
			min-height: 100vh;
		}

		.form-holder .form-content {
			position: relative;
			text-align: center;
			display: -webkit-box;
			display: -moz-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-align-items: center;
			align-items: center;
			padding: 60px;
		}

		.form-content .form-items {
			border: 3px solid #fff;
			padding: 40px;
			display: inline-block;
			width: 100%;
			min-width: 540px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			border-radius: 10px;
			text-align: left;
			-webkit-transition: all 0.4s ease;
			transition: all 0.4s ease;
		}

		.form-content h3 {
			color: #fff;
			text-align: left;
			font-size: 28px;
			font-weight: 600;
			margin-bottom: 5px;
		}

		.form-content h3.form-title {
			margin-bottom: 30px;
		}

		.form-content p {
			color: #fff;
			text-align: left;
			font-size: 17px;
			font-weight: 300;
			line-height: 20px;
			margin-bottom: 30px;
		}


		.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
			color: #fff;
		}

		.form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
			width: 100%;
			padding: 9px 20px;
			text-align: left;
			border: 0;
			outline: 0;
			border-radius: 6px;
			background-color: #fff;
			font-size: 15px;
			font-weight: 300;
			color: #8D8D8D;
			-webkit-transition: all 0.3s ease;
			transition: all 0.3s ease;
			margin-top: 16px;
		}


		.btn-primary{
			background-color: #6C757D;
			outline: none;
			border: 0px;
			box-shadow: none;
		}

		.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
			background-color: #495056;
			outline: none !important;
			border: none !important;
			box-shadow: none;
		}

		.form-content textarea {
			position: static !important;
			width: 100%;
			padding: 8px 20px;
			border-radius: 6px;
			text-align: left;
			background-color: #fff;
			border: 0;
			font-size: 15px;
			font-weight: 300;
			color: #8D8D8D;
			outline: none;
			resize: none;
			height: 120px;
			-webkit-transition: none;
			transition: none;
			margin-bottom: 14px;
		}

		.form-content textarea:hover, .form-content textarea:focus {
			border: 0;
			background-color: #ebeff8;
			color: #8D8D8D;
		}

		.mv-up{
			margin-top: -9px !important;
			margin-bottom: 8px !important;
		}

		.invalid-feedback{
			color: #ff606e;
		}

		.valid-feedback{
		color: #2acc80;
		}		
		
		/*meu css*/
		.titulo{
			display: block;
			border-bottom: solid 1px #464446;
			color: #fff;
			font-size: 1.2em;
			margin-bottom: 1.5rem;
		}
		

	</style>
	<body>
		
    
    <!-- aqui entra a view  cabecalho.php-->
    <?php include_once "cabecalho.php"; ?>

	<div class="conteudo">
         <?php $this->load($view,$viewData) ?>
	</div>
		
	<!---->
		<script src="<?php echo URL_BASE ?>/assets/js/jquery-ui.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/datatables/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/datatables/js/dataTables.responsive.min.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/js.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/componentes/js_modal.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/componentes/js_data_table.js"></script>
	
		<!--bootstrap-->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	</body>
</html>