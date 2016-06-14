<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="view" content="content">
	<title></title>


	<!-- biblioteca externas -->
	<!-- jquery -->
	<script src="<?php echo base_url('/../lib/jquery/jquery-2.x-git.min.js'); ?>"></script>

	<!-- CSS bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('/../lib/bootstrap/css/bootstrap.css'); ?>">

	<!-- Javascript bootstrap -->
	<script src="<?php echo base_url('/../lib/bootstrap/js/bootstrap.js'); ?>" type="text/javascript"></script>

	<!-- CSS date picket -->
	<link rel="stylesheet" href="<?php echo base_url('/../lib/BSDatePicket/css/bootstrap-datepicker.css'); ?>">

	<!-- JS date picket -->
	<script src="<?php echo base_url('/../lib/BSDatePicket/js/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>

	<!-- Language date picket -->
	<script src="<?php echo base_url('/../lib/BSDatePicket/locales/bootstrap-datepicker.pt-BR.min.js'); ?>" type="text/javascript"></script>

</head>

<body>
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-default">
  				<div class="container-fluid">
    			<!-- Brand and toggle get grouped for better mobile display -->
    				<div class="navbar-header">
      				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        			<span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      	</button>

      				<a class="navbar-brand " href="#">10ª Bda Inf Mtz
      					 <!-- <img alt="Logo 10ª Bda Inf Mtz" src="<?php echo base_url('/../lib/image/10bdainfmtz5x5.png')?>"> -->
      				</a>
    			</div>

			    <div class="collapse navbar-collapse">
			      <ul class="nav navbar-nav">
			        <li class="nav navbar-nav"><a href="#">Escalar Militar</a></li>
			        <li><a href="#">Link</a></li>
			      </ul>
			     
			      <ul class="nav navbar-nav navbar-right">
			        <!-- Relatório -->
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatórios<span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Desconto por semana</a></li>
			            <li><a href="#">Desconto por mes</a></li>
			            <li><a href="#">Desconto por ano</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Algum outro relatorio</a></li>
			          </ul> 
			        </li>
			        <li>
			        	<a href="#">Sair</a>
			        </li>
			      </ul>
			    </div>
  				</div>
			</nav>
		</div>	