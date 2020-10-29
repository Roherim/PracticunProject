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
function Get_Product1(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='1'");
	return $prod;
}
function Get_Product2(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='2'");
	return $prod;
}
function Get_Product3(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='3'");
	return $prod;
}
function Get_Product4(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='4'");
	return $prod;
}
function Get_Product5(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='5'");
	return $prod;
}
function Get_Product6(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='6'");
	return $prod;
}
function Get_Product7(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='7'");
	return $prod;
}
function Get_Product8(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='8'");
	return $prod;
}
function Get_Product9(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='9'");
	return $prod;
}
function Get_Product10(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='10'");
	return $prod;
}
function Get_Product11(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='11'");
	return $prod;
}
function Get_Product12(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='12'");
	return $prod;
}
function Get_Product13(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='13'");
	return $prod;
}
function Get_Product14(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='14'");
	return $prod;
}
function Get_Product15(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='15'");
	return $prod;
}
function Get_Product16(){
	global $db;
	$prod=$db->query("SELECT * FROM products WHERE IDproduct='16'");
	return $prod;
}
function Get_Categories1(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='1' ");
	return $categ;
}
function Get_Categories2(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='2' ");
	return $categ;
}
function Get_Categories3(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='3' ");
	return $categ;
}
function Get_Categories4(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='4' ");
	return $categ;
}
function Get_Categories5(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='5' ");
	return $categ;
}
function Get_Categories6(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='6' ");
	return $categ;
}
function Get_Categories7(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='7' ");
	return $categ;
}
function Get_Categories8(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='8' ");
	return $categ;
}
function Get_Categories9(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='9' ");
	return $categ;
}
function Get_Categories10(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='10' ");
	return $categ;
}
function Get_Categories11(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='11' ");
	return $categ;
}
function Get_Categories12(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='12' ");
	return $categ;
}
function Get_Categories13(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='13' ");
	return $categ;
}
function Get_Categories14(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='14' ");
	return $categ;
}
function Get_Categories15(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='15' ");
	return $categ;
}
function Get_Categories16(){
	global $db;
	$categ=$db->query("SELECT * FROM categories WHERE CategoryID='16' ");
	return $categ;
}

?>
