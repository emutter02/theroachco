<?php
session_start(); ?>
<?php include("include/header.php"); ?>
<?php include("include/functions.php"); ?>
<?php include("include/connect.php"); ?>
           </div>
            <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        checkout();
}
 ?>
               
           
                <div class="leash1"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/PPD-Leash-PinkGreenStripes.jpg" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 26";
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
                 <button id="btn" name="btn26" onClick="
                    <?php 
                    if (isset($_GET["btn26"])){
                    $sql25 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 26";
                    $result = $db->query($sql25);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="leash2"><img src="https://sterlingrope.com/images/store/Merch/Dog_Leash_Velocity_Purple_Thumb.jpg" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 28";
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
                 <button id="btn" name="btn27" onClick="
                    <?php 
                    if (isset($_GET["btn27"])){
                    $sql26 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 28";
                    $result = $db->query($sql26);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="leash3"><img src="http://theworstthingsforsale.com/wp-content/uploads/2015/10/pet-hissing-cockroach.jpg"style="padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 29";
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
                 <button id="btn" name="btn28" onClick="
                    <?php 
                    if (isset($_GET["btn28"])){
                    $sql27 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 29";
                    $result = $db->query($sql27);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="leash4"><img src="https://cdn8.bigcommerce.com/s-hi8fku/images/stencil/350x350/products/1864/43718/slip-black-small__95655.1282358866.jpg?c=2" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 30";
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
                 <button id="btn" name="btn29" onClick="
                    <?php 
                    if (isset($_GET["btn29"])){
                    $sql28 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 30";
                    $result = $db->query($sql28);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="leash5"><img src="https://cdn.shopify.com/s/files/1/1577/4333/products/40304-FlatOutLeash-RedButte-WEB_372x279.jpg?v=1525970386" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 31";
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
                 <button id="btn" name="btn31" onClick="
                    <?php 
                    if (isset($_GET["btn31"])){
                    $sql30 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 31";
                    $result = $db->query($sql30);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="leash6"><img src="https://cdn.shopify.com/s/files/1/1038/8194/products/Dog_-_Leashes_-_6_foot_x_1_inch_large.jpg?v=1530236381" style="height:250px;padding:10px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 32";
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
                 <button id="btn" name="btn32" onClick="
                    <?php 
                    if (isset($_GET["btn32"])){
                    $sql31 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 32";
                    $result = $db->query($sql31);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="leash7"><img src="data:image/jpeg;base64,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JhGXMZJhDSWO7NzQQ3K7TjGXRQXWeNkdW5rBYNcbdBc7varD1LnhNMxkR7zGgPBN3B1rEnobZHdZeX+kx6y69OvNfdXeREXrOMREQEREBERAREQEREBERAREQEREBERAREQEREBERAXB1jpXvfEbSFjCXWjF+/Y4S4ctxB4WK7yLPLjjJWaytW3Gdqi0nTMdUBlQJGyvb3iCLl+/EW2yuSchwt5fjYDAQ6GdwlZmBuJ5gfwIIK7mldIiPSDZaiNvZE4Q8Rlzmljssxxu0H1rf1g1lp54jDC0yOfkC5hAYflWdY3HCw8140Yo72i+tT2/Ltm89omvl0NUNZhVtc1wAlYATbc4HLEBwz3jw5qRqHakatPpnGR5zc22HiLkEXPlu6qYr18FrWpE28uO8RFuwiItlBERAREQEREBERAREQEREBERAREQEREBERAREQEREHK0poKOYOBuMW+26/yhyPULQ0LqhFTm7XOPrv67qSIsZ/T45ty13XjJaI1t5Y0AWC9Ii2UEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQf/Z" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 38";
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
                 <button id="btn" name="btn33" onClick="
                    <?php 
                    if (isset($_GET["btn33"])){
                    $sql32 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 38";
                    $result = $db->query($sql32);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="leash8"><img src="https://www.strapworks.com/v/vspfiles/assets/images/k9-training-leash-jar-head-camo-pewut-web-1-17-13.jpg" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 39";
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
                 <button id="btn" name="btn39" onClick="
                    <?php 
                    if (isset($_GET["btn39"])){
                    $sql38 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 39";
                    $result = $db->query($sql38);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="leash9"><img src="https://p.globalsources.com/IMAGES/PDT/BIG/413/B1163088413.jpg" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 40";
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
                 <button id="btn" name="btn40" onClick="
                    <?php 
                    if (isset($_GET["btn40"])){
                    $sql39 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 40";
                    $result = $db->query($sql39);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="leash10"><img src="https://static-01.daraz.pk/p/47cff4f5650bb9168a6c04fcc073cf1c.jpg_340x340q80.jpg_.webp" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 41";
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
                 <button id="btn" name="btn41" onClick="
                    <?php 
                    if (isset($_GET["btn41"])){
                    $sql40 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 41";
                    $result = $db->query($sql40);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="clothes1"><img src="https://images-na.ssl-images-amazon.com/images/I/61rLn1mVVeL._UX385_.jpg" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 42";
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
                 <button id="btn" name="btn42" onClick="
                    <?php 
                    if (isset($_GET["btn42"])){
                    $sql41 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 42";
                    $result = $db->query($sql41);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="clothes2"><img src="https://images-na.ssl-images-amazon.com/images/I/61hBUcGpRCL._UX385_.jpg" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 43";
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
                 <button id="btn" name="btn43" onClick="
                    <?php 
                    if (isset($_GET["btn43"])){
                    $sql42 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 43";
                    $result = $db->query($sql42);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="clothes3"><img src="https://hanes.scene7.com/is/image/Hanesbrands/HNS_S0889407D55_Black" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 44";
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
                 <button id="btn" name="btn44" onClick="
                    <?php 
                    if (isset($_GET["btn44"])){
                    $sql43 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 44";
                    $result = $db->query($sql43);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="clothes4"><img src="http://classicwellcap.co.in/productpic/3961.jpg" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 45";
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
                 <button id="btn" name="btn45" onClick="
                    <?php 
                    if (isset($_GET["btn45"])){
                    $sql44 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 45";
                    $result = $db->query($sql44);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="clothes5"><img src="https://images-na.ssl-images-amazon.com/images/I/61YAMUdx-JL._UX385_.jpg" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 46";
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
                 <button id="btn" name="btn46" onClick="
                    <?php 
                    if (isset($_GET["btn46"])){
                    $sql45 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 46";
                    $result = $db->query($sql45);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="clothes6"><img src="https://p.globalsources.com/IMAGES/PDT/B0895762670/baby-girl-clothes.jpg" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 47";
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
                 <button id="btn" name="btn47" onClick="
                    <?php 
                    if (isset($_GET["btn47"])){
                    $sql46 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 47";
                    $result = $db->query($sql46);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="clothes7"><img src="https://www.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw17a9741c/images/hi-res/50581_SEMT.jpg?sw=300&sh=300&sfrm=png" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 58";
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
                 <button id="btn" name="btn58" onClick="
                    <?php 
                    if (isset($_GET["btn58"])){
                    $sql57 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 58";
                    $result = $db->query($sql57);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="clothes8"><img src="https://images-na.ssl-images-amazon.com/images/I/51TP5FpmIwL._SL500_AC_SS350_.jpg" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 59";
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
                 <button id="btn" name="btn59" onClick="
                    <?php 
                    if (isset($_GET["btn59"])){
                    $sql58 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 59";
                    $result = $db->query($sql58);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="clothes9"><img src="/Images/ROACHwig.png" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 64";
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
                 <button id="btn" name="btn64" onClick="
                    <?php 
                    if (isset($_GET["btn64"])){
                    $sql63 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 64";
                    $result = $db->query($sql63);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
                <div class="clothes10"><img src="https://s7d4.scene7.com/is/image/JCPenney/DP1108201217202225M.tif?wid=350&hei=350&op_usm=.4,.8,0,0&resmode=sharp2" style="height:300px;padding:20px;">
                <h1><?php
                $sql = "SELECT * FROM products WHERE id = 65";
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
                 <button id="btn" name="btn65" onClick="
                    <?php 
                    if (isset($_GET["btn65"])){
                    $sql64 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 65";
                    $result = $db->query($sql64);
                    }
                ?>"> Add to Cart</button>
                </form>
                </div>
                
         </body> 
    </head>
</php>
