<?php
	if(!file_exists('..\amazonOrder.csv')){
		echo "Downloading new reports..." . PHP_EOL;
		require_once('downloadReports.php');
		
		if(file_exists('..\amazonReportTemp.txt')){
			echo PHP_EOL . "Converting new reports..." . PHP_EOL;
			require_once('convertReports.php');
			
			unlink('..\amazonReportTemp.txt');
		}
		else{
			echo "No temp reports file available!";
			exit(0);
		}
	}
	else{
		echo "CSV file already exists!";
		exit(0);
	}
	
	