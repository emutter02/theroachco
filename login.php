<?php session_start(); ?>
<?php include("include/header.php"); ?>
<?php include("include/functions.php"); ?>
           </div>
               <?php
 
// Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        checkout();
    echo "ALREADY LOGGED IN";
}?>
<form method="get" action="";>
                 <button id="btn" name="logout" onClick="
                    <?php 
                    if (isset($_GET["logout"])){
                        include ("include/connect.php");
                    $sql222 = "TRUNCATE TABLE cart";
                    $result = $db->query($sql222);
                    logout();}
                ?>"> Log Out</button>
                </form>

<?php
 
require_once "include/connect.php";
 
$email1 = $psw1 = "";
$email1_err = $psw1_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["email1"]))){
        $email1_err = "Please enter username.";
    } else{
        $email1 = trim($_POST["email1"]);
    }
    
    if(empty(trim($_POST["psw1"]))){
        $psw1_err = "Please enter your password.";
    } else{
        $psw1 = trim($_POST["psw1"]);
    }
    
    if(empty($email1_err) && empty($psw1_err)){
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = $db->prepare($sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email1);
            
            $param_email1 = $email1;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $id, $email1, $psw1);
                    if(mysqli_stmt_fetch($stmt)){
                        if($psw1 == true){
                            session_start();
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email1"] = $email1;
                            $_SESSION["psw1"] = $psw1;
                            

                            header("location: checkout.php");
                        } else{
                            // Display an error message if password is not valid
                            $psw1_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $email1_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
}

?>
               

    <div class="login">
        <form action="login.php" method="post">
            <div class="container <?php echo (!empty($email1_err || $psw1_err)) ? 'has error' :''; ?>">
                <h1>Login To Access Checkout</h1>
                
                <label for="email1"><b>Username</b></label>
                <input type="text" name="email1" value ="<?php echo $email1; ?>" required/>
                <span><?php echo $email1_err; ?></span>
                
                <label for="psw1"><b>Password</b></label>
                <input type="password" name="psw1" value="<?php echo $psw1; ?>" required/>
                 <span><?php echo $psw1_err; ?></span>
                
                <button type="submit" class="loginbtn" name="loginbtn">Login</button>
                
            </div>
        </form>
    </div>
    
       </body> 
    </head>
</php>
