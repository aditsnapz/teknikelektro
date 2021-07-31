<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
              <li class="breadcrumb-item active"><?= $subtitle ?></li>
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
							<h3 class="card-title"><b><?= $subtitle ?></b></h3>
							<div class="text-right">
								<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#import-tabel7"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<!-- <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-tabel7"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button> -->
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
							
							<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="15%">Nama Dosen</th>
										<th width="25%">Tema</th>
										<th width="10%">Nama Mahasiswa</th>
										<th width="10%">Judul</th>
										<th width="10%">Tahun</th>
										<th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($tabel7s as $tabel7) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $tabel7->nama_dosen; ?></td>
										<td><?php echo $tabel7->tema; ?></td>
										<td><?php echo $tabel7->nama_mahasiswa; ?></td>
										<td><?php echo $tabel7->judul; ?></td>
										<td><?php echo $tabel7->tahun; ?></td>
										<td>
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
												data-target="#edit-tabel7<?php echo $tabel7->id;?>"><i
													class="fa fa-edit"></i>&nbsp&nbspUpdate</button>
											<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Tabel7/delete/'.$tabel7->id);?>"><i
													class="fa fa-trash "></i>&nbsp&nbspDelete</a>

										</td>
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>
								
						</div>
					</div>
				</div>
				<div class="modal fade" id="tambah-tabel7" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Tambah Tabel7</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel7/add'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Nama Dosen</label>
										<div class="col-md-10">
											<input type="text" name="nama_dosen" id="nama_dosen" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Tema</label>
										<div class="col-md-10">
											<input type="text" name="tema" id="tema" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Nama Mahasiswa</label>
										<div class="col-md-10">
											<input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Judul</label>
										<div class="col-md-10">
											<input type="text" name="judul" id="judul" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Tahun</label>
										<div class="col-md-10">
											<input type="text" name="tahun" id="tahun" class="form-control" >
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
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<?php $no=1;
				foreach ($tabel7s as  $tabel7) {
				?>
				<div class="modal fade" id="edit-tabel7<?php echo $tabel7->id;?>">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Edit Tabel7</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span></button>
									
								</div>
								<form method="POST" action="<?php echo base_url('Tabel7/edit'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<input type="hidden" name="id" id="id" class="form-control" value="<?= $tabel7->id ?>" >
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Nama Dosen</label>
										<div class="col-md-10">
											<input type="text" name="nama_dosen" id="nama_dosen" class="form-control" value="<?= $tabel7->nama_dosen ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Judul</label>
										<div class="col-md-10">
											<input type="text" name="judul" id="judul" class="form-control" value="<?= $tabel7->judul ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Nama Mahasiswa</label>
										<div class="col-md-10">
											<input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" value="<?= $tabel7->nama_mahasiswa ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Judul</label>
										<div class="col-md-10">
											<input type="text" name="judul" id="judul" class="form-control" value="<?= $tabel7->judul ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Tahun</label>
										<div class="col-md-10">
											<input type="text" name="tahun" id="tahun" class="form-control" value="<?= $tabel7->tahun ?>">
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
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<?php $no++; } ?>
				<div class="modal fade" id="import-tabel7" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Import Tabel7</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel7/import'); ?>" enctype="multipart/form-data" class="form-horizontal">
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
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
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
						swal("Deleted!", "Tabel7 sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "Tabel7 tidak terhapus :)", "error");
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

