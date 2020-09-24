function itemData(){
    var itemName= document.getElementById('itemName').value;
    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../php/itemcheck.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('itemName='+itemName);

 

    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText != ""){
                document.getElementById('show').innerHTML = this.responseText;
            }else{
                document.getElementById('show').innerHTML = "";
            }
        }    
    }
}