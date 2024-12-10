<?= $this->extend('admin/template/template'); ?>
<?= $this->section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title" style="color: #03AADE;">Ubah Data Sertifikat</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="card-body">
                        <form action="<?= base_url('admin-update-sertifikat/' . $sertifikat['id_sertifikat']) ?>"
                            method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label">Username Member</label>
                                <select class="form-select" id="id_member" name="id_member" required>
                                    <option value="" disabled>Pilih Username Member</option>
                                    <?php foreach ($member as $item): ?>
                                        <option value="<?= $item['id_member'] ?>"
                                            <?= ($item['id_member'] == $sertifikat['id_member']) ? 'selected' : '' ?>>
                                            <?= $item['username'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama Sertifikat</label>
                                <input type="text" class="form-control" value="<?= $sertifikat['nama_sertifikat'] ?>" name="nama_sertifikat"
                                    value="Masukkan Nama Sertifikat" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama Sertifikat En</label>
                                <input type="text" class="form-control" value="<?= $sertifikat['nama_sertifikat_en'] ?>" name="nama_sertifikat_en"
                                    value="Masukkan Nama Sertifikat Versi Bahasa Indonesia" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Sertifikat</label>
                                <input type="file" class="form-control" id="sertifikat" name="sertifikat"
                                    accept="image/*,application/pdf">
                                <span>Nama File: <?= $sertifikat['sertifikat'] ?></span>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn text-white"
                                    style="background-color: #03AADE;">Simpan</button>
                                <a href="<?= base_url('admin-sertifikat') ?>" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div><!--//app-card-->
            </div>
        </div><!--//row-->
        <hr class="my-4">
    </div><!--//container-fluid-->
</div><!--//app-content-->

<?= $this->endSection('content') ?>