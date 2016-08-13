
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


										<?php echo form_open_multipart('admin/slider_add');?>

                                        <input type="hidden" name="ID" value="<?php echo (isset($result)) ? $result->SliderID: ''; ?>">
                                                                       

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Slider TopLine</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="SliderTopLine" value="<?php echo (isset($result)) ? $result->SliderTopLine: set_value('SliderTopLine'); ?>"></div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Slider HeadLine</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="SliderHeadLine" value="<?php echo (isset($result)) ? $result->SliderHeadLine: set_value('SliderHeadLine'); ?>"></div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Slider Detail</label></div>
                                                <div class="col-lg-9"><textarea class="form-control" name="SliderDetail" rows="5"><?php 
                                                    echo (isset($result)) ? $result->SliderDetail: set_value('SliderDetail'); ?></textarea></div>
                                            </div>
                                        </div> 
						
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Slider Link</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="SliderLink" value="<?php 
                                                    echo (isset($result)) ? $result->SliderLink: set_value('SliderLink'); ?>"></div>
                                            </div>
                                        </div> 

										<div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Slider Image</label></div>
                                                <div class="col-lg-9"><input type="file" name="sliderimage" size="20" value="<?php 
                                                    echo (isset($result)) ? $result->SliderImage: set_value('sliderimage'); ?>" />
													<br />
													<?php if((isset($result)) && ($result->SliderImage != '')){?>
														<img src="<?php echo site_url('upload/banner/'.$result->SliderImage);?>" width="100%">
													<?php }?>
													</div>
                                            </div>
                                        </div> 		

                                        <div class="form-group">
                                            <label>Status</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="Status" id="Status1" value="1" checked>Active
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="Status" id="Status2" value="0" <?php 
                                                    echo ((isset($result)) && ($result->Status == 0)) ? "checked": ""; ?>>UnActive
                                            </label>
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
