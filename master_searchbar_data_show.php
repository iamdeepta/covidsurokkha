<?php 

require('admin/db.inc.php');

if (isset($_POST['master_searchbar_data_show'])) {
	
	$master_searchbar_input = $_POST['master_searchbar_input'];

	$lastSegment = $_POST['lastSegment'];

	if($master_searchbar_input==''){

	$ms_query = mysqli_query($dbc, 'SELECT * from tbl_master_search where master_status=0 order by master_id asc');

    }else{

        $ms_query = mysqli_query($dbc, "SELECT * from tbl_master_search where master_status=0 and master_title_en LIKE '%$master_searchbar_input%' order by master_id asc");
    }

	$output = '';

	$ms_count=0;
  while($ms_query && $result=mysqli_fetch_array($ms_query, MYSQLI_ASSOC)){
        $ms_count++;
        //$blogs_count_delay = $blogs_count*100;

	if ($lastSegment=='en') {
		
		$output .= '<a href="'.$result['master_url'].'">
		<div class="card" style="width: 75vw;background-color: #58547e;border-radius: 15px;margin-top: 10px" onclick="close_master_searchbar()">
			<div class="card-body" style="line-height: 10px">
				<h4 id="master_searchbar_content_title" style="color: white;font-size: 1.5rem">'.$result['master_title_en'].'</h4>
				<p id="master_searchbar_content_text" style="color: white;font-size: 0.9rem;line-height:22px">'.mb_strimwidth($result['master_description_en'],0,200).'</p>
			</div>
		</div>
	</a>';
	}else{

		$output .= '<a href="'.$result['master_url'].'">
		<div class="card" style="width: 75vw;background-color: #58547e;border-radius: 15px;margin-top: 10px" onclick="close_master_searchbar()">
			<div class="card-body" style="line-height: 10px">
				<h4 id="master_searchbar_content_title" style="color: white;font-size: 1.5rem">'.$result['master_title_bn'].'</h4>
				<p id="master_searchbar_content_text" style="color: white;font-size: 0.9rem;line-height:22px">'.mb_strimwidth($result['master_description_bn'],0,200).'</p>
			</div>
		</div>
	</a>';
	}

	}

	echo $output;
}

?>


<!-- <script type="text/javascript">
	
	function dismiss_master_searchbar(){

		$('.master_searchbar_section').addClass('inactive_master_searchbar_section');
		$('.master_searchbar_section').removeClass('active_master_searchbar_section');
		$('.master_searchbar_close_icon').addClass('inactive_master_searchbar_close_icon');
		$('.master_searchbar_close_icon').removeClass('active_master_searchbar_close_icon');
		$('.master_searchbar_input_div').addClass('inactive_master_searchbar_input_div');
		$('.master_searchbar_input_div').removeClass('active_master_searchbar_input_div');
		$('.master_searchbar_search_icon').addClass('inactive_master_searchbar_search_icon');
		$('.master_searchbar_search_icon').removeClass('active_master_searchbar_search_icon');

		$('body').css('overflow-y','auto');
	}
</script> -->