﻿<?php 
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');

?>		
		
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">İletişim kaydı ekleme</h2>
						<?php if($this->session->flashdata("sonuc")) {?>
						<div class="alert alert-error">
							<?=$this->session->flashdata("sonuc")?>
						</div>
						<?php } ?>
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">İletişim</div>
								<div class="panel-body">
									<form method="post" action="<?=base_url()?>admin/home/iletisim_guncelle/<?=$veri[0]->id?>" class="form-horizontal">
										
										<div class="form-group">
											<script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
											<label class="col-sm-2 control-label">İletişim</label>
											<div class="col-sm-10">
												<textarea name="iletisim" id="iletisim" rows="10" cols="80">
												<?=$veri[0]->iletisim ?>
												</textarea>
												<script>
													// Replace the <textarea id="editor1"> with a CKEditor
													// instance, using default configuration.
													CKEDITOR.replace( 'iletisim' );
												</script>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-8 col-sm-offset-2">
												<button class="btn btn-primary" type="submit">E K L E</button>
											</div>
										</div>
									
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="<?=base_url()?>assets/admin/js/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/bootstrap-select.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/dataTables.bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/Chart.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/fileinput.js"></script>
	<script src="<?=base_url()?>assets/admin/js/chartData.js"></script>
	<script src="<?=base_url()?>assets/admin/js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
<?php 

		$this->load->view('admin/_footer');

?>		