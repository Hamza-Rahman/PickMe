<?php

if(isset($_POST['hierid']) == true){

    $name = $_POST['hierid'];

   	mysql_connect('localhost', 'root', '');
   	mysql_select_db('cars');


    $query1 = mysql_fetch_assoc(mysql_query("SELECT * FROM hire WHERE hire_id = '".mysql_escape_string($name)."'")); //find the selected id

     $v = $query1['start_time']; //selected id start time
     $v2 = $query1['end_time'];  //selected id end time

     //echo $v.' ';

     $query2 = mysql_query("SELECT start_time FROM hire WHERE start_time ='".$v."' AND status = 1 "); // selected id check start time    

     function sureToApprove($id){
      header('Location:try.php?id=$id&action=1');

     }


	    if( mysql_num_rows($query2) > 0){  //if find any duplicate 

	        echo 'It is Time CLASH ..!!  Want to Approve ..??';
	    } else{

        //sureToApprove($name);
        echo "It is Available for Approve..!!  Want to Approve..??";

      }

    }
?>


