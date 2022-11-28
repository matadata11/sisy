<button type="button" class="btn btn-outline-primary block mb-3" data-bs-toggle="modal" data-bs-target="#add">Tambah Kabupaten</button>

<section class="section mb-4">
    <div class="card">
        <div class="card-header">Master Kabupaten</div>
        <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Provinsi</th>
                <th>Kabupaten</th>
                <th>Creted_at</th>
                <th>Opsi</th>
            </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($kabupaten as $row): ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$row['id_kabupaten']?></td>
                <td><?=$row['nm_provinsi']?></td>
                <td><?=$row['nm_kabupaten']?></td>
                <td><?=indo_date($row['created_at'])?></td>
                <td width="12%">
                    <a href="#edit<?=$row['id_kabupaten'];?>" data-bs-toggle="modal" style="color:#fff;"> <button class="btn btn-warning">  <i class="bi bi-pencil"></i></button></a>

                    <a href="#remove<?=$row['id_kabupaten'];?>" data-bs-toggle="modal" style="color:#fff;"> <button class="btn btn-danger"> <i class="bi bi-trash"></i></button></a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</section>

<!-- tambah kabuapetn -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Tambah Data Kabupaten
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" >
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('add-kabupaten')?>">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="city-column mb-2">Provinsi</label>
                                <select name="provinsi_id" id="city-column" class="form-control">
                                    <option value="">-pilih provinsi-</option>
                                    <?php foreach($provinsi as $rows): ?>
                                    <option value="<?=$rows['id_provinsi'];?>"><?=$rows['nm_provinsi'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="city-column mb-2">Kabupaten</label>
                                <input type="text" id="city-column" class="form-control" placeholder="Kabupaten" name="nm_kabupaten" />
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

<!-- edit kabupaten -->
<?php foreach($kabupaten as $row): ?>
<div class="modal fade" id="edit<?=$row['id_kabupaten'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Edit Data Kabupaten
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" >
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('edit-kabupaten')?>">
                    <div class="row">
                    <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="city-column mb-2">Provinsi</label>
                                <select name="provinsi_id" id="city-column" class="form-control">
                                    <option value="<?=$row['id_provinsi'];?>"><?=$row['nm_provinsi'];?></option>
                                    <?php foreach($provinsi as $rows): ?>
                                    <option value="<?=$rows['id_provinsi'];?>"><?=$rows['nm_provinsi'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="city-column">Kabupaten</label>
                                <input type="hidden" id="city-column" class="form-control" placeholder="Provinsi" name="id_kabupaten" value="<?=$row['id_kabupaten'];?>" />
                                <input type="text" id="city-column" class="form-control" placeholder="Provinsi" name="nm_kabupaten" value="<?=$row['nm_kabupaten'];?>" />
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" name="submit" class="btn btn-primary me-1 mb-1">
                                Ubah
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

<!-- remove kabupaten -->
<?php foreach($kabupaten as $row): ?>
<div class="modal fade" id="remove<?=$row['id_kabupaten'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('edit-provinsi')?>">
                    <div class="row">
                        <div class="col-md-12 col-12 text-center">
                            <h5>Anda yakin ingin menghapus <br> Kabupaten <?=$row['nm_kabupaten'];?> </h5>
                        </div>

                        <div class="col-12 d-flex justify-content-end mt-3">
                            <a href="<?=site_url('remove-kabupaten/'.$row['id_kabupaten'])?>" type="submit" name="submit" class="btn btn-block btn-primary me-1 mb-1">
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