<?php
require 'connection.php';
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

 													Page to let the admin view his inventory. Implemented by Abhinav Tripathi

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
$query = "SELECT * FROM `frames` WHERE 1";

if($query_run = mysql_query($query)){
//echo 'Hello';
	for($i=0;$i<mysql_num_rows($query_run);$i++){
	$run = mysql_fetch_array($query_run);
	$fid = $run['frameid'];
	$fname = $run['fname'];
	$color = $run['color'];
	$type = $run['ftype'];
	$base = $run['baseprice'];
	$stock = $run['stock'];
	//returning the table data
		echo '<tr>
                  <td>'.$fid.'</td>
                  <td>'.$fname.'</td>
                  <td>'.$color.'</td>
                  <td>'.$type.'</td>
                  <td>'.$base.'</td>
                  <td>'.$stock.'</td>
              </tr>';

	}

}

?>