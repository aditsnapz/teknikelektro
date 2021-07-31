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
									data-target="#import-tabel5a"><i class="fa fa-upload"></i>&nbsp&nbspImport</button>
								<button type="button" class="btn btn-sm btn-success" data-toggle="modal"
									data-target="#tambah-tabel5a"><i class="fa fa-plus"></i>&nbsp&nbspTambah</button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="card-body table-responsive">
							
							<table class="table table-striped table-bordered table-hover dataku">
								<thead class="atas">
									<tr>
										<th width="5%">ID</th>
										<th width="10%">Nama Dosen</th>
										<th width="10%">NIDN</th>
										<th width="10%">Pendidikan Magister</th>
										<th width="10%">Pendidikan Doktor</th>
										<th width="10%">Bidang</th>
										<th width="10%">Kesesuain Kompetensi</th>
										<th width="10%">Jabatan</th>
										<th width="10%">Sertifikat Pendidik</th>
										<th width="10%">Sertifikat Kompetensi</th>
										<th width="10%">Mata Kuliah</th>
										<th width="10%">Kesesuaian</th>
										<th width="10%">Mata Kuliah PS Lain</th>
										<th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($tabel5as as $tabel5a) {
									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $tabel5a->semester; ?></td>
										<td><?php echo $tabel5a->kode_mata_kuliah; ?></td>
										<td><?php echo $tabel5a->nama_mata_kuliah; ?></td>
										<td><?php echo $tabel5a->mata_kuliah_kompetensi; ?></td>
										<td><?php echo $tabel5a->sks_kuliah; ?></td>
										<td><?php echo $tabel5a->sks_seminar; ?></td>
										<td><?php echo $tabel5a->sks_praktik; ?></td>
										<td><?php echo $tabel5a->kredit_ke_jam; ?></td>
										<td><?php echo $tabel5a->sikap; ?></td>
										<td><?php echo $tabel5a->pengetahuan; ?></td>
										<td><?php echo $tabel5a->ketrampilan_umum; ?></td>
										<td><?php echo $tabel5a->ketrampilan_khusus; ?></td>
										<td><?php echo $tabel5a->dokumen_rencana_pembelajaran; ?></td>
										<td><?php echo $tabel5a->tim_penyelengara; ?></td>
										<td>
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
												data-target="#edit-tabel5a<?php echo $tabel5a->id;?>"><i
													class="fa fa-edit"></i>&nbsp&nbspUpdate</button>
											<a class="btn btn-danger btn-sm delete-link" href="<?= base_url('Tabel5a/delete/'.$tabel5a->id);?>"><i
													class="fa fa-trash "></i>&nbsp&nbspDelete</a>

										</td>
									</tr>
									<?php $no++; } ?>

								</tbody>


							</table>
								
						</div>
					</div>
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
						swal("Deleted!", "Tabel5a sudah dihapus.", "success");
						window.location.href = getLink
					} else {
						swal("Cancelled", "Tabel5a tidak terhapus :)", "error");
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


