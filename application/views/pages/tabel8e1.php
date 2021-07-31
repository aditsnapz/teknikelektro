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
							<h3 class="card-title"><b><?= $subtitle ?> </b></h3>
							<div class="text-right">
								<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#import-tabel8e1"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-tabel8e1"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
							
							<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="15%">Tahun Lulus</th>
										<th width="5%">Jumlah lulusan</th>
										<th width="5%">Jumlah lulusan Terlacak</th>
										<th width="5%">Jumlah Lulusan Rendah</th>
										<th width="5%">Jumlah Lulusan Sedang</th>
										<th width="5%">Jumlah Lulusan Tinggi</th>
										
										<th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($tabel8e1s as $tabel8e1) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $tabel8e1->tahun_lulus; ?></td>
										<td><?php echo $tabel8e1->jumlah_lulusan; ?></td>
										<td><?php echo $tabel8e1->jumlah_lulusan_terlacak; ?></td>
										<td><?php echo $tabel8e1->jumlah_lulusan_lokal; ?></td>
										<td><?php echo $tabel8e1->jumlah_lulusan_nasional; ?></td>
										<td><?php echo $tabel8e1->jumlah_lulusan_internasional; ?></td>
										<td>
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
												data-target="#edit-tabel8e1<?php echo $tabel8e1->id;?>"><i
													class="fa fa-edit"></i>&nbsp&nbspUpdate</button>
											<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Tabel8e1/delete/'.$tabel8e1->id);?>"><i
													class="fa fa-trash "></i>&nbsp&nbspDelete</a>

										</td>
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>
								
						</div>
					</div>
				</div>
				<div class="modal fade" id="tambah-tabel8e1" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Tambah Tabel8e1</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel8e1/add'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Tahun Lulusa</label>
										<div class="col-md-10">
											<input type="text" name="tahun_lulus" id="tahun_lulus" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Lulusan</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_lulusan" id="jumlah_lulusan" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Lulusan Terlacak</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_lulusan_terlacak" id="jumlah_lulusan_terlacak" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Lulusan Rendah</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_lulusan_lokal" id="jumlah_lulusan_lokal" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Lulusan Sedang</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_lulusan_nasional" id="jumlah_lulusan_nasional" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Lulusan Tinggi</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_lulusan_internasional" id="jumlah_lulusan_internasional" class="form-control" >
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
				foreach ($tabel8e1s as  $tabel8e1) {
				?>
				<div class="modal fade" id="edit-tabel8e1<?php echo $tabel8e1->id;?>">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Edit Tabel8e1</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span></button>
									
								</div>
								<form method="POST" action="<?php echo base_url('Tabel8e1/edit'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<input type="hidden" name="id" id="id" class="form-control" value="<?= $tabel8e1->id ?>" >
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Tahun Lulusan</label>
										<div class="col-md-10">
											<input type="text" name="tahun_lulus" id="tahun_lulus" class="form-control" value="<?= $tabel8e1->tahun_lulus ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Lulusan</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_lulusan" id="jumlah_lulusan" class="form-control" value="<?= $tabel8e1->jumlah_lulusan ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Lulusan Terlacak</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_lulusan_terlacak" id="jumlah_lulusan_terlacak" class="form-control" value="<?= $tabel8e1->jumlah_lulusan_terlacak ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Lulusan Rendah</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_lulusan_lokal" id="jumlah_lulusan_lokal" class="form-control" value="<?= $tabel8e1->jumlah_lulusan_lokal ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Lulusan Sedang</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_lulusan_nasional" id="jumlah_lulusan_nasional" class="form-control" value="<?= $tabel8e1->jumlah_lulusan_nasional ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Jumlah Lulusan Tinggi</label>
										<div class="col-md-10">
											<input type="text" name="jumlah_lulusan_internasional" id="jumlah_lulusan_internasional" class="form-control" value="<?= $tabel8e1->jumlah_lulusan_internasional ?>" >
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
				<div class="modal fade" id="import-tabel8e1" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Import Tabel8e1</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel8e1/import'); ?>" enctype="multipart/form-data" class="form-horizontal">
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
						swal("Deleted!", "Tabel8e1 sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "Tabel8e1 tidak terhapus :)", "error");
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


