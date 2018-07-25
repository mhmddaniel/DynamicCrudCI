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
                        <h3 class="box-title">Tambahkan Subform <?php print_r($form_name); ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?php echo form_open(base_url("Form/Addsubform")); ?>
                    <div class="box-body">

                        <div class="form-group">
                            <input type="hidden" class="form-control" id="form_id" name="form_id" value="<?php echo $primary_key?>" required>
                        </div>
                        <?php
                        for($i=1;$i<=$subform_count;$i++) {
                            ?>
                            <div class="form-group">
                                <label for="subform_name">Nama Subform <?php echo $i; ?></label>
                                <input type="text" class="form-control" id="subform_name[]" name="subform_name[]" required"
                                       placeholder="Masukkan nama form">
                            </div>
                            <div class="form-group">
                                <label for="input_count">Jumlah Inputan Subform <?php echo $i; ?></label>
                                <input type="number" class="form-control" id="variable_count[]" name="variable_count[]" required"
                                       placeholder="Masukkan jumlah subform">
                            </div>
                            <?php
                        }
                        ?>
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