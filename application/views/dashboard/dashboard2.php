<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
<!--            --><?php //echo $title; ?>
            Dashboard
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
                        <h3 class="box-title">Isi Data Permohonan</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?php echo form_open(base_url("index.php").'/form/add'); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="form_name">Nama Lengkap Pemohon</label>
                                <input type="text" class="form-control" id="form_name" name="form_name" placeholder="Masukkan nama form" required>
                            </div>
                            <div class="form-group">
                                <label for="subform_count">Nomor KTP Pemohon</label>
                                <input type="number" class="form-control" id="subform_count" name="subform_count" placeholder="Masukkan jumlah subform" required>
                            </div>
                            <div class="form-group">
                                <label for="form_name">Kewarganegaraan</label>
                                <input type="text" class="form-control" id="form_name" name="form_name" placeholder="Masukkan nama form" required>
                            </div>
                            <div class="form-group">
                                <label for="form_name">Alamat</label>
                                <input type="text" class="form-control" id="form_name" name="form_name" placeholder="Masukkan nama form" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Daftar Riwayat Hidup</label>
                                <input type="file" id="exampleInputFile">

                                <p class="help-block">(lampirkan daftar riwayat hidup).</p>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Lanjut</button>
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