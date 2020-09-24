<?php
require_once('../php/session_header.php');
if (isset($_GET['error']))
{
    if ($_GET['error'] == 'db_error') {
        echo "Something went wrong ......Try again";
    }
}
?>

<!DOCTYPE html>

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
  <script type="text/javascript" src="../assets/menuvalidate.js"></script>
</head>
<table>
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
    <td height="555px" width="18%" align="center" id="sber">
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
   <table width="100%" cellpadding="0" cellspacing="0">        
    <form action="../php/userController.php" method="post" onsubmit="return val()">
         <fieldset>
    <legend><b>Add Item</b></legend>
    <section align="center">
       <!--  i_id`, `i_name`, `i_detail`, `i_price`, `i_picture`, `i_category`, `i_status` -->
    
        <img src="<?= $_POST['picture'] ?>" align="center"  height="128px" width="128px">
        <p><input type="file" id="i_picture" name="i_picture" onclick="removerpicture()"></p>
        <div  id="picturemsg"></div>

        <hr/>
        <hr>
        <h4>Item Name</h4>
    
        <input type="text" id="i_name" name="i_name" onkeyup="removeri_name()" >
        <div id="inamemsg" ></div>
        
        <hr>
         <h4>Item Details</h4>
    
        <input type="text" id="i_detail" name="i_detail" onkeyup="removeri_detail()" >
        <div id="idetailmsg" ></div>
        
        <hr> <h4>Item Price</h4>

        <input type="text" id="i_price" name="i_price" onkeyup="removeri_price()">
        <hr>
         <div id="ipricemsg" ></div>
         <hr> <h4>Item Category</h4>

        <input type="text" id="i_category" name="i_category" onkeyup="removeri_category()">
        <hr>
         <div id="icatemsg" ></div>
        

        <input type="hidden" name="itemid" value="<?=$_COOKIE['id']?>">
        <div align="right">
            <input type="submit" name="addItem" value="ADD">
        </div>



    </section>
</fieldset>
</form>
    <tr>
        <td colspan="2" align="center">copyright@2017</td>
    </tr>
</table>

</body>
</html>