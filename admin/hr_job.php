<?php
include "checksession.php";
?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
</head>
<?php include"header_name_hr.php"; ?>
        <section>         
            <!--##/nosearch##--> 
            
            <div class="unit size-col-d-admin">
              <h1>Job</h1>
              <div class="form-horizontal">
    <?php
	include "../config/connect.php";
	///////////////// Pagination //////////////////////
	echo '<div class="navLinks"><p>';
	$chkpage=$_GET[chkpage];
	$perpage=$_GET[perpage];
	$refsh=$_GET[refsh];
	if ($chkpage=='' or $chkpage<0)$chkpage=1;
	if ($perpage=='')$perpage=10;
	if ($refsh==1)echo '<meta HTTP-EQUIV="REFRESH" content="0; url=admin_job.php?chkpage='.$chkpage.'&perpage='.$perpage.'">';
	
	$sql="select * from tb_job order by id_job ASC";
	$result=mysql_db_query($dbname,$sql);
	$count=0;
	while($cs=mysql_fetch_array($result)) {
		$count++;
	}
	$nextpage=$chkpage+$perpage;
	$prepage=$chkpage-$perpage;
	$chkpage2=(int)($chkpage/10+0.9);
	if ($chkpage==1 && $count>$nextpage){
		echo '<a href="hr_job.php?chkpage='.$nextpage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a>';
	}else if($chkpage==1 && $count<$nextpage){
	}else if($chkpage>((int)(($count+9)/10))*10-$perpage){
		echo '<a href="hr_job.php?chkpage='.$prepage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a>';
	}else{
		echo '<a href="hr_job.php?chkpage='.$prepage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <a href="hr_job.php?chkpage='.$nextpage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a>';
	}
	echo '</p></div>';
	///////////////////////////////////////////////
	$sql="select * from tb_job order by id_job ASC";
	$result=mysql_db_query($dbname,$sql);
	$number=mysql_num_rows($result);
	$no=1;
	if($number<>0) {
	echo"	
	<table class='table txtR'>
                <colgroup>
                <col width='5%'>
                <col width='40%'>
                <col width='10%'>
                <col width='10%'>
                <col width='10%'>
                <col width='15%'>
				<col width='10%'>
                </colgroup>
                <tbody>
                  <tr>
                    <th class='txtL' colspan='7'>Lists of all jobs</th>
                  </tr>
                  <tr class='borderblue'>
                    <td>No.</td>
                    <td class='em'>Jobs</td>
					<td >Edit</td>
					<td >Delete</td>
                  </tr>";
			while($rs=mysql_fetch_array($result)) {
			$id_job=$rs[id_job] ;
			$job_name=$rs[job_name] ;
			$chkshow++;
			if ($chkshow >= $chkpage2*10-9 && $chkshow <= ($chkpage2+($perpage/10-1))*10){ //////////add for page
			echo"
					<tr> 
					<td>$no</td>
					<td class='em'>$job_name</td>
					<td><a href=\"hr_job_edit.php?id_edit=$id_job\"> Edit</a></td>
					<td><a href=\"hr_job_delete.php?id_del=$id_job\"   onclick=\" return confirm ('Click OK if you want to delete $job_name from you data. ')\"  > Delete</a></td>
					</tr>" ;
			}
					$no++;
			}
				echo"</table>";
				mysql_close();
	}
	?>
					</div>
			<div class="spacer"></div>
            <div class="spacer"><p>Show per page <select id="selectbox" name="" onchange="javascript:location.href = this.value;">
     <?php
	 echo '<option value="" selected>Select</option>';
    echo '<option value="hr_job.php?chkpage='.$chkpage.'&perpage=10">10</option>';
    echo '<option value="hr_job.php?chkpage='.$chkpage.'&perpage=20">20</option>';
    echo '<option value="hr_job.php?chkpage='.$chkpage.'&perpage=30">30</option>';
	?>
</select></p></div><!--//////////add for page-->

</div>
			<!--##/Right Menu##--> 
			<aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Add Job</h1>
                <hr>
                <div class="mlnk"><a href="hr_job_add.php">Add new job</a></div>
              </div>
              
            </aside>
            <!--##/END-Right Menu##-->

        </section>
<?php include"footer.php"; ?>  