function val(){
  var itemName=document.getElementById('i_name').value;
  var itemName1=false;
  if (itemName == "")
  {
    document.getElementById('inamemsg').innerHTML="Must be filled up";
    itemName1 = false;
  }
  else
  {
    document.getElementById('inamemsg').innerHTML="";
    itemName1=true;
  } 

  var itemdetail=document.getElementById('i_detail').value;
  var itemdetail1=false;
  if (itemdetail == "")
  {
    document.getElementById('idetailmsg').innerHTML="Must be filled up";
    itemdetail1 = false;
  }
  else
  {
    document.getElementById('idetailmsg').innerHTML="";
    itemdetail1=true;
  } 
  var itemprice=document.getElementById('i_price').value;
  var itemprice1=false;
  if (itemprice == "")
  {
    document.getElementById('ipricemsg').innerHTML="Must be filled up";
    itemprice1 = false;
  }
  else
  {
    document.getElementById('ipricemsg').innerHTML="";
    itemprice1=true;
  } 
  var itemcate=document.getElementById('i_category').value;
  var itemcate1=false;
  if (itemcate == "")
  {
    document.getElementById('icatemsg').innerHTML="Must be filled up";
    itemcate1 = false;
  }
  else
  {
    document.getElementById('icatemsg').innerHTML="";
    itemcate1=true;
  } 

 

   if(itemName1 && itemdetail1 &&  itemprice1 && itemcate1 )
  {
    return true;
  }
  else
  {
    return false;
  }

}
function removeri_name()
{
  var itemName =document.getElementById('i_name').value;
  if(itemName!="")
  {
    document.getElementById('inamemsg').innerHTML="";
  }
}



function removeri_detail()
{
  var itemdetail =document.getElementById('i_detail').value;
  if(itemdetail!="")
  {
    document.getElementById('idetailmsg').innerHTML="";
  }
}

function removeri_price()
{
  var itemprice =document.getElementById('i_price').value;
  if(itemprice!="")
  {
    document.getElementById('ipricemsg').innerHTML="";
  }
}
function removeri_category()
{
  var itemcate =document.getElementById('i_category').value;
  if(itemcate!="")
  {
    document.getElementById('icatemsg').innerHTML="";
  }
}