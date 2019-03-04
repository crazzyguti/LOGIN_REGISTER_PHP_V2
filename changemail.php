<?php include("include/header.php"); ?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "include/config.php";
 
// Define variables and initialize with empty values
$new_email = $confirm_email = "";
$new_email_reporting = $confirm_email_reporting = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new email
    if(empty(trim($_POST["new_email"]))){
        $new_email_reporting = "Please enter the new email.";     
    } else{
        $new_email = trim($_POST["new_email"]);
    }
    
    // Validate confirm email
    if(empty(trim($_POST["confirm_email"]))){
        $confirm_email_reporting = "Please confirm the email.";
    } else{
        $confirm_email = trim($_POST["confirm_email"]);
        if(empty($new_email_reporting) && ($new_email != $confirm_email)){
            $confirm_email_reporting = "Email did not match.";
        }
    }

    // Check input errors before updating the database
    if(empty($new_email_reporting) && empty($confirm_email_reporting)){
        // Prepare an update statement
        $sql = "UPDATE users SET email = ? WHERE id = ?";

        // Set parameters
        $param_email = ($new_email);
        $param_id = $_SESSION["id"];
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("si", $param_email, $param_id);
            
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}
?>
 
<div align="center">
    <div class="wrapper">
        <h2>Change Email</h2>
        <p>Please fill out this form to reset your email.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group <?php echo (!empty($new_email_reporting)) ? 'has-error' : ''; ?>">
                <label>New Email</label>
                <input type="email" name="new_email" class="form-control" value="<?php echo $new_email; ?>">
                <span class="help-block"><?php echo $new_email_reporting; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_email_reporting)) ? 'has-error' : ''; ?>">
                <label>Confirm Email</label>
                <input type="email" name="confirm_email" class="form-control">
                <span class="help-block"><?php echo $confirm_email_reporting; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link" href="index.php">Cancel</a>
            </div>
        </form>
    </div> 
</div>   
<?php include("include/footer.php"); ?>
