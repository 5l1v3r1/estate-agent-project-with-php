﻿<?php 
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');

?>		
		
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Kullanıcı Düzenleme</h2>
						<div class="col-md-8">
							<div class="panel panel-default">
								<div class="panel-heading">Form fields</div>
								<div class="panel-body">
									<form method="post" action="<?=base_url()?>admin/kullanicilar/guncellekaydet/<?=$veri[0]->id?>" class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-2 control-label">Adı Soyadı</label>
											<div class="col-sm-10">
												<input class="form-control" value="<?=$veri[0]->adsoyad?>" name="adsoyad" placeholder="Adınız Soyadınız" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Email Adresi</label>
											<div class="col-sm-10">
												<input class="form-control" value="<?=$veri[0]->email?>" name="email" placeholder="Email Adresiniz" type="text">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Password</label>
											<div class="col-sm-10">
												<input class="form-control" value="<?=$veri[0]->sifre?>" name="sifre" type="password">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Yetki</label>
											<div class="col-sm-10">
												<select name="yetki" class="form-control">
													<option><?=$veri[0]->yetki?></option>
													<option>Admin</option>
													<option>Editör</option>
													<option>Stok</option>
													<option>Satış</option>
													<option>Sipariş</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Durum</label>
											<div class="col-sm-10">
												<select name="durum" class="form-control">
													<option><?=$veri[0]->durum?></option>
													<option>Onaylı</option>
													<option>Beklemede</option>
													<option>Engelli</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-8 col-sm-offset-2">
												<button class="btn btn-primary" type="submit">G Ü N C E L L E</button>
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