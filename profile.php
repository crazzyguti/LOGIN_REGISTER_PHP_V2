<?php include("include/header.php"); ?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

  
    <!-- Page Content -->
   <table class="table table-bordered text-center">
  <thead class="black white-text text-center">
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo htmlspecialchars($_SESSION["id"]); ?></td>
      <td><?php echo htmlspecialchars($_SESSION["username"]); ?></td>
      <td><?php echo htmlspecialchars($_SESSION["email"]); ?></td>
    </tr>
  </tbody>
</table>
      

    <!-- /#page-content-wrapper -->
    <?php include("include/footer.php"); ?>
