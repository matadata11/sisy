<button type="button" class="btn btn-outline-primary block mb-3" data-bs-toggle="modal" data-bs-target="#add">Tambah Provinsi</button>

<section class="section mb-4">
    <div class="card">
        <div class="card-header">Master Provinsi</div>
        <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Provinsi</th>
                <th>Creted_at</th>
                <th>Opsi</th>
            </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($provinsi as $row): ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$row['id_provinsi']?></td>
                <td><?=$row['nm_provinsi']?></td>
                <td><?=indo_date($row['created_at'])?></td>
                <td width="12%">
                    <a href="#edit<?=$row['id_provinsi'];?>" data-bs-toggle="modal" style="color:#fff;"> <button class="btn btn-warning">  <i class="bi bi-pencil"></i></button></a>

                    <a href="#remove<?=$row['id_provinsi'];?>" data-bs-toggle="modal" style="color:#fff;"> <button class="btn btn-danger"> <i class="bi bi-trash"></i></button></a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</section>


<!-- tambah provinsi -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Tambah Data Provinsi
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" >
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('add-provinsi')?>">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="city-column">Provinsi</label>
                                <input type="text" id="city-column" class="form-control" placeholder="Provinsi" name="nm_provinsi" />
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

<!-- edit provinsi -->
<?php foreach($provinsi as $row): ?>
<div class="modal fade" id="edit<?=$row['id_provinsi'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Edit Data Provinsi
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" >
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('edit-provinsi')?>">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="city-column">Provinsi</label>
                                <input type="hidden" id="city-column" class="form-control" placeholder="Provinsi" name="id_provinsi" value="<?=$row['id_provinsi'];?>" />
                                <input type="text" id="city-column" class="form-control" placeholder="Provinsi" name="nm_provinsi" value="<?=$row['nm_provinsi'];?>" />
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

<!-- remove provinsi -->
<?php foreach($provinsi as $row): ?>
<div class="modal fade" id="remove<?=$row['id_provinsi'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('edit-provinsi')?>">
                    <div class="row">
                        <div class="col-md-12 col-12 text-center">
                            <h5>Anda yakin ingin menghapus <br> Provinsi <?=$row['nm_provinsi'];?> </h5>
                        </div>

                        <div class="col-12 d-flex justify-content-end mt-3">
                            <a href="<?=site_url('remove-provinsi/'.$row['id_provinsi'])?>" type="submit" name="submit" class="btn btn-block btn-primary me-1 mb-1">
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