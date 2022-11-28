<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// master Laporan
$route['laporan']                       = 'admin/Master_laporan';
$route['export_pdf']                    = 'report/Data_siswa/pdf';
$route['export_excel']                  = 'report/Data_siswa/export_excel';

// master inputan siswa
$route['form-inputan']                  = 'admin/Master_siswa';
$route['verval-inputan']                = 'admin/Master_siswa/verval_inbputan';
$route['add-inputan']                   = 'admin/Master_siswa/store';
$route['lock-inputan']                  = 'admin/Master_siswa/lock';
$route['locka-inputan']                 = 'admin/Master_siswa/locka';
$route['edit-inputan']                  = 'admin/Master_siswa/updated';
$route['import-inputan']                = 'admin/Master_siswa/import_excel';
$route['remove-inputan/(:num)']         = 'admin/Master_siswa/deleted';
$route['cari-siswa']                	= 'admin/Master_siswa/hasil';
$route['verifikasi']                	= 'admin/Master_siswa/verifikasi';

// master pengguna
$route['pengguna']                      = 'admin/Master_pengguna';
$route['add-pengguna']                  = 'admin/Master_pengguna/store';
$route['remove-pengguna/(:num)']        = 'admin/Master_pengguna/deleted';

// route master provinsi
$route['provinsi']                      = 'admin/Master_provinsi';
$route['add-provinsi']                  = 'admin/Master_provinsi/created';
$route['edit-provinsi']                 = 'admin/Master_provinsi/updated';
$route['remove-provinsi/(:num)']        = 'admin/Master_provinsi/deleted';

// route master kabupaten
$route['kabupaten']                     = 'admin/Master_kabupaten';
$route['add-kabupaten']                 = 'admin/Master_kabupaten/created';
$route['edit-kabupaten']                = 'admin/Master_kabupaten/updated';
$route['remove-kabupaten/(:num)']       = 'admin/Master_kabupaten/deleted';

$route['Patch']                         = 'admin/Master_patch';
$route['patching']             	        = 'admin/Master_patch/patchsystem';

$route['Dashboard']                     = 'Dashboard';

$route['checkdulu']            	        = 'auth/login/checklogin';
$route['checkgtk']            	        = 'auth/login/checkgtk';
$route['keluaraja']            	        = 'auth/login/logout';

$route['default_controller']            = 'Welcome';
$route['404_override']                  = 'My404';
$route['translate_uri_dashes']          = FALSE;
