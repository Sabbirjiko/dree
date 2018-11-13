<?php
session_start();

?>

<?php include 'inc/header.php';?>
<div id="page-content">	
  <div class="container">
            
    <div class="main-body-section">
             
		 <div class="col-md-3">
                 <div class="body_left_content">
                  <div class="left-box">
                   <div class="title_bar">
                    <h3>Ladies Bag</h3>
                    </div>
                    <div class="box_elements">
                        <a href="#"><img src="img/bag.jpg" alt="bag" border="0"></a>
                        </div>
                   </div>
                    <div class="left-box">
                   <div class="title_bar">
                    <h3>Gents Bag</h3>
                    </div>
                    <div class="box_elements">
                        <a href="#"><img src="img/gents.jpg" alt="bag" border="0"></a>
                        </div>
                   </div>
                    <div class="left-box">
                   <div class="title_bar">
                    <h3>Shoes & Accessories</h3>
                    </div>
                    <div class="box_elements">
                        <a href="#"><img src="img/shoes 01.jpg" alt="bag" border="0"></a>
                        </div>
                   </div>
                   </div>
               </div>               
               
               
                
                <div class="col-md-6">
                   <div class="banner_holder">
                       <div class="mid_box_top"></div>
                       
                       <div class="banner">
                        <img class="banner_top" src="img/banner_top.png" alt="">
                        <div aria-live="polite" id="soliloquy-container-106" class="soliloquy-container soliloquy-transition-fade  soliloquy-theme-base" style="max-width:477px;max-height:577px;">
							<ul id="soliloquy-106" class="soliloquy-slider soliloquy-slides soliloquy-wrap soliloquy-clear">
								<li aria-hidden="true" class="soliloquy-item soliloquy-item-1 soliloquy-image-slide" draggable="false" style="list-style:none">
									<img id="soliloquy-image-107" class="soliloquy-image soliloquy-image-1" src="img/slider-01.jpg" alt="slider-01" />
								</li>
								<li aria-hidden="true" class="soliloquy-item soliloquy-item-2 soliloquy-image-slide" draggable="false" style="list-style:none">
									<img id="soliloquy-image-108" class="soliloquy-image soliloquy-image-2" src="img/slider-02.jpg" alt="slider-02" />
								</li>
								<li aria-hidden="true" class="soliloquy-item soliloquy-item-3 soliloquy-image-slide" draggable="false" style="list-style:none">
									<img id="soliloquy-image-109" class="soliloquy-image soliloquy-image-3" src="img/slider-03.jpg" alt="slider-03" />
								</li>
								<li aria-hidden="true" class="soliloquy-item soliloquy-item-4 soliloquy-image-slide" draggable="false" style="list-style:none">
									<img id="soliloquy-image-110" class="soliloquy-image soliloquy-image-4" src="img/slider-04.jpg" alt="slider-04" />
								</li>
								<li aria-hidden="true" class="soliloquy-item soliloquy-item-5 soliloquy-image-slide" draggable="false" style="list-style:none">
									<img id="soliloquy-image-111" class="soliloquy-image soliloquy-image-5" src="img/slider-05.jpg" alt="slider-05" />
								</li>
								<li aria-hidden="true" class="soliloquy-item soliloquy-item-6 soliloquy-image-slide" draggable="false" style="list-style:none">
									<img id="soliloquy-image-112" class="soliloquy-image soliloquy-image-6" src="img/slider-06.jpg" alt="slider-06" />
								</li>
							</ul>
						</div>
						<noscript><style type="text/css">#soliloquy-container-106{opacity:1}</style></noscript>
           <div class="mid_box_bottom"></div>
            </div>           
           </div>
               </div>         
		 <div class="col-md-3">
          <div class="body_right_content">
              <div class="right_box">
                  <div class="right_box_elements">
                      <span style="font-size: 24pt;color: white;"> New Arrival</span>
                      <h2><img src="img/02.jpg" alt="" width="194" height="187"></h2>
                      <div class="more_link"> </div>
                  </div>
              </div>
              <div class="right_box">
                  <div class="right_box_top"> </div>
                  <div class="right_box_elements">
                          <h1 style="color: white;">Latest </h1>
                          <h2>Collections</h2>
                          <p><img src="img/01.jpg" alt=""></p>
                          <p> </p>
                          <br>
                          <div class="more_link">
                            <ul>
                              <li>
                                <a href="#">More Offers</a>
                              </li>
                            </ul>
                          </div>
                  </div>
              </div>                                            
          </div>
      </div>              
                
    </div>
			<div id="popup-content">
	<div>
		<input id="modal-close-button" type="button" value="X" />
	</div>
	<div>
<p style="font-size: 15px;">Hello, I am Dree,your personal assistant. Do you want me help you out finding your product?</p>   
                            <form id="search" method="get" action="https://www.pickaboo.com/search/result/?">
                                <div class="speech">
                                    <input type="text" name="q" id="result" placeholder="Speak"/>
                                    <div class="gfimg"><img id="gifimage" src="img/anim.gif" /></div>
                                </div>
                            </form>


	</div>

</div>
<div id="overlay-bg"></div>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popup.js"></script>
            
        </div>
</div>
<?php include 'inc/footer.php';?>