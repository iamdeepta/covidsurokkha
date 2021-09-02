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
		
		$output .= '<a href="">
		<div class="card" style="width: 75vw;background-color: #58547e;border-radius: 15px;margin-top: 10px">
			<div class="card-body" style="line-height: 10px">
				<h4 id="master_searchbar_content_title" style="color: white;font-size: 1.5rem">'.$result['master_title_en'].'</h4>
				<p id="master_searchbar_content_text" style="color: white;font-size: 0.9rem;line-height:22px">'.$result['master_description_en'].'</p>
			</div>
		</div>
	</a>';
	}else{

		$output .= '<a href="">
		<div class="card" style="width: 75vw;background-color: #58547e;border-radius: 15px;margin-top: 10px">
			<div class="card-body" style="line-height: 10px">
				<h4 id="master_searchbar_content_title" style="color: white;font-size: 1.5rem">'.$result['master_title_bn'].'</h4>
				<p id="master_searchbar_content_text" style="color: white;font-size: 0.9rem;line-height:22px">'.$result['master_description_bn'].'</p>
			</div>
		</div>
	</a>';
	}

	}

	echo $output;
}

?>