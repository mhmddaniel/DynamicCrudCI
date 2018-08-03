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
                        <h3><a href="<?php echo base_url('Applicant'); ?>"><?php echo $applicant_count; ?></a></h3>

                        <p>Jumlah Pemohon</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3><a href="<?php echo base_url('Company'); ?>"><?php echo $company_count; ?></a></h3>

                        <p>Jumlah Usaha</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-building"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Pengajuan Baru</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-files-o"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Izin Terdaftar</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-files-o"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Izin Menunggu Konfirmasi</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-files-o"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>0</h3>

                        <p>Izin Kadaluarsa</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-files-o"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>s