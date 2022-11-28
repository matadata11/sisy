<div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-title">Menu</li>

              <li class="sidebar-item active">
                <a href="<?= site_url('dashboard');?>" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Dashboard</span>
                </a>
                <small style="position:relative;left:3rem;">Update Terbaru <button class="btn btn-danger btn-sm mt-1" style="border-radius:50%;height:30px;">0</button></small>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-pencil"></i>
                  <span>Inputan</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="<?=site_url('form-inputan');?>">Form Siswa</a>
                  </li>
                  
                  <?php if ($this->session->userdata('level') == 'Super' OR $this->session->userdata('level') == 'Admin' ) { ?>
                  <li class="submenu-item">
                    <a href="<?=site_url('verval-inputan');?>">Verval Siswa</a>
                  </li>
                  <?php } ?>
                </ul>
              </li>

              
              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-grid-1x2-fill"></i>
                  <span>Laporan</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="<?=site_url('laporan');?>">Lihat Laporan</a>
                  </li>
                </ul>
              </li>
              

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-gear"></i>
                  <span>Pengaturan</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="<?=site_url('provinsi');?>">Master Provinsi</a>
                  </li>
                  <li class="submenu-item">
                    <a href="<?=site_url('kabupaten');?>">Master Kabupaten</a>
                  </li>
                  <li class="submenu-item">
                    <a href="<?=site_url('pengguna');?>">Master User</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item">
                <a href="form-layout.html" class="sidebar-link">
                  <i class="bi bi-flag"></i>
                  <span>Document</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a href="form-layout.html" class="sidebar-link">
                  <i class="bi bi-clipboard"></i>
                  <span>Changelog</span>
                </a>
              </li>
            </ul>
          </div>