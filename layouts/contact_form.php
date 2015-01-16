<div class="contactFormWrap">
	<div id="contactForm" class="form">
                                
		<span class="successMessage"></span>
		<span class="errorMessage"></span>
                                
		<h3>Contact Us</h3>
		
        <form id="checkForm" action="send_form.php" method="post"> 
                                    
			<label for="name" style="margin-top:0;">Name* <span class="nameLabel"></span></label>
       		<input id="name" type="text" name="name" />
                                    
      		<br clear="all">
                                    
   			<label for="phone">Phone* <span class="phoneLabel"></span></label>
      		<input id="phone" type="tel" name="phone" />
                                    
  			<br clear="all">
                                    
     		<label for="email">Email* <span class="emailLabel"></span></label>
			<input id="email" type="email" name="email" />
                                    
   			<br clear="all">
                                    
    		<label for="Comments" class="full" style="margin-bottom:5px;">Message</label>
   			<textarea id="comments" name="comments" /></textarea>
                                    
      		<label for="captcha" class="full" style="margin-bottom:5px;">What is <em class="numOne"></em> + <em class="numTwo"></em> &nbsp; ?* <span class="captchaLabel"></span></label>
  			<input type="text" name="captcha" id="captcha" style="width:30px;" />
 			<input type="hidden" name="captcha_sum" class="sumTotal" value="" />
                                    
  			<input type="submit" name="submit" value="Submit" class="submitButton"/>
   		</form>
	</div><!-- END #contactForm -->
</div><!-- END .contactFormWrap -->