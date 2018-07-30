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
            else if ($this->session->userdata('userdata')->category == "operator")
            {
            ?>
                <li>
                    <a href="<?php echo base_url('Submission'); ?>">
                        <i class="fa fa-file-text-o"></i> <span>Pengajuan</span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>