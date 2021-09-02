<style type="text/css">
	
	.inactive_master_searchbar_section{

		opacity: 0;
		transform: scale(0);
		transition: 0.7s;
	}

	.active_master_searchbar_section{

		opacity: 1;
		transform: scale(1);
		transition: 0.7s;
	}

	.inactive_master_searchbar_close_icon{

		opacity: 0;
		transform: scale(0);
		transition: 0.7s
	}

	.active_master_searchbar_close_icon{

		opacity: 1;
		transform: scale(1);
		transition: 0.7s;
	}

	.inactive_master_searchbar_input_div{

		opacity: 0;
		transform: scaleX(0);
		transition: 1s;
	}

	.active_master_searchbar_input_div{

		opacity: 1;
		transform: scaleX(1);
		transition: 1s;
	}

	.inactive_master_searchbar_search_icon{

		opacity: 0;
		transform: scale(0);
		transition: 1s
	}

	.active_master_searchbar_search_icon{

		opacity: 1;
		transform: scale(1);
		transition: 1s;
	}

	input[name="master_searchbar_input"]:focus{

    outline: 0 none !important;
   box-shadow: 0 1px 1px transparent inset, 0 0 8px transparent !important;
   /*border: 1px solid transparent !important;*/
   border-bottom: 3px solid #01cfbe !important;
   transition: 0.5s !important;
  }

  #master_searchbar_input::placeholder{

    float: left !important;
    font-size: 16px !important;
    margin-top: 0px !important;
  }

	@media screen and (max-width: 460px){

		.master_searchbar_close_icon{

			top: 86% !important;
			left: 85% !important;
		}

		#master_searchbar_input::placeholder{

		    float: none !important;
		  }

		  .master_searchbar_input_div{

		  	left: 5% !important;
		  }

		  .master_searchbar_search_icon{

		  	top: 14% !important;
		  	left: 82% !important;
		  }
	}
</style>

<div class="master_searchbar_section inactive_master_searchbar_section" style="position: fixed;z-index: 99999999999999999999;top: 0px;bottom: 0px;left: 0px;right: 0px;width: 100vw;height: auto;background-color: white">
	

</div>

<div class="master_searchbar_close_icon inactive_master_searchbar_close_icon" style="position: fixed;z-index: 99999999999999999999;top: 40px;left: 90%;"><i class="fas fa-times-circle" style="font-size: 36px;color: #58547e;cursor: pointer;" onclick="close_master_searchbar()"></i></div>


<div class="container master_searchbar_input_div inactive_master_searchbar_input_div" style="position: fixed;z-index: 99999999999999999999;top: 10%;left: 10%;">
	
	<?php if(@$_GET['lang']=='en'){?>
	<input type="text" name="master_searchbar_input" id="master_searchbar_input" class="form-control" placeholder="Search" style="margin-top: 20px;border:none;border-bottom: 3px solid #58547e;background-color: transparent;border-radius: 0px;width: 80vw" data-aos="fade-down" data-aos-duration="1000" onkeyup="master_searchbar_data_show()" onfocusin="hide_placeholder_master_searchbar()" onfocusout="show_placeholder_master_searchbar()">
<?php }else{?>
	<input type="text" name="master_searchbar_input" id="master_searchbar_input" class="form-control" placeholder="অনুসন্ধান করুন" style="margin-top: 20px;border:none;border-bottom: 3px solid #58547e;background-color: transparent;border-radius: 0px;width: 80vw" data-aos="fade-down" data-aos-duration="1000" onkeyup="master_searchbar_data_show()" onfocusin="hide_placeholder_master_searchbar()" onfocusout="show_placeholder_master_searchbar()">
<?php }?>
</div>

<i class="fas fa-search master_searchbar_search_icon inactive_master_searchbar_search_icon" id="master_searchbar_search_icon" style="position: fixed;top: 13%;left: 87%;z-index: 99999999999999999999"></i>

<script type="text/javascript">
	
	function master_searchbar(){

		$('.master_searchbar_section').addClass('active_master_searchbar_section');
		$('.master_searchbar_section').removeClass('inactive_master_searchbar_section');
		$('.master_searchbar_close_icon').addClass('active_master_searchbar_close_icon');
		$('.master_searchbar_close_icon').removeClass('inactive_master_searchbar_close_icon');
		$('.master_searchbar_input_div').addClass('active_master_searchbar_input_div');
		$('.master_searchbar_input_div').removeClass('inactive_master_searchbar_input_div');
		$('.master_searchbar_search_icon').addClass('active_master_searchbar_search_icon');
		$('.master_searchbar_search_icon').removeClass('inactive_master_searchbar_search_icon');

		$('body').css('overflow','hidden');
	}

	function close_master_searchbar(){

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

	function hide_placeholder_master_searchbar(){

		$('#master_searchbar_input').attr('placeholder','');
	}

	function show_placeholder_master_searchbar(){

		if(lastSegment=='en'){
		$('#master_searchbar_input').attr('placeholder','Search');
		}else{
			$('#master_searchbar_input').attr('placeholder','অনুসন্ধান করুন');
		}
	}
</script>