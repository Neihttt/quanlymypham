<?php       
       require_once("server.php");
       
        $malh=$_POST['malh'];
		$tenlh=$_POST['tenlh'];   
		$manhom=$_POST['manhom'];    
	
        $sql="update loaihang set tenlh='".$tenlh."',manhom='".$manhom."' where MALH='".$malh."'";
        
            if (mysqli_query($conn, $sql)) {
				if(mysqli_affected_rows($conn)>0){
					
                $res["success"] = 1; //{success:1} //thanh cong
				}
				else{
					$res["success"] = 0; //{success:0} //that bai
				}
            } else {
                $res["success"] = 0; //{success:0}  //that bai
            }
        
        echo json_encode($res);
		//echo $sql;
        mysqli_close($conn);
?>