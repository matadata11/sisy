<section class="section">
<?php if ($this->session->userdata('level') == 'Super') { ?>
    <a href="<?=site_url('export_pdf');?>">
    <button type="button" class="btn btn-outline-danger block mb-3"><i class="bi bi-file-earmark-pdf"></i> Export Pdf</button>
    </a>
    <a href="<?=site_url('export_excel');?>">
    <button type="button" class="btn btn-outline-success block mb-3"><i class="bi bi-file-earmark-excel"></i> Export Excel</button>
    </a>
    <!-- <button type="button" class="btn btn-outline-warning block mb-3" data-bs-toggle="modal" data-bs-target="#export">Export</button> -->
    <?php } ?>

    <div class="card">
        <div class="card-header">Data Valid</div>
        <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama Siswa</th>
                <th>Nisn</th>
                <th>Atas Nama</th>
                <th>No Rek</th>
                <th>Nama Bank</th>
                <th>Kabupaten</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($this->session->userdata('level') == 'Super' ) { ?>
            <?php $no=1; foreach($siswa_super as $row): ?>
            <tr>
                <td><?=$no++;?></td>
                <td><a data-bs-toggle="modal" href="#buku<?=$row['id_siswa'];?>" style="font-style:bold;"><?=$row['nm_siswa']?></a></td>
                <td><?=$row['nisn']?></td>
                <td><?=$row['atas_nama']?></td>
                <td><?=$row['no_rek']?></td>
                <td><?=$row['nm_bank']?></td>
                <td><?=$row['nm_kabupaten']?></td>
                <td>
                <span class="badge bg-success"><?=$row['status']?></span>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php } ?>

            <?php if ($this->session->userdata('level') == 'Admin' ) { ?>
            <?php $no=1; foreach($siswa_admin as $row): ?>
            <tr>
                <td><?=$no++;?></td>
                <td><a data-bs-toggle="modal" href="#buku<?=$row['id_siswa'];?>" style="font-style:bold;"><?=$row['nm_siswa']?></a></td>
                <td><?=$row['nisn']?></td>
                <td><?=$row['atas_nama']?></td>
                <td><?=$row['no_rek']?></td>
                <td><?=$row['nm_bank']?></td>
                <td><?=$row['nm_kabupaten']?></td>
                <td>
                <span class="badge bg-success"><?=$row['status']?></span>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
</section>