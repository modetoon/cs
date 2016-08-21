
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $title;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12 right">
					<p class="text-right"><button type="button" class="btn btn-info text-right" onclick="window.location.href='<?php echo site_url('admin/cropcalendar_lists/');?>';">Back to  Cropcalendar</button> <button type="button" class="btn btn-success text-right" onclick="window.location.href='<?php echo site_url('admin/chart_add/'.$calendar_id);?>';">Add Chart Table</button></p>
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
                                            <th width="12%">Brand Image</th>
                                            <th>BarTitleName</th>
                                            <th>Left Margin</th>
                                            <th>Width</th>
                                            <th>Color Class</th>
                                            <th>Position</th>
                                            <th width="15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach($result as $r){
                                            echo '<tr>
                                                <td><img src="'. site_url('upload/cropcalendar/'.$r->BrandImage).'" width="90%"></td>
                                                <td>'.$r->BarTitleName.'</td>
                                                <td>'.$r->BarColorClass.'</td>
                                                <td>'.$r->BarMarginLeft.' %</td>
                                                <td>'.$r->BarWidth.' %</td>
                                                <td>'.$r->Position.' </td>
                                                <td class="center">
                                                    <a href="'.site_url("admin/cropcalendar/edit_chart/$r->CalendarID/$r->SubCalendarID").'" class="btn btn-warning btn-xs">Edit</a>&nbsp;
                                                    <a href="'.site_url("admin/cropcalendar/delete_chart/$r->CalendarID/$r->SubCalendarID").'" class="btn btn-danger btn-xs">Delete</a>
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
