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

    <div class="page-header">
        <h3>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our Website.</h3>
        <h3>This site is Developed By TOBSTERA, Mars, Gultekin Ahmed</h3>
        <h3>TOBSTERA: YouTube Channel: <a href="https://www.youtube.com/TOBSTERA" target="_blank">TOBSTERA</a></h3></h3>
        <h3>TOBSTERA: Facebook: <a href="https://www.facebook.com/bgtarikbg" target="_blank">Tarik Mustafa</a></h3>
        <h3>Gultekin Ahmed: Facebook: <a href="https://www.facebook.com/Serseri.BS" target="_blank">Gultekin Ahmed</a></h3>
    </div>
    <p>
        <a href="changepass.php" class="btn btn-warning">Change Your Password</a>
        <a href="changemail.php" class="btn btn-success">Change Your Email</a>
        <a href="profile.php" class="btn btn-info">My Profile</a>
        <a href="logout.php" class="btn btn-danger">Log Out</a>
    </p>
    <?php include("include/footer.php"); ?>
