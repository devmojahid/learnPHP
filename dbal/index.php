<?php 

require "vendor/autoload.php";


//..
$connectionParams = [
    'dbname' => 'bank_final',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'mysqli',
];
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);
try {
	if($conn->connect()){
		echo "cnneted \n";

		$query = $conn->createQueryBuilder();

		// echo $conn->insert('department',['DEPT_ID'=>7 , 'NAME'=>'mojahid']);

		// echo $conn->update('department',['NAME'=>"tawhid"],['DEPT_ID'=>7]);

		echo $conn->delete('department',['DEPT_ID'=>5]);
	}
} catch (Exception $e) {
	echo $e;
}