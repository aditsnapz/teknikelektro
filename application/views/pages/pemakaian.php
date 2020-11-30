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
				<h3 class="box-title"><b>Data Pemakaian </b></h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
						data-target="#tambah-pemakaian"><i class="fa fa-plus"></i>Tambah</button>


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
									<th width="5%">ID atk</th>
									<th width="15%">Nama Pengambilan</th>
									<th width="20%">jumlah pemakaian</th>
									<th width="15%">tanggal ambil</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
                                $no=1;
                                foreach ($pemakaians as $pemakaian) {
                                ?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $pemakaian->id_atk; ?></td>
									<td><?php echo $pemakaian->nama_pengambil; ?></td>
									<td><?php echo $pemakaian->jumlah_pemakaian; ?></td>
									<td><?php echo $pemakaian->tanggal; ?></td>
								
									<td>
										<!-- <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
											data-target="#edit-pemakaian<?php echo $pemakaian->id;?>"><i
												class="fa fa-edit"></i>&nbspUpdate</button> -->
										<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Pemakaian/delete/'.$pemakaian->id);?>"><i
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
		<div class="modal fade" id="tambah-pemakaian">
			<div class="modal-dialog">
				<div class="modal-content">
						<div class="modal-header">
                            
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
                            </button>
							<h4 class="modal-title"><strong>Tambah Pemakaian</strong></h4>
						</div>
                        <br>
                        <form method="POST" action="<?php echo base_url('Pemakaian/add'); ?>" enctype="multipart/form-data" class="form-horizontal">
						<div class="modal-body">
                            <div class="form-group row">
                                <label for="nama" class="col-md-2 col-form-label">id Atk</label>
                                <div class="col-md-10">
                                    <input type="text" name="id_atk" id="id_atk" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-md-2 col-form-label">nama pengambil</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama_pengambil" id="nama_pengambil" class="form-control" >
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="alamat" class="col-md-2 col-form-label">jumlah pemakaian</label>
                                <div class="col-md-10">
                                    <input type="text" name="jumlah_pemakaian" id="jumlah_pemakaian" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="latitude" class="col-md-2 col-form-label">Tanggal Ambil</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal" id="tanggal" class="form-control" >
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
        foreach ($pemakaians as  $pemakaian) {
    ?>
		<div class="modal fade" id="edit-pemakaian<?php echo $pemakaian->id;?>">
			<div class="modal-dialog">
				<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Edit Pemakaian</h4>
						</div>
						<form method="POST" action="<?php echo base_url('Pemakaian/edit'); ?>" enctype="multipart/form-data" class="form-horizontal">
						<div class="modal-body">
                            <div class="form-group row">
                                <input type="hidden" name="id" id="id" class="form-control" value="<?= $pemakaian->id ?>" >
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-md-2 col-form-label">Id Atk</label>
                                <div class="col-md-10">
                                    <input type="text" name="id_atk" id="id_atk" class="form-control" value="<?= $pemakaian->id_atk ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-md-2 col-form-label">nama</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama_pengambil" id="nama_pengambil" class="form-control" value="<?= $pemakaian->nama_pengambil ?>" >
                                </div>
                            </div>
							<div class="form-group row">
                                <label for="alamat" class="col-md-2 col-form-label">jumlah pemakaian</label>
                                <div class="col-md-10">
                                    <input type="text" name="jumlah_pemakaian" id="jumlah_pemakaian" class="form-control" value="<?= $pemakaian->jumlah_pemakaian ?>" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="latitude" class="col-md-2 col-form-label">Tanggal</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?= $pemakaian->tanggal ?>">
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
						swal("Deleted!", "Pemakaian sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "Pemakaian tidak terhapus :)", "error");
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
