<!DOCTYPE php>
<php lang=en>
<?php include("include/header.php"); ?>
<?php include("include/functions.php");
?>
</div>
           <div class="cart">
              <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <b><?php include("include/connect.php");
          $sqlcart="SELECT * FROM cart";

if ($result=mysqli_query($db,$sqlcart))
  {
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  }
          ?></b>
        </span>
      </h4>
      <?php $sql = "SELECT * FROM cart";
                $result = $db->query($sqlcart);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<p>";
                echo $row["name"];
                echo '<span class="price">';
                echo "$". $row['price'];
                }
                } else {
                    echo "Empty Cart";
                }
                ?></span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>
          <?php $total = "SELECT SUM(price) AS total FROM cart";
                $result = $db->query($total);
          $row = mysqli_fetch_assoc($result); 

          $sum = $row['total'];

          echo ("$$sum");
	?></b></span></p>
    </div>
  </div>
</div>


    <?php
include("include/connect.php");

$user = mysqli_real_escape_string($db, $_REQUEST['user']);
$fullname = mysqli_real_escape_string($db, $_REQUEST['fullname']);
$email = mysqli_real_escape_string($db, $_REQUEST['email']);
$adr = mysqli_real_escape_string($db, $_REQUEST['adr']);
$city = mysqli_real_escape_string($db, $_REQUEST['city']);
$state = mysqli_real_escape_string($db, $_REQUEST['state']);
$zip = mysqli_real_escape_string($db, $_REQUEST['zip']);
 
$sql = "INSERT INTO billing (username, full_name, email, address, city, state, zipcode) VALUES ('$user', '$fullname', '$email', '$adr', '$city', '$state', '$zip')";
if(!mysqli_query($db, $sql)){
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
mysqli_close($db);

?>
    

                <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="checkout.php" method="post">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="user">Username</label>
            <input type="text" name="user" value="<?php if (isset($user)) { echo $user; } ?>" required/>
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" value="<?php if (isset($fullname)) { echo $fullname; } ?>" required/>
            <label for="email">Email</label>
            <input type="text" name="email" value="<?php if (isset($email)) { echo $email;} ?>" required/>
            <label for="adr">Address</label>
            <input type="text" name="adr" value="<?php if (isset($adr)) { echo $adr;} ?>" required/>
            <label for="city">City</label>
            <input type="text" name="city" value="<?php if (isset($city)) { echo $city;} ?>" required/>
                <label for="state">State</label>
                <input type="text" name="state" value="<?php if (isset($state)) { echo $state;} ?>" required/>
                <label for="zip">Zipcode</label>
                <input type="text" name="zip" value="<?php if (isset($zip)) { echo $zip;} ?>" required/>
            </div>
          </div>
          
          
              <?php
include("include/connect.php");

$cardname = mysqli_real_escape_string($db, $_REQUEST['cardname']);
$cardnumber = mysqli_real_escape_string($db, $_REQUEST['cardnumber']);
$expmonth = mysqli_real_escape_string($db, $_REQUEST['expmonth']);
$cvv = mysqli_real_escape_string($db, $_REQUEST['cvv']);
 
$sql = "INSERT INTO card_info (card_name, card_number, exp_month, cvv) VALUES ('$cardname', '$cardnumber', '$expmonth', '$cvv')";
if(!mysqli_query($db, $sql)){
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
mysqli_close($db);

?>

          <div class="col-50">
            <h3>Payment</h3>
            </div>
            <label for="cardname">Name on Card</label>
            <input type="text" name="cardname"  value= "<?php echo "DO NOT USE REAL INFO"?>" />
            <label for="cardnumber">Credit card number</label>
            <input type="text" name="cardnumber" value= "<?php echo "DO NOT USE REAL INFO"?>" />
            <label for="expmonth">Exp</label>
            <input type="text" name="expmonth" value= "<?php echo "DO NOT USE REAL INFO"?>" />

              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" name="cvv" value= "<?php echo "DO NOT USE REAL INFO"?>" />
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <button type="submit" name="cont_checkout" class="btn">Continue to Checkout</button>
      </form>
    </div>
  </div>
  </div>

       </body> 
    </head>
</php>