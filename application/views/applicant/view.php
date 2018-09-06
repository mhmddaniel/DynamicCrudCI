<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $title; ?>
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<!--            <li class="active">--><?php //echo $title; ?><!--</li>-->
            <li class="active">Dashboard</li>
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
                        <h3 class="box-title">Daftar <?php echo $title; ?></h3>
                        <div class="box-tools pull-right">
                            <a href="<?php echo base_url('Applicant/Create'); ?>"><button type="submit" class="btn btn-primary">Tambah <?php echo $title; ?> <i class="fa fa-plus"></i></button></a>
                        </div>
                    </div>
                    <div class="box box-primary collapsed-box">
                        <div class="box-header">
                            <h2 class="box-title">
                            </h2>

                            <div class="box-tools pull-right">
                                <span>Pencarian Khusus </span>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="form-group">
                                <div class="row col-md-6">
                                <select class="form-control select2" id="jenis_kelamin" name="jenis_kelamin" onchange="loadTable('jenis_kelamin')">
                                    <option value="#" selected disabled>Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <select class="form-control select2" id="tempat_lahir" name="tempat_lahir" onchange="loadTable('tempat_lahir')">
                                    <option value="#" selected disabled>Tempat Lahir</option>
                                    <option value="Palembang">Palembang</option>
                                    <option value=" ! 'Palembang'">Luar Palembang</option>
                                </select>
                                </div>
                                <div class="row col-md-6">
                                <select class="form-control select2" id="usia" name=usia" onchange="loadUsia('usia')">
                                    <option value="#" selected disabled>Rentang Usia</option>
                                    <option value="0,25"> < 25 Tahun </option>
                                    <option value="25,35"> 25 Tahun s/d 35 Tahun </option>
                                    <option value="35,45"> 35 Tahun s/d 45 Tahun </option>
                                    <option value="45,55"> 45 Tahun s/d 55 Tahun </option>
                                    <option value="55,65"> 55 Tahun s/d 65 Tahun </option>
                                    <option value="65,95"> > 65 Tahun </option>
                                </select>
                                <select class="form-control select2" id="kewarganegaraan" name="kewarganegaraan" onchange="loadTable('kewarganegaraan')">
                                    <option value="#" selected>Kewarganegaraan</option>
                                    <option value="Warga Negara Indonesia">Warga Negara Indonesia</option>
                                    <option value="Warga Negara Asing">Warga Negara Asing</option>
                                </select>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="row col-md-6">

                            <select class="form-control select2" id="provinsi" name="provinsi" onchange="loadCity()">
                                    <option value="#" selected disabled>Provinsi</option>
                                    <?php foreach ($provinces as $province) { ?>
                                        <option value="<?php echo $province->kode; ?>"><?php echo $province->nama; ?></option>
                                    <?php } ?>
                                </select>
                                <select class="form-control select2" id="kota" name="kota" onchange="loadDistrict()" disabled>
                                    <option value="#" selected disabled>Kabupaten/Kota</option>
                                </select>
                            </div>
                                <div class="row col-md-6">

                                <select class="form-control select2" id="kecamatan" name="kecamatan" onchange="loadArea()" disabled>
                                    <option value="#" selected disabled>Kecamatan</option>
                                </select>
                                <select class="form-control select2" id="desa" name="desa" disabled>
                                    <option value="#" selected disabled>Kelurahan/Desa</option>
                                </select>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">
                                <table id="applicanttable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Identitas</th>
                                        <th>Nama Pemohon</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Kewarganegaraan</th>
                                        <th>Terakhir Diubah</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=1;
                                    foreach ($user as $value) { ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $value->nik?></td>
                                        <td><?php echo $value->nama_pemohon?></td>
                                        <td><?php echo $value->jenis_kelamin;?>
                                        <td><?php echo $value->tempat_lahir;?>
                                        <td><?php echo $value->tanggal_lahir;?>
                                        <td><?php echo $value->kewarganegaraan;?></td>
                                        <td><?php echo $value->last_update;?></td>
                                        <td>
                                            <?php echo form_open(base_url("#")); ?>
                                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $value->id?>">
                                            <button type="submit" class="btn btn-block btn-success btn-xs"><i class="fa fa-history"></i> Riwayat</button>
                                            </form>
                                        <?php echo form_open(base_url("Applicant/Update")); ?>
                                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $value->id?>">
                                            <button type="submit" class="btn btn-block btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</button>
                                        </form>
                                            <?php if ($this->session->userdata('userdata')->category == "admin") { ?>
                                                <?php echo form_open(base_url("Applicant/Delete")); ?>
                                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $value->nik?>">
                                                <button type="submit" class="btn btn-block btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</button>
                                                </form>
                                                <?php
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                    $i+=1;
                                    } ?>
                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Identitas</th>
                                        <th>Nama Pemohon</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Kewarganegaraan</th>
                                        <th>Terakhir Diubah</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
<!--                    <div class="overlay" id="overlay">-->
<!--                        <i class="fa fa-refresh fa-spin"></i>-->
<!--                    </div>-->
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>s