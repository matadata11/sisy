<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <!-- <div class="card-header" style="margin-bottom:-3rem;">
                    <h4 class="card-title">Data Siswa</h4>
                    <p>Data yang sudah di <b style="color:red;">kunci</b> oleh <b style="color:green;">Ops</b> dan <b style="color:green;">Admin Cabang Dinas Pendidikan</b></p>
                </div> -->
                <div class="card-content">
                    <div class="card-body">
                        <h4>Informasi</h4>
                        <p>Data yang tampil pada tabel merupakan data yang sudah di Kunci oleh Operator Sekolah</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-12">
            <div class="card">
                <div class="card-header" style="margin-bottom:-2rem;">
                    <h4 class="card-title">Verifikasi Siswa</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="<?php echo base_url('cari-siswa') ?>" method="POST">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">NISN</label>
                                            <input type="text" id="first-name-vertical" class="form-control" name="nisn" autocomplete="off" placeholder="ex. 201501015" />
                                        </div>
                                    </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">Atas nama</label>
                                        <input type="text" id="email-id-vertical" class="form-control" name="atas_nama" autocomplete="off" placeholder="ex. ANONIM" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="contact-info-vertical">No Rekening</label>
                                        <input type="number" id="contact-info-vertical" class="form-control" name="no_rek" autocomplete="off" placeholder="ex. 130********" />
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-block btn-primary me-1 mb-1" >
                                        <i class="bi bi-search"></i> Verifikasi
                                    </button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1" >
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-12">
        <div class="card">
            <div class="card-header" style="margin-bottom:-3rem;">
                <h4 class="card-title">Data Siswa</h4>
                <p>Data yang sudah di <b style="color:red;">kunci</b> oleh <b style="color:green;">Ops</b></p>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama Siswa</th>
                            <th>Nisn</th>
                            <th>Atas Nama</th>
                            <th>No Rek</th>
                            <th>Nama Bank</th>
                            <th>Kab</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($siswa as $row): ?>
                        <tr>
                            <td><a data-bs-toggle="modal" href="#buku<?=$row['id_siswa'];?>" style="font-style:bold;"><?=$row['nm_siswa']?></a></td>
                            <td><?=$row['nisn']?></td>
                            <td><?=$row['atas_nama']?></td>
                            <td><?=$row['no_rek']?></td>
                            <td><?=$row['nm_bank']?></td>
                            <td><?=$row['nm_kabupaten']?></td>
                            <td><?=$row['status']?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
</section>
<!-- // Basic Vertical form layout section end -->


<!-- buku -->
<?php foreach($siswa as $row): ?>
<div class="modal fade" id="buku<?=$row['id_siswa'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h5><font style="text-transform: uppercase;"><?=$row['nm_bank'];?></font> <br> <?=$row['atas_nama'];?> <br> <?=$row['no_rek'];?></h5> <hr>
            <img src="<?= site_url('./assets/images/buku/' . $row['photo_buku']) ?>" style="width: 450px;height:auto;" alt="">
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>