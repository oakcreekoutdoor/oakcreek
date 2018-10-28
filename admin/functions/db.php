<?php
function dbConnect()
{
	$con = mysqli_connect("192.185.103.161","rheajuar_12","123456","rheajuar_oakcreek");
	if ( mysqli_connect_errno())
	{
		echo "Cannot connect to database.";
	}
	return $con;
}

function runDeleteSQL($sql)
{
	$con = dbConnect();
	
	mysqli_query($con, $sql);
	mysqli_close($con);

}

function runSQL($sql)
{
	$con = dbConnect();
	
	mysqli_query($con, $sql);
	mysqli_close($con);

}

function runInsertSQL($sql)
{
	$con = dbConnect();
	
	mysqli_query($con, $sql);
	$lastID = mysqli_insert_id($con);
	mysqli_close($con);

	return $lastID;
}

function getGlobalValue($record)
{
	$arrGlobalValue = runSelectSQL("SELECT * FROM siteglobals WHERE strName='".$record."'");
	return $arrGlobalValue[0]["strValue"];
}

function runSelectSQL($sql)
{
	$con = dbConnect();
	$queryResultArray = array();

	$result = mysqli_query($con, $sql);
	
	while ($arrResultRow=mysqli_fetch_assoc($result))
	{
		$queryResultArray[] = $arrResultRow;
	}

	mysqli_close($con);

	return $queryResultArray;
}

function uploadFile($whichFile)
{
	$directory = "../assets";
	$serverLocationAndName = $directory."/".$_FILES[$whichFile]["name"];
	move_uploaded_file($_FILES[$whichFile]["tmp_name"], $serverLocationAndName);

	return $_FILES[$whichFile]["name"];
}

?>