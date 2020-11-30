<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Akreditasi Program Studi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Akreditasi Program Studi</a></li>
              <li class="breadcrumb-item active">Tabel1b</li>
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
							<h3 class="card-title"><b>Data Tabel1b </b></h3>
							<div class="text-right">
								<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
									data-target="#import-tabel1b"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<!-- <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-tabel1b"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button> -->
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
							
							<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="10%">Peringkat</th>
										<th width="5%">S3</th>
										<th width="5%">S2</th>
										<th width="5%">S1</th>
										<th width="5%">SP2</th>
										<th width="5%">SP1</th>
										<th width="5%">Profesi</th>
										<th width="5%">S3T</th>
										<th width="5%">S2T</th>
										<th width="5%">D4</th>
										<th width="5%">D3</th>
										<th width="5%">D2</th>
										<th width="5%">D1</th>
										<th width="5%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($tabel1bs as $tabel1b) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $tabel1b->peringkat_akreditasi; ?></td>
										<td><?php echo $tabel1b->s3; ?></td>
										<td><?php echo $tabel1b->s2; ?></td>
										<td><?php echo $tabel1b->s1; ?></td>
										<td><?php echo $tabel1b->sp2; ?></td>
										<td><?php echo $tabel1b->sp1; ?></td>
										<td><?php echo $tabel1b->profesi; ?></td>
										<td><?php echo $tabel1b->s3t; ?></td>
										<td><?php echo $tabel1b->s2t; ?></td>
										<td><?php echo $tabel1b->d4; ?></td>
										<td><?php echo $tabel1b->d3; ?></td>
										<td><?php echo $tabel1b->d2; ?></td>
										<td><?php echo $tabel1b->d1; ?></td>
										<td>
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
												data-target="#edit-tabel1b<?php echo $tabel1b->id;?>"><i
													class="fa fa-edit"></i>&nbsp&nbspUpdate</button>
											<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Tabel1b/delete/'.$tabel1b->id);?>"><i
													class="fa fa-trash "></i>&nbsp&nbspDelete</a>

										</td>
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>
								
						</div>
					</div>
				</div>
				<div class="modal fade" id="tambah-tabel1b" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Tambah Tabel1b</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel1b/add'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Peringkat Akreditasi</label>
										<div class="col-md-10">
											<input type="text" name="lembaga_audit" id="lembaga_audit" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Tahun Perolehan</label>
										<div class="col-md-10">
											<input type="text" name="tahun_perolehan" id="tahun_perolehan" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Opini</label>
										<div class="col-md-10">
											<input type="text" name="opini" id="opini" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Keterangan</label>
										<div class="col-md-10">
											<input type="text" name="keterangan" id="keterangan" class="form-control" >
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
				foreach ($tabel1bs as  $tabel1b) {
				?>
				<div class="modal fade" id="edit-tabel1b<?php echo $tabel1b->id;?>">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Edit Tabel1b</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span></button>
									
								</div>
								<form method="POST" action="<?php echo base_url('Tabel1b/edit'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<input type="hidden" name="id" id="id" class="form-control" value="<?= $tabel1b->id ?>" >
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Peringkat Akreditasi</label>
										<div class="col-md-10">
											<input type="text" name="peringkat_akreditasi" id="peringkat_akreditasi" class="form-control" value="<?= $tabel1b->peringkat_akreditasi ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">S3</label>
										<div class="col-md-10">
											<input type="text" name="s3" id="s3" class="form-control" value="<?= $tabel1b->s3 ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">S2</label>
										<div class="col-md-10">
											<input type="text" name="s2" id="s2" class="form-control" value="<?= $tabel1b->s2 ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">S1</label>
										<div class="col-md-10">
											<input type="text" name="s1" id="s1" class="form-control" value="<?= $tabel1b->s1 ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">SP2</label>
										<div class="col-md-10">
											<input type="text" name="sp2" id="sp2" class="form-control" value="<?= $tabel1b->sp2 ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">SP1</label>
										<div class="col-md-10">
											<input type="text" name="sp1" id="sp1" class="form-control" value="<?= $tabel1b->sp1 ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Profesi</label>
										<div class="col-md-10">
											<input type="text" name="profesi" id="profesi" class="form-control" value="<?= $tabel1b->profesi ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">S3T</label>
										<div class="col-md-10">
											<input type="text" name="s3t" id="s3t" class="form-control" value="<?= $tabel1b->s3t ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">S2T</label>
										<div class="col-md-10">
											<input type="text" name="s2t" id="s2t" class="form-control" value="<?= $tabel1b->s2t ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">D4</label>
										<div class="col-md-10">
											<input type="text" name="d4" id="d4" class="form-control" value="<?= $tabel1b->d4 ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">D3</label>
										<div class="col-md-10">
											<input type="text" name="d3" id="d3" class="form-control" value="<?= $tabel1b->d3 ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">D2</label>
										<div class="col-md-10">
											<input type="text" name="d2" id="d2" class="form-control" value="<?= $tabel1b->d2 ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">D1</label>
										<div class="col-md-10">
											<input type="text" name="d1" id="d1" class="form-control" value="<?= $tabel1b->d1 ?>" >
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
				<div class="modal fade" id="import-tabel1b" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Import Tabel1b</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel1b/import'); ?>" enctype="multipart/form-data" class="form-horizontal">
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
						swal("Deleted!", "Tabel1b sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "Tabel1b tidak terhapus :)", "error");
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


