<style>
@media print {
    body * {
        visibility: hidden;
    }

    .section-to-print,
    .section-to-print * {
        visibility: visible;
    }

    .section-to-print {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
    }

    .pcoded-main-container * {
        margin: 0;
    }
}
</style>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 m-b-30">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active show" id="home-tabs" data-toggle="tab"
                                            href="<?= base_url('daftar_user_controller/'.$this->uri->segment(2, 0)) ?>#aktifuser"
                                            role="tab" aria-controls="home" aria-selected="true">Buat Absen</a>
                                    </li>
                                </ul>
                                <!-- <a href="http://localhost/AdminAbsenOnline/buatabsen_controller/view">view</a> -->
                                <div class="tab-content" id="myTabContent">
                                    <form id="form-master" action="" method="POST">
                                        <div class="row">
                                            <div class="form-group col-sm-3">
                                                <label>Pilih Pegawai</label>
                                                <select id="select-username" name="username" class="form-control">
                                                    <option value="">- Pilih Pegawai</option>
                                                    <?php $n=1; ?>
                                                    <?php foreach ($daftar_user as $data) : ?>
                                                    <?php if(isset($_GET['all'])!=1): ?>
                                                    <?php if($data['status']==1 && $data['id_group']!=2): ?>
                                                    <option value="<?php echo $data['id_user']; ?>"><?php echo $data['nama_lengkap']; ?></option>
                                                    <?php endif;?>
                                                    <?php endif;?>
                                                    <?php $n++; endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Pilih Status</label>
                                                <select id="select-status" name="status" class="form-control">
                                                    <option value="">- Pilih Status</option>
                                                    <option value="1">Hadir</option>
                                                    <option value="2">Dinas Luar</option>
                                                    <option value="3">Izin</option>
                                                    <option value="4">Sakit</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <label>Tanggal</label>
                                                <input type="date" value="<?php echo date('Y-m-d'); ?>" readonly
                                                    name="tanggal" class="form-control">
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Jam Masuk</label>
                                                <input type="time" min="06:45" max="18:00" name="time"
                                                    class="form-control">
                                            </div>
                                            <div class="col-sm-2">
                                                <label>Aksi</label>
                                              <button type="button" class="btn btn-primary form-control add_form">+ Add</button>
                                            </div>

                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                    </form>
                                    <h4>Daftar Pengajuan <span id="jumlah-form"></span></h4>
                                    <form id="form-multiple" class="section-to-print">
                                        <table class="table form-sementara" id="form-sementara">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Status</th>
                                                    <th>Tanggal</th>
                                                    <th>Jam Masuk</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tfoot>
                                            </tfoot>
                                        </table>
                                        <div id="check-box"></div>
                                        <div id="button-postinng"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>