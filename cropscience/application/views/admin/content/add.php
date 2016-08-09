
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
                        <div class="alert alert-info">
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


                                        <?php echo form_open('admin/content_add') ?>

                                        <input type="hidden" name="ID" value="<?php echo (isset($result)) ? $result->ContentID: ''; ?>">
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Menu</label></div>
                                                <div class="col-lg-9">
                                                    <?php echo $menu_dropdownlist;?>
                                                </div>
                                            </div>
                                        </div>          
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Template</label></div>
                                                <div class="col-lg-9">
                                                    <?php echo $template_dropdownlist;?>
                                                </div>
                                            </div>
                                        </div>    

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Content Name (EN)</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="ContentNameEN" value="<?php echo (isset($result)) ? $result->ContentNameEN: set_value('ContentNameEN'); ?>"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Content Name (TH)</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="ContentNameTH" value="<?php echo (isset($result)) ? $result->ContentNameTH: set_value('ContentNameTH'); ?>"></div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Slug</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="Slug" value="<?php echo (isset($result)) ? $result->Slug: set_value('Slug'); ?>"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Url</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="Url" value="<?php echo (isset($result)) ? $result->Url: set_value('Url'); ?>" readonly></div>
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Page Title Name (EN)</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="PageTitleEN" value="<?php echo (isset($result)) ? $result->PageTitleEN: set_value('PageTitleEN'); ?>"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Page Title Name (TH)</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="PageTitleTH" value="<?php echo (isset($result)) ? $result->PageTitleTH: set_value('PageTitleTH'); ?>"></div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Page Headline (EN)</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="PageHeadlineEN" value="<?php echo (isset($result)) ? $result->PageHeadlineEN: set_value('PageHeadlineEN'); ?>"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Page Headline (TH)</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="PageHeadlineTH" value="<?php echo (isset($result)) ? $result->PageHeadlineTH: set_value('PageHeadlineTH'); ?>"></div>
                                            </div>
                                        </div>    
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12"><label>Content (EN)</label></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <textarea name="content" class="editor" id="editor">
                                                    <?php echo (isset($result)) ? $result->ContentEN: set_value('ContentEN'); ?>
                                                    </textarea>
                                                    <input type="hidden" name="ContentEN" id="ContentEN">
                                                </div>
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12"><label>Content (TH)</label></div>
                                            </div>
                                        </div>    
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <textarea name="content" class="editor" id="editor2">
                                                    <?php echo (isset($result)) ? $result->ContentTH: set_value('ContentTH'); ?>
                                                    </textarea>
                                                    <input type="hidden" name="ContentTH" id="ContentTH">
                                                </div>
                                            </div>
                                        </div>                                         
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Meta Keyword (EN)</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="MetaKeywordEN" value="<?php echo (isset($result)) ? $result->MetaKeywordEN: set_value('MetaKeywordEN'); ?>"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Meta Keyword (TH)</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="MetaKeywordTH" value="<?php echo (isset($result)) ? $result->MetaKeywordTH: set_value('MetaKeywordTH'); ?>"></div>
                                            </div>
                                        </div>   
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Meta Description (EN)</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="MetaDescriptionEN" value="<?php echo (isset($result)) ? $result->MetaDescriptionEN: set_value('MetaDescriptionEN'); ?>"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Meta Description (TH)</label></div>
                                                <div class="col-lg-9"><input class="form-control" name="MetaDescriptionTH" value="<?php echo (isset($result)) ? $result->MetaDescriptionTH: set_value('MetaDescriptionTH'); ?>"></div>
                                            </div>
                                        </div>                                                                                                                          
                                        <div class="form-group">
                                            <div class="row">
                                            <div class="col-lg-3"><label>Show Left Menu</label></div>
                                            <div class="col-lg-9">
                                                <label class="radio-inline">
                                                    <input type="radio" name="ShowLeftMenu" id="ShowLeftMenu1" value="1" checked>Yes
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="ShowLeftMenu" id="ShowLeftMenu2" value="0" <?php 
                                                        echo ((isset($result)) && ($result->ShowLeftMenu == 0)) ? "checked": ""; ?>>No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3"><label>Status</label></div>
                                                <div class="col-lg-9"><label class="radio-inline">
                                                    <input type="radio" name="Status" id="Status1" value="1" checked>Active
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="Status" id="Status2" value="0" <?php 
                                                        echo ((isset($result)) && ($result->Status == 0)) ? "checked": ""; ?>>UnActive
                                                </label>
                                                </div>
                                        </div>

                                        <br />
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
        $('#ContentEN').val(myContent);
        $('#ContentTH').val(myContent2);
    });

        initSample();
    </script>
    <!-- CKEditor -->

</body>

</html>
