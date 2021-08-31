<?php 

if(isset($_POST['header_logo'])){

	include 'english_to_bangla.php';

  $output = '';

  if($_POST['lastSegment1']=='en'){

$output .= '<a class="navbar-brand" href="index.php?lang=en">
	<span style="font-size: 28px;font-weight:bold;color: white"><img id="covidshebalogos" src="assets/images/logo.png" style="width: 250px;height: 30px;" alt="covidsurokkha"></span></a>';

}else{


	$output .= '<a class="navbar-brand" href="index.php?lang=bn">
	<span style="font-size: 28px;font-weight:bold;color: white"><img id="covidshebalogos" src="assets/images/logo.png" style="width: 250px;height: 30px;" alt="covidsurokkha"></span></a>';
}

echo $output;


}