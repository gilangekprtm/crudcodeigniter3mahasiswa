<div class="container">
    <?php if ($this->session->flashdata('flash')): ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button class="btn-close float-end" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php base_url() ?>mahasiswa/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="float-end ms-2 badge text-bg-danger text-decoration-none" onclick="return confirm('yakin?');">Hapus</a>
                        <a href="" class="float-end ms-2 badge text-bg-warning text-decoration-none">Edit</a>
                        <a href="" class="float-end ms-2 badge text-bg-info text-decoration-none">Detail</a>
                        
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>