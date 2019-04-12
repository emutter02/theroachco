<?php
session_start(); ?>
<?php include("include/header.php"); ?>
<?php include("include/functions.php"); ?>
<?php include("include/connect.php");?>
           </div>
          <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        checkout();
}
 ?>
               
 
            <div class="mix"> <img src="https://www.publicdomainpictures.net/pictures/20000/nahled/dried-fruit.jpg">
            <h1>
            <?php
                $sql = "SELECT * FROM products WHERE id = 15";
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
                 <button id="btn" name="btn15" onClick="
                    <?php 
                    if (isset($_GET["btn15"])){
                    $sql14 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 15";
                    $result = $db->query($sql14);
                    }
                ?>"> Add to Cart</button>
                </form>
            </div>
 
            <div class="lettuce"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-hMSh1pITO3gog0mkrc1M52ucOWfWjrrf9aQLM7t578YYxknuzw">
            <h1><?php
                $sql = "SELECT * FROM products WHERE id = 16";
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
                 <button id="btn" name="btn16" onClick="
                    <?php 
                    if (isset($_GET["btn16"])){
                    $sql15 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 16";
                    $result = $db->query($sql15);
                    }
                ?>"> Add to Cart</button>
                </form>
            </div>
           
            <div class="apple"> <img src="https://images.pexels.com/photos/1205710/pexels-photo-1205710.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" style="height:250px;"> 
            <h1><?php
                $sql = "SELECT * FROM products WHERE id = 17";
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
                 <button id="btn" name="btn17" onClick="
                    <?php 
                    if (isset($_GET["btn17"])){
                    $sql16 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 17";
                    $result = $db->query($sql16);
                    }
                ?>"> Add to Cart</button>
                </form>
            </div>
           
            <div class="strawberry"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Astronaut_Strawberries_2.jpg/800px-Astronaut_Strawberries_2.jpg">
            <h1><?php
                $sql = "SELECT * FROM products WHERE id = 18";
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
                 <button id="btn" name="btn18" onClick="
                    <?php 
                    if (isset($_GET["btn18"])){
                    $sql17 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 18";
                    $result = $db->query($sql17);
                    }
                ?>"> Add to Cart</button>
                </form>
            </div>
           
            <div class="pineapple"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Dried_pineapple.JPG/800px-Dried_pineapple.JPG">
            <h1><?php
                $sql = "SELECT * FROM products WHERE id = 19";
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
                 <button id="btn" name="btn19" onClick="
                    <?php 
                    if (isset($_GET["btn19"])){
                    $sql18 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 19";
                    $result = $db->query($sql18);
                    }
                ?>"> Add to Cart</button>
                </form>
             </div>
            
            <div class="croissant"> <img src="/Images/cros.jpg">
            <h1><?php
                $sql = "SELECT * FROM products WHERE id = 20";
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
                 <button id="btn" name="btn20" onClick="
                    <?php 
                    if (isset($_GET["btn20"])){
                    $sql19 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 20";
                    $result = $db->query($sql19);
                    }
                ?>"> Add to Cart</button>
                </form>
             </div>
             
             <div class="pizza"> <img src="/Images/pizza.JPG">
            <h1><?php
                $sql = "SELECT * FROM products WHERE id = 21";
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
                 <button id="btn" name="btn21" onClick="
                    <?php 
                    if (isset($_GET["btn21"])){
                    $sql20 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 21";
                    $result = $db->query($sql20);
                    }
                ?>"> Add to Cart</button>
                </form>
             </div>
             
             <div class="sushi"> <img src="/Images/sushi roach.jpg">
              <h1><?php
                $sql = "SELECT * FROM products WHERE id = 22";
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
                 <button id="btn" name="btn22" onClick="
                    <?php 
                    if (isset($_GET["btn22"])){
                    $sql21 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 22";
                    $result = $db->query($sql21);
                    }
                ?>"> Add to Cart</button>
                </form>
             </div>
             
             <div class="treats"> <img src="/Images/ROACH M.jpg">
              <h1><?php
                $sql = "SELECT * FROM products WHERE id = 23";
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
                 <button id="btn" name="btn23" onClick="
                    <?php 
                    if (isset($_GET["btn23"])){
                    $sql22 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 23";
                    $result = $db->query($sql22);
                    }
                ?>"> Add to Cart</button>
                </form>
             </div>
             
             <div class="cookies"> <img src="/Images/cookiess.jpg">
              <h1><?php
                $sql = "SELECT * FROM products WHERE id = 24";
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
                 <button id="btn" name="btn24" onClick="
                    <?php 
                    if (isset($_GET["btn24"])){
                    $sql23 = "INSERT INTO cart(id, name, price) SELECT id, name, price FROM products WHERE id = 24";
                    $result = $db->query($sql23);
                    }
                ?>"> Add to Cart</button>
                </form>
             </div>
          
       </body> 
    </head>
</php>