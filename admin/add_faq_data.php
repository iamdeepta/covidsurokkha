<?php 
require('db.inc.php');

  $date = date("Y-m-d");
    
    if((isset($_POST['faq_category_en']) || isset($_POST['faq_category_bn'])) && (isset($_POST['faq_title_en']) || isset($_POST['faq_title_bn'])) && (isset($_POST['faq_description_en']) || isset($_POST['faq_description_bn']))){

        if((mb_strlen(trim($_POST['faq_category_en'])) > 0 || mb_strlen(trim($_POST['faq_category_bn'])) > 0) && (mb_strlen(trim($_POST['faq_title_en'])) > 0 || mb_strlen(trim($_POST['faq_title_bn'])) > 0) && (mb_strlen(trim($_POST['faq_description_en'])) > 0 || mb_strlen(trim($_POST['faq_description_bn'])) > 0)){

            $query = mysqli_query($dbc, "INSERT INTO tbl_faq (faq_category_en, faq_category_bn, faq_title_en, faq_title_bn, faq_description_en, faq_description_bn) VALUES('".mysql_safe(trim($_POST['faq_category_en']))."','".mysql_safe(trim($_POST['faq_category_bn']))."','".mysql_safe(trim($_POST['faq_title_en']))."','".mysql_safe(trim($_POST['faq_title_bn']))."','".mysql_safe(trim($_POST['faq_description_en']))."','".mysql_safe(trim($_POST['faq_description_bn']))."')");
            
            if(mysqli_affected_rows($dbc) > 0)
                echo json_encode(array('response' => 'success'));
            else
                echo json_encode(array('response' => 'error', 'result' => 'Could not save your data'));
                
        } else {
            echo json_encode(array('response' => 'error', 'result' => 'Please fill up all the empty fields before inserting'));
        }
    } else {
        echo json_encode(array('response' => 'error', 'result' => 'Invalid Activity'));
    }
