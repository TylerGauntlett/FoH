<!DOCTYPE html>
<html>
<head>
<title>Forces on Horses Forums</title>
<link type='text/css' rel='stylesheet' href='style.css' />
</head>



<body>
    
<!-- Forces on Horses title -->
<div class="headernav">
    <h1>Forces on Horses</h1>
   
</div>

<!-- Login/register buttons -->
<div class="loginlogout">
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
</div>
    
<!-- Primary page -->
<div class="mainpage">
     <!-- Greeting message -->
    <h2>
    Welcome to Forces on Horses!
    </h2>
    
    <!-- Creates a table username, nickname, password, and confirm password -->
    <table>
        <tr> 
            <td>Username:</td>
            <td><input type="text" name="username"></td>
        </tr>
        
        <tr> 
            <td>Nickname:</td>
            <td><input type="text" name="nickname"></td>
        </tr>
        
        <tr> 
            <td>e-Mail:</td>
            <td><input type="e-Mail" name="e-Mail"></td>
        </tr>
        
        <tr> 
            <td>Password:</td>
            <td><input type="password" name="password"></td>
        </tr>
        
        <tr> 
            <td>Confirm password:</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>
    
    <!-- Creates a table of gender radio buttons -->
    <table>   
        <tr>
            <td>
            <form action="">
                Male:<input type="radio" name="sex" value="male">

                Female:<input type="radio" name="sex" value="female">
            </form>
            </td>    
        </tr>
    </table>
    
    <input type="button" onclick="alert('Thank you for registering!')" value="Register">
    
</div> 
    
<div class="footer">  
    cavalry™
</div>

</body>
    
</html>