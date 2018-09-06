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
                                <label for="nik">NIK / Nomor Identitas</label>
                                <input type="text" class="form-control" id="nik_search" name="nik_search" value="<?php echo $company->nik_pemohon;?>" disabled>
                            </div>
                        </div>
                    <?php echo form_open(base_url("Company/Edit"),array('id'=>'companyEditForm','method'=>'post')); ?>
                    <div class="box-body">

                        <input type="hidden" class="form-control" id="id_perusahaan" name="id_perusahaan" value="<?php echo $company->id_perusahaan?>">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="nik_pemohon" name="nik_pemohon"  value="<?php echo $company->nik_pemohon;?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_perusahaan">Nama Perusahaan</label>
                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan" value="<?php echo $company->nama_perusahaan;?>" required>
                        </div>


                        <div class="form-group">
                            <label for="nama_perusahaan">Merek Dagang</label>
                            <input type="text" class="form-control" id="merek_dagang" name="merek_dagang" value="<?php echo $company->merek_dagang;?>" placeholder="Merek Dagang" required>
                        </div>

                        <div class="form-group">
                            <label for="nama_perusahaan">Industri Pariwisata</label>
                            <select class="form-control select2" id="industri_pariwisata" name="industri_pariwisata">
                                <option value="#" selected disabled>Industri Pariwisata</option>
                                <?php foreach ($industries as $industry) { ?>
                                    <option value="<?php echo $industry->form_name; ?>" <?php if($industry->form_name == $company->industri_pariwisata) echo "selected"; ?>><?php echo $industry->form_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="nama_perusahaan">Sub Kategori Industri</label>
                            <input type="text" class="form-control" id="sub_pariwisata" name="sub_pariwisata"  value="<?php echo $company->sub_pariwisata;?>" placeholder="Sub Kategori Industri" required>
                        </div>

                        <div class="form-group">
                            <label for="npwp">Nomor Pokok Wajib Pajak</label>
                            <input type="number" class="form-control" id="npwp" name="npwp" value="<?php echo $company->npwp;?>" placeholder="Nomor Pokok Wajib Pajak" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis_perusahaan">Jenis Perusahaan</label>
                            <select class="form-control select2" id="jenis_perusahaan" name="jenis_perusahaan">
                                <option value="#" selected disabled>Jenis Perusahaan</option>
                                <option value="PT" <?php if("PT" == $company->jenis_perusahaan) echo "selected";?>>PT</option>
                                <option value="CV" <?php if("CV" == $company->jenis_perusahaan) echo "selected";?>>CV</option>
                                <option value="Perorangan" <?php if("Perorangan" == $company->jenis_perusahaan) echo "selected";?>>Perorangan</option>
                                <option value="Koperasi" <?php if("Koperasi" == $company->jenis_perusahaan) echo "selected";?>>Koperasi</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="status_perusahaan">Status Perusahaan</label>
                            <select class="form-control select2" id="status_perusahaan" name="status_perusahaan">
                                <option value="#" selected disabled>Status Perusahaan</option>
                                <option value="Pusat" <?php if("Pusat" == $company->status_perusahaan) echo "selected";?>>Pusat</option>
                                <option value="Cabang" <?php if("Cabang" == $company->status_perusahaan) echo "selected";?>>Cabang</option>
                                <option value="Perwakilan <?php if("Perwakilan" == $company->status_perusahaan) echo "selected";?>">Perwakilan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kegiatan_utama">Kegiatan Utama</label>
                            <input type="text" class="form-control" id="kegiatan_utama" name="kegiatan_utama" value="<?php echo $company->kegiatan_utama;?>" placeholder="Kegiatan Utama" required>
                        </div>

                        <div class="form-group">
                            <label for="alamat_perusahaan">Alamat Perusahaan</label>
                            <input type="text" class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" value="<?php echo $company->alamat_perusahaan;?>" placeholder="Alamat Perusahaan" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control select2" id="kecamatan" name="kecamatan" onchange="loadArea()">
                                <option value="#" selected disabled>Kecamatan</option>
                                <?php foreach ($districs as $distric) { ?>
                                    <option value="<?php echo $distric->kode; ?>" <?php if($distric->kode == $company->kecamatan) echo "selected";?>><?php echo $distric->nama; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select2" id="desa" name="desa">
                                <option value="#" selected disabled>Kelurahan/Desa</option>
                                <?php foreach ($areas as $area) { ?>
                                    <option value="<?php echo $area->kode; ?>" <?php if($area->kode == $company->desa) echo "selected";?>><?php echo $area->nama; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <label for="nama_notaris">Akte Pendirian</label>

                        <div class="form-group">
                            <label for="alamat_perusahaan">Nama Notaris</label>
                            <input type="text" class="form-control" id="nama_notaris" name="nama_notaris" value="<?php echo $company->nama_notaris;?>" placeholder="Nama Notaris" required>
                        </div>
                        <div class="form-group">
                            <label for="nomor_akte">Nomor Akte</label>
                            <input type="text" class="form-control" id="nomor_akte" name="nomor_akte" value="<?php echo $company->nomor_akte;?>" placeholder="Nomor Akte Pendirian" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_akte">Tanggal Akte</label>
                            <input type="date" class="form-control" id="tanggal_akte" name="tanggal_akte" value="<?php echo $company->tanggal_akte;?>" placeholder="Tanggal Akte Pendirian">
                        </div>

                        <label for="nama_notaris_perubahan">Akte Perubahan</label>

                        <div class="form-group">
                            <label for="alamat_perusahaan">Nama Notaris</label>
                            <input type="text" class="form-control" id="nama_notaris_perubahan" name="nama_notaris_perubahan" value="<?php echo $company->nama_notaris_perubahan;?>" placeholder="Nama Notaris">
                        </div>
                        <div class="form-group">
                            <label for="nomor_akte">Nomor Akte</label>
                            <input type="text" class="form-control" id="nomor_akte_perubahan" name="nomor_akte_perubahan" value="<?php echo $company->nomor_akte_perubahan;?>" placeholder="Nomor Akte Perubahan">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_akte">Tanggal Akte</label>
                            <input type="date" class="form-control" id="tanggal_akte_perubahan" name="tanggal_akte_perubahan" value="<?php echo $company->tanggal_akte_perubahan;?>" placeholder="Tanggal Akte Perubahan">
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
