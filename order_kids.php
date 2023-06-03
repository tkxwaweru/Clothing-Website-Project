<?php
session_start();
require_once("shopcontrol.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["productQuantity"])) {
			$products = $db_handle->runQuery("SELECT * FROM products WHERE productID='".$_GET["productID"] ."'");
			$itemArray = array($products[0]["productID"]=>array('productID'=>$products[0]["productID"], 'productName'=>$products[0]["productName"], 
            'productUnitPrice'=>$products[0]["productUnitPrice"], 'productQuantity'=>$_POST["productQuantity"],
            'productImage'=>$products[0]["productImage"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($products[0]["productID"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($products[0]["productID"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["productQuantity"])) {
									$_SESSION["cart_item"][$k]["productQuantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["productQuantity"] += $_POST["productQuantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["productID"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<html>
<head>
<TITLE>SHOP MENS</TITLE>
<link href="orders.css" type="text/css" rel="stylesheet" />
</head>
<body>
<form method="POST" action="process_kids_cart.php">
<?php
include("process_user_login.php");
echo $_SESSION['email']
?>
<div id="shopping-cart">
<div class="txt-heading">My cart</div>

<a id="btnEmpty" href="order_kids.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_productQuantity = 0;
    $total_productUnitPrice = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">product ID</th>    
<th style="text-align:left;">Name</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="20%">Unit Price</th>
<th style="text-align:right;" width="20%">Total Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	

<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $total = $item["productQuantity"]*$item["productUnitPrice"];
		?>
				<tr>
                <td><?php
				$id = $item["productID"];
				 echo $id;
				 ?></td>    
				<td><?php $image= $item["productImage"]?>
				<img class="cart-item-productImage" src="<?php echo $image; ?>">
                <br>
                <?php 
				$name = $item["productName"];
				echo $name; 
				?></td>
				<td style="text-align:right;">
				<?php
				$quantity = $item["productQuantity"];
				 echo $quantity;
				?></td>
				<td  style="text-align:right;">
				<?php 
				$u_price = "Ksh ".$item["productUnitPrice"];
				echo $u_price; 
				?></td>
                <td  style="text-align:right;">
				<?php 
				$s_total = "Ksh ". number_format($total,2);
				echo $s_total; 
				?></td>
				<td style="text-align:center;"><a href="order_mens.php?action=remove&productID=<?php echo $item["productID"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_productQuantity += $item["productQuantity"];
				$total_productUnitPrice += ($item["productUnitPrice"]*$item["productQuantity"]);
		}
		?>
<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_productQuantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "Ksh ".number_format($total_productUnitPrice, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>
<input type="submit" class="f_button" name="checkout" value="PROCEED TO CHECKOUT"></input>
</form>
<br>
<div id="product-grid">
	<div class="txt-heading">Available products: Mens</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM products WHERE categoryID IN (3,4) ORDER BY productID ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="order_mens.php?action=add&productID=<?php echo $product_array[$key]["productID"]; ?>">
			<div class="product-productImage"><img src="<?php echo $product_array[$key]["productImage"];?>" style='width: 300px; height: 270px;'></div>
			<div class="product-tile-footer">
			<div class="product-title" style="text-align:center;"><?php echo $product_array[$key]["productName"]; ?></div>
			<div class="product-productUnitPrice" style="text-align:center;"><?php echo "Ksh ".$product_array[$key]["productUnitPrice"]; ?></div><br>
            <label>Quantity: </label>
			<div class="cart-action"><input type="text" class="product-quantity" name="productQuantity" value="1" size="2" /><br><br>
            <input type="submit" value="ADD TO CART" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
</div>
</body>
</HTML>