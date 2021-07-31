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
									data-target="#import-tabel2b"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-tabel2b"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
							
							<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="10%">Prodi</th>
										<th width="10%">Mhs Aktif TS2</th>
										<th width="10%">Mhs Aktif TS1</th>
										<th width="10%">Mhs Aktif TS</th>
										<th width="10%">Mhs Asing FT TS2</th>
										<th width="10%">Mhs Asing FT TS1</th>
										<th width="10%">Mhs Asing FT TS</th>
										<th width="10%">Mhs Asing PT TS2</th>
										<th width="10%">Mhs Asing PT TS1</th>
										<th width="10%">Mhs Asing PT TS</th>
										<th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($tabel2bs as $tabel2b) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $tabel2b->prodi; ?></td>
										<td><?php echo $tabel2b->mhs_ts2; ?></td>
										<td><?php echo $tabel2b->mhs_ts1; ?></td>
										<td><?php echo $tabel2b->mhs_ts; ?></td>
										<td><?php echo $tabel2b->mhs_asing_ft_ts2; ?></td>
										<td><?php echo $tabel2b->mhs_asing_ft_ts1; ?></td>
										<td><?php echo $tabel2b->mhs_asing_ft_ts; ?></td>
										<td><?php echo $tabel2b->mhs_asing_pt_ts2; ?></td>
										<td><?php echo $tabel2b->mhs_asing_pt_ts1; ?></td>
										<td><?php echo $tabel2b->mhs_asing_pt_ts; ?></td>
										<td>
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
												data-target="#edit-tabel2b<?php echo $tabel2b->id;?>"><i
													class="fa fa-edit"></i>&nbsp&nbspUpdate</button>
											<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Tabel2b/delete/'.$tabel2b->id);?>"><i
													class="fa fa-trash "></i>&nbsp&nbspDelete</a>

										</td>
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>
								
						</div>
					</div>
				</div>
				<div class="modal fade" id="tambah-tabel2b" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Tambah Tabel2b</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel2b/add'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Fakultas</label>
										<div class="col-md-10">
											<input type="text" name="fakultas" id="fakultas" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs TS2</label>
										<div class="col-md-10">
											<input type="text" name="mhs_ts2" id="mhs_ts2" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs TS1</label>
										<div class="col-md-10">
											<input type="text" name="mhs_ts1" id="mhs_ts1" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs Ts</label>
										<div class="col-md-10">
											<input type="text" name="mhs_ts" id="mhs_ts" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs Asing FT TS2</label>
										<div class="col-md-10">
											<input type="text" name="mhs_asing_ft_ts2" id="mhs_asing_ft_ts2" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs Asing FT TS1</label>
										<div class="col-md-10">
											<input type="text" name="mhs_asing_ft_ts1" id="mhs_asing_ft_ts1" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs Asing FT Ts</label>
										<div class="col-md-10">
											<input type="text" name="mhs_asing_ft_ts" id="mhs_asing_ft_ts" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs Asing PT TS2</label>
										<div class="col-md-10">
											<input type="text" name="mhs_asing_pt_ts2" id="mhs_asing_pt_ts2" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs Asing PT TS1</label>
										<div class="col-md-10">
											<input type="text" name="mhs_asing_pt_ts1" id="mhs_asing_pt_ts1" class="form-control" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs Asing PT Ts</label>
										<div class="col-md-10">
											<input type="text" name="mhs_asing_pt_ts" id="mhs_asing_pt_ts" class="form-control" >
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
				foreach ($tabel2bs as  $tabel2b) {
				?>
				<div class="modal fade" id="edit-tabel2b<?php echo $tabel2b->id;?>">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Edit Tabel2b</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span></button>
									
								</div>
								<form method="POST" action="<?php echo base_url('Tabel2b/edit'); ?>" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<input type="hidden" name="id" id="id" class="form-control" value="<?= $tabel2b->id ?>" >
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Prodi</label>
										<div class="col-md-10">
											<input type="text" name="prodi" id="prodi" class="form-control" value="<?= $tabel2b->prodi ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs TS2</label>
										<div class="col-md-10">
											<input type="text" name="mhs_ts2" id="mhs_ts2" class="form-control" value="<?= $tabel2b->mhs_ts2 ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs TS1</label>
										<div class="col-md-10">
											<input type="text" name="mhs_ts1" id="mhs_ts1" class="form-control" value="<?= $tabel2b->mhs_ts1 ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs TS</label>
										<div class="col-md-10">
											<input type="text" name="mhs_ts" id="mhs_ts" class="form-control" value="<?= $tabel2b->mhs_ts ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs ASing FT TS2</label>
										<div class="col-md-10">
											<input type="text" name="mhs_asing_ft_ts2" id="mhs_asing_ft_ts2" class="form-control" value="<?= $tabel2b->mhs_asing_ft_ts2 ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs Asing FT TS1</label>
										<div class="col-md-10">
											<input type="text" name="mhs_asing_ft_ts1" id="mhs_asing_ft_ts1" class="form-control" value="<?= $tabel2b->mhs_asing_ft_ts1 ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs Asing FT TS</label>
										<div class="col-md-10">
											<input type="text" name="mhs_asing_ft_ts" id="mhs_asing_ft_ts" class="form-control" value="<?= $tabel2b->mhs_asing_ft_ts ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs ASing PT TS2</label>
										<div class="col-md-10">
											<input type="text" name="mhs_asing_pt_ts2" id="mhs_asing_pt_ts2" class="form-control" value="<?= $tabel2b->mhs_asing_pt_ts2 ?>" >
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs Asing PT TS1</label>
										<div class="col-md-10">
											<input type="text" name="mhs_asing_pt_ts1" id="mhs_asing_pt_ts1" class="form-control" value="<?= $tabel2b->mhs_asing_pt_ts1 ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="nama" class="col-md-2 col-form-label">Mhs Asing FT TS</label>
										<div class="col-md-10">
											<input type="text" name="mhs_asing_pt_ts" id="mhs_asing_pt_ts" class="form-control" value="<?= $tabel2b->mhs_asing_pt_ts ?>" >
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
				<div class="modal fade" id="import-tabel2b" >
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><strong>Import Tabel2b</strong></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									
								</div>
								<br>
								<form method="POST" action="<?php echo base_url('Tabel2b/import'); ?>" enctype="multipart/form-data" class="form-horizontal">
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
						swal("Deleted!", "Tabel2b sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "Tabel2b tidak terhapus :)", "error");
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


