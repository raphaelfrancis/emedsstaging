<section class="complete-content content-footer-space">
    <!--Mid Content Start-->
    <div class="about-intro-wrap pull-left">

        <div class="bread-crumb-wrap ibc-wrap-3">
            <div class="container">
                <div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
                    <div class="bread-heading"><h1>Change Password</h1></div>
                    <div class="bread-crumb pull-right">
                    <ul>
                    <li><a href="<?php echo base_url(); ?>index">Home</a></li>
                    <li><a href="javascipt:void(0)">Change Password</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="container">
                    
            <div class="row">
                
                
                <div class="col-xs-12 col-lg-12  col-sm-12 col-md-12">
                    
            
                        <!--Contact form-->
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" data-wow-delay="0.5s" data-wow-offset="100">
                
                            
                            <!--Contact Sidebar-->
                            <form class="contact2-page-form col-lg-12 col-sm-12 col-md-12 col-xs-12 no-pad contact-v2" action="<?php echo base_url(); ?>index/change_password/update" method="post" id="update-form">
                            
                                <div class="form-title-text no-pad">Change your password</div>
                                
                                <!-- alerts -->
                                <div class="alert col-lg-12 col-sm-12 col-md-12 col-xs-12" style="display:none" id="loading">
                                    <img src="<?php echo base_url(); ?>static/index/images/loading.gif"/>
                                </div>
                                <div class="alert col-lg-12 col-sm-12 col-md-12 col-xs-12" style="display:none" id="alert_box">
                                    <div id="alert_content"></div>
                                </div>
                                <!-- alerts -->
                               
                                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                                <h5>Current Password</h5>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                <input type="password" class="contact2-textbox" placeholder="Current Password" name="curr_password" id="curr_password">
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                                <h5>New Password</h5>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                <input type="password" class="contact2-textbox" placeholder='New Password e.g "at least 6 above"' name='new_password' id='new_password'  onKeyUp="passwordStrength(this.value)">
                                </div>
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="text-align:right" id="stren">
                                    lower and uppercase, number, special character<div id="passwordDescription">Password not entered</div>
                                    <div id="passwordStrength" class="strength0"></div>
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                                <h5>Reenter new password</h5>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                <input type="password" class="contact2-textbox" placeholder="Reenter new password" name="retype_password" id="retype_password">
                                
                                </div>
                                
                                
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <section class="color-7" id="btn-click">
                                <button class="icon-mail btn2-st2 btn-7 btn-7b" type="submit" id="submit">Save Changes</button>
                                </section>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/jquery.form.js"></script>
<script>
$(document).ready(function()
{
	$('#submit').click(function(){
		$('#loading').fadeIn('fast');
	});
	
	<!--ajax form posting for Add new Contact starts-->
	$('#update-form').ajaxForm(function(e) {
		if(e=='curr_password'){status_alert('Enter your current password');$("#"+e).focus();  }
		if(e=='not_avalible'){status_alert('Old password not correct');$("#"+e).focus();  }
		if(e=='new_password'){status_alert('Enter your New password');$("#"+e).focus();  }
		if(e=='retype_password'){status_alert('Retype your new password');$("#"+e).focus();  }
		if(e=='mismatch'){status_alert('Password mismatch');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Updated Sucessfully');
			$("#alert_box").last().removeClass( "alert-danger" );
			$("#alert_box").last().addClass( "alert-success" );
			//window.location.href = "<?php echo base_url(); ?>index/account_settings";
		}
		else
		{
			//status_alert(e);
		}
		
	});
	<!--ajax form posting for Add new Contact Ends-->
	
	<!-- alert box-->
	function status_alert(e)
	{
		$("#alert_box").last().addClass("alert-danger");
		$('#loading').fadeOut('fast');
		$('#alert_box').fadeIn('slow');
		$('#alert_content').html(e);
	}
	<!-- alert box-->
	
});
	
</script>
<style>
#stren{font-size:10px}
#passwordStrength
{
	height: 12px;
    display: block;
    float: right;
    margin-bottom: 2em;
}

.strength0
{
	width:250px;
	background:#cccccc;
}

.strength1
{
	width:50px;
	background:#ff0000;
}

.strength2
{
	width:100px;	
	background:#ff5f5f;
}

.strength3
{
	width:150px;
	background:#56e500;
}

.strength4
{
	background:#4dcd00;
	width:200px;
}

.strength5
{
	background:#399800;
	width:250px;
}


</style>

<script>
function passwordStrength(password)
{
	var desc = new Array();
	desc[0] = "Very Weak";
	desc[1] = "Weak";
	desc[2] = "Better";
	desc[3] = "Medium";
	desc[4] = "Strong";
	desc[5] = "Strongest";

	var score   = 0;

	//if password bigger than 6 give 1 point
	if (password.length > 6) score++;

	//if password has both lower and uppercase characters give 1 point	
	if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

	//if password has at least one number give 1 point
	if (password.match(/\d+/)) score++;

	//if password has at least one special caracther give 1 point
	if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) )	score++;

	//if password bigger than 12 give another 1 point
	if (password.length > 12) score++;

	 document.getElementById("passwordDescription").innerHTML = desc[score];
	 document.getElementById("passwordStrength").className = "strength" + score;
}
</script>
