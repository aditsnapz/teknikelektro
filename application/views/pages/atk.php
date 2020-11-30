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
				<h3 class="box-title"><b>Data Atk </b></h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
						data-target="#tambah-atk"><i class="fa fa-plus"></i>Tambah</button>


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
									<th width="15%">Nama Atk</th>
									<th width="20%">Stock</th>
									<th width="15%">tanggal ambil</th>
									<th width="15%">Sisa</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
                                $no=1;
                                foreach ($atks as $atk) {
                                ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $atk->nama; ?></td>
									<td><?php echo $atk->stock; ?></td>
									
									<td><?php echo $atk->tanggal_ambil; ?></td>
									<td><?php echo $atk->sisa; ?></td>
									<td>
										<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
											data-target="#edit-atk<?php echo $atk->id;?>"><i
												class="fa fa-edit"></i>&nbspUpdate</button>
										<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Atk/delete/'.$atk->id);?>"><i
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
		<div class="modal fade" id="tambah-atk">
			<div class="modal-dialog">
				<div class="modal-content">
						<div class="modal-header">
                            
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
                            </button>
							<h4 class="modal-title"><strong>Tambah Atk</strong></h4>
						</div>
                        <br>
                        <form method="POST" action="<?php echo base_url('Atk/add'); ?>" enctype="multipart/form-data" class="form-horizontal">
						<div class="modal-body">
                            <div class="form-group row">
                                <label for="nama" class="col-md-2 col-form-label">Nama Atk</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama" id="nama" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-md-2 col-form-label">Stock</label>
                                <div class="col-md-10">
                                    <input type="text" name="stock" id="stock" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="latitude" class="col-md-2 col-form-label">Tanggal Ambil</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_ambil" id="tanggal_ambil" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="upload_by" class="col-md-2 col-form-label"> sisa</label>
                                <div class="col-md-10">
                                    <input type="text" name="sisa" id="sisa" class="form-control" >
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
        foreach ($atks as  $atk) {
    ?>
		<div class="modal fade" id="edit-atk<?php echo $atk->id;?>">
			<div class="modal-dialog">
				<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Edit Atk</h4>
						</div>
						<form method="POST" action="<?php echo base_url('Atk/edit'); ?>" enctype="multipart/form-data" class="form-horizontal">
						<div class="modal-body">
                            <div class="form-group row">
                                <input type="hidden" name="id" id="id" class="form-control" value="<?= $atk->id ?>" >
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-md-2 col-form-label">Nama Atk</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $atk->nama ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-md-2 col-form-label">stock</label>
                                <div class="col-md-10">
                                    <input type="text" name="stock" id="stock" class="form-control" value="<?= $atk->stock ?>" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="latitude" class="col-md-2 col-form-label">Tanggal Ambil</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_ambil" id="tanggal_ambil" class="form-control" value="<?= $atk->tanggal_ambil ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="longitude" class="col-md-2 col-form-label">Sisa</label>
                                <div class="col-md-10">
                                    <input type="text" name="sisa" id="sisa" class="form-control" value="<?= $atk->sisa ?>" >
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
						swal("Deleted!", "Atk sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "Atk tidak terhapus :)", "error");
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