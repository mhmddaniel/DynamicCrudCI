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
                        <h3 class="box-title">Tambahkan User</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?php echo form_open(base_url("User/Add")); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="username">Nama User</label>
                                <input type="text" class="form-control" id="useralias" name="useralias" placeholder="Masukkan nama user" required>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan passoword" required>
                            </div>
                            <div class="form-group">
                                <label for="category">Kategori User</label>
                                <select id="category" name="category" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="operator">Operator</option>
                                    <option value="kepala_bidang">Kepala Bidang</option>
                                    <option value="kepala_seksi">Kepala Seksi</option>
                                    <option value="kepala_dinas">Kepala Dinas</option>
                                </select>
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
</div>s