<link rel="stylesheet" href="assets/vendors/animate-css/animate.css" />
<?php 

//include 'top-cache.php';

if (isset($_POST['indexSection7'])) {

	$lang = $_POST['lang'];
		
		$output = '';


		if ($lang=='en') {
	

		$output .= '<div class="container">
<div class="main_title text-center">
<h5>What you need to do</h5>
<h2>How to protect yourself?</h2>
</div>
<div class="row protect_inner">
<div class="col-lg-6">
<div class="row protect_list_inner">
<div class="col-6">
<div class="protect_list_item">
<div class="protect_list_title">
<h3>You should do</h3>
<h6>Be sure to follow it</h6>
</div>
<ul class="nav flex-column">
<li>
<a href="#"><i class="linearicons-home4"></i>Stay at home</a>
</li>
<li>
<a href="#"><i class="linearicons-desk-tape"></i>Wear mask</a>
</li>
<li>
<a href="#"><i class="linearicons-tissue"></i>Always use
tissues</a>
</li>
<li>
<a href="#"><i class="linearicons-couch"></i>Disinfect your
home</a>
</li>
<li>
<a href="#"><i class="linearicons-rain"></i>Wash hands</a>
</li>
<li>
<a href="#"><i class="linearicons-thermometer"></i>Self-isolation</a>
</li>
<li>
<a href="#"><i class="linearicons-bottle"></i>Frequent
waterintake</a>
</li>
<li>
<a href="#"><i class="fas fa-pump-medical" style="font-size:22px;margin-left:4px"></i>Sanitize your hands</a>
</li>
</ul>
</div>
</div>
<div class="col-6">
<div class="protect_list_item red">
<div class="protect_list_title">
<h3>You should avoid</h3>
<h6>Be sure to follow it</h6>
</div>
<ul class="nav flex-column">
<li>
<a href="#"><i class="linearicons-man-woman"></i>Social
distance</a>
</li>
<li>
<a href="#"><i class="linearicons-paw"></i>Avoid animals</a>
</li>
<li>
<a href="#"><i class="linearicons-woman"></i>Don\'t touch your
face</a>
</li>
<li>
<a href="#"><i class="linearicons-hand"></i>Avoid handshaking</a>
</li>
<li>
<a href="#"><i class="linearicons-chair"></i>Avoid infected
surfaces</a>
</li>
<li>
<a href="#"><i class="linearicons-drop-crossed"></i>Avoid
droplets</a>
</li>
<li>
<a href="#"><i class="linearicons-plane-crossed"></i>Don’t
travel</a>
</li>
<li>
<a href="#"><i class="fas fa-box-tissue" style="font-size:20px"></i>Dispose used tissue</a>
</li>
</ul>
</div>
</div>
</div>
<div class="protect_self_text">
<h3>What does self-isolation involve?</h3>
<p>
If you need to self-isolate, you should take action
immediately. You must stay inside and avoid all contact with
other people.
</p>
<!-- <a class="text_btn" href="#">How else can you protect yourself?
<i class="linearicons-arrow-right"></i></a> -->
</div>
</div>
<div class="col-lg-6">
<div class="protect_img text-center apps_craft_animation">
<img id="protect_yourself_vector" class="img-fluid wow fadeIn" data-wow-delay="500ms" src="assets/images/protect-img.webp" alt="covidsurokkha" />
<ul class="nav">
<li id="virus1"><img id="virus1_img" src="assets/images/icon/project-virus-1.webp" alt="covid surokkha"></li>
<li><img src="assets/images/icon/project-virus-2.webp" alt="covid surokkha"></li>
<li><img class="layer layer2" data-depth="0.5" src="assets/images/icon/project-virus-3.webp" alt="covid surokkha"></li>
<li><img src="assets/images/icon/project-virus-4.webp" alt="covid surokkha"></li>
<li><img src="assets/images/icon/project-virus-5.webp" alt="covid surokkha"></li>
<li><img src="assets/images/icon/project-virus-6.webp" alt="covid surokkha"></li>
<li id="virus7"><img src="assets/images/icon/project-virus-7.webp" alt="covid surokkha"></li>
<li><img src="assets/images/icon/project-virus-8.webp" alt="covid surokkha"></li>
<li><img class="layer layer2" data-depth="0.5" src="assets/images/icon/project-virus-9.webp" alt="covid surokkha"></li>
<li><img src="assets/images/icon/project-virus-10.webp" alt="covid surokkha"></li>
</ul>
</div>
</div>
</div>
</div>';

}else{

	$output .= '<div class="container notranslate">
<div class="main_title text-center">
<h5>আপনাকে যা করতে হবে</h5>
<h2>কীভাবে নিজেকে রক্ষা করবেন?</h2>
</div>
<div class="row protect_inner">
<div class="col-lg-6">
<div class="row protect_list_inner">
<div class="col-6">
<div class="protect_list_item">
<div class="protect_list_title">
<h3>আপনার যা করণীয়</h3>
<h6>এটি অনুসরণ করতে ভুলবেন না</h6>
</div>
<ul class="nav flex-column">
<li>
<a href="#"><i class="linearicons-home4"></i>ঘরে থাকুন</a>
</li>
<li>
<a href="#"><i class="linearicons-desk-tape"></i>মাস্ক পড়ুন</a>
</li>
<li>
<a href="#"><i class="linearicons-tissue"></i>সবসময় টিস্যু ব্যবহার করুন</a>
</li>
<li>
<a href="#"><i class="linearicons-couch"></i>আপনার বাড়ি জীবাণুমুক্ত করুন</a>
</li>
<li>
<a href="#"><i class="linearicons-rain"></i>আপনার হাত ধুয়ে নিন</a>
</li>
<li>
<a href="#"><i class="linearicons-thermometer"></i>আত্ম-বিচ্ছিন্নতা</a>
</li>
<li>
<a href="#"><i class="linearicons-bottle"></i>ঘন ঘন পানি পান করুন</a>
</li>
<li>
<a href="#"><i class="fas fa-pump-medical" style="font-size:22px;margin-left:4px"></i>হাত স্যানিটাইজ করুন</a>
</li>
</ul>
</div>
</div>
<div class="col-6">
<div class="protect_list_item red">
<div class="protect_list_title">
<h3>যা এড়ানো উচিত</h3>
<h6>এটি অনুসরণ করতে ভুলবেন না</h6>
</div>
<ul class="nav flex-column">
<li>
<a href="#"><i class="linearicons-man-woman"></i>সামাজিক দূরত্ব</a>
</li>
<li>
<a href="#"><i class="linearicons-paw"></i>প্রাণী এড়িয়ে চলুন</a>
</li>
<li>
<a href="#"><i class="linearicons-woman"></i>আপনার মুখ স্পর্শ করবেন না</a>
</li>
<li>
<a href="#"><i class="linearicons-hand"></i>হ্যান্ডশেকিং এড়িয়ে চলুন</a>
</li>
<li>
<a href="#"><i class="linearicons-chair"></i>সংক্রামিত পৃষ্ঠতল এড়িয়ে চলুন</a>
</li>
<li>
<a href="#"><i class="linearicons-drop-crossed"></i>ফোঁটা থেকে বিরত থাকুন</a>
</li>
<li>
<a href="#"><i class="linearicons-plane-crossed"></i>ভ্রমণ করবেন না</a>
</li>
<li>
<a href="#"><i class="fas fa-box-tissue" style="font-size:20px"></i>ব্যবহৃত টিস্যু ফেলে দিন</a>
</li>
</ul>
</div>
</div>
</div>
<div class="protect_self_text">
<h3>আত্ম-বিচ্ছিন্নতা কী জড়িত?</h3>
<p>
আপনার যদি স্ব-বিচ্ছিন্নতা প্রয়োজন, আপনার অবিলম্বে ব্যবস্থা নেওয়া উচিত। আপনাকে অবশ্যই ভিতরে থাকতে হবে এবং অন্যান্য ব্যক্তির সাথে সমস্ত যোগাযোগ এড়ানো উচিত।
</p>
<!-- <a class="text_btn" href="#">How else can you protect yourself?
<i class="linearicons-arrow-right"></i></a> -->
</div>
</div>
<div class="col-lg-6">
<div class="protect_img text-center apps_craft_animation">
<img id="protect_yourself_vector" class="img-fluid wow fadeIn" data-wow-delay="500ms" src="assets/images/protect-img.webp" alt="covid surokkha" />
<ul class="nav">
<li id="virus1"><img id="virus1_img" src="assets/images/icon/project-virus-1.webp" alt="covid surokkha"></li>
<li><img src="assets/images/icon/project-virus-2.webp" alt="covid surokkha"></li>
<li><img class="layer layer2" data-depth="0.5" src="assets/images/icon/project-virus-3.webp" alt="covid surokkha"></li>
<li><img src="assets/images/icon/project-virus-4.webp" alt="covid surokkha"></li>
<li><img src="assets/images/icon/project-virus-5.webp" alt="covid surokkha"></li>
<li><img src="assets/images/icon/project-virus-6.webp" alt="covid surokkha"></li>
<li id="virus7"><img src="assets/images/icon/project-virus-7.webp" alt="covid surokkha"></li>
<li><img src="assets/images/icon/project-virus-8.webp" alt="covid surokkha"></li>
<li><img class="layer layer2" data-depth="0.5" src="assets/images/icon/project-virus-9.webp" alt="covid surokkha"></li>
<li><img src="assets/images/icon/project-virus-10.webp" alt="covid surokkha"></li>
</ul>
</div>
</div>
</div>
</div>';

}


echo $output;

}

//include 'bottom-cache.php';


?>

<link rel="stylesheet" href="assets/vendors/linearicons/css/linearicons.css" />

