<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?php // echo $judul; ?>
			<small><?php // echo $view; ?></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#"><?php // echo $menu; ?></a></li>
			<li class="active"><?php // echo $submenu; ?></li>
		</ol>
	</section>
	<br>
	<div class="container-fluid">
		<div class="box box-default ">
			<div class="box-header with-border">
				<h3 class="box-title"><b>Data Kegiatan </b></h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
						data-target="#tambah-kegiatan"><i class="fa fa-plus"></i>Tambah</button>


				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">

					<div class="tengah">
						<table id="dataku" class="table table-bordered table-hover">
							<thead class="atas">
								<tr>
									<th width="5%">ID</th>
									<th width="15%">Nama</th>
									<th width="20%">Tanggal</th>
									<th width="15%">Deskripsi</th>
									<th width="15%">Tipe</th>
									<th width="30%">Foto</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
                                $no=1;
                                foreach ($kegiatans as $kegiatan) {
                                ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $kegiatan->nama; ?></td>
									<td><?php echo $kegiatan->tanggal; ?></td>
									<td><?php echo $kegiatan->deskripsi; ?></td>
									<td><?php echo $kegiatan->tipe; ?></td>
									<td><img src="<?= base_url('assets/images/').$kegiatan->foto; ?>" width="250px"></td>
									<td>
										<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
											data-target="#edit-kegiatan<?php echo $kegiatan->id;?>"><i
												class="fa fa-edit"></i>&nbspUpdate</button>
										<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Kegiatan/delete/'.$kegiatan->id);?>"><i
												class="fa fa-remove "></i>&nbsp&nbspDelete</a>

									</td>
								</tr>
								<?php $no++; } ?>

							</tbody>


						</table>
					</div>

				</div>
				<!-- /.row -->
			</div>
		</div>
		<div class="modal fade" id="tambah-kegiatan">
			<div class="modal-dialog">
				<div class="modal-content">
						<div class="modal-header">
                            
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
                            </button>
							<h4 class="modal-title"><strong>Tambah Kegiatan</strong></h4>
						</div>
                        <br>
                        <form method="POST" action="<?php echo base_url('Kegiatan/add'); ?>" enctype="multipart/form-data" class="form-horizontal">
						<div class="modal-body">
							<div class="form-group row">
                                <label for="foto" class="col-md-2 col-form-label">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama" id="nama" class="form-control" >
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="foto" class="col-md-2 col-form-label">Tanggal</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal" id="tanggal" class="form-control" >
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="foto" class="col-md-2 col-form-label">Deskrkipsi</label>
                                <div class="col-md-10">
                                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" >
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="foto" class="col-md-2 col-form-label">Tipe</label>
                                <div class="col-md-10">
									<select class="form-control" id="tipe" name="tipe">
                                        <option value="Indoor">Indoor</option>
                                        <option value="Outdoor">Outdoor</option>
                                        <option value="Custom">Custom</option>
                                    </select>
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="foto" class="col-md-2 col-form-label">Foto</label>
                                <div class="col-md-10">
                                    <input type="file" name="foto[]" id="foto" class="form-control" >
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="foto" class="col-md-2 col-form-label">Foto</label>
                                <div class="col-md-10">
                                    <input type="file" name="foto[]" id="foto" class="form-control" >
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="foto" class="col-md-2 col-form-label">Foto</label>
                                <div class="col-md-10">
                                    <input type="file" name="foto[]" id="foto" class="form-control" >
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
        foreach ($kegiatans as  $kegiatan) {
    ?>
		<div class="modal fade" id="edit-kegiatan<?php echo $kegiatan->id;?>">
			<div class="modal-dialog">
				<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Edit Kegiatan</h4>
						</div>
						<form method="POST" action="<?php echo base_url('Kegiatan/edit'); ?>" enctype="multipart/form-data" class="form-horizontal">
						<div class="modal-body">
                            <div class="form-group row">
                                <input type="hidden" name="id" id="id" class="form-control" value="<?= $kegiatan->id ?>" >
                            </div>
							<div class="form-group row">
                                <label for="nilai" class="col-md-2 col-form-label">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $kegiatan->nama ?>">
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="nilai" class="col-md-2 col-form-label">Tanggal</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $kegiatan->tanggal ?>">
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="nilai" class="col-md-2 col-form-label">Deskripsi</label>
                                <div class="col-md-10">
                                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?= $kegiatan->deskripsi ?>">
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="nilai" class="col-md-2 col-form-label">Tipe</label>
                                <div class="col-md-10">
									<select class="form-control" id="tipe" name="tipe">
                                        <option value="Indoor">Indoor</option>
                                        <option value="Outdoor">Outdoor</option>
                                        <option value="Custom">Custom</option>
                                    </select>
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="foto" class="col-md-2 col-form-label">Foto</label>
                                <div class="col-md-10">
                                    <input type="file" name="foto" id="foto" class="form-control" >
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
	</div>
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
						swal("Deleted!", "Kegiatan sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "Kegiatan tidak terhapus :)", "error");
					}

				});
			return false;
		});
	});

</script>

<script>
	$(function () {
		$("#dataku").DataTable({
			"paging": true,
			"ordering": true,

		});
	});

</script>
