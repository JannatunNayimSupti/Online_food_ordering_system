<?php
    require_once('../php/session_header.php');
    require_once('../service/userService.php');
?>
<!DOCTYPE html>
<php>
<head>
  <title></title>
  <style type="text/css">
    *{
    margin: 0;
    box-sizing: border-box;
    padding: 0; 
    }
    #ber{
        background-color: #333;
        margin: 0;
        padding: 0;
    }
    body{
        opacity: 0.8;
         background-color: #F0F8FF;
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    .nav{
    text-decoration: none;
    background-color:       #008080;    
    display: block;
    color: white;
    text-align: center;
    padding: 30px 50px;
    
    }
    #sber{
        background-color: #333;
        opacity: 0.8;
    }
    .nav1{
        text-decoration: none;  
        display: block;
        color: white;
        text-align: center;
        padding: 5px 48px;
    }
    a:hover{
        background-color:       #008B8B;
    }
  </style>
  
</head>
<body>
  <table border="1">
  <tr >
    <td colspan="2" width="100%" height="30px" id="ber">
        <div style="background-color:       #008080; padding: 10px 46px; float: left;">
            <h1>Food Fight</h1>
            <h2>Restaurant</h2>
        </div>
        <a class="nav" style="float: right;" href="profile.php">userName<?=$_SESSION['username']?></a>
        <a class="nav" style="float: right;" href="../php/logout.php">Logout</a>
    </td>
  </tr>

  <tr>
    <td height="555px" width="18%" align="center" id="sber" rowspan="2">
        <ul id="nav1">
            <li><a class="nav1" href="dashBoard.php"> Dashboard </a></li>
             <li><a class="nav1" href="profile.php"> View Profile </a></li>
             <li><a class="nav1" href="picture.php"> Change Profile Picture </a></li>
            <li><a class="nav1" href="change_password.php"> Change Password </a></li>
            <li><a   class="nav1" href="menu.php"> Add Item </a> </li>
           <li><a  class="nav1" href="itemlist.php"> Item List </a> </li>
            <li><a  class="nav1" href="order.php"> Order List </a> </li>
            <li><a  class="nav1" href="set_discount.php"> Total Served price </a> </li>
            
        </ul>
    </td>
	<td>
        <fieldset>
        <legend><b> Item List</b></legend>
        <form action="../php/menucheck.php" method="post" >
        <table border="1" width="100%">
        <tr>
            <td>ID</td>
            <td>Item Name</td>
            <td>Item Price</td>
            <td>Item Picture</td>
            <td>Item Detail</td>
            <td>Item Category</td>
            <td>Item Status</td>
            <td>Action</td>
        </tr>

        <?php  
            $items = getAllitem();
            for ($i=0; $i != count($items); $i++) {  ?>
        <tr>
            <td><?=$items[$i]['i_id']?></td>
            <td><?=$items[$i]['i_name']?></td>
            <td><?=$items[$i]['i_price']?></td>
            <td><img src=" ../img/<?=$items[$i]['i_picture']?> " height="50px" width="100px"></td>
            <td><?=$items[$i]['i_detail']?></td>
            <td><?=$items[$i]['i_category']?></td>
            <td><?=$items[$i]['i_status']?></td>
            <td>
                <a href="itemedit.php?id=<?=$items[$i]['i_id']?>">Edit</a> |
                <a href="itemdelete.php?id=<?=$items[$i]['i_id']?>">Delete</a> 
            </td>
        </tr>
        <?php } ?>
        </table>
        </form>
        </fieldset>
    </td>
  </tr>
  <tr>
      <td style="background-color: teal;">
        
            <table border="1" width="100%">
            <tr>
                <td colspan="4" align="center" size="30%">
                    <input type="text" name="itemName" id="itemName" placeholder="Search Item Name.." onkeyup="itemData();">
                </td>
            </tr>
              <tr>
                <td>ID</td>
                <td>Item Name</td>
                <td>Item Price</td>
                <td>Item Detail</td>
            </tr>
            <tbody id="show">
            
            </tbody>
          </table>
        </form>
          
      </td>
  </tr>

</table>
<script type="text/javascript" src="../assets/itemlist.js"></script>


</body>
</html>