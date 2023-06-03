<!--137931 Trevor Waweru ICS (2B)-->
<!DOCTYPE html>
<html>
    <head>
        <title>Girl Products Inventory</title>
        <link rel="stylesheet" type="text/css" href="display_girls.css">
    </head>
    <body>
        <table>
            <thead>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Size</th>
                <th>Product Colour</th>
                <th>Product Image</th>
                <th>Product Unit Price</th>
                <th>Product Quantity</th>
                <th>Category ID</th>
                <th>Sub-category ID</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Is deleted</th>
            </thead>
            <tbody>
                 <?php
                 require_once("girlsdb.php");
                 foreach ($test as $key => $value){
             ?>
             <tr>
                 <td><?php echo $value["productID"] ?></td>
                 <td><?php echo $value["productName"] ?></td>
                 <td><?php echo $value["productDescription"] ?></td>
                 <td><?php echo $value["productSize"] ?></td>
                 <td><?php echo $value["productColour"] ?></td>
                 <td><?php echo $value["productImage"] ?></td>
                 <td><?php echo $value["productUnitPrice"] ?></td>
                 <td><?php echo $value["productQuantity"] ?></td>
                 <td><?php echo $value["categoryID"] ?></td>
                 <td><?php echo $value["subCategoryID"] ?></td>
                 <td><?php echo $value["createdAT"] ?></td>
                 <td><?php echo $value["updatedAT"] ?></td>
                 <td><?php echo $value["isDeleted"] ?></td>
                 <td><button>Add to cart</button></td>
             </tr>
             <?php }
             ?>
         </tbody>
        </table>
    </body>
</html>

