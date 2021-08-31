<?php 

if(isset($_POST['header_links'])){

	include 'english_to_bangla.php';

  $output = '';

  if($_POST['lastSegment1']=='en'){

$output .= '<li class="active"><a href="index.php?lang=en">Home</a></li>
<li><a href="symptom-checker.php?lang=en">Symptom Checker</a></li>
<li><a href="blogs.php?lang=en">Blogs</a></li>
<li class=""><a href="about_us.php?lang=en">About Us</a></li>
<li class=""><a href="vaccine.php?lang=en">Vaccine</a></li>
<li id="choose_lang1"><a href="#" id="choose_lang">Language: </a></li>';

}else{

	$output .= '<li class="active"><a href="index.php?lang=bn">হোম</a></li>
<li><a href="symptom-checker.php?lang=bn">লক্ষণ পরীক্ষক</a></li>
<li><a href="blogs.php">ব্লগ</a></li>
<li class=""><a href="about_us.php">আমাদের সম্পর্কে</a></li>
<li class=""><a href="vaccine.php">ভ্যাকসিন</a></li>
<li id="choose_lang1"><a href="#" id="choose_lang">ভাষা: </a></li>';

}

echo $output;


}