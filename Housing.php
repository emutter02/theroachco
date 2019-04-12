<?php
session_start(); ?>
<?php include("include/header.php"); ?>
<?php include("include/functions.php"); ?>
<?php include("include/connect.php");?>
           </div>
          <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        checkout();
}
$order_id = time();
 ?>
               
            

         <div class="house1"><img src="https://img.ssww.com/cs_srgb/q_90/w_312/v1543535616/_w/eb/GP1682_web.jpg" alt="basic wire roach house" style="height:300px;padding:20px;">
        <h1>
            <?php
                $sql = "SELECT * FROM products WHERE id = 1";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row["name"];
                echo "<br />";
                echo "$". $row['price']. "+ shipping";
                }
                } else {
                    echo "0 results";
                }
                ?>
                </h1>
                <form method="get" action="";>
                 <button id="btn" name="btn" onClick="
                    <?php 
                    if (isset($_GET["btn"])){
                    $sql = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 1";
                    $result = $db->query($sql);
                    }
                ?>"> Add to Cart</button>
                </form>
        </div> 
        
        <div class="house2"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJNc_YoqdEHuE_cdlXWWiY2o2NfCpsjNVeS1Ef8K-0cruFJVPVCw" alt="basic see-through boxy roach house" style="height:300px;padding:20px;">
        <h1>
            <?php 
                $sql = "SELECT * FROM products WHERE id = 2";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row["name"];
                echo "<br />";
                echo "$". $row['price']. "+ shipping";
                }
                } else {
                    echo "0 results";
                }
                ?>
        </h1>
      <form method="get" action="";>
                 <button id="btn" name="btn2" onClick="
                    <?php 
                    if (isset($_GET["btn2"])){
                    $sql1 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 2";
                    $result = $db->query($sql1);
                    }
                ?>"> Add to Cart</button>
                </form>
        </div>
        
        <div class="house3"><img src="https://images-na.ssl-images-amazon.com/images/I/71hD1Z8D3cL._AC._SR360,460.jpg" alt="middle-class roach houses, with porches" style="height:300px;padding:20px;">
        <h1><?php $sql = "SELECT * FROM products WHERE id = 3";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row["name"];
                echo "<br />";
                echo "$". $row['price']. "+ shipping";
                }
                } else {
                    echo "0 results";
                }
                ?>
        </h1>
        <form method="get" action="";>
                 <button id="btn" name="btn3" onClick="
                    <?php 
                    if (isset($_GET["btn3"])){
                    $sql2 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 3";
                    $result = $db->query($sql2);
                    }
                ?>"> Add to Cart</button>
                </form>
        </div>
        
        <div class="house4"><img src="https://images-na.ssl-images-amazon.com/images/I/51dzxhdeMNL._SY300_QL70_.jpg" alt="rustic roach home" style="height:300px;padding:20px;">
        <h1><?php $sql = "SELECT * FROM products WHERE id = 4";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row["name"];
                echo "<br />";
                echo "$". $row['price']. "+ shipping";
                }
                } else {
                    echo "0 results";
                }
                ?>
        </h1>
            <form method="get" action="";>
                 <button id="btn" name="btn4" onClick="
                    <?php 
                    if (isset($_GET["btn4"])){
                    $sql3 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 4";
                    $result = $db->query($sql3);
                    }
                ?>"> Add to Cart</button>
                </form>
        </div>
        
        <div class="house5"><img src="https://ksassets.timeincuk.net/wp/uploads/sites/56/2017/06/Bug-hotel-Flying-Tiger-best-wildlife-houses.jpg" alt="modern era roach house" style="height:300px;padding:20px;">
        <h1><?php $sql = "SELECT * FROM products WHERE id = 5";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row["name"];
                echo "<br />";
                echo "$". $row['price']. "+ shipping";
                }
                } else {
                    echo "0 results";
                }
                ?>
        </h1>
        <form method="get" action="";>
                 <button id="btn" name="btn5" onClick="
                    <?php 
                    if (isset($_GET["btn5"])){
                    $sql4 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 5";
                    $result = $db->query($sql4);
                    }
                ?>"> Add to Cart</button>
                </form>
        </div>
        
        <div class="house6"><img src="http://www.urbangardensweb.com/wp-content/uploads/2016/02/bug-hotel-amazon.jpg" alt="political roach home" style="height:300px;padding:20px;">
        <h1><?php $sql = "SELECT * FROM products WHERE id = 6";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row["name"];
                echo "<br />";
                echo "$". $row['price']. "+ shipping";
                }
                } else {
                    echo "0 results";
                }
                ?>
        </h1>
        <form method="get" action="";>
                 <button id="btn" name="btn6" onClick="
                    <?php 
                    if (isset($_GET["btn6"])){
                    $sql5 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 6";
                    $result = $db->query($sql5);
                    }
                ?>"> Add to Cart</button>
                </form>
        </div>
        
        <div class="house8"><img src="http://www.clicksuperstore.com/media/catalog/product/cache/1/image/650x/040ec09b1e35df139433887a97daa66f/h/2/h29.jpg" alt="log roach cabin" style="height:300px;padding:20px;">
        <h1><?php $sql = "SELECT * FROM products WHERE id = 8";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row["name"];
                echo "<br />";
                echo "$". $row['price']. "+ shipping";
                }
                } else {
                    echo "0 results";
                }
                ?>
        </h1>
       <form method="get" action="";>
                 <button id="btn" name="btn8" onClick="
                    <?php 
                    if (isset($_GET["btn8"])){
                    $sql7 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 8";
                    $result = $db->query($sql7);
                    }
                ?>"> Add to Cart</button>
                </form>
        </div>
        
        <div class="house9"><img src="https://images-na.ssl-images-amazon.com/images/I/81TDlx6iZ3L._SY450_.jpg" alt="roach castle" style="height:300px;padding:20px;">
        <h1><?php $sql = "SELECT * FROM products WHERE id = 9";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row["name"];
                echo "<br />";
                echo "$". $row['price']. "+ shipping";
                }
                } else {
                    echo "0 results";
                }
                ?>
        </h1>
        <form method="get" action="";>
                 <button id="btn" name="btn9" onClick="
                    <?php 
                    if (isset($_GET["btn9"])){
                    $sql8 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 9";
                    $result = $db->query($sql8);
                    }
                ?>"> Add to Cart</button>
                </form>
        </div>
        
        <div class="house10"><img src="https://www.thetimes.co.uk/imageserver/image/methode%2Fsundaytimes%2Fprod%2Fweb%2Fbin%2Fe9168a1e-299b-11e6-91b2-4cee63678661.jpg?crop=1000%2C1500%2C-0%2C-0" alt="white suburban roach house" style="height:300px;padding:20px;">
        <h1><?php $sql = "SELECT * FROM products WHERE id = 10";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row["name"];
                echo "<br />";
                echo "$". $row['price']. "+ shipping";
                }
                } else {
                    echo "0 results";
                }
                ?>
        </h1>
        <form method="get" action="";>
                 <button id="btn" name="btn10" onClick="
                    <?php 
                    if (isset($_GET["btn10"])){
                    $sql9 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 10";
                    $result = $db->query($sql9);
                    }
                ?>"> Add to Cart</button>
                </form>
        </div>
        
        <div class="house11"><img src="https://sc02.alicdn.com/kf/HTB1Epm.zxSYBuNjSspjq6x73VXaC/China-manufacture-handmade-wooden-insect-house-habitat.jpg_350x350.jpg" alt="clean cut roach hut" style="height:300px;padding:20px;">
        <h1><?php $sql = "SELECT * FROM products WHERE id = 11";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row["name"];
                echo "<br />";
                echo "$". $row['price']. "+ shipping";
                }
                } else {
                    echo "0 results";
                }
                ?>
        </h1>
        <form method="get" action="";>
                 <button id="btn" name="btn11" onClick="
                    <?php 
                    if (isset($_GET["btn11"])){
                    $sql10 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 11";
                    $result = $db->query($sql10);
                    }
                ?>"> Add to Cart</button>
                </form>
        </div>
        
        <div class="house12"><img src="https://images-na.ssl-images-amazon.com/images/I/91pRUVvnvgL._SY355_.jpg" alt="its not a roach house its a roach home" style="height:300px;padding:20px;">
        <h1><?php $sql = "SELECT * FROM products WHERE id = 12";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row["name"];
                echo "<br />";
                echo "$". $row['price']. "+ shipping";
                }
                } else {
                    echo "0 results";
                }
                ?>
        </h1>
        <form method="get" action="";>
                 <button id="btn" name="btn12" onClick="
                    <?php 
                    if (isset($_GET["btn12"])){
                    $sql11 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 12";
                    $result = $db->query($sql11);
                    }
                ?>"> Add to Cart</button>
                </form>
        </div>
        
        <div class="house13"><img src="https://i.ebayimg.com/images/g/ZHkAAOSwiYlaLcCh/s-l300.jpg" alt="roach mansion for the fancy roaches" style="height:300px;padding:20px;">
        <h1><?php $sql = "SELECT * FROM products WHERE id = 13";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row["name"];
                echo "<br />";
                echo "$". $row['price']. "+ shipping";
                }
                } else {
                    echo "0 results";
                }
                ?>
        </h1>
        <form method="get" action="";>
                 <button id="btn" name="btn13" onClick="
                    <?php 
                    if (isset($_GET["btn13"])){
                    $sql12 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 13";
                    $result = $db->query($sql12);
                    }
                ?>"> Add to Cart</button>
                </form>
        </div>
        
        <div class="house14"><img src="data:image/jpeg;base64,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" alt="mi casa es su casa" style="height:300px;padding:20px;">
        <h1><?php $sql = "SELECT * FROM products WHERE id = 14";
                $result = $db->query($sql);

                if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo $row["name"];
                echo "<br />";
                echo "$". $row['price']. "+ shipping";
                }
                } else {
                    echo "0 results";
                }
                ?>
        </h1>
         <form method="get" action="";>
                 <button id="btn" name="btn14" onClick="
                    <?php 
                    if (isset($_GET["btn14"])){
                    $sql13 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 14";
                    $result = $db->query($sql13);
                    }
                ?>"> Add to Cart</button>
                </form>
         </div>
         
         
       </body> 
    </head>
</php>
