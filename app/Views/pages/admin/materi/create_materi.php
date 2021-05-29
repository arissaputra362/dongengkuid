<?= $this->extend('layout/admin/admin_template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Materi</h1>
        <a href="/materi" class="d-none d-sm-inline-block py-2 px-4 btn btn-sm btn-primary shadow-sm tambah"><i
                class="fas fa-list fa-sm text-white-50 mr-3"></i>List Materi</a>
    </div>

    <div class="row">

        <div class="col">
            <form action="/materi/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="judul">Judul Materi</label>
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>"
                        id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>"
                        id="keterangan" rows="4" name="keterangan"><?= old('keterangan'); ?></textarea>
                    <div class="invalid-feedback">
                        <?= $validation->getError('keterangan'); ?>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary py-2 px-3">Tambah Materi</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>