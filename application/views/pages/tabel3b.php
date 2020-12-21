<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rasio Dosen Terhadap Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Rasio Dosen Terhadap Mahasiswa</a></li>
              <li class="breadcrumb-item active">Tabel3b</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	<br>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title"><b>Data Tabel3b </b></h3>
							<div class="text-right">
								<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#import-tabel3b"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-tabel3b"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
							
							<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="20%">Unit</th>
										<th width="10%">Jumlah Dosen</th>
										<th width="10%">Jumlah Mahasiswa</th>
										<th width="20%">Jumlah Mahasiswa TA</th>
										<!-- <th width="10%">Action</th> -->
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($tabel3bs as $tabel3b) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $tabel3b->fakultas.' / '.$tabel3b->departemen.' / '.$tabel3b->jurusan; ?></td>
										<td><?php echo $tabel3b->jumlah_dosen; ?></td>
										<td><?php echo $tabel3b->jumlah_mahasiswa; ?></td>
										<td><?php echo $tabel3b->rasio; ?></td>
										<!-- <td>
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
												data-target="#edit-tabel3b<?php echo $tabel3b->id;?>"><i
													class="fa fa-edit"></i>&nbsp&nbspUpdate</button>
											<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Tabel3b/delete/'.$tabel3b->id);?>"><i
													class="fa fa-trash "></i>&nbsp&nbspDelete</a>

										</td> -->
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>
								
						</div>
					</div>
				</div>
				<!-- <div class="modal fade" id="tambah-tabel3b" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Tambah Tabel3b</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel3b/add'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Unit</label>
										<div class="col-md-10">
											<input type="text" name="unit" id="unit" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Dosen</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_dosen" id="jumlah_dosen" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Mahasiswa</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_mahasiswa" id="jumlah_mahasiswa" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Mahasiswa TA</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_mahasiswa_ta" id="jumlah_mahasiswa_ta" class="form-control" >
										</div>
									</div>
								</div>
								<br><br>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success">Simpan</button>
									<button type="reset" class="btn btn-danger">Reset</button>
								</div>
							</form>
						</div>
						
					</div>
					
				</div> -->
				<!-- /.modal -->
				<!-- <?php $no=1;
				foreach ($tabel3bs as  $tabel3b) {
				?>
				<div class="modal fade" id="edit-tabel3b<?php echo $tabel3b->id;?>">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Edit Tabel3b</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span></button>
									
								</div>
								<form method="POST" action="<?php echo base_url('Tabel3b/edit'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<input type="hidden" name="id" id="id" class="form-control" value="<?= $tabel3b->id ?>" >
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Unit</label>
										<div class="col-md-10">
											<input type="text" name="unit" id="unit" class="form-control" value="<?= $tabel3b->unit ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Dosen</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_dosen" id="jumlah_dosen" class="form-control" value="<?= $tabel3b->jumlah_dosen ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Mahasiswa</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_mahasiswa" id="jumlah_mahasiswa" class="form-control" value="<?= $tabel3b->jumlah_mahasiswa ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Mahasiswa TA</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_mahasiswa_ta" id="jumlah_mahasiswa_ta" class="form-control" value="<?= $tabel3b->jumlah_mahasiswa_ta ?>" >
										</div>
									</div>
								</div>
								<br><br>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success">Simpan</button>
									<button type="reset" class="btn btn-danger">Reset</button>
								</div>
							</form>
								
						</div>
						
					</div>
					
				</div> -->
				<!-- /.modal -->
				<!-- <?php $no++; } ?>
				<div class="modal fade" id="import-tabel3b" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Import Tabel3b</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel3b/import'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">File</label>
										<div class="col-md-10">
											<input type="file" name="file" id="file" class="form-control">
										</div>
									</div>
								</div>
								<br><br>
								<div class="modal-footer">
									<button type="submit" name="submit" class="btn btn-success" value="Upload">Simpan</button>
									<button type="reset" class="btn btn-danger">Reset</button>
								</div>
							</form>
						</div>
						
					</div>
					
				</div> -->
			</div>
		</div>
	</section>
</div>


<script>
	jQuery(document).ready(function () {
		$('.delete-link').on('click', function () {
			var getLink = $(this).attr('href');
			swal({
					title: "Apakah anda yakin?",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					cancelButtonText: "Batalkan !",
					confirmButtonText: "Ya, hapus !",

					closeOnConfirm: false,
					closeOnCancel: false,
				},
				function (isConfirm) {
					if (isConfirm) {
						swal("Deleted!", "Tabel3b sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "Tabel3b tidak terhapus :)", "error");
					}

				});
			return false;
		});
	});

</script>

<script>
	$(document).ready(function () {
		$('.dataku').DataTable({
			pageLength: 10,
			responsive: true,
			dom: '<"html5buttons"B>lTfgitp',
			buttons: [{
					extend: 'copy'
				},
				{
					extend: 'csv'
				},
				{
					extend: 'excel',
					title: 'ExampleFile'
				},
				{
					extend: 'pdf',
					title: 'ExampleFile'
				},

				{
					extend: 'print',
					customize: function (win) {
						$(win.document.body).addClass('white-bg');
						$(win.document.body).css('font-size', '10px');

						$(win.document.body).find('table')
							.addClass('compact')
							.css('font-size', 'inherit');
					}
				}
			]

		});

	});

</script>


