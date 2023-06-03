<!--137931 Trevor Waweru ICS (2B)-->
<!DOCTYPE html>
<html>
    <head>
        <title>User records</title>
        <link rel="stylesheet" type="text/css" href="user_records.css">
    </head>
    <body>
        <table>
            <thead>
                <th>User ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Gender</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Password</th>
                <th>Is Deleted?</th>
            </thead>
            <tbody>
                 <?php
                 require_once("usersdb.php");
                 foreach ($test as $key => $value){
             ?>
             <tr>
                 <td><?php echo $value["userID"] ?></td>
                 <td><?php echo $value["fName"] ?></td>
                 <td><?php echo $value["lName"] ?></td>
                 <td><?php echo $value["sex"] ?></td>
                 <td><?php echo $value["phone_number"] ?></td>
                 <td><?php echo $value["email"] ?></td>
                 <td><?php echo $value["password"] ?></td>
                 <td><?php echo $value["isDeleted"] ?></td>
                 <td><a href="edit_users.php">Edit</a></td>
             </tr>
             <?php }
             ?>
         </tbody>
        </table>
        <br>
        <br>
        <a class="button" href="admin_menu.php">RETURN TO MENU</a>
    </body>
</html>

