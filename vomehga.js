function form_validation()
{
    var nm =document.frm.nm.value;
    var se=document.frm.se.value;
    var se1=document.frm.se1.value;
    if(nm==null||nm=="")
    {
        document.getElementById('sp1').innerHTML="name can't be empty!!";   
    }
    
    else if(se==null||se=="")
    {
        document.getElementById('sp2').innerHTML="password can't be empty!!"; 
    }
    else if(se.length<8)
    {
        document.getElementById('sp2').innerHTML="password must be atleat 8 characters long";  
    }
    else if(se==se1)
    {
        return true;
    }
    else{
        document.getElementById('sp3').innerHTML="passwords don't match!!";
    }
}