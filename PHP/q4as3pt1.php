<?php
	//q4as3pt1.php : Write a program in PHP to split a file into 2 output files
	$file1=$_POST["file1"];
	$file2=$_POST["file2"];
	$file3=$_POST["file3"];
	$n=filesize($file1); //$n= size of input file
	$fp1=fopen($file1,'r');
	$fp2=fopen($file2,'w');
	$fp3=fopen($file3,'w');
	echo "<body bgcolor=#00aa55>";
	echo "<font face=times new roman size=6 color=black>";
	$data=fread($fp1,$n); //Reading entire file data in $data
	$n1=intval($n/2);
	$n2=$n-$n1;
	$data1=substr($data,0,$n1);
	$data2=substr($data,$n1,$n2);
	fwrite($fp2,$data1); //Writing data in 1st output file
	fwrite($fp3,$data2); //Writing data in 2nd output file
	echo "File Split is Over..."."<br>";
	echo "Size of ".$file1."=".$n." Bytes"."</br>";
	echo "Size of ".$file2."=".$n1." Bytes"."</br>";
	echo "Size of ".$file3."=".$n2." Bytes"."</br>";
	fclose($fp1);
	fclose($fp2);
	fclose($fp3);
?>