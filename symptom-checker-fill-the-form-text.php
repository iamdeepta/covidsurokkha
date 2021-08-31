<?php 

if(isset($_POST['fill_the_form_text'])){

  $output = '';
  if($_POST['lastSegment1']=='en'){

$output .= '<h3 id="fill_the_simple_form_below_text">Fill the simple form below</h3>
<p>Enter more symptoms for more accurate results, starting with your most severe symptom.
Look through a list of common symptoms.
</p>';

}else{

$output .= '<h3 id="fill_the_simple_form_below_text">নীচের সহজ ফর্মটি পূরণ করুন</h3>
<p>আপনার সবচেয়ে গুরুতর লক্ষণ দিয়ে শুরু করে আরও সঠিক ফলাফলের জন্য আরও লক্ষণ প্রবেশ করান। সাধারণ লক্ষণগুলির একটি তালিকা দেখুন। 
</p>';

}

echo $output;


}