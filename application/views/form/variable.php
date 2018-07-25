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
                        <h3 class="box-title">Tambahkan Input Subform  <?php print_r($subform->subform_name); ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?php echo form_open(base_url("Form/Addvariable")); ?>
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="subform_id" name="subform_id" value="<?php echo $subform->subform_id?>" required>
                        </div>
                        <?php
                        for($i=1;$i<=$subform->variable_count;$i++) {
                            ?>
                            <div class="form-group">
                                <label for="input_name">Nama Inputan <?php echo $i; ?></label>
                                <input type="text" class="form-control" id="input_name[]" name="input_name[]" required placeholder="Masukkan nama inputan">
                            </div>
                            <div class="form-group">
                                <label for="input_type">Jenis Inputan <?php echo $i; ?></label>
                                <select id="input_type[]" name="input_type[]" class="form-control">
                                    <?php for($j=0;$j<count($input_type);$j++) { ?>
                                    <option value="<?php echo $input_type[$j]->type_name;?>"><?php echo $input_type[$j]->input_value?></option>
                                    <?php } ?>
                                </select>
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