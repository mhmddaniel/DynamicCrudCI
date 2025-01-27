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
                            <div class="has-feedback">
                                <input type="text" class="form-control input-sm" placeholder="Cari Form">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Form</th>
                                        <th>Jumlah Pengajuan</th>
                                        <th>Jumlah Diterima</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <?php
                                    $i=1;
                                    foreach ($form as $value) { ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $value->form_name;?></td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>
                                            <a href="#" class="label bg-light-blue"> Lihat <i class="fa fa-list-ol"></i></a>
                                            <a href="<?php echo base_url("Submission/Submitform/".$value->form_id) ?>" class="label bg-aqua"> Tambah <i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                    $i+=1;
                                    } ?>
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
</div>s