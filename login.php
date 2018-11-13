
<?php
    
    include 'lib/dbconfig.php';
    if (isset($_COOKIE["type"])) {
        header("location:home.php");
    }
?>

<!Validation of login form>
<?php
$ermsg['email']='';
$ermsg['password']='';
$dberr='';
$dberrm='';
if( isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == "POST" ){
            $email   = $_POST['email']; 
            $pass  = $_POST['password']; 

    if (empty($email)) {
        $ermsg['email']="Email must not be empty";
    }
    if ( empty($pass)) {
        $ermsg['password'] ="Password must not be empty";
    }
    else {
        $query = "SELECT * FROM db_user WHERE email = :email";
        $stat = $conn->prepare($query);
        $stat->execute(
            array('email' => $email)

            );
        $count = $stat->rowCount();
        if ($count > 0) {
            $result = $stat->fetchAll();
            foreach ($result as $row) {
                if ($pass==$row["password"]) {
                    setcookie("type",$row["user_type"],time()+3600);
                    header("location:home.php");
                }
                else{
                    $dberr='Wrong Password';
                }
            }
        }

        else{
            $dberrm='Wrong Email';
        }
    }
}

?>
<!Validation end>
<?php include 'inc/header.php';?>

<div class="main">
	<div class="container">
    <div class="content">
        <div class="login_panel">


        	<h3>Existing Customers</h3>
        	<p>Sign in with the form below.</p>

        	<form action="" method="post">

                	<input name="email" type="text" placeholder="E Mail">
                	<span class="form-error"><?php echo $ermsg['email'];?></span>
                    <span class="form-error"><?php echo $dberrm;?></span>	
                    <input name="password" type="password" placeholder="Password">
                    <span class="form-error"><?php echo $ermsg['password'];?></span>
                    <span class="form-error"><?php echo $dberr;?></span>
                                    
                    <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p>
                    <div class="button"><div><input type="submit" name="submit"  value="Login" /></div></div>
            </form>
        </div>
    	<div class="register_account">

    		<h3>Register New Account</h3>
    		<form action="" method="post">
		
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							
							<input type="text" name="firstname" placeholder="First Name">
                            <span class="form-error"><?php if (isset($msg)) {
                                echo $msg;
                            }?></span>
					        <input type="text" name="lastname" placeholder="last Name" >
			                <span class="form-error"></span>

                                <select id="gender" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            <span class="form-error"></span>							
							
							

							<input type="text" name="email" placeholder="E-Mail">
                            <span class="form-error"></span>
		    			 </td>
		    			<td>
						
							<input type="text" name="address" placeholder="Address" >

						<select id="country" name="country">
							<option value="null">Select a Country</option>         
							<option value="AF">Afghanistan</option>
							<option value="AL">Albania</option>
							<option value="DZ">Algeria</option>
							<option value="AR">Argentina</option>
							<option value="AM">Armenia</option>
							<option value="AW">Aruba</option>
							<option value="AU">Australia</option>
							<option value="AT">Austria</option>
							<option value="AZ">Azerbaijan</option>
							<option value="BS">Bahamas</option>
							<option value="BH">Bahrain</option>
							<option value="BD">Bangladesh</option>
		                </select>
				  
					<input type="text" name="password" placeholder="Password" >
                    <span class="form-error"></span>
                    <input type="text" class="form-input" id="confPassword" name="confPassword"
                           placeholder="Confirm Password.">
                    <span class="form-error"></span>
		    	</td>
		    </tr> 
		    </tbody></table> 
		  
		   	    <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p><br>
                <input type="submit" name="signup"value="Signup">
		   
                <p>Already A Member ? <a href="login.php">Click Here</a></p>
                <p>Back To Home <a href="index.php">Click here</a></p>		    
		    </form>
    	</div>  	
    </div>
    </div>
 </div>
<?php include 'inc/footer.php';?>