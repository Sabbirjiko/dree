<?php

if(!isset($_COOKIE["type"]))
{
 header("location:login.php");
}

?>
<?php include 'upload.php';?>

<?php include 'inc/headlogout.php';?>

<div class="main">
	<div class="container">
        <div class="content">
            <div class="we-message">
            	<h2>Welcome Home<span></span></h2>
            </div>
    	    <div class="user_details">
    	    	<div class="user_left">
                    <table>
                        <tr>
                            <td>First Name</td>
                            <td>Sabbir</td>
                            <td>Edit</td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td>Hossain</td>
                            <td>Edit</td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>shjiko</td>
                            <td>Edit</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>shjiko55</td>
                            <td>Edit</td>
                        </tr>               
                        <tr>
                            <td>Address</td>
                            <td>Khilkhet</td>
                            <td>Edit</td>
                        </tr>

                    </table> 
                    <div class="pp">
                        <h2>Profile Picture</h2>
                        <img src="<img src=" <?php echo  $vimg;?>"style="width:150px;height:150px;">
                    </div>

                </div>
                <div class="user_right">
                    
                    <div class="v_img">
                        <img src=" <?php 
                             echo  $vimg;
                        ?>" alt=""style="width:100%;height:100%;">
                    </div>
                    <div class="u_img">
                        <form action="" method="post" enctype="multipart/form-data" ame="mfm"><pre>                              
                            <span><h3 style="text-align:center;">Upload Profile Picture</h3></span><br/>
                            <table>                               
                                <tr>
                                    <td>Select File</td>
                                    <td><input type="file" name="fileToUpload"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" name="submit" value="Upload"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><span><?php echo $errup;?></span><span><?php echo $succup;?></span></td>
                                    
                                </tr>
                             </table>
                            </pre>
                        </form>
                    </div>
                </div>
    	    </div>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>