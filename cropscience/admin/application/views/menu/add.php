
         <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $title;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $title;?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">

                                        <?php $error =  validation_errors(); 
                                            if($error){
                                                echo '<div class="alert alert-danger">'.$error.'</div>';
                                            }
                                        ?>


                                        <?php echo form_open('menu/add') ?>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Menu Parent</label></div>
                                                <div class="col-lg-9">
                                                    <select class="form-control">
                                                        <?php
                                                        foreach($menu_parent as $parent){
                                                            echo '<option value="'.$parent->MenuID.'">'.$parent->MenuNameEN;
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>                                    
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Menu Name (EN)</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="menuname_en" value="<?php echo set_value('menuname_en'); ?>"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Menu Name (TH)</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="menuname_th" value="<?php echo set_value('menuname_th'); ?>"></div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Text area</label></div>
                                                <div class="col-lg-9"><textarea class="form-control" rows="3" cols="50"></textarea></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>Active
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">UnActive
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                


                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>resource/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>resource/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>resource/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>resource/dist/js/sb-admin-2.js"></script>


</body>

</html>
