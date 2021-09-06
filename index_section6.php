<section class="data_table_area ambulance_section" id="ambulance_section" style="background-color: #f5f5f9;margin-top: 60px;" data-aos="zoom-in" data-aos-duration="1000">
<div class="container">
<div class="main_title text-center">
	<?php if(@$_GET['lang']=='en'){?>
<h5 id="hospitals_nearby_text" style="font-size: 38px;">Nearby Ambulance</h5>
<?php }else{?>
	<h5 class="notranslate" id="hospitals_nearby_text" style="font-size: 38px;">কাছাকাছি এ্যাম্বুলেন্স</h5>
<?php }?>
<?php if(@$_GET['lang']=='en'){?>
<h2>Ambulance Services</h2>
<?php }else{?>
	<h2 class="notranslate">এ্যাম্বুলেন্স সেবা</h2>

<?php }?>
</div>
<div class="table-responsive">
<table id="dtBasicExample1" class="table table-striped table-bordered " cellspacing="0" width="100%">
<thead>

<?php if(@$_GET['lang']=='en'){?>
<tr role="row" style="background-color: #58547e;">
<!-- <th style="text-align: center">Serial</th> -->
<th style="text-align: center;color: white">Company Name</th>
<th style="text-align: center;color: white">Service Area</th>
<th style="text-align: center;color: white">Contact Number</th>

</tr>
<?php }else{?>
	<tr class="notranslate" role="row" style="background-color: #58547e;">
<th style="text-align: center;color: white">কোম্পানির নাম</th>
<th style="text-align: center;color: white">সার্ভিস এলাকা</th>
<th style="text-align: center;color: white">ফোন নাম্বার</th>

</tr>
<?php }?>
</thead>
<tbody>
	<?php 
	$ambulance_count=0;
	while($ambulance_query && $result1=mysqli_fetch_array($ambulance_query, MYSQLI_ASSOC)){
        $ambulance_count++;
?>
	<tr style="background-color: white !important">
		<!-- <td style="text-align: center"><?=$hospital_count?></td> -->
		<?php if(@$_GET['lang']=='en'){?>
		<td style="text-align: center;width: 30%"><?=$result1['company_name']?></td>
		<td style="text-align: center"><?=$result1['service_area']?></td>
		<td style="text-align: center"><a href="tel:<?=$result1['contact_number']?>" style="color: #58547e"><?=$result1['contact_number']?></a></td>
		

	<?php }else{?>
		<td class="notranslate" style="text-align: center;width: 30%">
		
		<span style="opacity: 0;display: none;"><?=$result1['company_name']?> </span><?=$result1['company_name_bn']?>

	</td>

	
		<td class="notranslate" style="text-align: center"><span style="opacity: 0;display: none;"><?=$result1['service_area']?> </span><?=$result1['service_area_bn']?></td>
	
		<td class="notranslate" style="text-align: center"><a href="tel:<?=$result1['contact_number']?>" style="color: #58547e"><?=BanglaConverter::en2bn($result1['contact_number'])?></a></td>
		

	<?php }?>
		
	</tr>

<?php }?>
</tbody>
</table>
</div>
</div>
</section>