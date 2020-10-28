<?php

$dbhost="localhost";
$dbname="standes";
$username="root";
$password="";
$db=new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);


function Get_Categories(){
	global $db;
	$categ=$db->query("SELECT * FROM categories ");
	return $categ;
}


function Get_Product(){
	global $db;
	$prod=$db->query("SELECT * FROM products");
	return $prod;
}
function Get_Category_Id($id){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID=$id");
	foreach ($categ as $categories) {
		return $categories;
	}	
}
?>
