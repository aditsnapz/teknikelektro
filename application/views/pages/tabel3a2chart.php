<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 	<!-- Content Header (Page header) -->
 	<section class="content-header">
 		<div class="container-fluid">
 			<div class="row mb-2">
 				<div class="col-sm-6">
 					<h1>Chart Jabatan Akademik Dosen Tetap </h1>
 				</div>
 				<div class="col-sm-6">
 					<ol class="breadcrumb float-sm-right">
 						<li class="breadcrumb-item"><a href="#">Home</a></li>
 						<li class="breadcrumb-item active">Chart</li>
 					</ol>
 				</div>
 			</div>
 		</div><!-- /.container-fluid -->
 	</section>

 	<!-- Main content -->
 	<section class="content">
 		<div class="container-fluid">
 			<div class="row">
 				<div class="col-md-6">
 					<!-- DONUT CHART -->
 					<div class="card card-danger">
 						<div class="card-header">
 							<h3 class="card-title">Chart Jumlah Profesor</h3>

 							<div class="card-tools">
 								<button type="button" class="btn btn-tool" data-card-widget="collapse"><i
 										class="fas fa-minus"></i>
 								</button>
 								<button type="button" class="btn btn-tool" data-card-widget="remove"><i
 										class="fas fa-times"></i></button>
 							</div>
 						</div>
 						<div class="card-body">
 							Jumlah Profesor : <?= $count_profesor ?>
 							<canvas id="JumlahProfesorChart"
 								style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
 						</div>
 						<!-- /.card-body -->
 					</div>
 					<!-- /.card -->
 				</div>
				<div class="col-md-6">
					<!-- BAR CHART -->
					<div class="card card-success">
						<div class="card-header">
							<h3 class="card-title">Chart Dosen Tetap</h3>
							<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
							</button>
							<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
							</div>
						</div>
						<div class="card-body">
						Jumlah Magister : <?= $jumlah_magister    ?>Jumlah Doktor : <?= $jumlah_doktor    ?>
							<div class="chart">
							<canvas id="ChartDosenTetap" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
							</div>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->

				</div>
			</div>
 		</div>
 	</section>
 </div>
 
 <script>
	var magister = <?= $magister ?>;
	var doktor = <?= $doktor ?>;
	var canvas = document.getElementById('JumlahProfesorChart');
	new Chart(canvas, {
		type: 'doughnut',    
		data: {
		labels: ['Doktor', 'Magister'],
		datasets: [{
			data: [doktor, magister],
			backgroundColor: ['#FF3334', '#FFCE56']
		}]
		},
		options: {
		responsive: true,
		maintainAspectRatio: true,
		plugins: {
			labels: {
			render: 'percentage',
			fontColor: ['white', 'red'],
			precision: 2
			}
		},
		}
	});
 	
		//-------------
		//- BAR CHART -
		//-------------
		var data_doktor = <?= $data_doktor ?>;
		var data_magister = <?= $data_magister ?>;
		var ChartDosenTetap = {
 			labels: ['Guru Besar', 'Lektor Kepala', 'Lektor', 'Asisten Ahli', 'Tenaga Pengajar'],
 			datasets: [{
 					label: 'Magister',
 					backgroundColor: 'rgba(60,141,188,0.9)',
 					borderColor: 'rgba(60,141,188,0.8)',
 					pointRadius: false,
 					pointColor: '#3b8bba',
 					pointStrokeColor: 'rgba(60,141,188,1)',
 					pointHighlightFill: '#fff',
 					pointHighlightStroke: 'rgba(60,141,188,1)',
 					data: data_magister
 				},
 				{
 					label: 'Doktor',
 					backgroundColor: 'rgba(250, 50, 50, 1)',
 					borderColor: 'rgba(210, 214, 250, 1)',
 					pointRadius: false,
 					pointColor: 'rgba(210, 214, 222, 1)',
 					pointStrokeColor: '#c1c7d1',
 					pointHighlightFill: '#fff',
 					pointHighlightStroke: 'rgba(220,220,220,1)',
 					data: data_doktor
 				},
 			]
 		}
		var barChartCanvas = $('#ChartDosenTetap').get(0).getContext('2d')
		var barChartData = jQuery.extend(true, {}, ChartDosenTetap)
		var temp0 = ChartDosenTetap.datasets[0]
		var temp1 = ChartDosenTetap.datasets[1]
		barChartData.datasets[0] = temp1
		barChartData.datasets[1] = temp0

		var barChartOptions = {
		responsive              : true,
		maintainAspectRatio     : false,
		datasetFill             : false,
		plugins: {
			labels: {
			render: 'value',
			}
		},
		}

		var barChart = new Chart(barChartCanvas, {
		type: 'bar', 
		data: barChartData,
		options: barChartOptions
		})

 	

 </script>
