<?php include('header.php'); ?>


    <!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
        <div class="container">
            <h1 class="pull-left">Registration</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Sign Up</li>
            </ul>
        </div>
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->




<!--=== Content Part ===-->
    <div class="container content">     
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
            	<form class="reg-page" name="validation" onSubmit="return checkbae()">
                    <div class="reg-header">
                        <h2>Register a new account</h2>
                        <p>Already Signed Up? Click <a href="page_login.php" class="color-green">Sign In</a> to login your account.</p>                    
                    </div>

                    <label>First Name</label>
                    <input type="text" class="form-control margin-bottom-20">
                   
                    <label>Last Name</label>
                    <input type="text" class="form-control margin-bottom-20">
                   
                    <label>Email Address <span class="color-red">*</span></label>
                    <input type="text" class="form-control margin-bottom-20" name="emailcheck">

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Password <span class="color-red">*</span></label>
                            <input type="password" class="form-control margin-bottom-20">
                        </div>
                        <div class="col-sm-6">
                            <label>Confirm Password <span class="color-red">*</span></label>
                            <input type="password" class="form-control margin-bottom-20">
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-6">
                            <label class="checkbox">
                                <input type="checkbox"> 
                                I read <a href="page_terms.html.php" class="color-green">Terms and Conditions</a>
                            </label>                        
                        </div>
                        <div class="col-lg-6 text-right">
                            <button class="btn-u" type="submit" value="Submit">Register</button>                        
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!--/container-->		
    <!--=== End Content Part ===-->
    
             <!--=== Footer ===-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 md-margin-bottom-40">
                    <!-- About -->
                    <div class="headline"><h2>About</h2></div>  
                    <p class="margin-bottom-25 md-margin-bottom-40">Simple2GiveTM is a software company founded at Harvard University which provides non-profit organizations and associations with a free fundraising and marketing platform to maximize the opportunity for real-time social impact.</p>    
                    <!-- End About -->
                </div><!--/col-md-4-->  
                
                <div class="col-md-4 md-margin-bottom-40">
							

                    <!-- Monthly Newsletter -->
                    <div class="headline"><h2>Monthly Newsletter</h2></div> 
                    <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                    <form class="footer-subsribe">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Address">                            
                            <span class="input-group-btn">
                                <button class="btn-u" type="button">Subscribe</button>
                            </span>
                        </div>                  
                    </form>                         
                    <!-- End Monthly Newsletter -->                                      
                </div><!--/col-md-4-->

                <div class="col-md-4">
                    <!-- Contact Us -->
                    <div class="headline"><h2>Contact Us</h2></div> 
                    <address class="md-margin-bottom-40">
                    		Simple2Give, Inc.<br />
								Harvard Innovation Lab<br>
								Batten Hall <br>
                        125 Western Avenue <br />
                        Allston, MA 02163<br />
                        Phone:732-861-3169, <br />
                        Phone:866-933-4345 <br />
                        Email: <a href="mailto:info@simple2give.com" class="">info@simple2give.com</a>
                    </address>
                    <!-- End Contact Us -->

                    <!-- Social Links -->
                    <div class="headline"><h2>Stay Connected</h2></div> 
                    <ul class="social-icons">
                        <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
                        <li><a href="https://www.facebook.com/Simple2Give" data-original-title="Facebook" class="social_facebook"></a></li>
                        <li><a href="https://twitter.com/Simple2Give" data-original-title="Twitter" class="social_twitter"></a></li>
								<li><a href="http://www.linkedin.com/company/simple2give" data-original-title="Linkedin" class="social_linkedin"></a></li>                        
                        <!-- <li><a href="#" data-original-title="Google Plus" class="social_googleplus"></a></li>
                        <li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
                        
                        <!--<li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>-->
                    </ul>
                    <!-- End Social Links -->
                </div><!--/col-md-4-->
            </div>
        </div> 
    </div><!--/footer-->
    <!--=== End Footer ===-->    

   <?php include('footer.php'); ?>
   
<script language="JavaScript1.2" >


var testresults
function checkemail(){
	var str=document.validation.emailcheck.value
	var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	if (filter.test(str))
		testresults=true
	else{
		alert("Please input a valid email address!")
		testresults=false
		}
return (testresults)
}
</script>

<script>
function checkbae(){
	if (document.layers||document.getElementById||document.all)
		return checkemail()
	else
		return true
}
</script>