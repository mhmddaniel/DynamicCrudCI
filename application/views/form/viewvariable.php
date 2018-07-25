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
                        <h3 class="box-title">Daftar <?php echo $title;?></h3>
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
<!---->
<!--                            <div class="mailbox-controls pull-right">-->
<!--                                <a href="--><?php
//                                if (!empty($form)) echo base_url('Form/Subformadd/'.$form[0]->form_id); ?><!--"><button type="submit" class="btn btn-primary">Tambah<i class="fa fa-plus"></i></button></a>-->
<!--                            </div>-->
                            <div class="form-group">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Inputan</th>
                                        <th>Jenis Inputan</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <?php
                                    $i=1;
                                    foreach ($input as $value) { ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $value->variable_name;?></td>
                                        <td><?php echo $value->variable_type;?></td>
                                        <td>
                                            <a href="#" class="label bg-aqua"> Edit <i class="fa fa-edit"></i></a>
                                            <a href="#" class="label bg-red"> Hapus <i class="fa fa-trash"></i></a>
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