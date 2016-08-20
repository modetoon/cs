
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
                                            if(isset($upload_error)){
                                                echo '<div class="alert alert-danger">'.$upload_error.'</div>';
                                            }
                                        ?>


										<?php echo form_open_multipart('admin/chart_add');?>

                                        <input type="hidden" name="ID" value="<?php echo (isset($result)) ? $result->SubCalendarID: ''; ?>">

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Crop Calendar</label></div>
                                                <div class="col-lg-9"><?php echo $cropcalendar_name;?></div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Bar Title Name</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="BarTitleName" value="<?php echo (isset($result)) ? $result->BarTitleName: set_value('BarTitleName'); ?>"></div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Tag Name</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="BarTagName" value="<?php echo (isset($result)) ? $result->BarTagName: set_value('BarTagName'); ?>"></div>
                                            </div>
                                        </div> 

										<div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>ColorClass</label></div>
                                                <div class="col-lg-9">
													<select class="form-control" name="BarColorClass">
															<option value="">Please Select
															<option value="percent-blue" <?php echo (isset($result) && $result->BarColorClass == 'percent-blue') ? 'selected': '' ; ?>>Blue
															<option value="percent-orange" <?php echo (isset($result) && $result->BarColorClass == 'percent-orange') ? 'selected': '' ; ?>>Orange
															<option value="percent-violet" <?php echo (isset($result) && $result->BarColorClass == 'percent-violet') ? 'selected': '' ; ?>>Violet
													</select>
												</div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Margin Left</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="BarMarginLeft" value="<?php echo (isset($result)) ? $result->BarMarginLeft: set_value('BarMarginLeft'); ?>"></div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Bar Width</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="BarWidth" value="<?php echo (isset($result)) ? $result->BarWidth: set_value('BarWidth'); ?>"></div>
                                            </div>
                                        </div> 


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Brand Image</label></div>
                                                <div class="col-lg-9"><input type="file" name="brandimage" size="20" />
													<br />
													<?php if((isset($result)) && ($result->BrandImage != '')){?>
														<img src="<?php echo site_url('upload/cropcalendar/'.$result->BrandImage);?>" width="20%">
													<?php }?>
												</div>
                                            </div>
                                        </div> 		


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Position</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="Position" value="<?php echo (isset($result)) ? $result->Position: set_value('Position'); ?>"></div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
											<div class="row">
												   <div class="col-lg-3"> <label>Status</label></div>
													<div class="col-lg-9">
															<label class="radio-inline">
																<input type="radio" name="Status" id="Status1" value="1" checked>Active
															</label>
															<label class="radio-inline">
																<input type="radio" name="Status" id="Status2" value="0" <?php 
																	echo ((isset($result)) && ($result->Status == 0)) ? "checked": ""; ?>>UnActive
															</label>
													</div>
											</div>
                                        </div>

                                        <button type="submit" class="btn btn-primary" id="btn-save">Save</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    <?php echo form_close(); ?>
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


	<!-- CKEditor -->
	<script src="<?php echo base_url();?>resource/ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url();?>resource/ckeditor/samples/js/sample.js"></script>
	<script>

	$("#btn-save").click(function(e) {
		var myContent = CKEDITOR.instances.editor.getData();
		var myContent2 = CKEDITOR.instances.editor2.getData();
		$('#Detail').val(myContent);
		$('#Suggestion').val(myContent2);
	});

		initSample();
		var data = CKEDITOR.instances.editor.getData();
		var data2 = CKEDITOR.instances.editor2.getData();
	</script>
	<!-- CKEditor -->

</body>

</html>
