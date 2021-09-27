<?php 

if(isset($_POST['fill_the_form_text'])){

  $output = '';
  if($_POST['lastSegment1']=='en'){

$output .= '<h2 class="fill_the_simple_form_below_text" id="fill_the_simple_form_below_text" style="font: 700 30px quicksand,sans-serif;color:white">Fill the simple form below</h2>
<p>Enter more symptoms for more accurate results, starting with your most severe symptom.
Look through a list of common symptoms.
</p>';

}else{

$output .= '<h3 class="fill_the_simple_form_below_text" id="fill_the_simple_form_below_text" style="font: 700 30px quicksand,sans-serif;color:white">নীচের সহজ ফর্মটি পূরণ করুন</h3>
<p>আপনার সবচেয়ে গুরুতর লক্ষণ দিয়ে শুরু করে আরও সঠিক ফলাফলের জন্য আরও লক্ষণ প্রবেশ করান। সাধারণ লক্ষণগুলির একটি তালিকা দেখুন। 
</p>';

}

echo $output;


}