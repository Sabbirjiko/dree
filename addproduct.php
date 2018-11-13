<?php
include 'inc/header.php';

?>
<script type="text/javascript">
function chk(){
	var flag=true;
	document.getElementById("sidemsg").innerHTML="";
	document.getElementById("sidemsg2").innerHTML="";

	
	var lp=document.pdct_des.pdctname.value.length;
	if(lp<3){
		un=document.getElementById("sidemsg");
		un.innerHTML="user name error";
		un.style.color="red";
		flag=false;
	}
	return flag;
}


</script>
<div class="main">
	<div class="container">
    <div class="content">

    		<h3>Upload Your product picture</h3>
    	<div class="picture_panel">

                <form action="">
                    <input type="file" name="pic" accept="image/*">
                    <input type="submit">
                </form> 
        </div>
    	<div class="product_desc">

    		<h3>Enter Product Details</h3>
    		<form name="pdct_des" action="" method="post">
		        <table>
		   			<tbody>
					    <tr>
						    <td>
								<input type="text"onkeyup="chk()" name="pdctname" id="un" placeholder="Product Name">
                                <span id="sidemsg" style="color:red;">Name Field Is Must</span>
                                <select id="ctg" onkeyup="chk()"name="ctgr">
                                    <option value="null">Select Catagory</option>
                                    <option value="pmale">Male</option>
                                    <option value="pfemale">Female</option>
                                </select>
         
                                <select id="color" name="color">
                                    <option value="">Select color</option>
                                    <option value="color">Blue</option>
                                    <option value="color">Black</option>
                                </select>
                            	<span class="form-error"></span>							
								<input type="number" name="price" placeholder="Enter Price" >
								<input type="text" name="email" placeholder="E-Mail">
                            	<span class="form-error"></span>
                            	<label>Product Description :</label>
					        	<textarea rows="4" cols="43"></textarea> 
					        	<input style="margin-top:10px;"type="submit" value="Submit">
		    	        	</td>
		    			</tr> 
		    		</tbody>
				</table> 	    
		    </form>

    	</div>  	
    </div>
    </div>
</div>
