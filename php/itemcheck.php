
<?php
    require_once("../service/userService.php");

    if(isset($_POST['itemName'])){


        $itemName = $_POST['itemName'];


        $getALL = searchAllitem($itemName);


        echo printAll($getALL);    
    }


    function printAll($getList){
        $doc = "" ;
        foreach ($getList as $item)
         {
            $doc .= "<tr>".
            "<td>{$item['i_id']}</td>".
            "<td>{$item['i_name']}</td>".
            "<td>{$item['i_price']}</td>".
            "<td>{$item['i_detail']}</td>".
        "</tr>";
        }
        return $doc;
    }
?>
