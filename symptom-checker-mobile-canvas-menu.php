<style type="text/css">
	@media screen and (max-width: 460px) {

		.mobile_canvus_menu .menu_part_lux .menu_list li a{

			position: relative;
		    width: 100%;
		    border-bottom: 1px solid rgb(0.1,0.1,0.1,0.1);
		    padding: 10px;
		}

		.mobile_canvus_menu .menu_part_lux .menu_list li a:hover{

			background-color: #e7efee !important;
		}
	}
</style>
<?php

if (isset($_POST['mobile_side_menu'])) {
	
$output = '';

if($_POST['lastSegment1']=='en'){

$output .= '<div class="close_btn" onclick="menu_is_closed()">
<img src="assets/images/icon/close-dark.png" alt="covidsurokkha">
</div>
<div class="menu_part_lux">
<img src="assets/images/logo.png" style="height: 22px;width: 190px;margin-top: -35px">
<ul class="menu_list wd_scroll">

<li style="margin-top: 0px">
	<a href="index.php?lang=en" title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px"><i class="fas fa-home" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>Home</span></a>

</li>


<li style="margin-top: 0px">
	<a href="vaccine.php?lang=en" title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px"><i class="fas fa-syringe" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>Vaccine Information</span></a>

</li>


<li style="margin-top: 0px">
	<a href="symptom-checker.php?lang=en" title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px"><img src="assets/images/symptom-checker-logo.png" alt="covidsurokkha" style="width: 20px;height: 18px;margin-left: -1px" />COVID Symptom Checker</span></a>

</li>


<li style="margin-top: 0px">
	
	<a href="approved-laboratories.php?lang=en" title="Approved Laboratories for International Travelling" style="line-height: 22px"><span style="font-size: 15px"><i class="fas fa-info-circle" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>Covid Test Centres For <span style="margin-left: 20px">International Flights</span></span></a>

	
</li>


<li style="margin-top: 0px">
	<a href="blogs.php?lang=en" title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px"><i class="fas fa-blog" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>Blogs</span></a>

</li>

<li style="margin-top: 0px">
	<a href="about_us.php?lang=en" title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px"><i class="fas fa-briefcase" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>About Us</span></a>

</li>


</ul>
</div>
<div class="menu_btm" onclick="menu_is_closed()">
	
<a class="green_btn" href="https://www.facebook.com/%E0%A6%95%E0%A7%8B%E0%A6%AD%E0%A6%BF%E0%A6%A1%E0%A6%B8%E0%A7%81%E0%A6%B0%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE-111592374520421" target="_blank"><span style="margin-left: -10px;"><i class="fab fa-facebook-square" style="color: white"></i>Facebook</span></a>

</div>';

}else{
	
$output .= '<div class="close_btn" onclick="menu_is_closed()">
<img src="assets/images/icon/close-dark.png" alt="covidsurokkha">
</div>
<div class="menu_part_lux">
<img src="assets/images/logo.png" style="height: 22px;width: 190px;margin-top: -35px">
<ul class="menu_list wd_scroll">


<li style="margin-top: 0px">

	<a class="notranslate" href="." title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px;"><i class="fas fa-home" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>হোম</span></a>
	
</li>

<li style="margin-top: 0px">
	<a class="notranslate" href="vaccine.php" title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px;"><i class="fas fa-syringe" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>ভ্যাকসিন তথ্য</span></a>

</li>

<li style="margin-top: 0px">

	<a class="notranslate" href="symptom-checker.php" title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px;"><img src="assets/images/symptom-checker-logo.png" alt="covidsurokkha" style="width: 20px;height: 18px;margin-left: -1px" />কোভিড লক্ষণ পরীক্ষক</span></a>
	
</li>

<li style="margin-top: 0px">
	
	<a class="notranslate" href="approved-laboratories.php" title="Approved Laboratories for International Travelling" style="line-height: 22px"><span style="font-size: 14px;"><i class="fas fa-info-circle" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>আন্তর্জাতিক ভ্রমণের জন্য কোভিড <span style="margin-left: 19px">ল্যাবরেটরিজ টেস্ট </span></span></a>
	
</li>

<li style="margin-top: 0px">
	<a class="notranslate" href="blogs.php" title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px;"><i class="fas fa-blog" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>ব্লগ</span></a>

</li>

<li style="margin-top: 0px">
	<a class="notranslate" href="about_us.php" title="Covid Symptom Checker" style="line-height: 22px"><span style="font-size: 15px;"><i class="fas fa-briefcase" style="color: #58547e;font-size: 14px;margin-right: 5px"></i>আমাদের সম্পর্কে</span></a>

</li>


</ul>
</div>
<div class="menu_btm" onclick="menu_is_closed()">
	

	<a class="green_btn notranslate" href="https://www.facebook.com/%E0%A6%95%E0%A7%8B%E0%A6%AD%E0%A6%BF%E0%A6%A1%E0%A6%B8%E0%A7%81%E0%A6%B0%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE-111592374520421" target="_blank"><span style="margin-left: -10px;"><i class="fab fa-facebook-square" style="color: white"></i>ফেসবুক</span></a>

</div>';

}

echo $output;
}