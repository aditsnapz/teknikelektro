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
									data-target="#import-tabel8f3"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-tabel8f3"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
							
							<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="15%">Nama Mahasiswa</th>
										<th width="15%">Nama Produk</th>
										<th width="15%">Deskripsi Produk</th>
										<th width="15%">Bukti</th>
										<th width="5%">tahun</th>
										<th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($tabel8f3s as $tabel8f3) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $tabel8f3->nama_mahasiswa; ?></td>
										<td><?php echo $tabel8f3->nama_produk; ?></td>
										<td><?php echo $tabel8f3->deskripsi_produk; ?></td>
										<td><?php echo $tabel8f3->bukti; ?></td>
										<td><?php echo $tabel8f3->tahun; ?></td>
										<td>
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
												data-target="#edit-tabel8f3<?php echo $tabel8f3->id;?>"><i
													class="fa fa-edit"></i>&nbsp&nbspUpdate</button>
											<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Tabel8f3/delete/'.$tabel8f3->id);?>"><i
													class="fa fa-trash "></i>&nbsp&nbspDelete</a>

										</td>
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>
								
						</div>
					</div>
				</div>
				<div class="modal fade" id="tambah-tabel8f3" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Tambah Tabel8f3</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel8f3/add'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Nama Mahasiswa</label>
										<div class="col-md-10">
											<input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Nama Produk</label>
										<div class="col-md-10">
											<input type="text" name="nama_produk" id="nama_produk" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Deskripsi Produk</label>
										<div class="col-md-10">
											<input type="text" name="deskripsi_produk" id="deskripsi_produk" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Bukti</label>
										<div class="col-md-10">
											<input type="text" name="bukti" id="bukti" class="form-control" >
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
				foreach ($tabel8f3s as  $tabel8f3) {
				?>
				<div class="modal fade" id="edit-tabel8f3<?php echo $tabel8f3->id;?>">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Edit Tabel8f3</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span></button>
									
								</div>
								<form method="POST" action="<?php echo base_url('Tabel8f3/edit'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<input type="hidden" name="id" id="id" class="form-control" value="<?= $tabel8f3->id ?>" >
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Nama Mahasiswa</label>
										<div class="col-md-10">
											<input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" value="<?= $tabel8f3->nama_mahasiswa ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Nama Produk</label>
										<div class="col-md-10">
											<input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?= $tabel8f3->nama_produk ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Deskripsi Produk</label>
										<div class="col-md-10">
											<input type="text" name="deskripsi_produk" id="deskripsi_produk" class="form-control" value="<?= $tabel8f3->deskripsi_produk ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Bukti</label>
										<div class="col-md-10">
											<input type="text" name="bukti" id="bukti" class="form-control" value="<?= $tabel8f3->bukti ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Tahun</label>
										<div class="col-md-10">
											<input type="text" name="tahun" id="tahun" class="form-control" value="<?= $tabel8f3->tahun ?>" >
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
				<div class="modal fade" id="import-tabel8f3" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Import Tabel8f3</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel8f3/import'); ?>" enctype="multipart/form-data" class="form-horizontal">
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
						swal("Deleted!", "Tabel8f3 sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "Tabel8f3 tidak terhapus :)", "error");
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


