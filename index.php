<?php include_once 'header.php'; ?>
 <section class="main-container">
   <div class="main-wrapper">
     <h2>Home Page</h2>
     <?php
         if(isset($_SESSION['u_id'])){
           $first = $_SESSION['u_first'];
           $last = $_SESSION['u_last'];
           echo "Welcom home $first $last";

         }
     ?>
   </div>

 </section>
<?php include_once 'footer.php'; ?>
