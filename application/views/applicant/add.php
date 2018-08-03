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
                    <?php echo form_open(base_url("Applicant/Add")); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nik">Nomor KTP atau Passport</label>
                                <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" required>
                            </div>

                            <div class="form-group">
                                <label for="nama_pemohon">Nama Pemohon</label>
                                <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Masukkan Nama Pemohon" required>
                            </div>


                            <div class="form-group">
                                <label for="nama_pemohon">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                            </div>


                            <div class="form-group">
                                <label for="nama_pemohon">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" required>
                            </div>

                            <div class="form-group">
                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="kewarganegaraan" name="kewarganegaraan" value="Warga Negara Indonesia" checked>
                                        Warga Negara Indonesia
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="kewarganegaraan" name="kewarganegaraan" value="Warga Negara Asing">
                                        Warga Negara Asing
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" checked>
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                            </div>
                            <div class="form-group">
                                <select class="form-control select2" id="provinsi" name="provinsi" onchange="loadCity()">
                                    <option value="#" selected disabled>Provinsi</option>
                                    <?php foreach ($provinces as $province) { ?>
                                    <option value="<?php echo $province->kode; ?>"><?php echo $province->nama; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control select2" id="kota" name="kota" onchange="loadDistrict()" disabled>
                                    <option value="#" selected disabled>Kabupaten/Kota</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control select2" id="kecamatan" name="kecamatan" onchange="loadArea()" disabled>
                                    <option value="#" selected disabled>Kecamatan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control select2" id="desa" name="desa" disabled>
                                    <option value="#" selected disabled>Kelurahan/Desa</option>
                                </select>
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
</div>s