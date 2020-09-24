function validate(){
  var Name=document.getElementById('name').value;
  var Name1=false;
  if (Name == "")
  {
    document.getElementById('nmsg').innerHTML="Must be filled up";
    Name1 = false;
  }
  else
  {
    document.getElementById('nmsg').innerHTML="";
    Name1=true;
  } 

  var username=document.getElementById('username').value;
  var username1=false;
  if (username == "")
  {
    document.getElementById('unmsg').innerHTML="Must be filled up";
    username1 = false;
  }
  else
  {
    document.getElementById('unmsg').innerHTML="";
    username1=true;
  } 
  var email=document.getElementById('email').value;
  var email1=false;
  if (email == "")
  {
    document.getElementById('emsg').innerHTML="Must be filled up";
    email1 = false;
  }
  else
  {
    document.getElementById('emsg').innerHTML="";
    email1=true;
  } 

 

   if(name1 && username1 && email1)
  {
    return true;
  }
  else
  {
    return false;
  }

}
function removern()
{
  var Name =document.getElementById('name').value;
  if(Name!="")
  {
    document.getElementById('nmsg').innerHTML="";
  }
}



function removerun()
{
  var username =document.getElementById('username').value;
  if(username!="")
  {
    document.getElementById('unmsg').innerHTML="";
  }
}

function removere()
{
  var email =document.getElementById('email').value;
  if(email!="")
  {
    document.getElementById('emsg').innerHTML="";
  }
}