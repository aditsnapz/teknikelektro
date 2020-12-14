<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-navy elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link navbar-navy">
      <img src="<?= base_url() ?>assets/dist/img/Undip_favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Teknik Elektro</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
		  <li class="nav-header">Perguruan Tinggi</li>
          
          <li class="nav-item has-treeview">
            <a href="<?= base_url('Tabel1a1') ?>" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
			  Sertifikasi/Akreditasi Eksternal
                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('Tabel1a2') ?>" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
			  	Akreditasi Internasional Program Studi
                
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('Tabel1a3') ?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
			  	Audit Keuangan Eksternal
                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?= base_url('Tabel1b') ?>" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
			  	Akreditasi Program Studi
                
              </p>
            </a>
          </li>
		  <li class="nav-item has-treeview">
            <a href="<?= base_url('Tabel1c') ?>" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
			  	Kerjasama Perguruan Tinggi
                
              </p>
            </a>
          </li>
          <li class="nav-header">Mahasiswa</li>
          <li class="nav-item">
            <a href="<?= base_url('Tabel2a') ?>" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
			  Seleksi Mahasiswa Baru
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Tabel2b') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
			  Mahasiswa Asing
              </p>
            </a>
          </li>
		  <li class="nav-header">Dosen</li>
          <li class="nav-item">
            <a href="<?= base_url('Tabel3a1') ?>" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
			  Kecukupan Dosen Perguruan Tinggi
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Tabel3a2') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
			  Jabatan Akademik Dosen Tetap
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="<?= base_url('Tabel3a3') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
			  Sertifikasi Dosen
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="<?= base_url('Tabel3a4') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
			  Dosen Tidak Tetap
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="<?= base_url('Tabel3b') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
			  Rasio Dosen terhadap Mahasiswa
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="<?= base_url('Tabel3c1') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
			  Produktivitas Penelitian Dosen
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="<?= base_url('Tabel3c2') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
			  Produktivitas PkM Dosen
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="<?= base_url('Tabel3d') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
			  Rekognisi Dosen
              </p>
            </a>
          </li>
		  <li class="nav-header">Dana</li>
          <li class="nav-item">
            <a href="<?= base_url('Tabel4a') ?>" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
			  Perolehan Dana
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Tabel4b') ?>" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
			  Pengunaan Dana
              </p>
            </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
