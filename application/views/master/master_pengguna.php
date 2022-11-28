<button type="button" class="btn btn-outline-primary block mb-3" data-bs-toggle="modal" data-bs-target="#add">Tambah Pengguna</button>

<section class="section mb-4">
    <div class="card">
        <div class="card-header">Master Pengguna</div>
        <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
            <tr>
                <th>#</th>
                <th>Instansi</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Kabupaten</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($pengguna as $row): ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$row['instansi'];?></td>
                <td><?=$row['fullname'];?></td>
                <td><?=$row['email'];?></td>
                <td> <span class="badge bg-primary"><?=$row['nm_kabupaten'];?></span></td>
                <td>
                    
                <?php if($row['is_active']  == '1' ): ?>
                    <button class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Pengguna Aktif"> <i class="bi bi-check"></i></button>
                                        
                <?php elseif($row['is_active'] == '0' ): ?>
                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Pengguna Non Aktif"> <i class="bi bi-hourglass-top"></i></button>
                <?php endif; ?>
                </td>

                <td width="12%">
                    <button class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil"></i></button>

                    <a href="#remove<?=$row['id_admin'];?>" data-bs-toggle="modal" style="color:#fff;">  <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"><i class="bi bi-trash"></i></button></a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</section>

<!-- input -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Tambah Pengguna
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" >
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('add-pengguna')?>">
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
                                <label for="city-column">Instansi</label>
                                <input type="hidden" id="city-column" class="form-control" value="<?=__session('fullname');?>" name="admin"/>
                                <input type="text" id="city-column" class="form-control" placeholder="ex. SMK Negeri 1 Simpang Kanan" name="instansi"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="country-floating">Nama</label>
                                <input type="text" id="city-column" class="form-control" placeholder="ex. Dwi Satria" name="fullname"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="company-column">Email</label>
                                <input type="email" id="city-column" class="form-control" placeholder="ex. matadata.dev2021@gmail.com" name="email"/>
                                
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email-id-column">Password</label>
                                <input type="text" id="email-id-column" class="form-control" name="kupassword" placeholder="ex. *********"/>
                            </div>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="email-id-column">Role</label>
                                <select name="level" id="level" class="form-control">
                                    <option value="">-pilih:-</option>
                                    <option value="Super">Super</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Ops">Ops</option>
                                </select>
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

<?php foreach($pengguna as $row): ?>
<div class="modal fade" id="remove<?=$row['id_admin'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="form" method="post" action="<?=site_url('edit-provinsi')?>">
                    <div class="row">
                        <div class="col-md-12 col-12 text-center">
                            <h5>Anda yakin ingin menghapus <br> Pengguna <?=$row['fullname'];?> </h5>
                        </div>

                        <div class="col-12 d-flex justify-content-end mt-3">
                            <a href="<?=site_url('remove-pengguna/'.$row['id_admin'])?>" type="submit" name="submit" class="btn btn-block btn-primary me-1 mb-1">
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