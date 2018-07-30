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
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Pengajuan Baru</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>53</h3>

                        <p>Izin Terdaftar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Izin Menunggu Konfirmasi</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Izin Kadaluarsa</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <!-- left column -->
            <div class="col-md-10">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tampikan Data</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?php echo form_open(base_url("index.php").'/form/add'); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="input_count">Pilih Variabel</label>
                                <!--                                <input type="number" class="form-control" id="variable_count[]" name="variable_count[]" required"-->
                                <!--                                       placeholder="Masukkan jumlah subform">-->
                                <select class="form-control">
                                    <option>Nama Pemohon</option>
                                    <option>Jenis Usaha</option>
                                    <option>Jumlah Karyawan</option>
                                    <option>Lokasi Usaha</option>
                                    <option>Tanggal Habis Izin</option>
                                </select>
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nama Pemohon</th>
                                        <th>Nomer KTP</th>
                                        <th>Alamat</th>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>Arjun</td>
                                        <td>09856985059890284
                                        </td>
                                        <td>
                                            Ilir Barat 1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Ari</td>
                                        <td>
                                            40589682345435367
                                        </td>
                                        <td>
                                            Ilir Timur 1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Juanda</td>
                                        <td>
                                            34645645665767676
                                        </td>
                                        <td>
                                            Sebrang Ulu
                                        </td>
                                    </tr>
                                </table>
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