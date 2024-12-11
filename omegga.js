function form_validation() {
    var nm = document.forms['frm1'].nm.value; // Use the correct form name
    var se = document.forms['frm1'].se.value;
    var se1 = document.forms['frm1'].se1.value;
    
    // Clear previous error messages
    document.getElementById('sp1').innerHTML = "";
    document.getElementById('sp2').innerHTML = "";
    document.getElementById('sp3').innerHTML = "";

    if (nm == null || nm === "") {
        document.getElementById('sp1').innerHTML = "Name can't be empty!!";
        return false; // Prevent form submission
    } 
    else if (se == null || se === "") {
        document.getElementById('sp2').innerHTML = "Password can't be empty!!";
        return false; // Prevent form submission
    } 
    else if (se.length < 8) {
        document.getElementById('sp2').innerHTML = "Password must be at least 8 characters long";  
        return false; // Prevent form submission
    } 
    else if (se !== se1) {
        document.getElementById('sp3').innerHTML = "Passwords don't match!!";
        return false; // Prevent form submission
    } 

    return true; // Allow form submission if all validations pass
}
