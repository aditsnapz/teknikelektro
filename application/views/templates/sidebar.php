<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-navy elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link navbar-navy">
      <img src="<?= base_url() ?>assets/dist/img/Undip_favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>BIDATIK</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/images/<?= $this->session->userdata('foto') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('nama') ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('Dashboard') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
		  <li class="nav-header">Kerjasama Tridharma</li>
          
          <li class="nav-item has-treeview">
            <a href="<?= base_url('Tabel11') ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
			  			Tabel 1.1 Pendidikan
                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('Tabel12') ?>" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
							Tabel 1.2	Penelitian
                
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('Tabel13') ?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
							Tabel 1.3 Pengabdian Masyarakat
                
              </p>
            </a>
          </li>
         
          <li class="nav-header">Mahasiswa</li>
          <li class="nav-item">
            <a href="<?= base_url('Tabel2a') ?>" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
							Tabel 2a Seleksi Mahasiswa Baru
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Tabel2b') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 2b Mahasiswa Asing
              </p>
            </a>
          </li>
		  <li class="nav-header">Dosen</li>
          <li class="nav-item">
            <a href="<?= base_url('Tabel3a1') ?>" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
							Tabel 3a1 Dosen Tetap
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Tabel3a2') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3a2 Dosen Pembimbing Utama TA
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="<?= base_url('Tabel3a3') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3a3 EMWP Dosen Tetap Perguruan Tinggi
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="<?= base_url('Tabel3a4') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3a4 Dosen Tidak Tetap
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="<?= base_url('Tabel3a5') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3a5 Dosen Industri / Praktisi
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="<?= base_url('Tabel3b1') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3b1 Pengakuan / Rekognisi Dosen
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="<?= base_url('Tabel3b2') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3b2 Penelitian DTPS
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="<?= base_url('Tabel3b3') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3b3 PKM DTPS
              </p>
            </a>
          </li>
			<li class="nav-item">
            <a href="<?= base_url('Tabel3b41') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3b41 Publikasi Ilmiah DTPS
              </p>
            </a>
          </li>
			<li class="nav-item">
            <a href="<?= base_url('Tabel3b42') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3b42 Pagelaran / Pameran Ilmiah DTPS
              </p>
            </a>
          </li>
			<li class="nav-item">
            <a href="<?= base_url('Tabel3b5') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3b5 Karya Ilmiah DTPS Disitasi
              </p>
            </a>
          </li>
			<li class="nav-item">
            <a href="<?= base_url('Tabel3b6') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3b6 Produk DTPS Diadopsi
              </p>
            </a>
          </li>	
			<li class="nav-item">
            <a href="<?= base_url('Tabel3b71') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3b71 Luaran HKI Paten
              </p>
            </a>
          </li>	
			<li class="nav-item">
            <a href="<?= base_url('Tabel3b72') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3b72 Luaran HKI Hak Cipta
              </p>
            </a>
          </li>	
				<li class="nav-item">
            <a href="<?= base_url('Tabel3b73') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3b73 Luaran TTG Produk Karya Seni
              </p>
            </a>
          </li>
				<li class="nav-item">
            <a href="<?= base_url('Tabel3b74') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 3b74 Luaran Buku
              </p>
            </a>
          </li>		
		  <li class="nav-header">Dana</li>
          <li class="nav-item">
            <a href="<?= base_url('Tabel4') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 4 Pengunaan Dana
              </p>
            </a>
          </li>
			<li class="nav-header">Pembelajaran</li>
          <li class="nav-item">
            <a href="<?= base_url('Tabel5a') ?>" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
							Tabel 5a  Kurikulum Capaian Pembelajaran
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Tabel5b') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 5b Integrasi Penelitian/PKM
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel5c') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
							Tabel 5c Kepuasan Mahasiswa
              </p>
            </a>
          </li>
				
				<li class="nav-header">Mahasiswa</li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel6a') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 6a Penelitian DTPS
                
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel6b') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 6b Penelitian DTPS sebagai Rujukan
               
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel7') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 7 PKM DTPS
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8a') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8a IPK Lulusan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Tabel8b1') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8b1 Prestasi Akademik
                
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8b2') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8b2 Prestasi Non Akademik
                
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8c') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8c Masa Studi Lulusan
                
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8d1') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8d1 Waktu Tunggu Lulusan
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8d2') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8d2 Kesesuaian Bidang Kerja
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8e1') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8e1 Tempat Kerja Lulusan
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8e2ref') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel Ref8e2 Referensi Kepuasan Pengguna Lulusan
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8e2') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8e2 Kepuasan Pengguna Lulusan
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8f11') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8f11 Publikasi Ilmiah
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8f12') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8f12 Pagelaran / Pameran Ilmiah
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8f2') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8f2 Karya Ilmiah Disitasi
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8f3') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8f3 Produk Diadopsi
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8f41') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8f41 Luaran HKI Paten
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8f42') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8f42 Luaran HKI Hak Cipta
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8f43') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8f43 Luaran TTG Produk Karya Seni
              </p>
            </a>
          </li>
					<li class="nav-item">
            <a href="<?= base_url('Tabel8f41') ?>" class="nav-link">
              <i class="nav-icon far fa-chart-bar"></i>
              <p>
							Tabel 8f44 Luaran HKI Paten
              </p>
            </a>
          </li>
					

				
				
					<li class="nav-header">Pengaturan</li>
					<li class="nav-item">
            <a href="<?= base_url('User') ?>" class="nav-link">
              <i class="nav-icon far fa-user text-info"></i>
              <p>
							Pengelolaan User Admin
              </p>
            </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
