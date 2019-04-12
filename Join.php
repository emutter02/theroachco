<?php session_start(); ?>
<?php include("include/header.php"); ?>
<?php include("include/functions.php"); 
error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("html_errors", 1);?>
           </div>
               <h1>Already Have An Account?<br/>
               <form method="get" action="";>
                 <button id="btn" name="loginbtn" onClick="
                    <?php 
                    if (isset($_GET["loginbtn"])){
                    header("location:login.php");}
                ?>"> Log In</button>
                </form>
    
    <?php
require_once "include/connect.php";
 
$email2 = $psw2 = $psw_repeat = $rch_typ = "";
$email2_err = $psw2_err = $psw_repeat_err = $rch_typ_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["email2"]))){
        $email2_err = "Please enter a username.";
    } else{
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = $db->prepare($sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email2);
            
            $param_email2 = trim($_POST["email2"]);
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email2_err = "This username is already taken.";
                } else{
                    $email2 = trim($_POST["email2"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        mysqli_stmt_close($stmt);
    }
    
    if(empty(trim($_POST["psw2"]))){
        $psw2_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["psw2"])) < 6){
        $psw2_err = "Password must have at least 6 characters.";
    } else{
        $psw2 = trim($_POST["psw2"]);
    }
    
    if(empty(trim($_POST["psw_repeat"]))){
        $psw_repeat_err = "Please confirm password.";     
    } else{
        $psw_repeat = trim($_POST["psw_repeat"]);
        if(empty($psw2_err) && ($psw2 != $psw_repeat)){
            $psw_repeat_err = "Password did not match.";
        }
        
    if(empty(trim($_POST["rch_typ"]))){
        $rch_typ_err = "Please enter roach type.";
    } else {
        $rch_typ = trim($_POST["rch_typ"]);
    }
    }
    
    if(empty($email2_err) && empty($psw2_err) && empty($psw_repeat_err) && empty($rch_typ_err)){
        
        $sql = "INSERT INTO users (username, password, password_repeat, roach_type) VALUES (?, ?, ?, ?)";
         
        if($stmt = $db->prepare($sql)){
            mysqli_stmt_bind_param($stmt, "ssss", $param_email2, $param_psw2, $param_psw_repeat, $param_rch_typ);
            
            $param_email2 = $email2;
            $param_psw2 = $psw2;
            $param_psw_repeat = $psw_repeat;
            $param_rch_typ = $rch_typ;
            
            if(mysqli_execute($stmt)){
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        mysqli_stmt_close($stmt);
    }
}
?>

    

      <div class="signup">
                 <form action="Join.php" method="post">
  <div class="container <?php echo (!empty($email2_err || $psw2_err || $psw_repeat_err || $rch_typ_err)) ? 'has-error' : ''; ?>">
    <h1>Sign Up & Login To Start Shopping</h1>
    <p>Please fill in this form to create an account.</p>

    <label for="email2"><b>Username</b></label>
    <input type= "text" name= "email2" value="<?php echo $email2; ?>"required/>
    <span><?php echo $email2_err; ?></span>

    <label for="psw2"><b>Password</b></label>
    <input type="password" name="psw2" required/>
    <span><?php echo $psw2_err; ?></span>

    <label for="psw_repeat"><b>Repeat Password</b></label>
    <input type="password" name="psw_repeat" required/>
    <span><?php echo $psw_repeat_err; ?></span>
    
    <label for="rch_typ"><b>Roach Type</b></label>
    <input type="text" name="rch_typ" required/>
    <span><?php echo $rch_typ_err; ?></span>
    
    <div class="clearfix">
      <button type="submit" class="signupbtn" name="signupbtn">Sign Up</button>
    </div>
  </div>
</form> 
            </div>
       </body> 
    </head>
</php>