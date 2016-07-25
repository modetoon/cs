<?php	if ( isset ($_GET['id'] ) ) {
			$id = $_GET['id'] ; 
			$table_name = $_GET['table'] ;
			$column_name = $_GET['column'] ;
			
			$dblink = mysqli_connect( "localhost", "kitti", "ktp", "dbKTPBOOK" ) ;
		
			$sqlPic = "SELECT Picture, PictureType FROM $table_name WHERE $column_name = '$id' " ;
			$resultPic = mysqli_query( $dblink, $sqlPic ) ;
			$rowPic = mysqli_fetch_array( $resultPic ) ;
			mysqli_close( $dblink ) ;
				
			header( "Content-type: " . $rowPic["PictureType"] ) ;
			echo $rowPic["Picture"] ;
		}   ?>