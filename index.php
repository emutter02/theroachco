<!DOCTYPE php>

<?php
session_start(); ?>
<?php 
// FYI: Database name: roach_co
include("include/header.php"); ?>
<?php include("include/functions.php");?>
           </div>
           <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        checkout();
}
 ?>
               <div class="header2">Our Mission</div>
               <div class="body1">We recognize the near impossible task of killing roaches, so to that we say if you can't beat 'em, enjoy 'em! Our company started out many years ago when our three founders went to a school filled with roaches.
               They decided that rather than terminating these creatures, they would embrace them. They wanted a nice life for their school roaches and began to make houses and sold leashes to students. Since then, our company has brightened up schools
               and homes, one roach accessory at a time.</div>
               
               <div class="proof">Check Out These Pics Of Our Happy Customers</div>
               <div class="inadress"><img src="https://i.ytimg.com/vi/GxmAys1VP2g/maxresdefault.jpg"></div>
               <div class="roachbrooch"><img src="https://www.missmalini.com/wp-content/uploads/2012/06/Before-after.jpg"></div>
               <div class="strawberoach"><img src="https://images-na.ssl-images-amazon.com/images/I/412SDDPjQQL.jpg"></div>
               <div class="kidnleash"><img src="https://images-na.ssl-images-amazon.com/images/I/518J9dyD1eL.jpg"></div>
               
       </body> 
    </head>
</php>