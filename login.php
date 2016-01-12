<!DOCTYPE html>
<html>
<head>
<title>Forces on Horses Forums</title>
<link type='text/css' rel='stylesheet' href='main.css' />
</head>



<body>
    
    <!-- Forces on Horses title: starts -->
    <div class="headernav">
        <h1>Forces on Horses</h1>

    </div>
    <!-- Forces on Horses title: ends -->

    

    <!-- Login/register buttons: starts -->
    <div class="loginlogout">
        <a href="index.php">Home</a>
        <a href="index.php">Logout</a>
        <a href="register.php">Register</a>
    </div>
    <!-- Login/register buttons: ends -->

    
    
    <!-- Primary page: starts -->
    <div class="mainpage">
        <p>
            
            <!--initializing a hidden drop down menu to select names from    -->
            <form action="" method="post">
                <input type="hidden" name="action" value="submit" />
                <select name="name">
                    <option>John</option>
                    <option>Henry</option>
                </select>
                    
                <!--input values options-->
                <input id='tea-submit' type='submit' name='submit'    value = 'Tea'>
                <input id='coffee-submit' type='submit' name='submit' value = 'Coffee'>
            </form>
            
                    
        </p>
        
                
        <!--if 'action' is NOT equal to null, echo selection-->
        <p>        
            <?php
                if (isset($_POST['action'])) {
                    echo '<br />' . ' The ' . $_POST['submit'] . ' submit button was pressed<br />';
            }

            ?>
        </p>
            
        <p>
    
                    <!-- Creates text fields-->
            <div class="primarypage">
            <form action="phptestpage.php" method="post">
            Number 1: <input type="text" name="number1"><br>
            Number 2: <input type="text" name="number2"><br>
            <button type="submit" value="Submit">Calculate Numbers</button>
            <button type="reset" value="Reset">Reset</button>
            </form>	
            </div>
    
        </p>
    </div>
    <!-- Primary page: ends -->

    
    
    <!-- cavalry footer: starts" -->
    <div class="footer">  
        cavalry
    </div>
    <!-- cavalry footer: ends" -->
    
</body>
    
    </html>