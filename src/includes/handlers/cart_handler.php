<?php

$itemCount = 0;
public function addItemToCart()
{
	if (isset($_GET['id']))
	{
		$result = $this->insertIntoCart($_GET['id'], $this->itemCount += 1);
		return $result;
	} else return false;
}

private function insertIntoCart($pd, $q)
{
	global $con;
	$result = mysqli_query($con, "INSERT INTO Products (prod_name, quantity)
							VALUES ('$pd','$q');");
	
	return $result;
}