<div class="row">
	<div class="col-md-4">
		<div class="col-md-2 col-md-offset-2" id="calendario">
	</div>
	</div>
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<input class="form-control" type="text" name="" placeholder="Nº / Nome do militar">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-2">
						<label for="numero">Nº</label>
						<input class="form-control" type="text" name="numero">
					</div>
					<div class="col-md-7">
						<label for="nome_de_guerra">Nome de guerra</label>
						<input class="form-control" type="text" name="nome_de_guerra">
					</div>
					<div class="col-md-3">
						<label for="prec_cp">Prec-CP</label>
						<input class="form-control" type="text" name="prec_cp">
					</div>
				</div>
				<div class="row">
					<div class="col-md-10">
						<label for="nome_completo">Nome completo</label>
						<input class="form-control" type="text" name="nome_completo">
					</div>
					<div class="col-md-2">
						<input class="form-group btn btn-default" type="submit" value="Submit">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<input type="date form-control" name="">
					</div>
					
				</div>
			</div>
		</div>
		
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		
	</div>
	
</div>

<script>
	$('#calendario').datepicker({
    	language: "pt-BR",
    	todayHighlight: true
	});
</script>

<script>
	$('#calendario').datepicker('getDate');
</script>