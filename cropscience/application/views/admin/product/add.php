
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


										<?php echo form_open_multipart('admin/product_add');?>

                                        <input type="hidden" name="ID" value="<?php echo (isset($result)) ? $result->ProductID: ''; ?>">
                                        
										<!-- <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Main Category</label></div>
                                                <div class="col-lg-9">
                                                    <?php echo $menu_dropdownlist;?>
                                                </div>
                                            </div>
                                        </div>   -->
                                                                       

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Trade Name (TH)</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="TradeName" value="<?php echo (isset($result)) ? $result->TradeName: set_value('TradeName'); ?>"></div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Common Name (TH)</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="CommonName" value="<?php echo (isset($result)) ? $result->CommonName: set_value('CommonName'); ?>"></div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Formula</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="Formula" value="<?php 
                                                    echo (isset($result)) ? $result->Formula: set_value('Formula'); ?>"></div>
                                            </div>
                                        </div> 
                                        <!-- <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Detail</label></div>
                                                <div class="col-lg-9"><textarea class="form-control" name="Detail" rows="5"><?php 
                                                    echo (isset($result)) ? $result->Detail: set_value('Detail'); ?></textarea></div>
                                            </div>
                                        </div>    -->     
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-9"><label>Detail</label></div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
														<!-- <div id="editor"><?php echo (isset($result)) ? $result->Detail: set_value('Detail'); ?></div>	 -->
														<textarea name="content" class="editor" id="editor"><?php echo (isset($result)) ? $result->Detail: set_value('Detail'); ?></textarea>
														<input type="hidden" name="Detail" id="Detail">
												</div>
                                            </div>
                                        </div>									
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Contain</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="Contain" value="<?php 
                                                    echo (isset($result)) ? $result->Contain: set_value('Contain'); ?>"></div>
                                            </div>
                                        </div> 

                                       <!--  <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Suggestion</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="Suggestion" value="<?php 
                                                    echo (isset($result)) ? $result->Suggestion: set_value('Suggestion'); ?>"></div>
                                            </div>
                                        </div>  -->

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-9"><label>Suggestion</label></div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
														<textarea name="content" class="editor" id="editor3"><?php echo (isset($result)) ? $result->Suggestion: set_value('Suggestion'); ?></textarea>
														<input type="hidden" name="Suggestion" id="Suggestion">
											</div>
                                            </div>
                                        </div>         


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Warning</label></div>
                                                <div class="col-lg-9"><textarea class="form-control" name="Warning" rows="5"><?php 
                                                    echo (isset($result)) ? $result->Warning: set_value('Warning'); ?></textarea></div>
                                            </div>
                                        </div>       
										
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Dangerous No</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="DangerousNo" value="<?php 
                                                    echo (isset($result)) ? $result->DangerousNo: set_value('DangerousNo'); ?>"></div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-9"><label>Benefit</label></div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
													<!-- <textarea class="form-control" name="Suggestion" rows="5"><?php 
                                                    echo (isset($result)) ? $result->Suggestion: set_value('Suggestion'); ?></textarea> -->
														<textarea name="content" class="editor" id="editor2"><?php echo (isset($result)) ? $result->Benefit: set_value('Benefit'); ?></textarea>
														<input type="hidden" name="Benefit" id="Benefit">
											</div>
                                            </div>
                                        </div>         

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Remark</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="Remark" value="<?php 
                                                    echo (isset($result)) ? $result->Remark: set_value('Remark'); ?>"></div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Product Image</label></div>
                                                <div class="col-lg-9"><input type="file" name="image" size="20" />
													<br />
													<?php if((isset($result)) && ($result->Image != '')){?>
														<img src="<?php echo site_url('upload/'.$result->Image);?>" width="20%">
													<?php }?>
												</div>
                                            </div>
                                        </div> 		
										
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Brand Image</label></div>
                                                <div class="col-lg-9"><input type="file" name="brandimage" size="20" />
													<br />
													<?php if((isset($result)) && ($result->BrandImage != '')){?>
														<img src="<?php echo site_url('upload/'.$result->BrandImage);?>" width="20%">
													<?php }?>												
												</div>
                                            </div>
                                        </div> 			

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Status</label></div>
												<div class="col-lg-3">
														<label class="radio-inline">
															<input type="radio" name="Status" id="Status1" value="1" checked>Active
														</label>
														<label class="radio-inline">
															<input type="radio" name="Status" id="Status2" value="0" <?php 
																echo ((isset($result)) && ($result->Status == 0)) ? "checked": ""; ?>>UnActive
														</label>
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
		var myContent3 = CKEDITOR.instances.editor3.getData();
		$('#Detail').val(myContent);
		$('#Benefit').val(myContent2);
		$('#Suggestion').val(myContent3);
	});

		initSample();
		var data = CKEDITOR.instances.editor.getData();
		var data2 = CKEDITOR.instances.editor2.getData();
		var data3 = CKEDITOR.instances.editor3.getData();
	</script>
	<!-- CKEditor -->

</body>

</html>
