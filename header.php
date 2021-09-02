<?php 

$id = @$_GET['id'];

if($id!=''){

	$id = 'id='.$id.'&';
}else{

	$id = '';
}

?>
<style type="text/css">
	
	.info_icon_link:hover #info_icon{

		/*transform: rotateY(180deg);*/
		transition: 0.5s;
		color: #01cfbe !important;
	}


	.info_icon_link:hover .dropdown-menu{

		display: block !important;
		opacity: 1;
		transition: 0.5s;
		transform: translateY(0px);
	}

	.info_icon_link:not(:hover) #info_icon{

		transition: 0.5s;


	}

	.info_icon_link:not(:hover) .dropdown-menu{

		/*display: none !important;*/
		display: block !important;
		transition: 0.5s;
		transform: translateY(50px);
		opacity: 0;


	}

	.navbar_fixed .main_menu .container .navbar .navbar-collapse ul #master_searchbar_li{

		margin-top: 21px !important;
	}
</style>
<header class="header_area">
<!-- <ul class="nav menu_social flex-column">
<li>
<a href="#"><i class="fab fa-facebook"></i></a>
</li>
<li>
<a href="#"><i class="fab fa-twitter"></i></a>
</li>
<li>
<a href="#"><i class="fab fa-instagram"></i></a>
</li>
</ul> -->
<div class="main_menu">

	<?php include 'header_top.php';?>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">


	<?php if(@$_GET['lang']=='en'){?>
<a class="navbar-brand" href="index.php?lang=en"><span style="font-size: 28px;font-weight:bold;color: #58547e"><img id="covidshebalogos" src="assets/images/logo.png" alt="covidsurokkha" style="width: 250px;height: 50px;object-fit: contain;"></span><!-- <img src="assets/images/logo.png" srcset="assets/images/logo-2x.png 2x" alt="" /> --><!-- <span id="covidlogo" style="font-size: 30px;font-weight: bold;color: #029e91;margin-left: -7px">covidsurokkha</span> --></a>
<?php }elseif(@$_GET['lang']=='bn'){?>
	<a class="navbar-brand" href="index.php?lang=bn"><span style="font-size: 28px;font-weight:bold;color: #58547e"><img id="covidshebalogos" src="assets/images/logo.png" alt="covidsurokkha" style="width: 250px;height: 50px;object-fit: contain;"></span><!-- <img src="assets/images/logo.png" srcset="assets/images/logo-2x.png 2x" alt="" /> --><!-- <span id="covidlogo" style="font-size: 30px;font-weight: bold;color: #029e91;margin-left: -7px">covidsurokkha</span> --></a>
<?php }else{?>
	<a class="navbar-brand" href="index.php?lang=bn"><span style="font-size: 28px;font-weight:bold;color: #58547e"><img id="covidshebalogos" src="assets/images/logo.png" alt="covidsurokkha" style="width: 250px;height: 50px;object-fit: contain;"></span><!-- <img src="assets/images/logo.png" srcset="assets/images/logo-2x.png 2x" alt="" /> --><!-- <span id="covidlogo" style="font-size: 30px;font-weight: bold;color: #029e91;margin-left: -7px">covidsurokkha</span> --></a>
<?php }?>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="nav navbar-nav ml-auto notranslate">
<li class="active">
	<?php if(@$_GET['lang']=='en'){?>
	<a href="index.php?lang=en">Home</a>
<?php }elseif(@$_GET['lang']=='bn'){?>
	<a href="index.php?lang=bn"><?php echo BanglaConverter::en2bn("Home");?></a>
<?php }else{?>
	<a href="index.php?lang=bn"><?php echo BanglaConverter::en2bn("Home");?></a>
<?php }?>
</li>


<li class="">
	<?php if(@$_GET['lang']=='en'){?>
	<a href="symptom-checker.php?lang=en">Symptom Checker</a>
<?php }else{?>
	<a href="symptom-checker.php?lang=bn">লক্ষণ পরীক্ষক</a>
<?php }?>
</li>

<li class="">
	<?php if(@$_GET['lang']=='en'){?>
	<a href="blogs.php?lang=en">Blogs</a>
<?php }else{?>
	<a href="blogs.php">ব্লগ</a>
<?php }?>
</li>

<li class="">
	<?php if(@$_GET['lang']=='en'){?>
	<a href="about_us.php?lang=en">About Us</a>
<?php }else{?>
	<a href="about_us.php">আমাদের সম্পর্কে</a>
<?php }?>
</li>

<li class="">
	<?php if(@$_GET['lang']=='en'){?>
	<a href="vaccine.php?lang=en">Vaccine</a>
<?php }else{?>
	<a href="vaccine.php">ভ্যাকসিন</a>
<?php }?>
</li>
<!-- <li class="dropdown submenu">
<a class="dropdown-toggle" data-toggle="dropdown" href="prevention.php" role="button" aria-haspopup="true" aria-expanded="false">Prevention </a>
<i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
<ul class="dropdown-menu">
<li class="dropdown submenu">
<a class="dropdown-toggle" data-toggle="dropdown" href="symptom.php" role="button" aria-haspopup="true" aria-expanded="false">Symptoms
<i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
</a>
<ul class="dropdown-menu">
<li><a href="symptom.php">Typical Symptoms</a></li>
<li><a href="symptom-checker.php">Symptom Checker</a></li>
<li><a href="prevention.php">Prevention</a></li>
<li><a href="virus-checker.php">Coronavirus Checker</a></li>
<li><a href="tracker.php">Tracker</a></li>
</ul>
</li>
<li><a href="maintenance.php">Maintenance</a></li>
<li><a href="faq.php">FAQS</a></li>
</ul>
</li> -->
<!-- <li><a href="appointment.php">Appointment</a></li>
<li class="dropdown submenu">
<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
<i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
<ul class="dropdown-menu">
<li><a href="about.php">About</a></li>
<li><a href="doctors.php">Doctors</a></li>
<li><a href="sample-right-sidebar.php">Simple Sidebar</a></li>
<li><a href="typography.php">Typhography</a></li>
<li class="dropdown submenu">
<a class="dropdown-toggle" data-toggle="dropdown" href="search.php" role="button" aria-haspopup="true" aria-expanded="false">Search
<i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
</a>
<ul class="dropdown-menu">
<li><a href="search.php">Search</a></li>
<li><a href="search-nothing.php">Not Found</a></li>
</ul>
</li>
<li><a href="comingsoon.php">Coming Soon</a></li>
<li><a href="404.php">Error</a></li>
</ul>
</li> -->
<!-- <li class="dropdown submenu">
<a class="dropdown-toggle" data-toggle="dropdown" href="blog.php" role="button" aria-haspopup="true" aria-expanded="false">Blog
</a>
<i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
<ul class="dropdown-menu">
<li><a href="blog.php">Blog</a></li>
<li><a href="single-blog.php">Blog Details</a></li>
</ul>
</li> -->
<!-- <?php if(@$_GET['lang']=='en'){?>
<li><a href="#footer_section">Contact Us</a></li>
<?php }else{?>
	<li><a href="#footer_section" class="notranslate">যোগাযোগ করুন</a></li>
<?php }?> -->

<!-- <li><a id="info_icon_link" href="https://www.singaporeair.com/saar5/pdf/media-centre/Bangladesh-PDT-test-centres-28Dec20.pdf"><i id="info_icon" class="fas fa-info-circle" style="color: #58547e;font-size: 24px"></i>

	<span id="icon_hover_span" style="position:absolute;top:15%;left:0%;z-index:999;background-color: white;color: #01cfbe;padding: 0px;border-radius: 6px;box-shadow: 0px 0px 2px 0px;width: 400px">Covid Test Centres For International Flights</span>

</a>

</li> -->

<li class="nav-item dropdown info_icon_link" style="height: 70px;margin-top: -6px;margin-left: -8px;width: 30px" onclick="window.location.href='approved-laboratories.php'">
        <a class="nav-link dropdown-toggle" href="approved-laboratories.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i id="info_icon" class="fas fa-info-circle" style="color: #58547e;font-size: 24px"></i>
        </a>
        <?php if(@$_GET['lang']=='en'){?>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 8px;margin-left: -120px;display: none;margin-top: 10px">
          <a class="dropdown-item" href="approved-laboratories.php?lang=en" style="font: icon;padding: 5px;color: #01cfbe !important">Covid Test Centres For International Flights</a>
          
        </div>
    <?php }else{?>
    	<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="border-radius: 8px;margin-left: -120px;display: none;margin-top: 10px">
          <a class="dropdown-item notranslate" href="approved-laboratories.php" style="font: icon;padding: 5px;color: #01cfbe !important">আন্তর্জাতিক ভ্রমণের জন্য কোভিড টেস্ট ল্যাবরেটরিজ</a>
          
        </div>
    <?php }?>
      </li>


    <li class="master_searchbar_li" id="master_searchbar_li" style="margin-top: 30px">
	<i id="master_searchbar_icon" class="fas fa-search" style="font-size: 18px;cursor: pointer;" onclick="master_searchbar()"></i>
	</li>


<?php if(@$_GET['lang']=='en'){?>
<li id="choose_lang1"><a href="#" id="choose_lang">Language: </a></li>
<?php }else{?>
	<li id="choose_lang1"><a class="notranslate" href="#" id="choose_lang">ভাষা: </a></li>
<?php }?>
<style type="text/css">
	#choose_lang:hover{
		color: #58547e !important;
		cursor: inherit;
	}

</style>
</ul>
<ul class="nav navbar-nav navbar-right">
<li class="checker_btn" style="margin-left: -40px;">
	<?php if(@$_GET['lang']=='en'){?>
		<a id="bengali_btn" href="javascript:window.history.replaceState(null, null, '?<?php echo $id;?>lang=bn'); window.location.href=window.location.href"><!-- <i class="linearicons-pulse"></i> --> BENGALI</a>
	<?php }elseif(@$_GET['lang']=='bn'){?>
<a class="notranslate" id="english_btn" href="javascript:window.history.replaceState(null, null, '?<?php echo $id;?>lang=en'); window.location.href=window.location.href"><!-- <i class="linearicons-pulse"></i> --> ইংরেজি</a>
<?php }else{?>
	<a class="notranslate" id="english_btn" href="javascript:window.history.replaceState(null, null, '?<?php echo $id;?>lang=en'); window.location.href=window.location.href"><!-- <i class="linearicons-pulse"></i> --> ইংরেজি</a>
<?php }?>
</li>
</ul>
</div>
</nav>
</div>
<div class="right_burger">
<ul class="nav">
<li>
<div class="search_btn" data-toggle="modal" data-target="">
<!-- <img id="search_header" src="assets/images/icon/search.png" alt="" /> -->
<ul class="nav navbar-nav navbar-right" id="mbl_lang" style="display: none;">

<li class="master_searchbar_li_mbl" id="master_searchbar_li_mbl" style="margin-top: 0px;margin-left: 0px;padding-right: 52px">
	<i id="master_searchbar_icon_mbl" class="fas fa-search" style="font-size: 17px;cursor: pointer;padding-top: 3px" onclick="master_searchbar()"></i>
	</li>

<li class="checker_btn" style="margin-left: -40px;margin-top:-30px">
	<?php if(@$_GET['lang']=='en'){?>
		<a id="bengali_btn" href="javascript:window.history.replaceState(null, null, '?<?php echo $id;?>lang=bn'); window.location.href=window.location.href" style="background: #01cfbe !important;padding: 5px;border-radius: 4px;color: white;font-size: 12px;"><!-- <i class="linearicons-pulse"></i> --> BENGALI</a>
	<?php }elseif(@$_GET['lang']=='bn'){?>
<a class="notranslate" id="english_btn" href="javascript:window.history.replaceState(null, null, '?<?php echo $id;?>lang=en'); window.location.href=window.location.href" style="background: #01cfbe !important;padding: 5px;border-radius: 4px;color: white;font-size: 12px;"><!-- <i class="linearicons-pulse"></i> --> ইংরেজি</a>
<?php }else{?>
	<a class="notranslate" id="english_btn" href="javascript:window.history.replaceState(null, null, '?<?php echo $id;?>lang=en'); window.location.href=window.location.href" style="background: #01cfbe !important;padding: 5px;border-radius: 4px;color: white;font-size: 12px;"><!-- <i class="linearicons-pulse"></i> --> ইংরেজি</a>
<?php }?>
</li>


</ul>
</div>
</li>
<li>
<div class="menu_btn" id="header_menu_bar" style="display: none">
<img src="assets/images/icon/burger.png" alt="covidsurokkha" />
</div>
</li>
</ul>
</div>
<?php include 'header_scroll_indicator.php';?>
</header>




