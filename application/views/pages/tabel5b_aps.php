<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Penelitian PKM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Penelitian PKM</a></li>
			  <li class="breadcrumb-item"><?= $fakultas ?></li>
			  <li class="breadcrumb-item"><?= $departemen ?></li>
			  <li class="breadcrumb-item active">Tabel5b_aps</li>
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
							<h3 class="card-title"><b>Data Tabel5b_aps </b></h3>
							<div class="text-right">
								<a href="<?= base_url('Tabel5b_aps/chart') ?>" type="button" class="btn btn-sm btn-primary" ><i class="fa fa-chart-bar"></i>&nbsp&nbspChart</a>
								<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#import-tabel5b_aps"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-tabel5b_aps"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
							
							<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="20%">Judul PKM</th>
										<th width="10%">Nama Dosen</th>
										<th width="10%">Mata Kuliah</th>
										<th width="10%">Bentuk Integrasi</th>
										<th width="10%">Tahun</th>
										<!-- <th width="10%">Action</th> -->
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($tabel5b_apss as $tabel5b_aps) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $tabel5b_aps->judul; ?></td>
										<td><?php echo $tabel5b_aps->nama_dosen ; ?></td>
										<td><?php echo $tabel5b_aps->mata_kuliah; ?></td>
										<td><?php echo $tabel5b_aps->bentuk_integrasi; ?></td>
										<td><?php echo $tabel5b_aps->tahun; ?></td>
										<!-- <td>
											 <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
												data-target="#edit-tabel5b_aps<?php echo $tabel5b_aps->id;?>"><i
													class="fa fa-edit"></i>&nbsp&nbspUpdate</button>
											<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Tabel5b_aps/delete/'.$tabel5b_aps->id);?>"><i
													class="fa fa-trash "></i>&nbsp&nbspDelete</a> 

										</td> -->
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>
								
						</div>
					</div>
				</div>
				<!-- <div class="modal fade" id="tambah-tabel5b_aps" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Tambah Tabel5b_aps</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel5b_aps/add'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Pendidikan</label>
										<div class="col-md-10">
											<input type="text" name="pendidikan" id="pendidikan" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Guru Besar</label>
										<div class="col-md-10">
											<input type="text" name="guru_besar" id="guru_besar" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Lektor Kepala</label>
										<div class="col-md-10">
											<input type="text" name="lektor_kepala" id="lektor_kepala" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Lektor</label>
										<div class="col-md-10">
											<input type="text" name="lektor" id="lektor" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Asisten Ahli</label>
										<div class="col-md-10">
											<input type="text" name="asisten_ahli" id="asisten_ahli" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Tenaga Pengajar</label>
										<div class="col-md-10">
											<input type="text" name="tenaga_pengajar" id="tenaga_pengajar" class="form-control" >
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
				foreach ($tabel5b_apss as  $tabel5b_aps) {
				?>
				<div class="modal fade" id="edit-tabel5b_aps<?php echo $tabel5b_aps->id;?>">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Edit Tabel5b_aps</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span></button>
									
								</div>
								<form method="POST" action="<?php echo base_url('Tabel5b_aps/edit'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<input type="hidden" name="id" id="id" class="form-control" value="<?= $tabel5b_aps->id ?>" >
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Pendidikan</label>
										<div class="col-md-10">
											<input type="text" name="pendidikan" id="pendidikan" class="form-control" value="<?= $tabel5b_aps->pendidikan ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Guru Besar</label>
										<div class="col-md-10">
											<input type="text" name="guru_besar" id="guru_besar" class="form-control" value="<?= $tabel5b_aps->guru_besar ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Lektor Kepala</label>
										<div class="col-md-10">
											<input type="text" name="lektor_kepala" id="lektor_kepala" class="form-control" value="<?= $tabel5b_aps->lektor_kepala ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Lektor</label>
										<div class="col-md-10">
											<input type="text" name="lektor" id="lektor" class="form-control" value="<?= $tabel5b_aps->lektor ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Asisten Ahli</label>
										<div class="col-md-10">
											<input type="text" name="asisten_ahli" id="asisten_ahli" class="form-control" value="<?= $tabel5b_aps->asisten_ahli ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Tenaga Pengajar</label>
										<div class="col-md-10">
											<input type="text" name="tenaga_pengajar" id="tenaga_pengajar" class="form-control" value="<?= $tabel5b_aps->tenaga_pengajar ?>" >
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
				<div class="modal fade" id="import-tabel5b_aps" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Import Tabel5b_aps</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel5b_aps/import'); ?>" enctype="multipart/form-data" class="form-horizontal">
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
						swal("Deleted!", "Tabel5b_aps sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "Tabel5b_aps tidak terhapus :)", "error");
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


