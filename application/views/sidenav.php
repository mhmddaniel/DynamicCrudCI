<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="<?php echo base_url(); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <?php if ($this->session->userdata('userdata')->category == "admin") { ?>
                <li>
                    <a href="<?php echo base_url('Form'); ?>">
                        <i class="fa fa-files-o"></i> <span>Form</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('User'); ?>">
                        <i class="fa fa-user"></i> <span>User</span>
                    </a>
                </li>
                <?php
            }
                ?>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>Pelaku Usaha</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('Applicant/Create'); ?>">
                        <i class="fa fa-circle-o"></i> <span>Input Pelaku Usaha</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('Applicant'); ?>">
                        <i class="fa fa-circle-o"></i> <span>Laporan Pelaku Usaha</span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-building"></i> <span>Industri Wisata</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Company/Create'); ?>">
                        <i class="fa fa-circle-o"></i> <span>Input Industri Wisata</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Company'); ?>">
                        <i class="fa fa-circle-o"></i> <span>Laporan Industri Wisata</span>
                    </a>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file-text-o"></i> <span>Pendaftaran Perijinan</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="<?php echo base_url('Submission'); ?>">
                                <i class="fa fa-circle-o"></i> <span>Input Pendaftaran Perijinan</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Submission'); ?>">
                                <i class="fa fa-circle-o"></i> <span>Perijinan Dalam Proses</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Submission'); ?>">
                                <i class="fa fa-circle-o"></i> <span>Perijinan Disetujui</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Submission'); ?>">
                                <i class="fa fa-circle-o"></i> <span>Perijinan Ditolak</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Submission'); ?>">
                                <i class="fa fa-circle-o"></i> <span>Perijinan Terlamabat</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Submission'); ?>">
                                <i class="fa fa-circle-o"></i> <span>Perijinan Kadaluarasa</span>
                            </a>
                        </li>
                    </ul>
                </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>