<?php

$host = "localhost";
$username = "root";
$password = "";

$db = "testPHP";

$conn = mysqli_connect($host, $username, $password, $db) or die('connection error');

// // create database if not esits
// $query = "create database if not exists $db";

// mysqli_query($conn,$query) or die("con't create database");

// $query = "USE $db";

// mysqli_query($conn,$query) or die(" database dones not selected");

// 		$query = "CREATE TABLE IF NOT EXISTS `phonesDirectory` ( 
// 			`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT , 
// 			`name` VARCHAR(100) NOT NULL , 
// 			`phone` VARCHAR(25) NOT NULL , 
// 			`user_id` INT UNSIGNED NOT NULL,
// 			`created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP , 
// 			`updated_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP , 
// 			PRIMARY KEY (`id`)
// 			-- FOREIGN KEY (user_id) REFERENCES customers(id) 
// 			) ENGINE = InnoDB
// 			";
		
// 		mysqli_query($conn, $query) or die("con't create phonesDirectory table". mysqli_error($conn));
// // $query = "CREATE TABLE `users` (
// // 	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
// // 	`user_id` int(10) unsigned NOT NULL ,
// // 	`email` varchar(255) NOT NULL,
// // 	`username` varchar(255) NOT NULL,
// // 	`password` varchar(255) NOT NULL,
// // 	`created_at` timestamp NULL DEFAULT current_timestamp(),
// // 	`updated_at` timestamp NULL DEFAULT current_timestamp(),
// // 	PRIMARY KEY (`id`),
// // 	-- CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `phonedirectory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
// //    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4";


// $query="CREATE TABLE IF NOT EXISTS `users` ( 
// 	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
// 	`email` VARCHAR(255) NOT NULL , 
// 	`username` VARCHAR(255) NOT NULL , 
// 	`password` VARCHAR(255) NOT NULL , 
// 	`created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP , 
// 	`updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP , 
// 	PRIMARY KEY (`id`)) ENGINE = InnoDB";
// mysqli_query($conn, $query) or die("con't create users table". mysqli_error($conn));

// header('Location: register.php');
 ?>