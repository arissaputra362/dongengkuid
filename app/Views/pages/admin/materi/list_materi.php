<?= $this->extend('layout/admin/admin_template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Materi</h1>
        <a href="/materi/create" class="d-none d-sm-inline-block py-2 px-4 btn btn-sm btn-primary shadow-sm tambah"><i
                class="fas fa-plus fa-sm text-white-50 mr-3"></i>Tambah Materi</a>
    </div>

    <div class="row">

        <!-- Main Content Area -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">List Materi</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="bg-primary">
                                <tr>
                                    <th scope="col" class="no">No</th>
                                    <th scope="col" class="materi">Judul Materi</th>
                                    <th scope="col" class="keterangan">Keterangan</th>
                                    <th scope="col" class="aksi">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                <?php foreach($materi as $m) : ?>
                                <tr>
                                    <th class="no" scope="row"><?= $i++; ?></th>
                                    <td class="materi"><?= $m['judul']; ?></td>
                                    <td class="keterangan"><?= $m['keterangan']; ?></td>
                                    <td class="aksi">
                                        <a href="#" class="btn btn-warning d-block">Edit</a>

                                        <form action="/materi/<?= $materi['id']; ?>" method="POST" class="mt-2">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" id="" value="DELETE">
                                            <button type="submit" class="btn btn-danger d-block btn-delete"
                                                onclick="return confirm('apakah anda yakin ?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>