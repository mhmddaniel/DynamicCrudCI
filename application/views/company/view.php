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
                            <a href="<?php echo base_url('Company/Create'); ?>"><button type="submit" class="btn btn-primary">Tambah <?php echo $title; ?> <i class="fa fa-plus"></i></button></a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">
                                <table id="companytable" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Usaha</th>
                                        <th>Jenis Usaha</th>
                                        <th>Industri Pariwisata</th>
                                        <th>Status Usaha</th>
                                        <th>Kegiatan Utama</th>
                                        <th>Tanggal Akte</th>
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
                                        <td><?php echo $value->nama_perusahaan;?>
                                        <td><?php echo $value->jenis_perusahaan;?></td>
                                        <td><?php echo $value->industri_pariwisata;?></td>
                                        <td><?php echo $value->status_perusahaan;?></td>
                                        <td><?php echo $value->kegiatan_utama;?></td>
                                        <td><?php echo $value->tanggal_akte;?></td>
                                        <td><?php echo $value->last_update;?></td>
                                        <td>
                                            <?php echo form_open(base_url("#")); ?>
                                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $value->id?>">
                                            <button type="submit" class="btn btn-block btn-success btn-xs"><i class="fa fa-history"></i> Riwayat</button>
                                            </form>
                                            <?php echo form_open(base_url("Company/Update")); ?>
                                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $value->id?>">
                                            <button type="submit" class="btn btn-block btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</button>
                                            </form>
                                            <?php if ($this->session->userdata('userdata')->category == "admin") { ?>
                                                <?php echo form_open(base_url("Company/Delete")); ?>
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
                                        <th>Nama Usaha</th>
                                        <th>Jenis Usaha</th>
                                        <th>Industri Pariwisata</th>
                                        <th>Status Usaha</th>
                                        <th>Kegiatan Utama</th>
                                        <th>Tanggal Akte</th>
                                        <th>Terakhir Diubah</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
