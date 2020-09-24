<?php
require_once('../php/session_header.php');
require_once('../service/userService.php');
if (isset($_GET['id'])) {
    $user = getUsersByID($_GET['id']); 
}else{
    header('location: editProfile.php');
  }
?>
<html>
    <head>
        <title>My Profile</title>
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
    background-color:     #008080;  
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
      background-color:#008B8B;
    }
  </style>
  <script type="text/javascript" src="../assets/editprofile.js">


  </script>
    </head>
    
    <body>
      
       <table >
  <tr >
    <td colspan="2" width="100%" height="30px" id="ber">
        <div style="background-color:       #008080; padding: 10px 46px; float: left;">
            <h1>Food Fight</h1>
            <h3>Restaurant</h3>
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
  <td width="60%">
    <form action="../php/userController.php" method="post" onsubmit="return validate()">
            <fieldset>
                <legend> <h4> PROFILE </h4> </legend>
              <form>
                <br/>
                <table cellpadding="7" cellspacing="0">
                  
                        <tr><td colspan="3"><hr/></td></tr> 
                         <tr>
                            <td><h4> Name </h4></td>
                            <td>:</td>
                            
                            <td> <input type="text" id="name" name="name" value="<?=$user['name']?>"
                              onkeyup="removern()"></td>
                            <td id="nmsg"></td>
                        </tr>        
                        <tr>
                            <td><h4> User Name </h4></td>
                            <td>:</td>
                            
                            <td> <input type="text" id="username" name="username" value="<?=$user['username']?>" onkeyup="removerun()"></td>
                            <td id="unmsg"></td>
                        </tr>   
                        <tr><td colspan="3"><hr/></td></tr>         
                  <tr><td colspan="3"><hr/></td></tr>
                  <tr>
                    <td><h4> Email </h4></td>
                    <td>:</td>
                            
                    <td><input type="text" id="email" name="email" value=" <?=$user['email']?>" onkeyup="removeremail()"></td>
                            <td id="emsg"></td>
                  </tr>   
                  
                </table>  
                    <hr/>
                     <input type="hidden" name="id" value="<?=$user['id']?>">
                    <input type="submit" name="editprofile" value="Update">
                     
              </form>
            </fieldset>
        </form>
  </td>
  <tr>
    <td colspan="2" align="center">copyright@2017</td>
  </tr>
</table>
          
       
        
    </body>
</html>
