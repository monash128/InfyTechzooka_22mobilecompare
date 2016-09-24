<?php
   $dbhost = '192.168.24.159';
   $dbuser = 'mysql';
   $dbpass = 'pass';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
  $voice_p=$_REQUEST['voice_data'];
	$data_p=$_REQUEST['data_data'];
	$sms_p=$_REQUEST['sms_data'];

	

   $sql = "SELECT vmins,3gdata,sms  FROM Prepaid where vmins='$voice_p' or 3gdata='$data_p' or sms='$sms_p'";

   mysql_select_db('techzooka');
   $r = mysql_query( $sql, $conn );
   
   if(! $r ) {
      die('Could not get data: ' . mysql_error());
   }
   	$flag=array();
   
	while($row=mysql_fetch_assoc($r))
	{
		$flag[]=$row;
		
	}
	 
	print(json_encode($flag));
	mysql_close($conn);
   
   echo "Fetched data successfully\n";
   

?>
