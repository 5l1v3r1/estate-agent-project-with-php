﻿		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Kullanıcılar Listesi</h2>
						<?php if($this->session->flashdata("sonuc")) {?>
						<div class="col-md-12">
							<div class="well well-lg">
								<?=$this->session->flashdata("sonuc")?>
							</div>
						</div>
						<?php } ?>
						
						<a href="<?=base_url()?>admin/kullanicilar/ekle" class="btn btn-success"><li class="glyphicon glyphicon-plus icon-white"> </li> Yeni Kullanıcı Ekle</a>
						<div class="row">
							<div class="col-sm-12">
								<table id="zctb" class=" table table-striped table-bordered table-hover dataTable" role="grid" aria-describedby="zctb_info" style="width: 100%;" width="100%" cellspacing="0">
									<tr>
										<th rowspan="1" colspan="1">Ad Soyad</th>
										<th rowspan="1" colspan="1">E-mail</th>
										<th rowspan="1" colspan="1">Yetki</th>
										<th rowspan="1" colspan="1">Durum</th>
										<th rowspan="1" colspan="1">Action</th>
									</tr>
									<tbody>
									<?php 
									foreach($veri as $rs){
										
									?>
										<tr role="row" class="odd">
											<td class="sorting_1"><?=$rs->adsoyad ?></td>
											<td><?=$rs->email ?></td>
											<td><h4><span class="label label-success"><?=$rs->yetki ?></span></h4></td>
											<td><h4><span class="label label-info"><?=$rs->durum ?></span></h4></td>
											<td>
												<a href="<?=base_url()?>admin/kullanicilar/goster/<?=$rs->id ?>" class="btn btn-success btn-md"><i class="glyphicon glyphicon-zoom-in icon-white" > Görüntüle </i></a>
												<a href="<?=base_url()?>admin/kullanicilar/edit/<?=$rs->id ?>" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-edit icon-white" > Düzenle</i></a>
												<a href="<?=base_url()?>admin/kullanicilar/delete/<?=$rs->id ?>" onclick="return confirm('silinecek emin misiniz?');" class="btn btn-danger btn-md"><i class="glyphicon glyphicon-trash icon-white" > Sil</i></a>
											</td>
										</tr>
									<?php 
										}
									?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<div class="dataTables_info" id="zctb_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
							</div>
							<div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="zctb_paginate">
								<ul class="pagination">
									<li class="paginate_button previous disabled" id="zctb_previous"><a href="#" aria-controls="zctb" data-dt-idx="0" tabindex="0">Previous</a></li>
									<li class="paginate_button active"><a href="#" aria-controls="zctb" data-dt-idx="1" tabindex="0">1</a></li>
									<li class="paginate_button "><a href="#" aria-controls="zctb" data-dt-idx="2" tabindex="0">2</a></li>
									<li class="paginate_button "><a href="#" aria-controls="zctb" data-dt-idx="3" tabindex="0">3</a></li>
									<li class="paginate_button "><a href="#" aria-controls="zctb" data-dt-idx="4" tabindex="0">4</a></li>
									<li class="paginate_button "><a href="#" aria-controls="zctb" data-dt-idx="5" tabindex="0">5</a></li>
									<li class="paginate_button "><a href="#" aria-controls="zctb" data-dt-idx="6" tabindex="0">6</a></li>
									<li class="paginate_button next" id="zctb_next"><a href="#" aria-controls="zctb" data-dt-idx="7" tabindex="0">Next</a></li>
								</ul>
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