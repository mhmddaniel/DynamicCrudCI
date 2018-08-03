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
                        <h3 class="box-title">Isi <?php echo $title;?> <?php print_r($form_name); ?></h3>
                        <div class="box-tools pull-right">
                            <div class="has-feedback">
                                <input type="text" class="form-control input-sm" placeholder="Cari Form">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                                    <?php
                                    $i=0;
                                    foreach ($subform as $value) { ?>
                                        <?php echo form_open(base_url("Form/Addsubform")); ?>
                                        <div class="box-body">

                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="form_id" name="form_id" value="<?php echo $primary_key?>" required>
                                            </div>
                                            <div class="form-group">
                                            <label ><?php echo ($i+1).". ".$value->subform_name; ?></label>
                                            </div>
                                            <?php
                                            foreach ($variable[$i] as $var) {
                                                ?>
                                                <div class="form-group">
                                                    <label for="subform_name"><?php echo $var->variable_name; ?></label>
                                                    <input type="<?php echo $var->variable_type; ?>" class="form-control" id="<?php echo $var->variable_id; ?>"
                                                           name="<?php echo $var->variable_id; ?>" required placeholder="Masukkan <?php echo $var->variable_name; ?>">
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <!-- /.box-body -->
                                        </form>
                                    <?php
                                    $i+=1;
                                    } ?>


                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>s