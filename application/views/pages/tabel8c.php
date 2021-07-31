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
									data-target="#import-tabel8c"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<!-- <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-tabel8c"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button> -->
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
							
							<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="15%">Tahun Masuk</th>
										<th width="5%">Jumlah Diterima</th>
										<th width="5%">TS6</th>
										<th width="5%">TS5</th>
										<th width="5%">TS4</th>
										<th width="5%">TS3</th>
										<th width="5%">TS2</th>
										<th width="5%">TS1</th>
										<th width="5%">Jumlah</th>
										<th width="5%">Rata rata Masa Studi</th>
										<th width="5%">Tipe</th>
										
										<th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($tabel8cs as $tabel8c) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $tabel8c->tahun_masuk; ?></td>
										<td><?php echo $tabel8c->jumlah_mahasiswa_diterima; ?></td>
										<td><?php echo $tabel8c->ts6; ?></td>
										<td><?php echo $tabel8c->ts5; ?></td>
										<td><?php echo $tabel8c->ts4; ?></td>
										<td><?php echo $tabel8c->ts3; ?></td>
										<td><?php echo $tabel8c->ts2; ?></td>
										<td><?php echo $tabel8c->ts1; ?></td>
										<td><?php echo $tabel8c->jumlah; ?></td>
										<td><?php echo $tabel8c->rata2_masa_studi; ?></td>
										<td><?php echo $tabel8c->tipe; ?></td>
										<td>
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
												data-target="#edit-tabel8c<?php echo $tabel8c->id;?>"><i
													class="fa fa-edit"></i>&nbsp&nbspUpdate</button>
											<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Tabel8c/delete/'.$tabel8c->id);?>"><i
													class="fa fa-trash "></i>&nbsp&nbspDelete</a>

										</td>
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>
								
						</div>
					</div>
				</div>
			
				<div class="modal fade" id="import-tabel8c" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Import Tabel8c</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel8c/import'); ?>" enctype="multipart/form-data" class="form-horizontal">
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
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title"><b>Data Tabel8c </b></h3>
							<div class="text-right">
								<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#import-tabel8c"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<!-- <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-tabel8c"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button> -->
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
							
						<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="15%">Tahun Masuk</th>
										<th width="5%">Jumlah Diterima</th>
										<th width="5%">TS6</th>
										<th width="5%">TS5</th>
										<th width="5%">TS4</th>
										<th width="5%">TS3</th>
										<th width="5%">TS2</th>
										<th width="5%">TS1</th>
										<th width="5%">Jumlah</th>
										<th width="5%">Rata rata Masa Studi</th>
										<th width="5%">Tipe</th>
										
										<th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($tabel8cs as $tabel8c) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $tabel8c->tahun_masuk; ?></td>
										<td><?php echo $tabel8c->jumlah_mahasiswa_diterima; ?></td>
										<td><?php echo $tabel8c->ts6; ?></td>
										<td><?php echo $tabel8c->ts5; ?></td>
										<td><?php echo $tabel8c->ts4; ?></td>
										<td><?php echo $tabel8c->ts3; ?></td>
										<td><?php echo $tabel8c->ts2; ?></td>
										<td><?php echo $tabel8c->ts1; ?></td>
										<td><?php echo $tabel8c->jumlah; ?></td>
										<td><?php echo $tabel8c->rata2_masa_studi; ?></td>
										<td><?php echo $tabel8c->tipe; ?></td>
										<td>
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
												data-target="#edit-tabel8c<?php echo $tabel8c->id;?>"><i
													class="fa fa-edit"></i>&nbsp&nbspUpdate</button>
											<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Tabel8c/delete/'.$tabel8c->id);?>"><i
													class="fa fa-trash "></i>&nbsp&nbspDelete</a>

										</td>
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>
								
						</div>
					</div>
				</div>
			
				<div class="modal fade" id="import-tabel8c" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Import Tabel8c</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel8c/import'); ?>" enctype="multipart/form-data" class="form-horizontal">
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
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title"><b>Data Tabel8c </b></h3>
							<div class="text-right">
								<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#import-tabel8c"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<!-- <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-tabel8c"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button> -->
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
							
						<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="15%">Tahun Masuk</th>
										<th width="5%">Jumlah Diterima</th>
										<th width="5%">TS6</th>
										<th width="5%">TS5</th>
										<th width="5%">TS4</th>
										<th width="5%">TS3</th>
										<th width="5%">TS2</th>
										<th width="5%">TS1</th>
										<th width="5%">Jumlah</th>
										<th width="5%">Rata rata Masa Studi</th>
										<th width="5%">Tipe</th>
										
										<th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($tabel8cs as $tabel8c) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $tabel8c->tahun_masuk; ?></td>
										<td><?php echo $tabel8c->jumlah_mahasiswa_diterima; ?></td>
										<td><?php echo $tabel8c->ts6; ?></td>
										<td><?php echo $tabel8c->ts5; ?></td>
										<td><?php echo $tabel8c->ts4; ?></td>
										<td><?php echo $tabel8c->ts3; ?></td>
										<td><?php echo $tabel8c->ts2; ?></td>
										<td><?php echo $tabel8c->ts1; ?></td>
										<td><?php echo $tabel8c->jumlah; ?></td>
										<td><?php echo $tabel8c->rata2_masa_studi; ?></td>
										<td><?php echo $tabel8c->tipe; ?></td>
										<td>
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
												data-target="#edit-tabel8c<?php echo $tabel8c->id;?>"><i
													class="fa fa-edit"></i>&nbsp&nbspUpdate</button>
											<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Tabel8c/delete/'.$tabel8c->id);?>"><i
													class="fa fa-trash "></i>&nbsp&nbspDelete</a>

										</td>
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>
								
						</div>
					</div>
				</div>
			
				<div class="modal fade" id="import-tabel8c" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Import Tabel8c</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel8c/import'); ?>" enctype="multipart/form-data" class="form-horizontal">
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
						swal("Deleted!", "Tabel8c sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "Tabel8c tidak terhapus :)", "error");
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


