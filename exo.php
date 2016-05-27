<?php
	$filename = 'exo.php';
	if (file_exists($filename)) {
	    echo "$filename a été modifié le : " . date ("F d Y H:i:s.", filemtime($filename));
	}


	if(isset($_GET['sub_delete'])){
		$delete=$_GET['file'];

		unlink($delete);

	}

	if(isset($_GET['sub_rename'])){
		$ancienNom=$_GET['file'];
		$nouveauNom=$_GET['rename'];
		rename ( $ancienNom , $nouveauNom);
	}
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>plop</h1>
	<p>francis est grand</p>
	<p><strong>francis a repeint mon parbrise :(</strong></p>
	<form action="#" method="get" accept-charset="utf-8">
		<input type="text" name="file" value="" placeholder="dossier a effacer">
		<button type="submit" name='sub_delete'>effacer</button>
	
	
		<input type="text" name="rename" value="" placeholder="dossier a renomer">
		<button type="submit" name='sub_rename'>renomer</button>
	</form>
</body>
</html>