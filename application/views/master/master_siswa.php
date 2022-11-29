<button type="button" class="btn btn-outline-primary block mb-3" data-bs-toggle="modal" data-bs-target="#input">Tambah Inputan</button>
<button type="button" class="btn btn-outline-primary block mb-3" data-bs-toggle="modal" data-bs-target="#import">Import</button>
<button type="button" class="btn btn-outline-warning block mb-3" data-bs-toggle="modal" data-bs-target="#export">Export</button>

<section class="section mb-4">
    <div class="card">
        <div class="card-header">Data Inputan Siswa</div>
        <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
            <tr>
                <th>#</th>
                <th>Kabupaten</th>
                <th>Nama Sekolah</th>
                <th>Kelas</th>
                <th>Nama Siswa</th>
                <th>NISN</th>
                <th>Atas Nama</th>
                <th>No Rekening</th>
                <th>Opsi</th>
            </tr>
            </thead>
            <tbody>
            

            <!-- role sekolah -->
                <?php $no=1; foreach($siswa as $row): ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$row['nm_kabupaten']?></td>
                <td width="0%"><?=$row['nm_sekolah']?></td>
                <td><?=$row['kelas']?></td>
                <td><a data-bs-toggle="modal" href="#buku<?=$row['id_siswa'];?>" style="font-style:bold;"><?=$row['nm_siswa']?></a></td>
                <td><?=$row['nisn']?></td>
                <td ><?=$row['atas_nama']?></td>
                <td><?=$row['no_rek']?></td>
                <td width="17%">

                    <?php if($row['locks']  == 'Ylock' ): ?>
                        <button class="btn btn-danger btn-block disabled" data-bs-toggle="tooltip" data-bs-placement="top" title="Dikunci Ops">  <i class="bi bi-lock"></i> Kunci Ops</button>
                        
                    <?php elseif($row['locks'] == 'Nlock' ): ?>
                        <a href="#lock<?=$row['id_siswa'];?>" data-bs-toggle="modal" style="color:#fff;"> <button class="btn btn-primary">  <i class="bi bi-unlock-fill"></i></button></a>
                        <a href="#edit<?=$row['id_siswa'];?>" data-bs-toggle="modal" style="color:#fff;"> <button class="btn btn-warning">  <i class="bi bi-pencil"></i></button></a>
                        <a href="#remove<?=$row['id_siswa'];?>" data-bs-toggle="modal" style="color:#fff;"> <button class="btn btn-danger"> <i class="bi bi-trash"></i></button></a>
                    <?php endif; ?>

                </td>
            </tr>
            <?php endforeach; ?>

            <!-- role admin cabang -->
            <?php if ($this->session->userdata('level') == 'Admin' ) { ?>
                <?php $no=1; foreach($siswa_admin as $row): ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$row['nm_kabupaten']?></td>
                <td width="0%"><?=$row['nm_sekolah']?></td>
                <td><?=$row['kelas']?></td>
                <td><a data-bs-toggle="modal" href="#buku<?=$row['id_siswa'];?>" style="font-style:bold;"><?=$row['nm_siswa']?></a></td>
                <td><?=$row['nisn']?></td>
                <td><?=$row['atas_nama']?></td>
                <td><?=$row['no_rek']?></td>
                <td width="16%">

                    <?php if($row['locks']  == 'Ylock' ): ?>
                            <button class="btn btn-danger disabled mb-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Dikunci Ops">  <i class="bi bi-lock"></i> Sekolah</button>
                    <?php endif; ?>

                    <?php if($row['lock_admin']  == 'Ylock' ): ?>
                        <button class="btn btn-danger disabled">  <i class="bi bi-lock"></i> Cabang</button>
                        
                    <?php elseif($row['lock_admin'] == 'Nlock' ): ?>
                        <a href="#locka<?=$row['id_siswa'];?>" data-bs-toggle="modal" style="color:#fff;"> <button class="btn btn-primary">  <i class="bi bi-unlock-fill"></i></button></a>
                        <a href="#edit<?=$row['id_siswa'];?>" data-bs-toggle="modal" style="color:#fff;"> <button class="btn btn-warning">  <i class="bi bi-pencil"></i></button></a>
                        <a href="#remove<?=$row['id_siswa'];?>" data-bs-toggle="modal" style="color:#fff;"> <button class="btn btn-danger"> <i class="bi bi-trash"></i></button></a>
                    <?php endif; ?>
                    

                </td>
            </tr>
            <?php endforeach; ?>
            <?php } ?>

            <!-- role super -->
            <?php if ($this->session->userdata('level') == 'Super' ) { ?>
                <?php $no=1; foreach($siswa_super as $row): ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$row['nm_kabupaten']?></td>
                <td width="0%"><?=$row['nm_sekolah']?></td>
                <td><?=$row['kelas']?></td>
                <td><a data-bs-toggle="modal" href="#buku<?=$row['id_siswa'];?>" style="font-style:bold;"><?=$row['nm_siswa']?></a></td>
                <td><?=$row['nisn']?></td>
                <td><?=$row['atas_nama']?></td>
                <td><?=$row['no_rek']?></td>
                <td width="13%">

                    <?php if($row['locks']  == 'Ylock' ): ?>
                        <button tton class="btn btn-danger disabled mb-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Dikunci Ops">  <i class="bi bi-lock"></i> Sekolah</button>
                    <?php endif; ?>

                    <?php if($row['lock_admin']  == 'Ylock' ): ?>
                        <button tton class="btn btn-danger disabled mb-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Dikunci Admin Cabang">  <i class="bi bi-lock"></i> Cabang</button>
                    <?php endif; ?>

                    <?php if($row['lock_super']  == 'Ylock' ): ?>
                        <button class="btn btn-danger disabled">  <i class="bi bi-lock"></i></button>
                        
                    <?php elseif($row['lock_super'] == 'Nlock' ): ?>
                        <!-- <a href="#locks<?=$row['id_siswa'];?>" data-bs-toggle="modal" style="color:#fff;"> <button class="btn btn-primary">  <i class="bi bi-unlock-fill"></i></button></a> -->
                        <a href="#edit<?=$row['id_siswa'];?>" data-bs-toggle="modal" style="color:#fff;"> <button class="btn btn-warning">  <i class="bi bi-pencil"></i></button></a>
                        <a href="#remove<?=$row['id_siswa'];?>" data-bs-toggle="modal" style="color:#fff;"> <button class="btn btn-danger"> <i class="bi bi-trash"></i></button></a>
                    <?php endif; ?>

                </td>
            </tr>
            <?php endforeach; ?>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
</section>

<!-- input -->
<div class="modal fade" id="input" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Inputan Data Siswa
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" >
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('add-inputan')?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="first-name-column">Provinsi</label>
                                <select name="provinsi_id" class="form-control" id="provinsi">
                                    <option>- Select Provinsi -</option>
                                    <?php 
                                        foreach($provinsi as $prov)
                                        {
                                            echo '<option value="'.$prov->id_provinsi.'">'.$prov->nm_provinsi.'</option>';
                                        }
                                    ?>
                                </select>
                                <input type="hidden" id="email-id-column" class="form-control" name="admin_input" value="<?php $user_data = $this->session->userdata('user_data'); echo $user_data['name'];?>" placeholder="ex. 201501015"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="last-name-column">Kabupaten</label>
                                <select name="kabupaten_id" class="form-control" id="kabupaten">
                                <option value=''>Select Kabupaten</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="city-column">Nama Sekolah</label>
                                <input type="text" id="city-column" class="form-control" placeholder="ex. SMK Negeri 1 Simpang Kanan" name="nm_sekolah"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="country-floating">Nama Siswa</label>
                                <input type="text" id="city-column" class="form-control" placeholder="ex. Dwi Satria" name="nm_siswa"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="company-column">Kelas</label>
                                <select name="kelas" id="first-name-column" class="form-control">
                                <option value="">-kelas-</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                                </select>
                                
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email-id-column">NISN</label>
                                <input type="number" id="email-id-column" class="form-control" name="nisn" placeholder="ex. 201501015"/>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email-id-column">Nama Bank</label>
                                <input type="text" id="email-id-column" class="form-control" name="nm_bank" placeholder="ex. Bank ACeh Syariah" />
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email-id-column">Atas Nama <small><font color="red">*</font> Huruf Kapital</small></label>
                                <input type="text" id="email-id-column" class="form-control"   name="atas_nama" placeholder="ex. DWI SATRIA PANGESTU"/>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="company-column">No Rekening</label>
                                <input type="text" id="email-id-column" class="form-control" name="no_rek" placeholder="ex. 130**********"/>
                                
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="company-column">No Hp Siswa</label>
                                <input type="text" id="email-id-column" class="form-control"  value="08" name="no_hp" placeholder="ex. 08">
                                
                            </div>
                        </div>
                        

                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="email-id-column">Buku Rekening <small><font color="red">*</font> Max 2 Mb</small></label>
                                <input type="file" class="form-control" name="photo">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">
                                Simpan
                            </button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- import -->
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Import Data Siswa
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" >
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12 col-12 text-center">
                    <a href="<?= site_url('assests/excel/format_inport_siswa.xlsx');?>" download>
                    <button class="btn btn-outline-primary block mb-3"> <i class="bi bi-cloud-download"></i> Download Template Excel</button>
                    </a>
                </div>

                <form method="post" action="<?= site_url('import-inputan') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="email-id-column">File Import <small><font color="red">*</font> File Excel</small></label>
                                <input type="hidden" id="email-id-column" class="form-control" name="admin_input" value="<?=__session('fullname');?>" placeholder="ex. 201501015"/>
                                <input type="file" id="email-id-column" class="form-control" name="dataexcel" placeholder="No Rekening"/>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                Import
                            </button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- lock siswa -->
<?php foreach($siswa as $row): ?>
<div class="modal fade" id="lock<?=$row['id_siswa'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('lock-inputan')?>">
                    <div class="row">
                        <div class="col-md-12 col-12 text-center">
                            <h5>Anda yakin ingin mengunci <br> Nama <?=$row['nm_siswa'];?> </h5>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <input type="hidden" id="email-id-column" class="form-control" name="id_siswa" value="<?=$row['id_siswa'];?>>"/>
                                <input type="hidden" id="email-id-column" class="form-control" name="locks" value="Ylock"/>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" name="submit" class="btn btn-danger me-1 mb-1 btn-block">
                            <i class="bi bi-lock"></i> Kunci
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- lock admin -->
<?php foreach($siswa as $row): ?>
<div class="modal fade" id="locka<?=$row['id_siswa'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('locka-inputan')?>">
                    <div class="row">
                        <div class="col-md-12 col-12 text-center">
                            <h5>Anda yakin ingin mengunci <br> Nama <?=$row['nm_siswa'];?> </h5>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <input type="hidden" id="email-id-column" class="form-control" name="id_siswa" value="<?=$row['id_siswa'];?>>"/>
                                <input type="hidden" id="email-id-column" class="form-control" name="lock_admin" value="Ylock"/>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" name="submit" class="btn btn-danger me-1 mb-1 btn-block">
                            <i class="bi bi-lock"></i> Kunci
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>


<!-- edit siswa -->
<?php foreach($siswa as $row): ?>
<div class="modal fade" id="edit<?=$row['id_siswa'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Edit Data Siswa
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" >
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('edit-inputan')?>">
                    <div class="row">
                        <!-- <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="first-name-column">Provinsi</label>
                                <select name="provinsi_id" class="form-control" id="provinsi1">
                                    <option>- Select Provinsi -</option>
                                    <?php 
                                        foreach($provinsi as $prov)
                                        {
                                            echo '<option value="'.$prov->id_provinsi.'">'.$prov->nm_provinsi.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="last-name-column">Kabupaten</label>
                                <select name="kabupaten_id" class="form-control" id="kabupaten1">
                                <option value=''>Select Kabupaten</option>
                            </select>
                            </div>
                        </div> -->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="city-column">Nama Sekolah</label>
                                <input type="text" id="city-column" class="form-control" placeholder="ex. SMK Negeri 1 Simpang Kanan" name="nm_sekolah" value="<?=$row['nm_sekolah'];?>"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="country-floating">Nama Siswa</label>
                                <input type="hidden" id="city-column" class="form-control" placeholder="ex. Dwi Satria" name="id_siswa" value="<?=$row['id_siswa'];?>"/>
                                <input type="text" id="city-column" class="form-control" placeholder="ex. Dwi Satria" name="nm_siswa" value="<?=$row['nm_siswa'];?>"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="company-column">Kelas</label>
                                <select name="kelas" id="first-name-column" class="form-control">
                                <option value="<?=$row['kelas'];?>"><?=$row['kelas'];?></option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                                </select>
                                
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email-id-column">NISN</label>
                                <input type="number" id="email-id-column" class="form-control" name="nisn" placeholder="ex. 201501015" value="<?=$row['nisn'];?>"/>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email-id-column">Atas Nama <small><font color="red">*</font> Huruf Kapital</small></label>
                                <input type="text" id="email-id-column" class="form-control" name="atas_nama" placeholder="ex. DWI SATRIA PANGESTU" value="<?=$row['atas_nama'];?>"/>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="company-column">No Rekening</label>
                                <input type="text" id="email-id-column" class="form-control" name="no_rek" placeholder="ex. 130**********" value="<?=$row['no_rek'];?>"/>
                                
                            </div>
                        </div>
                        
                        <!-- <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="email-id-column">Buku Rekening <small><font color="red">*</font> Max 2 Mb</small></label>
                                <input type="file" id="email-id-column" class="form-control" name="photo" placeholder="No Rekening"/>
                            </div>
                        </div> -->
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">
                                Ubah Data
                            </button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?php foreach($siswa_super as $row): ?>
<div class="modal fade" id="edit<?=$row['id_siswa'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Edit Data Siswa
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" >
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('edit-inputan')?>">
                    <div class="row">
                        <!-- <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="first-name-column">Provinsi</label>
                                <select name="provinsi_id" class="form-control" id="provinsi1">
                                    <option>- Select Provinsi -</option>
                                    <?php 
                                        foreach($provinsi as $prov)
                                        {
                                            echo '<option value="'.$prov->id_provinsi.'">'.$prov->nm_provinsi.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="last-name-column">Kabupaten</label>
                                <select name="kabupaten_id" class="form-control" id="kabupaten1">
                                <option value=''>Select Kabupaten</option>
                            </select>
                            </div>
                        </div> -->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="city-column">Nama Sekolah</label>
                                <input type="text" id="city-column" class="form-control" placeholder="ex. SMK Negeri 1 Simpang Kanan" name="nm_sekolah" value="<?=$row['nm_sekolah'];?>"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="country-floating">Nama Siswa</label>
                                <input type="hidden" id="city-column" class="form-control" placeholder="ex. Dwi Satria" name="id_siswa" value="<?=$row['id_siswa'];?>"/>
                                <input type="text" id="city-column" class="form-control" placeholder="ex. Dwi Satria" name="nm_siswa" value="<?=$row['nm_siswa'];?>"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="company-column">Kelas</label>
                                <select name="kelas" id="first-name-column" class="form-control">
                                <option value="<?=$row['kelas'];?>"><?=$row['kelas'];?></option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                                </select>
                                
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email-id-column">NISN</label>
                                <input type="number" id="email-id-column" class="form-control" name="nisn" placeholder="ex. 201501015" value="<?=$row['nisn'];?>"/>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email-id-column">Atas Nama <small><font color="red">*</font> Huruf Kapital</small></label>
                                <input type="text" id="email-id-column" class="form-control" name="atas_nama" placeholder="ex. DWI SATRIA PANGESTU" value="<?=$row['atas_nama'];?>"/>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="company-column">No Rekening</label>
                                <input type="text" id="email-id-column" class="form-control" name="no_rek" placeholder="ex. 130**********" value="<?=$row['no_rek'];?>"/>
                                
                            </div>
                        </div>
                        
                        <!-- <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="email-id-column">Buku Rekening <small><font color="red">*</font> Max 2 Mb</small></label>
                                <input type="file" id="email-id-column" class="form-control" name="photo" placeholder="No Rekening"/>
                            </div>
                        </div> -->
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">
                                Ubah Data
                            </button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- remove siswa -->
<?php foreach($siswa as $row): ?>
<div class="modal fade" id="remove<?=$row['id_siswa'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('edit-provinsi')?>">
                    <div class="row">
                        <div class="col-md-12 col-12 text-center">
                            <h5>Anda yakin ingin menghapus <br> Siswa <?=$row['nm_siswa'];?> </h5>
                        </div>

                        <div class="col-12 d-flex justify-content-end mt-3">
                            <a href="<?=site_url('remove-inputan/'.$row['id_siswa'])?>" type="submit" name="submit" class="btn btn-block btn-primary me-1 mb-1">
                                Remove
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?php foreach($siswa_super as $row): ?>
<div class="modal fade" id="remove<?=$row['id_siswa'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('edit-provinsi')?>">
                    <div class="row">
                        <div class="col-md-12 col-12 text-center">
                            <h5>Anda yakin ingin menghapus <br> Siswa <?=$row['nm_siswa'];?> </h5>
                        </div>

                        <div class="col-12 d-flex justify-content-end mt-3">
                            <a href="<?=site_url('remove-inputan/'.$row['id_siswa'])?>" type="submit" name="submit" class="btn btn-block btn-primary me-1 mb-1">
                                Remove
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- buku -->
<?php foreach($siswa as $row): ?>
<div class="modal fade" id="buku<?=$row['id_siswa'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h5><font ><?=$row['nm_bank'];?></font> <br> <?=$row['atas_nama'];?> <br> <?=$row['no_rek'];?></h5> <hr>
            <img src="<?= site_url('./assets/images/buku/' . $row['photo_buku']) ?>" style="width: 450px;height:auto;" alt="">
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?php foreach($siswa_super as $row): ?>
<div class="modal fade" id="buku<?=$row['id_siswa'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h5><font ><?=$row['nm_bank'];?></font> <br> <?=$row['atas_nama'];?> <br> <?=$row['no_rek'];?></h5> <hr>
            <img src="<?= site_url('./assets/images/buku/' . $row['photo_buku']) ?>" style="width: 450px;height:auto;" alt="">
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>