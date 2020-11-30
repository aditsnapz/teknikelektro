<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Seleksi Mahasiswa Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Seleksi Mahasiswa Baru</a></li>
              <li class="breadcrumb-item active">Tabel2a</li>
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
							<h3 class="card-title"><b>Data Tabel2a </b></h3>
							<div class="text-right">
								<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#import-tabel2a"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<!-- <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-tabel2a"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button> -->
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
							
							<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="15%">Program</th>
										<th width="5%">Tahun Akademik</th>
										<th width="5%">Daya Tampung</th>
										<th width="5%">Cama Pendaftar</th>
										<th width="10%">Cama Lulus</th>
										<th width="10%">Maba Reguler</th>
										<th width="10%">Maba Transfer</th>
										<th width="10%">Mhs Reguler</th>
										<th width="10%">Mhs Transfer</th>
										<th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($tabel2as as $tabel2a) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $tabel2a->program; ?></td>
										<td><?php echo $tabel2a->tahun_akademik; ?></td>
										<td><?php echo $tabel2a->daya_tampung; ?></td>
										<td><?php echo $tabel2a->cama_pendaftar; ?></td>
										<td><?php echo $tabel2a->cama_lulus; ?></td>
										<td><?php echo $tabel2a->maba_reguler; ?></td>
										<td><?php echo $tabel2a->maba_transfer; ?></td>
										<td><?php echo $tabel2a->mahasiswa_reguler; ?></td>
										<td><?php echo $tabel2a->mahasiswa_transfer; ?></td>
										<td>
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
												data-target="#edit-tabel2a<?php echo $tabel2a->id;?>"><i
													class="fa fa-edit"></i>&nbsp&nbspUpdate</button>
											<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Tabel2a/delete/'.$tabel2a->id);?>"><i
													class="fa fa-trash "></i>&nbsp&nbspDelete</a>

										</td>
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>
								
						</div>
					</div>
				</div>
				<div class="modal fade" id="tambah-tabel2a" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Tambah Tabel2a</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel2a/add'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Program</label>
										<div class="col-md-10">
											<input type="text" name="program" id="program" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Tahun Akademik</label>
										<div class="col-md-10">
											<input type="text" name="tahun_akademik" id="tahun_akademik" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Nasional</label>
										<div class="col-md-10">
											<input type="text" name="nasional" id="nasional" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Lokal</label>
										<div class="col-md-10">
											<input type="text" name="lokal" id="lokal" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Manfaat</label>
										<div class="col-md-10">
											<input type="text" name="manfaat" id="manfaat" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Bukti</label>
										<div class="col-md-10">
											<input type="text" name="bukti" id="bukti" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Masa Berlaku</label>
										<div class="col-md-10">
											<input type="text" name="masa_berlaku" id="masa_berlaku" class="form-control" >
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
				foreach ($tabel2as as  $tabel2a) {
				?>
				<div class="modal fade" id="edit-tabel2a<?php echo $tabel2a->id;?>">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Edit Tabel2a</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span></button>
									
								</div>
								<form method="POST" action="<?php echo base_url('Tabel2a/edit'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<input type="hidden" name="id" id="id" class="form-control" value="<?= $tabel2a->id ?>" >
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Program</label>
										<div class="col-md-10">
											<input type="text" name="program" id="program" class="form-control" value="<?= $tabel2a->program ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Tahun Akademik</label>
										<div class="col-md-10">
											<input type="text" name="tahun_akademik" id="tahun_akademik" class="form-control" value="<?= $tabel2a->tahun_akademik ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Daya Tampung</label>
										<div class="col-md-10">
											<input type="text" name="daya_tampung" id="daya_tampung" class="form-control" value="<?= $tabel2a->daya_tampung ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Cama Pendaftar</label>
										<div class="col-md-10">
											<input type="text" name="cama_pendaftar" id="cama_pendaftar" class="form-control" value="<?= $tabel2a->cama_pendaftar ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Cama Lulus</label>
										<div class="col-md-10">
											<input type="text" name="cama_lulus" id="cama_lulus" class="form-control" value="<?= $tabel2a->cama_lulus ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Maba Reguler</label>
										<div class="col-md-10">
											<input type="text" name="maba_reguler" id="maba_reguler" class="form-control" value="<?= $tabel2a->maba_reguler ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Maba Transfer</label>
										<div class="col-md-10">
											<input type="text" name="maba_transfer" id="maba_transfer" class="form-control" value="<?= $tabel2a->maba_transfer ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs Reguler</label>
										<div class="col-md-10">
											<input type="text" name="mahasiswa_reguler" id="mahasiswa_reguler" class="form-control" value="<?= $tabel2a->mahasiswa_reguler ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs Transfer</label>
										<div class="col-md-10">
											<input type="text" name="mahasiswa_transfer" id="mahasiswa_transfer" class="form-control" value="<?= $tabel2a->mahasiswa_transfer ?>" >
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
				<div class="modal fade" id="import-tabel2a" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Import Tabel2a</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel2a/import'); ?>" enctype="multipart/form-data" class="form-horizontal">
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
						swal("Deleted!", "Tabel2a sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "Tabel2a tidak terhapus :)", "error");
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


