<?php 

if(isset($_POST['other_inquiry'])){

  $output = '';

  if($_POST['lastSegment1']=='en'){

$output .= '<h4 style="color: white">Other Inquiry</h4>
<p id="error_msg3" style="color: #f37878;display:none">Please select atleast one from each question</p>
<div class="row">

<div class="col-lg-12">
  
  <div class="radio_btn">
<h5>I stay in a Containment zone/ Red Zone</h5>
<div class="select_conversation">
<input type="radio" name="red_zone" id="red_zone_yes" value="yes">
<label for="red_zone_yes">Yes</label>
</div>
<div class="select_conversation">
<input type="radio" name="red_zone" id="red_zone_no" value="no">
<label for="red_zone_no">No</label>
</div>
</div>


<div class="radio_btn">
<h5>Are you a healthcare provider- doctor, nurse, hospital staff?</h5>
<div class="select_conversation">
<input type="radio" name="healthcare" id="healthcare_yes" value="yes">
<label for="healthcare_yes">Yes</label>
</div>
<div class="select_conversation">
<input type="radio" name="healthcare" id="healthcare_no" value="no">
<label for="healthcare_no">No</label>
</div>
</div>


<div class="radio_btn">
<h5>Have you recently come in contact with someone tested positively for Covid-19?</h5>
<div class="select_conversation">
<input type="radio" name="positive" id="positive_yes" value="yes">
<label for="positive_yes">Yes</label>
</div>
<div class="select_conversation">
<input type="radio" name="positive" id="positive_no" value="no">
<label for="positive_no">No</label>
</div>
</div>


<div class="radio_btn">
<h5>Do you have any of these Pre-existing conditions- high BP, Heart problem, Diabetes, Asthma, Lung problems - COPD, Pneumonia or any respiratory disease?</h5>
<div class="select_conversation">
<input type="radio" name="condition" id="condition_yes" value="yes">
<label for="condition_yes">Yes</label>
</div>
<div class="select_conversation">
<input type="radio" name="condition" id="condition_no" value="no">
<label for="condition_no">No</label>
</div>
</div>

</div>

<div class="button">
<a class="submit_btn" id="confirm" href="javascript:void(0)" onclick="confirm();">Confirm</a>
</div>
</div>';

}else{

	$output .= '<h4 style="color: white">অন্যান্য অনুসন্ধান</h4>
<p id="error_msg3" style="color: #f37878;display:none">প্রতিটি প্রশ্ন থেকে কমপক্ষে একটি নির্বাচন করুন</p>
<div class="row">

<div class="col-lg-12">
  
  <div class="radio_btn">
<h5>আমি রেড জোনে থাকি</h5>
<div class="select_conversation">
<input type="radio" name="red_zone" id="red_zone_yes" value="yes">
<label for="red_zone_yes">হ্যাঁ</label>
</div>
<div class="select_conversation">
<input type="radio" name="red_zone" id="red_zone_no" value="no">
<label for="red_zone_no">না</label>
</div>
</div>


<div class="radio_btn">
<h5>আপনি কি স্বাস্থ্যসেবা সরবরাহকারী- চিকিৎসক, নার্স, হাসপাতালের কর্মী?</h5>
<div class="select_conversation">
<input type="radio" name="healthcare" id="healthcare_yes" value="yes">
<label for="healthcare_yes">হ্যাঁ</label>
</div>
<div class="select_conversation">
<input type="radio" name="healthcare" id="healthcare_no" value="no">
<label for="healthcare_no">না</label>
</div>
</div>


<div class="radio_btn">
<h5>আপনি কি সম্প্রতি কোভিড -১৯ পজিটিভ কারও সংস্পর্শে এসেছেন?</h5>
<div class="select_conversation">
<input type="radio" name="positive" id="positive_yes" value="yes">
<label for="positive_yes">হ্যাঁ</label>
</div>
<div class="select_conversation">
<input type="radio" name="positive" id="positive_no" value="no">
<label for="positive_no">না</label>
</div>
</div>


<div class="radio_btn">
<h5>আপনার কি প্রাক-বিদ্যমান শর্তগুলির কোনও- হাই বিপি, হার্টের সমস্যা, ডায়াবেটিস, হাঁপানি, ফুসফুসের সমস্যাগুলি - সিওপিডি, নিউমোনিয়া বা শ্বাসকষ্টের কোনও রোগ রয়েছে?</h5>
<div class="select_conversation">
<input type="radio" name="condition" id="condition_yes" value="yes">
<label for="condition_yes">হ্যাঁ</label>
</div>
<div class="select_conversation">
<input type="radio" name="condition" id="condition_no" value="no">
<label for="condition_no">না</label>
</div>
</div>

</div>

<div class="button">
<a class="submit_btn" id="confirm" href="javascript:void(0)" onclick="confirm();">কনফার্ম</a>
</div>
</div>';

}


echo $output;


}