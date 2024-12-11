<?php
$user=$_POST['nm'];
$middle=$_POST['mid'];
$last=$_POST['last'];
$password=$_POST['se'];
$email=$_POST['em'];
$gender=$_POST['gender'];
$birth=$_POST['bir'];
$submit=$_POST['sub'];

 echo "<h1><u><center>$user $last</center></u></h1>" ;
 echo "<fieldset><center><table><tr><th><b> Name: </b></th><td> $user $middle $last</td></tr>
 <td></td><tr><th>Password:</th><td>$password</td></tr><tr></tr><tr><th>Email:</th><td>$email</td>
 </tr><tr></tr><tr></tr><tr></tr><tr><th>Gender:</th><td>$gender</td></tr><tr></tr><tr><th>DOB:</th><td>$birth<td></tr><tr>
 </tr></table></center></fieldset>";
?>
 