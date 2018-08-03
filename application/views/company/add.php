<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $title; ?>
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $title; ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-10">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah <?php echo $title; ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                        <div class="box-body">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik_search" name="nik_search" placeholder="Masukkan NIK" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="button" onclick="searchNIK()">Cari NIK</button>
                            </div>

                            <div class="form-group">
                                <label for="nama_pemohon">Nama Pemohon</label>
                                <input type="text" class="form-control" id="nama_pemohon" placeholder="Nama Pemohon" required disabled>
                            </div>

                            <div class="callout callout-danger" id="idNotFound" name="idNotFound" hidden>
                                <h4>Nomor Identitas tidak ditemukan</h4>

                                <p>Silahkan isi data pelaku usaha terlebih dahulu</p>
                            </div>
                        </div>
                    <?php echo form_open(base_url("Company/Add"),array('id'=>'companyForm','method'=>'post')); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="nik_pemohon" name="nik_pemohon">
                        </div>
                        <div class="form-group">
                            <label for="nama_perusahaan">Nama Perusahaan</label>
                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan" required>
                        </div>

                        <div class="form-group">
                            <label for="npwp">Nomor Pokok Wajib Pajak</label>
                            <input type="number" class="form-control" id="npwp" name="npwp" placeholder="Nomor Pokok Wajib Pajak" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis_perusahaan">Jenis Perusahaan</label>
                            <select class="form-control select2" id="jenis_perusahaan" name="jenis_perusahaan">
                                <option value="#" selected disabled>Jenis Perusahaan</option>
                                <option value="PT">PT</option>
                                <option value="CV">CV</option>
                                <option value="Perorangan">Perorangan</option>
                                <option value="Koperasi">Koperasi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="status_perusahaan">Status Perusahaan</label>
                            <select class="form-control select2" id="status_perusahaan" name="status_perusahaan">
                                <option value="#" selected disabled>Status Perusahaan</option>
                                <option value="Pusat">Pusat</option>
                                <option value="Cabang">Cabang</option>
                                <option value="Perwakilan">Perwakilan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kegiatan_utama">Kegiatan Utama</label>
                            <input type="text" class="form-control" id="kegiatan_utama" name="kegiatan_utama" placeholder="Kegiatan Utama" required>
                        </div>

                        <div class="form-group">
                            <label for="alamat_perusahaan">Alamat Perusahaan</label>
                            <input type="text" class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" placeholder="Alamat Perusahaan" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control select2" id="kecamatan" name="kecamatan" onchange="loadArea()">
                                <option value="#" selected disabled>Kecamatan</option>
                                <?php foreach ($districs as $distric) { ?>
                                    <option value="<?php echo $distric->kode; ?>"><?php echo $distric->nama; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select2" id="desa" name="desa" disabled>
                                <option value="#" selected disabled>Kelurahan/Desa</option>
                            </select>
                        </div>

                        <label for="nama_notaris">Akte Pendirian</label>

                        <div class="form-group">
                            <label for="alamat_perusahaan">Nama Notaris</label>
                            <input type="text" class="form-control" id="nama_notaris" name="nama_notaris" placeholder="Nama Notaris" required>
                        </div>
                        <div class="form-group">
                            <label for="nomor_akte">Nomor Akte</label>
                            <input type="text" class="form-control" id="nomor_akte" name="nomor_akte" placeholder="Nomor Akte Pendirian" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_akte">Tanggal Akte</label>
                            <input type="date" class="form-control" id="tanggal_akte" name="tanggal_akte" placeholder="Tanggal Akte Pendirian" required>
                        </div>

                        <label for="nama_notaris_perubahan">Akte Perubahan</label>

                        <div class="form-group">
                            <label for="alamat_perusahaan">Nama Notaris</label>
                            <input type="text" class="form-control" id="nama_notaris_perubahan" name="nama_notaris_perubahan" placeholder="Nama Notaris" required>
                        </div>
                        <div class="form-group">
                            <label for="nomor_akte">Nomor Akte</label>
                            <input type="text" class="form-control" id="nomor_akte_perubahan" name="nomor_akte_perubahan" placeholder="Nomor Akte Perubahan" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_akte">Tanggal Akte</label>
                            <input type="date" class="form-control" id="tanggal_akte_perubahan" name="tanggal_akte_perubahan" placeholder="Tanggal Akte Perubahan" required>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>