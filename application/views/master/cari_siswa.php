<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-7 col-12" style="display: block;margin-left: auto;margin-right: auto;">
            <?php if ($cari == null) { ?>
                <div class="jumbotron jumbotron-fluid text-center mb-4" style="margin-top:7rem;">
                    <h5 class="text-danger"><i class="fa fa-times"></i> Maaf Data Anda Tidak Ditemukan.</h5>
                </div>

                <div class="form-group text-center mt-2" style="margin-bottom:9rem;">
                    <a href='<?=site_url('verval-inputan');?>' class="btn btn-outline-danger aves-effect waves-ligh" > <i class="bx bx-share"></i> Kembali</a>
                </div>
            <?php } ?>

        <?php foreach($cari as $data): ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Verifikasi Siswa</h4>
                </div>
                <div class="card-content" style="margin-top:-3rem;">
                    <div class="card-body">
                        <form method="post" action="<?=site_url('verifikasi')?>" enctype="multipart/form-data" class="form form-horizontal">
                            <div class="form-body">
                            <p style="color:green;">Data ditemuka</p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>NISN</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="hidden" class="form-control" name="id_siswa" id="first-name-icon" value="<?=$data['id_siswa']; ?>" readonly autocomplete="off" />
                                                <input type="text" class="form-control" name="nisn" id="first-name-icon" value="<?=$data['nisn']; ?>" readonly autocomplete="off" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-qr-code-scan"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>ATAS NAMA</label>
                                    </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                <input type="email" class="form-control" name="atas_nama" id="first-name-icon" value="<?=$data['atas_nama']; ?>" readonly autocomplete="off"/>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>NO REKENING</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" class="form-control" name="no_rek" value="<?=$data['no_rek']; ?>" readonly autocomplete="off" />
                                                <div class="form-control-icon">
                                                    <i class="bi bi-bookmark"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>KABUPATEN</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Password" value="<?=$data['nm_kabupaten']; ?>"/>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-pin-map"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group col-md-8 offset-md-4">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox2" class="form-check-input" checked />
                                                <label for="checkbox2">Remember Me</label>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" name="submit" class="btn btn-block btn-primary me-1 mb-1">
                                        <i class="bi bi-check-all"></i> verifikasi
                                        </button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                            Reset
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- // Basic Horizontal form layout section end -->