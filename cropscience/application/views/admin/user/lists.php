
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $title;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12 right">
                    <p class="text-right"><button type="button" class="btn btn-success text-right" onclick="window.location.href='<?php echo site_url('admin/user_add');?>';">Add User</button></p>
                </div>
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <?php echo $title;?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">

                                <table class="table table-striped table-bordered table-hover" id="ListTable">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Role</th>
                                            <th>UserName</th>
                                            <th>FullName</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach($result as $r){
                                            echo '<tr>
                                                <td><input type="checkbox" value="'.$r->UserID.'"></td>
                                                <td>'.$r->UserType.'</td>
                                                <td>'.$r->UserName.'</td>
                                                <td>'.$r->FullName.'</td>
                                                <td>'.$r->Email.'</td>
                                                <td class="center">
                                                    <a href="'.site_url("admin/user/edit/$r->UserID").'" class="btn btn-warning btn-xs">Edit</a>&nbsp;
                                                    <a href="'.site_url("admin/user/delete/$r->UserID").'" class="btn btn-danger btn-xs">Delete</a>
                                                </td>
                                            </tr>';                                       
                                        }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
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

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>resource/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>resource/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>resource/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {

        $('#ListTable').DataTable({
                responsive: true
        });
        
    });
    </script>

</body>

</html>
