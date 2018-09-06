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
                        <h3 class="box-title"><?php echo $title;?></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?php echo form_open(base_url("Applicant/Edit")); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nik">Nomor Identitas</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" required value="<?php echo $applicant->nik;?>">
                            </div>

                            <div class="form-group">
                                <label for="nama_pemohon">Nama Pemohon</label>
                                <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Masukkan Nama Pemohon" required value="<?php echo $applicant->nama_pemohon;?>">
                            </div>


                            <div class="form-group">
                                <label for="nama_pemohon">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required value="<?php echo $applicant->tempat_lahir;?>">
                            </div>


                            <div class="form-group">
                                <label for="nama_pemohon">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" required value="<?php echo $applicant->tanggal_lahir;?>">
                            </div>

                            <div class="form-group">
                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="kewarganegaraan" name="kewarganegaraan" value="Warga Negara Indonesia" <?php if($applicant->kewarganegaraan == "Warga Negara Indonesia") echo "checked";?>>
                                        Warga Negara Indonesia
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="kewarganegaraan" name="kewarganegaraan" value="Warga Negara Asing" <?php if($applicant->kewarganegaraan == "Warga Negara Asing") echo "checked";?>>
                                        Warga Negara Asing
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" <?php if($applicant->jenis_kelamin == "Laki-laki") echo "checked";?>>
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" <?php if($applicant->jenis_kelamin == "Perempuan") echo "checked";?>>
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required  value="<?php echo $applicant->alamat;?>">
                            </div>
                            <div class="form-group">
                                <select class="form-control select2" id="provinsi" name="provinsi" onchange="loadCity()">
                                    <option value="#" selected disabled>Provinsi</option>
                                    <?php foreach ($provinces as $province) { ?>
                                    <option value="<?php echo $province->kode; ?>" <?php if($province->kode == $applicant->provinsi) echo "selected";?>><?php echo $province->nama; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control select2" id="kota" name="kota" onchange="loadDistrict()">
                                    <option value="#" selected disabled>Kabupaten/Kota</option>
                                    <?php foreach ($cities as $city) { ?>
                                        <option value="<?php echo $city->kode; ?>" <?php if($city->kode == $applicant->kota) echo "selected";?>><?php echo $city->nama; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control select2" id="kecamatan" name="kecamatan" onchange="loadArea()">
                                    <option value="#" selected disabled>Kecamatan</option>
                                    <?php foreach ($districs as $distric) { ?>
                                        <option value="<?php echo $distric->kode; ?>" <?php if($distric->kode == $applicant->kecamatan) echo "selected";?>><?php echo $distric->nama; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control select2" id="desa" name="desa">
                                    <option value="#" selected disabled>Kelurahan/Desa</option>
                                    <?php foreach ($areas as $area) { ?>
                                        <option value="<?php echo $area->kode; ?>" <?php if($area->kode == $applicant->desa) echo "selected";?>><?php echo $area->nama; ?></option>
                                    <?php } ?>
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
</div>