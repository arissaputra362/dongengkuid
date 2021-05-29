<?= $this->extend('layout/admin/admin_template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cerita</h1>
        <a href="#" class="d-none d-sm-inline-block py-2 px-4 btn btn-sm btn-primary shadow-sm tambah"><i
                class="fas fa-plus fa-sm text-white-50 mr-3"></i>Tambah Cerita</a>
    </div>

    <div class="row">

        <!-- Main Content Area -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">List Cerita</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="bg-primary">
                                <tr>
                                    <th scope="col" class="no">No</th>
                                    <th scope="col" class="materi">Judul Cerita</th>
                                    <th scope="col" class="keterangan">Deskripsi</th>
                                    <th scope="col" class="aksi">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="no" scope="row">1</th>
                                    <td class="materi">Mark</td>
                                    <td class="keterangan">Otto</td>
                                    <td class="aksi">
                                        <a href="#" class="btn btn-success d-block">Lihat</a>
                                        <a href="#" class="btn btn-danger d-block mt-2">Delete</a>
                                    </td>
                                </tr>
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