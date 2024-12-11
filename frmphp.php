<html>
<head>
<title>Form</title>
</head>
<body style="background-image:url(bgbbb.jpg);background-repeat: no-repeat; background-size: cover; ">
<form action="hel.php" method="post">
        <fieldset>
            <legend>Personal info</legend>
            <table>
                <tr>
                    <th> <label name>First Name:</label></th>
                    <td> <input type="text" name="nm" required placeholder="Enter your name"></td>
                </tr>
                

                <tr>
                    <th> <label name >Middle Name:</label></th>
                   <td> <input type="text"  name="mid" placeholder="Enter your middle name"></td>
                   </tr>

                   <tr>
                    <th> <label name >Last Name:</label></th>
                   <td> <input type="text" name="last"  required placeholder="Enter your Last name"></td>
                   </tr>
                <tr>
                    <th>
                        <label>Password:</label>

                    </th>
                    <td>
                        <input type="password" name="se"  required placeholder="enter your password">
                    </td>
                    </tr>

                    <tr>
                <th> <label email >Email:  </label> </th>
              <td><input type="email" name="em" required placeholder="Enter your email"></td>
               </tr>
                <tr>
                    <th><label >Gender:</label> </th>
                <td>
                <input type="radio" name="gender"  value="male">Male
                <input type="radio" name="gender"  value="Female">Female
                <input type="radio" name="gender"  value="Others">Others
                </td>
                </tr>

                <tr>
                        <th> <label  >DOB:</label>  </th>
                    <td><input type="date"  required name="bir"></td>
                    </td>
                     </tr>
                 
</table>    
<input type="submit" value="Submit" name="sub">

    </fieldset>
    </form>
</body>
</html>