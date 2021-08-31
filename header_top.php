<style type="text/css">
	
	/*for mobile*/
@media screen and (max-width: 460px) {

	#email_header{

		font-size: 13px !important;
		
	}

	#support_header{

		font-size: 13px !important;
		/*margin-left: 53px !important;*/
		display: none !important;
	}

	#facebook_text{

		margin-left: 3px !important;
	}


	#header_top_section1{

		/*text-align: center !important;*/
		display: block !important;
	}

	#header_top_section{

		/*text-align: center !important;*/
		display: none !important;
	}

}


</style>

<div id="header_top_section" style="background-color: #15a99d;width: 100%;height: 30px;">
	<div class="container">
		<?php if(@$_GET['lang']=='en'){?>
		<span id="email_header" class=""><i class="fas fa-envelope" style="color: white"></i> <span style="color: white;margin-left: 3px"><a href="mailto:support@covidsurokkha.com" style="color: white;text-decoration: none">Email: support@covidsurokkha.com</a></span></span>
		<span id="support_header" style="margin-left: 40px"><a href="https://www.facebook.com/%E0%A6%95%E0%A7%8B%E0%A6%AD%E0%A6%BF%E0%A6%A1%E0%A6%B8%E0%A7%81%E0%A6%B0%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE-111592374520421" target="_blank" style="color: white;text-decoration: none"><i class="fab fa-facebook-square" style="color: white"></i><span id="facebook_text" style="margin-left: 6px">Facebook</span></a> <!-- <span style="color: white;margin-left: 3px">Support: 24/7</span> --></span>
	<?php }else{?>
		<span id="email_header" class="notranslate"><i class="fas fa-envelope" style="color: white"></i> <span style="color: white;margin-left: 3px"><a href="mailto:support@covidsurokkha.com" style="color: white;text-decoration: none">ইমেল: support@covidsurokkha.com</a></span></span>
		<span id="support_header" class="notranslate" style="margin-left: 40px"><a href="https://www.facebook.com/%E0%A6%95%E0%A7%8B%E0%A6%AD%E0%A6%BF%E0%A6%A1%E0%A6%B8%E0%A7%81%E0%A6%B0%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE-111592374520421" target="_blank" style="color: white;text-decoration: none"><i class="fab fa-facebook-square" style="color: white"><span id="facebook_text" style="margin-left: 6px">ফেসবুক</span></i></a> <!-- <span style="color: white;margin-left: 3px">সাপোর্ট: ২৪/৭</span> --></span>
	<?php }?>
</div>
	</div>


	<!-- for mobile -->

	<div id="header_top_section1" style="background-color: #15a99d;width: 100%;height: 30px;display: none;">
	<div class="container">
		<div style="display: flex;justify-content: space-between;flex-direction: row;">
		
		<?php if(@$_GET['lang']=='en'){?>
			<div>
		<span id="email_header" class=""><i class="fas fa-envelope" style="color: white"></i> <span style="color: white;margin-left: 3px"><a href="mailto:support@covidsurokkha.com" style="color: white;text-decoration: none">Email: support@covidsurokkha.com</a></span></span>
		</div>
		<div>
		<span id="support_header"><a href="https://www.facebook.com/%E0%A6%95%E0%A7%8B%E0%A6%AD%E0%A6%BF%E0%A6%A1%E0%A6%B8%E0%A7%81%E0%A6%B0%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE-111592374520421" target="_blank" style="color: white;text-decoration: none"><i class="fab fa-facebook-square" style="color: white"></i><span id="facebook_text" style="margin-left: 6px">Facebook</span></a> <!-- <span style="color: white;margin-left: 3px">Support: 24/7</span> --></span>
		</div>
	<?php }else{?>
		<div>
		<span id="email_header" class="notranslate"><i class="fas fa-envelope" style="color: white"></i> <span style="color: white;margin-left: 3px"><a href="mailto:support@covidsurokkha.com" style="color: white;text-decoration: none">ইমেল: support@covidsurokkha.com</a></span></span>
	</div>
	<div>
		<span id="support_header" class="notranslate"><a href="https://www.facebook.com/%E0%A6%95%E0%A7%8B%E0%A6%AD%E0%A6%BF%E0%A6%A1%E0%A6%B8%E0%A7%81%E0%A6%B0%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE-111592374520421" target="_blank" style="color: white;text-decoration: none"><i class="fab fa-facebook-square" style="color: white"><span id="facebook_text" style="margin-left: 6px">ফেসবুক</span></i></a> <!-- <span style="color: white;margin-left: 3px">সাপোর্ট: ২৪/৭</span> --></span>
	</div>
	<?php }?>
</div>
</div>
	</div>