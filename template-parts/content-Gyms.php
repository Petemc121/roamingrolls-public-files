<?php
 if (isset($_POST['cdbshfcshfrneklffnlrkjfnkek']))
  {
if ( wp_verify_nonce($_POST['cdbshfcshfrneklffnlrkjfnkek'], 'delete_user' )) {
  $id = $current_user->ID;
      wp_delete_user($id);
      wp_logout();
}
  }
global $wpdb;
global $current_user;
wp_get_current_user();


$kv_author =get_the_author_meta('ID'); 	

 if($current_user->ID != $kv_author){
    echo "<style>#uploadImages{display:none !important;}</style>";
    echo "<style>#editDes{display:none !important;}</style>";
    echo "<style>#plusInstructor{display:none !important;}</style>";
    echo "<style>#minusInstructor{display:none !important;}</style>";
    echo "<style>.inup{display:none !important;}</style>";
    echo "<style>#imgRules{display:none !important;}</style>";
    echo "<style>#editInstruct{display:none !important;}</style>";

    echo "<style>#editPricing{display:none !important;}</style>";

    echo "<style>#editSchedule{display:none !important;}</style>";

    echo "<style>#editChecks{display:none !important;}</style>";

    
    echo "<style>#gymDelete{display:none !important;}</style>";
    echo "<style>#logoPicUp{display:none !important;}</style>";
 } 

$post_id = get_the_ID();


if (isset($_POST['ncskfnalvkbahlds']))
{
  if (wp_verify_nonce($_POST['ncskfnalvkbahlds'], 'create_gym_des' ))
   {
  $gymDes = sanitize_text_field($_POST['gymDesIn']);

    if($gymDes != "") {

        update_post_meta($post_id, 'gymDes', $gymDes);
    } else
    {
          echo "<style>#desAlert{display:block !important;}</style>";
    }
}
}

function addMeta($formPost, $metaKey, &$postVar) {
  $post_id = get_the_ID();


  if (isset($formPost)) {
    $postVar = sanitize_text_field($formPost);
    
    if ($postVar !== '') {
      update_post_meta($post_id, $metaKey, $postVar);
    
      }
    }

}

function is_valid_domain_name($domain_name){
  if (filter_var($domain_name, FILTER_VALIDATE_URL)){ 
    return true;
} else {
  return false;
}
}


// if (isset($_POST['sbhkdvhjsbhkvbhkvb'])) {

//   if(wp_verify_nonce($_POST['sbhkdvhjsbhkvbhkvb'], 'price_update' )) {
//       if(is_user_logged_in()) {

//         if (isset($_POST['classPrice'])) {

//           if($_POST['classPrice'] != "") {


//           $classPrice = sanitize_text_field($_POST['classPrice']);

//           if(is_numeric($classPrice)) {
//                 update_post_meta($post_id, 'classPrice', $classPrice);

//           } else {
//                   echo "<style>#priceAlert{display:block !important;}</style>";

//           }
//         }else {
//             delete_post_meta($post_id,'classPrice');
//           }

//         }

//          if (isset($_POST['dayPrice'])) {

//           if($_POST['dayPrice'] != "") {

//           $dayPrice = sanitize_text_field($_POST['dayPrice']);

//           if(is_numeric($dayPrice)) {
//                 update_post_meta($post_id, 'dayPrice', $dayPrice);

//           } else {

//                   echo "<style>#priceAlert{display:block !important;}</style>";
//           }

//         }else {
//             delete_post_meta($post_id,'dayPrice');
//           }

//         }

//          if (isset($_POST['weekPrice'])) {

//           if($_POST['weekPrice'] != "") {

//           $weekPrice = sanitize_text_field($_POST['weekPrice']);

//           if(is_numeric($weekPrice)) {
//                 update_post_meta($post_id, 'weekPrice', $weekPrice);

//           } else {
//                   echo "<style>#priceAlert{display:block !important;}</style>";

//           }

//           }else {
//             delete_post_meta($post_id,'weekPrice');
//           }

//         }

//         if($_POST['classDes'] != "") {
//           addMeta($_POST['classDes'], 'classDes', $classDes );

//         }

//           if($_POST['dayDes'] != "") {
//           addMeta($_POST['dayDes'], 'dayDes', $dayDes );

          
//         }

//           if($_POST['weekDes'] != "") {
//           addMeta($_POST['weekDes'], 'weekDes', $weekDes );

//         }

//          if($_POST['priceLink'] != "") {

          
//            if(is_valid_domain_name($_POST['priceLink']) === true) {

//           addMeta($_POST['priceLink'], 'priceLink', $priceLink );
                

//         } else {
//                   echo "<script>alert('Please enter a valid URL')</script>";
                  
//         }

//       }
// }
// }
// }




 
if (isset($_POST["fjekncjkedwlkkjfnhbnmsnuriukjs"])) {
  if(wp_verify_nonce($_POST['fjekncjkedwlkkjfnhbnmsnuriukjs'], 'class_update' )) {

    $checkboxes = 
array(
   'kids',
   'women',
   'giClass',
   'no-gi',
   'mma',
   'wrestling'
);

     foreach( $checkboxes as $name)
    {
        if( isset( $_POST[$name] ) && $_POST[$name] == 1)
        {
           update_post_meta($post_id, $name, "true" );
        }
        else
        {
           update_post_meta($post_id, $name, "false" );
            
        }
    }
 
      
    if($_POST['scheduleLink'] != "") {
    $sLink = sanitize_text_field($_POST['scheduleLink']);

          
           if(is_valid_domain_name($sLink)) {

          addMeta($sLink, 'scheduleLink', $scheduleLink );
                 

        } else {
                  echo "<script>alert('Please enter a valid URL')</script>";
                
        }

      }

       if($_POST['priceLink'] != "") {

    $pLink = sanitize_text_field($_POST['priceLink']);

          
           if(is_valid_domain_name($pLink)) {

          addMeta($pLink, 'priceLink', $priceLink );
                

        } else {
                  echo "<script>alert('Please enter a valid URL')</script>";
                  
        }

      }
}
}


if (isset($_POST["dwcbehwjkrewwbhjds"])) {
  if(wp_verify_nonce($_POST['dwcbehwjkrewwbhjds'], 'icon_update' )) {

    $checkboxes = 
array(
   'locker',
   'shower',
   'weight',
   'water',
   'giRent',
   'food',
   'wifi'
);

     foreach( $checkboxes as $name)
    {
        if( isset( $_POST[$name] ) && $_POST[$name] == 1)
        {
           update_post_meta($post_id, $name, "true" );
        }
        else
        {
           update_post_meta($post_id, $name, "false" );
            
        }
    }

    if(isset($_POST['otherText'])) {
      if ($_POST['otherText'] !== "") {

       $otherText = sanitize_text_field($_POST['otherText']);

        update_post_meta( $post_id, 'otherText', $otherText );
      }
    } 
}
}





if (isset($_POST['njvkdsnvklsvlnvdf'])) {
 if(wp_verify_nonce($_POST['njvkdsnvklsvlnvdf'], 'gym_pic_upload' )) {

        
  $uploadsDir = wp_upload_dir();
  $allowedFileType = array('JPG','jpg','png','jpeg');
  $attachIdArray = array();
  // Validate if files exist
  if ($_FILES) {
  
      $files = $_FILES['SlideImageInput'];

      
      // Loop through file items
      foreach($files['name'] as $id=>$val){
          // Get files upload path
          if ($files['name'][$id]) {

              $file = array (
                              'name' => $files['name'][$id],
                              'type' => $files['type'][$id],
                              'tmp_name' => $files['tmp_name'][$id],
                              'error' => $files['error'][$id],
                              'size' => $files['size'][$id]
              );

      
          
    $filename = $file['name'];
    $filesize = $file['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
      //     // $filepath = $uploadsDir.$filename;

      //    echo "<script>alert('".$filename."')</script>";

          $_FILES = array("SlideImageInput" => $file);

          foreach ($_FILES as $file => $array) {

              if(!in_array($ext, $allowedFileType)){
                  
              
          } else if (
            $filesize > 600000
          ) {
            echo "<script>alert('Your file size is too large! Please choose image files of less than 1MB')</script>";

          } else {
            
      
          // Add into MySQL database
            
            $attach_id = insert_attachment($file, $post_id);
          


              if($attach_id) {
                array_push($attachIdArray, $attach_id);
              } else {
                  echo "<script>alert('Oh No!')</script>";
                  
              }
          }
          
      }
      
 

      

  } else {
      echo "<script>alert('Error!')</script>";
      
  }

  
} 

 update_post_meta($post_id, 'slide_img_array', $attachIdArray);



}
}
}


function uploadInstructFile($file, $meta_key, $fileIn) {

  $post_id = get_the_ID();
  $uploadsDir = wp_upload_dir();
  $allowedFileType = array('jpg','png','jpeg');
  $filename = $file['name'];
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));



      $check = getimagesize($file["tmp_name"]);
      if($check !== false) {
        $uploadOk = 1;
      } else {
        echo "<script>alert('invalid file!')</script>";
        $uploadOk = 0;
      }
  
    

    if(in_array($imageFileType, $allowedFileType)) {
      $uploadOk = 1;
    } else {
      echo "<script>alert('incorrect file type!')</script>";
      $uploadOk = 0;
    }

    if ($file["size"] > 600000) {
      echo "<script>alert('Too large')</script>";
      $uploadOk = 0;
    }

    if ($uploadOk == 0) {
      echo "<script>alert('Your file was not uploaded!')</script>";
      return false;
    } else {


      $attach_id = insert_attachment($fileIn, $post_id);
      update_post_meta($post_id, $meta_key, $attach_id);
      
    }
  
  }


  if (isset($_POST['sfndklnfdlnkdsnkdlnjkfxjridjg'])) {
  
  if(wp_verify_nonce($_POST['sfndklnfdlnkdsnkdlnjkfxjridjg'], 'logo_img_form' )) {
  
if (!empty($_FILES['logo_photo']['name'])) {

  $logoImg = $_FILES['logo_photo'];

  uploadInstructFile($logoImg, 'logo_photo', 'logo_photo');

}
  }
}

if (isset($_POST['njvkddsbhjdsbvhsdb'])) {
  
  if(wp_verify_nonce($_POST['njvkddsbhjdsbvhsdb'], 'instructor_upload' )) {
  
if (!empty($_FILES['imageUpload0']['name'])) {

  $img1 = $_FILES['imageUpload0'];

  uploadInstructFile($img1, 'instructorImg0', 'imageUpload0');

}

if (!empty($_FILES['imageUpload1']['name'])) {
  $img2 = $_FILES['imageUpload1'];
  uploadInstructFile($img2, 'instructorImg1', 'imageUpload1');
}

  if (!empty($_FILES['imageUpload2']['name'])) {
    $img3 = $_FILES['imageUpload2'];
    uploadInstructFile($img3, 'instructorImg2', 'imageUpload2');
  }
  
    if (!empty($_FILES['imageUpload3']['name'])) {
      $img4 = $_FILES['imageUpload3'];
      uploadInstructFile($img4, 'instructorImg3', 'imageUpload3');
    }
    

      if (!empty($_FILES['imageUpload4']['name'])) {
        $img5 = $_FILES['imageUpload4'];
        uploadInstructFile($img5, 'instructorImg4', 'imageUpload4');
      }
    







if($_POST['instructorNameUp0'] !== '') {

 if($_POST['instructorNameUp0'] !== 'deleted') {

addMeta($_POST['instructorNameUp0'], 'instructorName0', $instructor0 );
addMeta($_POST['beltLevelUp0'], 'beltLevel0', $beltLevelUp0 );
addMeta($_POST['instructorDesUp0'], 'instructorDes0', $instructorDesUp1 );
  }
  
  else {

    $post_id = get_the_ID();
    delete_post_meta($post_id, 'instructorName0'); 
    delete_post_meta($post_id, 'instructorImg0'); 
    delete_post_meta($post_id, 'instructorDes0'); 
    delete_post_meta($post_id, 'beltLevel0'); 


  }
}



  if($_POST['instructorNameUp1'] !== '') {

     if($_POST['instructorNameUp1'] !== 'deleted') {

addMeta($_POST['instructorNameUp1'], 'instructorName1', $instructor1 );
addMeta($_POST['beltLevelUp1'], 'beltLevel1', $beltLevelUp1 );
addMeta($_POST['instructorDesUp1'], 'instructorDes1', $instructorDesUp2 );
  } 

  else {
    $post_id = get_the_ID();
    delete_post_meta($post_id, 'instructorName1'); 
    delete_post_meta($post_id, 'instructorImg1'); 
    delete_post_meta($post_id, 'instructorDes1'); 
    delete_post_meta($post_id, 'beltLevel1'); 
  }
}

  if($_POST['instructorNameUp2'] !== '') {

         if($_POST['instructorNameUp2'] !== 'deleted') {

addMeta($_POST['instructorNameUp2'], 'instructorName2', $instructor2 );
addMeta($_POST['beltLevelUp2'], 'beltLevel2', $beltLevelUp2 );
addMeta($_POST['instructorDesUp2'], 'instructorDes2', $instructorDesUp2 );
  }

   else {
    $post_id = get_the_ID();
    delete_post_meta($post_id, 'instructorName2'); 
    delete_post_meta($post_id, 'instructorImg2'); 
    delete_post_meta($post_id, 'instructorDes2'); 
    delete_post_meta($post_id, 'beltLevel2');

  }
}

  if($_POST['instructorNameUp3'] !== '') {

         if($_POST['instructorNameUp3'] !== 'deleted') {


addMeta($_POST['instructorNameUp3'], 'instructorName3', $instructor3 );
addMeta($_POST['beltLevelUp3'], 'beltLevel3', $beltLevelUp3 );
addMeta($_POST['instructorDesUp3'], 'instructorDes3', $instructorDesUp4 );
  }

 else {
    $post_id = get_the_ID();
    delete_post_meta($post_id, 'instructorName3'); 
    delete_post_meta($post_id, 'instructorImg3'); 
    delete_post_meta($post_id, 'instructorDes3'); 
    delete_post_meta($post_id, 'beltLevel3');

  }
}
 

  if($_POST['instructorNameUp4'] !== '') {

         if($_POST['instructorNameUp4'] !== 'deleted') {


addMeta($_POST['instructorNameUp4'], 'instructorName4', $instructor4 );
addMeta($_POST['beltLevelUp4'], 'beltLevel4', $beltLevelUp4 );
addMeta($_POST['instructorDesUp4'], 'instructorDes4', $instructorDesUp5 );
 
} 
 else {
    $post_id = get_the_ID();
    delete_post_meta($post_id, 'instructorName4'); 
    delete_post_meta($post_id, 'instructorImg4'); 
    delete_post_meta($post_id, 'instructorDes4'); 
    delete_post_meta($post_id, 'beltLevel4');

  }
}




  
//   if (instructorVal()) {

//     if ($img1 !== '') {
//   uploadInstructFile($img1, 'instructorImg1');
//   }

//   if ($img2 !== '') {
//     uploadInstructFile($img1, 'instructorImg2');
//     }

//     if ($img3 !== '') {
//       uploadInstructFile($img1, 'instructorImg3');
//       }

//       if ($img4 !== '') {
//         uploadInstructFile($img1, 'instructorImg4');
//         }

//         if ($img5 !== '') {
//           uploadInstructFile($img1, 'instructorImg5');
//           }

// }

}
}

?>
<style type="text/css">



     /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
      
        height: 50%;
        width:50%;
      }
   
   
    
  </style>   

  
<div class="headContain">

<div class="mySlideD">
    <img onclick="showslide()" id="displayImg" src= '<?php

  $imgArray = get_post_meta($post_id, "slide_img_array", true);
  $image = wp_get_attachment_url($imgArray[0]);
   print_r($image);


?>'>
</div>

<div id="logo-pic">
  <form id="logoForm" enctype="multipart/form-data" method="post">
<?php wp_nonce_field( 'logo_img_form', 'sfndklnfdlnkdsnkdlnjkfxjridjg' ); ?>

    <img id = "logoImg" src="
     <?php 
    $post_id = get_the_ID();

      $logo = get_post_meta($post_id, 'logo_photo', true );

    if ($logo == "") {

          echo "https://www.roamingrolls.com/wp-content/uploads/2021/05/logoImg.png";
    } else {
    $logoURL = wp_get_attachment_url($logo);
      echo $logoURL;
    }

    ?>">

  

    <input id="logoPicIn" onchange="fasterPreview2(this, '#logoImg','cancelLogoPic','saveLogoPic','logoPicUp')" type="file" 
    name="logo_photo" placeholder="Photo" required="" style="display:none" capture>
   <button id="saveLogoPic" class="plusPic" type="submit">Save</button>

  </form>
      <button onclick="$('#logoPicIn').click()" id ="logoPicUp" class="plusPic"><i class="fas fa-edit"></i>
    </button>
    <button id="cancelLogoPic" class="plusPic" >Cancel</button>

</div>




  

  <div class="flex-container">

  <div class="flex-item1">
  <h1 id="gymTitle"><?php the_title()?></h1>
  <div id="gymLocation">
  <i class="fas fa-map-marker-alt"></i> 
  <h6 id="street"><?php 
  $address = get_post_meta($post_id,'address_1',true);
  echo $address;?>,
  <?php
  $taxonomy = wp_get_object_terms($post_id, 'country_state_city');
  $value = ""; 
  if (sizeof($taxonomy) !== 0){
  
      $value = $taxonomy[0]->name; 
      print_r($value);
 
}?>
  , <?php
  $taxonomy = wp_get_object_terms($post_id, 'country_state_city');
  $value = ""; 
  if (sizeof($taxonomy) !== 0) {
  
      $value = $taxonomy[1]->name; 
      print_r($value);
 
}?>, <?php
$taxonomy = wp_get_object_terms($post_id, 'country_state_city');
$value = ""; 
if (sizeof($taxonomy) !== 0) {

    $value = $taxonomy[2]->name; 
    print_r($value);

}?></h6>
</div>
</div>

<div id="picPlusCon">

<button  type="button" onclick="$('#_imagesInput').click()" id="uploadImages" class="plusPic"><i class="fas fa-edit"></i></button>
    </div>

    <?php

    $email = get_post_meta($post_id, 'email', true);
  $phone = get_post_meta($post_id, 'phone', true);
  $callCode = get_post_meta($post_id, 'call_code', true);
  
 if ($phone != "") {
    echo 
    '<div class="tooltiptext" id="phoneTip">Copy +'.$callCode.$phone.' to clipboard</div>';
    
  }

     if ($email != "") {
    echo '<div class="tooltiptext" id="emailTip">Copy '.$email.' to clipboard</div>';

  }
  
  ?>
<div class="linkFBCon">
  <?php
  $facebook = get_post_meta($post_id, 'facebook', true);
  $website = get_post_meta($post_id, 'website', true);

  
 if ($phone != "") {
    echo '
    <i id="phoneIcon" title="+'.$callCode.$phone.'" class="fas fa-phone fa-2x"></i>
    <div class="tooltiptext" id="phoneTip">Copy +'.$callCode.$phone.' to clipboard</div>';
    
  }

  

     if ($email != "") {
    echo '<i id="emailIcon" title="Email" class="far fa-envelope fa-2x"></i>
    <div class="tooltiptext" id="emailTip">Copy '.$email.' to clipboard</div>';

  }


  if ($website != "") {
    echo '<a href="https://'.$website.'"><i id="websiteIcon" title="Website" class="fas fa-link fa-2x topIcon"></i></a>';
  }

   if ($facebook != "") {
    echo '<a href="https://'.$facebook.'"><i id="facebookIcon" title="Facebook page" class="fab fa-facebook-square fa-2x topIcon"></i></a>';
    
  }





  
  ?>

  <input value="+<?php echo $callCode.$phone ?>" id="phoneInput"></input>

  <input value="<?php echo $email ?>" id="emailInput"></input>
</div>

</div>

<div id="imgRules">
  <p><p>Select multiple photos for your cover photo reel. </p>
        <p>(Please use jpeg/png files under 1mb in size. 1024 x 600 is recommended.)</p>
        <p>(Select photos from left to right)</p>
         <div class="rulesTriangle"></div>
      
      </div>
 


<div id="pageSectionMenu">
  <div class="menuContainer">
  <a class ="pageSecLinks" href = "#gymDescription">
  <button id="pageTab1" class="pageSecTab">
    Instructors
    <div class="bottomLine"></div>
</button>

    </a>
<a class ="pageSecLinks" href = "#schedulet">
<button id="pageTab3" class="pageSecTab">
Classes

    <div class="bottomLine"></div>

</button>
    </a>
<a class ="pageSecLinks" href = "#slink">
<button id="pageTab4" class="pageSecTab">
Facilities
<div class="bottomLine"></div>
</button>
</a>
<div class="pageSecLinks">
<button id="pageTab5" onclick="showMap()" class="pageSecTab">
Map
<div class="bottomLine"></div>
</button>
    </div>
</div>
</div>



  <div class="center">
<div  class="menuContainer">
  <h2 id = "gymDes">Gym Description</h2>
 <button class="plusPic" id="editDes"><i class="fas fa-edit"></i></button>
</div>
</div>

<div class="center">
<form method="post">
<?php wp_nonce_field( 'create_gym_des', 'ncskfnalvkbahlds' ); ?>
<textarea name="gymDesIn" id="gymDesIn">
  <?php
    $gymDesOut = get_post_meta($id,'gymDes',true);
    echo $gymDesOut;
  ?>
    </textarea>
    </div>

    <div id="desAlert" class="alert alert-danger" role="alert">
  Your gym description can't be empty!
</div>

    <div class="center">
<button  type="submit" class="gymSubs" id="gymDesSub">submit</button>
</form>
<button class="cancels" id="cancel1">cancel</button>
    </div>
   




<div class="container">
<div class="center">
<div id="descriptionContain" class="menuContainer">
  <div id="gymDesout">
  <?php 
    $gymDesOut = get_post_meta($id,'gymDes',true);
    echo $gymDesOut;
  ?>
  
  </div>

  
 
  </div>
  
</div>

<button class="readButtons" id="readMore" onclick="showMore()">Read more</button>
<button class="readButtons" id="readLess" onclick="showLess()">Read less</button>
</div>
  
    <div class=" bodyPerim">
<div class="bodyContain">
    
<div id="BigContain">
  <div  id ="instructcon">
<div class="center">
<div class="menuContainer">
  <h2>Instructors</h2>
</div>
</div>

<div class="center">
<div id="inpm">
<button type="button" id="plusInstructor" class="plusevent"><i class="fas fa-plus-circle fa-lg"></i></button>
<button type="button" id="minusInstructor" class="plusevent"><i class="fas fa-minus-circle fa-lg"></i></button>

</div>
</div>

<div id="instructorRuleMinus" class="instructorRules">
        This will delete the last instructor on your list.
      </div>

      
<div id="instructorRulePlus" class="instructorRules">
        This will add to the end of your instructor list.
 </div>

<button class="plusPic" id="editInstruct"><i class="fas fa-edit"></i></button>





<div class="center">
<div id="instructorCards" class="center">
<form id="instructorForm" enctype="multipart/form-data" method="post">
<?php wp_nonce_field( 'instructor_upload', 'njvkddsbhjdsbvhsdb' ); ?>
  <?php 
  
  $imgArray = array(
    get_post_meta($post_id, "instructorImg0", true),
    get_post_meta($post_id, "instructorImg1", true),
    get_post_meta($post_id, "instructorImg2", true),
    get_post_meta($post_id, "instructorImg3", true),
    get_post_meta($post_id, "instructorImg4", true)
  );

  $nameArray = array(
    get_post_meta($post_id, "instructorName0", true),
    get_post_meta($post_id, "instructorName1", true),
    get_post_meta($post_id, "instructorName2", true),
    get_post_meta($post_id, "instructorName3", true),
    get_post_meta($post_id, "instructorName4", true)
    
  );

  $beltArray = array(
    get_post_meta($post_id, "beltLevel0", true),
    get_post_meta($post_id, "beltLevel1", true),
    get_post_meta($post_id, "beltLevel2", true),
    get_post_meta($post_id, "beltLevel3", true),
    get_post_meta($post_id, "beltLevel4", true)
  );

  

  $instructorDesArray = array(
    get_post_meta($post_id, "instructorDes0", true),
    get_post_meta($post_id, "instructorDes1", true),
    get_post_meta($post_id, "instructorDes2", true),
    get_post_meta($post_id, "instructorDes3", true),
    get_post_meta($post_id, "instructorDes4", true)
  );

  for($i=0; $i < sizeof($nameArray); $i++) {

    if ($nameArray[0] == "") {
      array_splice($nameArray, 0 , 1);
      array_splice($beltArray, 0 , 1);
      array_splice($instructorDesArray, 0 , 1);
      array_splice($imgArray, 0 , 1);
    }
    if ($nameArray[$i] == "") {
      array_splice($nameArray, $i, 1);
      array_splice($beltArray, $i, 1);
      array_splice($instructorDesArray, $i, 1);
      array_splice($imgArray, $i , 1);

    }
  }


  for($i=0;$i < sizeof($nameArray); $i++) {


    $imgSrc = '';
    if ($imgArray[$i] != "") {
      $imgSrc = wp_get_attachment_url($imgArray[$i]);
        } else {
          $imgSrc = "https://www.roamingrolls.com/wp-content/uploads/2020/11/avatar.gif";
        }

 
      if ($nameArray[$i] != "") {

    echo '<div class="inAccord" id="instructors'.$i.'"><div id = "inCard'.$i.'" class="inCard"><button type="button" class="inup" id ="inup'.$i.'"><i class="fas fa-file-upload"></i></button><div class="instruct-card" class="inPic" data-toggle="collapse" data-target="#inCollapse'.$i.'" aria-expanded="true" aria-controls="collapseOne"><img id = "InImage'.$i.'" class="InImage w-100" src="'.$imgSrc.'"><div class="candTContainer"><input name="instructorName'.$i.'" id="instructorNameTemp'.$i.'" class="titIn" placeholder="Name"></input><div class="titOut">'.$nameArray[$i].'</div><div class=tAndDropCon"><div class="drop"><label class="beltLabel" for="belts">Belt:</label><div class="beltLevelOut">'.$beltArray[$i].'</div><select  id="beltLevelTemp'.$i.'" class="beltLevelIn" name="belts"><option value="Black">Black</option><option value="Brown">Brown</option><option value="Purple">Purple</option><option value="Blue">Blue</option></select></div></div></div></div><div id="inCollapse'.$i.'" class="collapse hide" aria-labelledby="inPic3" data-parent="#inCard'.$i.'"><div class="card-body"><div class="desOut" id ="instructorDesOut'.$i.'">'.$instructorDesArray[$i].'</div><textarea class="desIn" id="instructorDesTemp'.$i.'" name="instructorDes3" placeholder="Describe your instructor here."></textarea></div></div></div></div>';
      }
    } 
  


  
  ?>
</div>

    </div>
  </div>

    <input name="imageUpload0" id="imageUpload0" class="hideImageUp" onchange="fasterPreview(this, '#InImage0')" type="file" capture>

    <input name= "imageUpload1" class="hideImageUp" id="imageUpload1" onchange="fasterPreview(this, '#InImage1')" type="file" 
         capture>
       <input name= "imageUpload2" class="hideImageUp" id="imageUpload2" onchange="fasterPreview(this, '#InImage2')" type="file" 
        capture>
       <input name= "imageUpload3" class="hideImageUp" id="imageUpload3" onchange="fasterPreview(this, '#InImage3')" type="file" 
        capture>
       <input name= "imageUpload4" class="hideImageUp" id="imageUpload4" onchange="fasterPreview(this, '#InImage4')" type="file" 
      capture>

       <input name="instructorNameUp0" id="instructorUp0" class="titleUp" placeholder="Instructor Name">
       <input name="instructorNameUp1" id="instructorUp1" class="titleUp" placeholder="Instructor Name">
       <input name="instructorNameUp2" id="instructorUp2" class="titleUp" placeholder="Instructor Name">
       <input name="instructorNameUp3" id="instructorUp3" class="titleUp" placeholder="Instructor Name">
       <input name="instructorNameUp4" id="instructorUp4" class="titleUp" placeholder="Instructor Name">

       <input name="instructorDesUp0" id="instructorDesUp0" class="titleUp" placeholder="Instructor Des">
       <input name="instructorDesUp1" id="instructorDesUp1" class="titleUp"  placeholder="Instructor Des">
       <input name="instructorDesUp2" id="instructorDesUp2" class="titleUp"  placeholder="Instructor Des">
       <input name="instructorDesUp3" id="instructorDesUp3" class="titleUp"  placeholder="Instructor Des">
       <input name="instructorDesUp4" id="instructorDesUp4" class="titleUp"  placeholder="Instructor Des">


      <select name="beltLevelUp0" id="beltLevelUp0" class="beltLevelUp">
              <option value="Black">Black</option>
              <option value="Brown">Brown</option>
              <option value="Purple">Purple</option>
              <option value="Blue">Blue</option>
            </select>

      <select name="beltLevelUp1" id="beltLevelUp1" class="beltLevelUp">
        <option value="Black">Black</option>
        <option value="Brown">Brown</option>
        <option value="Purple">Purple</option>
        <option value="Blue">Blue</option>
      </select>

      <select name="beltLevelUp2" id="beltLevelUp2" class="beltLevelUp">
        <option value="Black">Black</option>
        <option value="Brown">Brown</option>
        <option value="Purple">Purple</option>
        <option value="Blue">Blue</option>
      </select>

      <select name="beltLevelUp3" id="beltLevelUp3" class="beltLevelUp">
        <option value="Black">Black</option>
        <option value="Brown">Brown</option>
        <option value="Purple">Purple</option>
        <option value="Blue">Blue</option>
      </select>

      <select name="beltLevelUp4" id="beltLevelUp4" class="beltLevelUp">
        <option value="Black">Black</option>
        <option value="Brown">Brown</option>
        <option value="Purple">Purple</option>
        <option value="Blue">Blue</option>
      </select>

    <div class="center">
    <button type="submit" class="gymSubs" id="instructSub">Submit</button>

    </form>
    <button class="cancels" type="button" id="instructCan">Cancel</button>

    </div>
<!-- 
<div class="menuContainer">
<div  id="visitt">
  <h2>Visitor Pricing</h2>
</div>
</div>

<div id="priceRules">
  <p><p>Add visitor pricing. </p>
        <p>(Per class, day and week. Want to display more? Add your full pricing page link below!)</p>
         <div class="priceRulesTriangle"></div>
      
      </div> -->


<!-- <button class="plusPic" id="editPricing"><i class="fas fa-edit"></i></button> -->
<!-- 
<form method="post">

<!-- <?php 
// wp_nonce_field( 'price_update', 'sbhkdvhjsbhkvbhkvb' ); 
?> --> 
<!-- <div  class="center">
    <div id="priceAlert" class="alert alert-danger" role="alert">
  Make sure your price fields are numeric.
</div>
  </div>

<div  class="form-group" id="prices">
<div id="PriceCardCon">
  <div class="input-group-prepend">
    <div id="class" class="adultcard " aria-label="With textarea">
      <div class="adults">
        <div class="adultcontain">
        <h6 class="titleinputs Options">1 Class</h6>
    <input class="priceIn" type="text" name="classPrice" placeholder="Price ($)" value="<?php
    //  $classPriceOut = get_post_meta($id,'classPrice',true);
    // echo $classPriceOut;
    ?>
   ">
    <div class=" priceOut">
    <?php
    //  $classPriceOut = get_post_meta($id,'classPrice',true);
    // echo "$".$classPriceOut;
    ?>
    </div>
  
  </div>
<div>
</div>
</div>
<textarea class="PriceDesIn" name="classDes"  placeholder="Include a short description (5 lines maximum)" value="<?php
    //  $classDesOut = get_post_meta($id,'classDes',true);
    // echo $classDesOut;
    ?>"></textarea>
  <div class="priceDesOut">

<?php
    //  $classDesOut = get_post_meta($id,'classDes',true);
    // echo $classDesOut;
    ?>
  </div>
  </div>
</div>
<div class="input-group-prepend">
    <div id="day" class="adultcard " aria-label="With textarea"><div class="adults"><div class="adultcontain"><h6 class="titleinputs Options">1 Day</h6>
    
    <input class="priceIn"  name="dayPrice"  type="text" placeholder="Price ($)" value="<?php
    //  $dayPriceOut = get_post_meta($id,'dayPrice',true);
    // echo $dayPriceOut;
    ?>"> 

    <div class="priceOut">

   <?php
    //  $dayPriceOut = get_post_meta($id,'dayPrice',true);
    // echo "$".$dayPriceOut;
    ?>
    </div>
  
</div></div><textarea class="PriceDesIn" name="dayDes" placeholder="Include a short description (5 lines maximum)"  value="<?php
    //  $dayDesOut = get_post_meta($id,'dayDes',true);
    // echo $dayDesOut;
    ?>"></textarea>
  <div class="priceDesOut">

<?php
    //  $dayDesOut = get_post_meta($id,'dayDes',true);
    // echo $dayDesOut;
    ?>
    </div>
    
  </div>
</div>
<div class=" input-group-prepend">
    <div id="week" class="adultcard " aria-label="With textarea"><div class="adults"><div class="adultcontain"><h6 class="titleinputs Options">1 Week</h6>
    <input class="priceIn"  name="weekPrice"  type="text" placeholder="Price ($)" value="<?php
    //  $weekPriceOut = get_post_meta($id,'weekPrice',true);
    // echo $weekPriceOut;
    ?>">
  
    <div class="priceOut">
  <?php
    //  $weekPriceOut = get_post_meta($id,'weekPrice',true);
    // echo "$".$weekPriceOut;
    ?>
    </div>
  </div></div>
  <textarea class="PriceDesIn" name="weekDes" placeholder="Include a short description (5 lines maximum)"  value="
  <?php
    //  $weekDesOut = get_post_meta($id,'weekDes',true);
    // echo $weekDesOut;
    ?>
    "></textarea>
  <div class="priceDesOut">
  <?php
    //  $weekDesOut = get_post_meta($id,'weekDes',true);
    // echo $weekDesOut;
    ?>
  </div>
   
  </div>
</div>
</div>
</div> -->

<?php

// if ($classPriceOut != "") {
//   echo "<style>#class{display:block}</style>";
// } else {
//   echo "<style>#class{display:none}</style>";

// }

// if ($dayPriceOut != "") {
//   echo "<style>#day{display:block}</style>";
// }else {
//   echo "<style>#day{display:none}</style>";

// }

// if ($weekPriceOut != "") {
//   echo "<style>#week{display:block}</style>";
// }else {
//   echo "<style>#week{display:none}</style>";

// }

?>



 <!-- <div id="gi" class="center">

            <label class="price-check-label" for="exampleCheck1">Do you offer gi rental?</label>
          </div>
          <p>

          <div class="center">
          <div id="checkcon">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="price-check-label" for="exampleCheck1">Yes</label>
    </div>

    <div id="nogi">
      <input type="checkbox" class="form-check-input" id="exampleCheck2">
    <label  class="price-check-label" for="exampleCheck2">No</label>
    
  </div>
     -->
  

  <!-- <p>
    </p>

  <div id="giPrice" class="center">

<input placeholder="Gi Price" id="giPriceIn"></input>
</div>
    </div>-->
    <!-- </div> 
   -->


<div class="center">
<div  class="menuContainer">
  <h2 id="schedulet" >Classes</h2>
</div>
</div>

  <button class="plusPic" id="editSchedule"><i class="fas fa-edit"></i></button>


  <form method="post">

<?php wp_nonce_field( 'class_update', 'fjekncjkedwlkkjfnhbnmsnuriukjs' ); ?>

<?php
  $kids = get_post_meta($post_id, 'kids', true);
  $women = get_post_meta($post_id, 'women', true);
  $giClass = get_post_meta($post_id, 'giClass', true);
  $noGi = get_post_meta($post_id, 'no-gi', true);
  $mma = get_post_meta($post_id, 'mma', true);
  $wrestling = get_post_meta($post_id, 'wrestling', true);
?>
  <div class="center">
<div id="classesContain">
<div id="kidsClass" class="classes">
<div>Kids Classes</div>
<?php
    if ($kids == "true")
    {
      echo '<i class="fas fa-check-circle"></i>';
    } else
    {
      echo '<i class="fas fa-times-circle"></i>';
    }
?>
<input class="classesCheck" name="kids" type="hidden" value="0" checked/>
<input class="classesCheck" name="kids" type="checkbox"  value="1" />
</div>
<div id="WomansClass" class="classes">
<div>Women Only Classes</div>
<?php
    if ($women == "true")
    {
      echo '<i class="fas fa-check-circle"></i>';
    } else
    {
      echo '<i class="fas fa-times-circle"></i>';
    }
?>
<input class="classesCheck" name="women" type="hidden" value="0" checked/>
<input class="classesCheck" name="women" type="checkbox"  value="1" />
</div>
<div id="GiClass" class="classes">
<div>Gi Classes</div>
<?php
    if ($giClass == "true")
    {
      echo '<i class="fas fa-check-circle"></i>';
    } else
    {
      echo '<i class="fas fa-times-circle"></i>';
    }
?>
<input class="classesCheck" name="giClass" type="hidden" value="0" checked/>
<input class="classesCheck" name="giClass" type="checkbox"  value="1" />
</div>
<div id="NoGiClass" class="classes">
<div>No-gi Classes</div>
<?php
    if ($noGi == "true")
    {
      echo '<i class="fas fa-check-circle"></i>';
    } else
    {
      echo '<i class="fas fa-times-circle"></i>';
    }
?>
<input class="classesCheck" name="no-gi" type="hidden" value="0" checked/>
<input class="classesCheck" name="no-gi" type="checkbox"  value="1" />
</div>
<div id="MMAClass" class="classes">
<div>MMA Classes</div>
<?php
    if ($mma == "true")
    {
      echo '<i class="fas fa-check-circle"></i>';
    } else
    {
      echo '<i class="fas fa-times-circle"></i>';
    }
?>
<input class="classesCheck" name="mma" type="hidden" value="0" checked/>
<input class="classesCheck" name="mma" type="checkbox"  value="1" />
</div>
<div id="WrestlingClass" class="classes">
<div>Wrestling Classes</div>
<?php
    if ($wrestling == "true")
    {
      echo '<i class="fas fa-check-circle"></i>';
    } else
    {
      echo '<i class="fas fa-times-circle"></i>';
    }
?>
<input class="classesCheck" name="wrestling" type="hidden" value="0" checked/>
<input class="classesCheck" name="wrestling" type="checkbox"  value="1" />
</div>
</div>
</div>





<!-- <div id="schedule-container">
<div id="schedulein">
<h3>Weekly Schedule</h3>
<div id = "Rowin1" class="Rowin">
<div id = "contain">
</div>
</div>
<button type="button" id="plusevent1" class="plusevent"><i class="fas fa-plus-circle fa-lg"></i></button>
<button type="button" id="minusevent" class="plusevent"><i class="fas fa-minus-circle fa-lg"></i></button>
</div>
</div> -->



      <div class="center">
  <h6 class="scheduleIn" id="scheduleP">Add a link to your schedule page below</h6>
    </div>

  

<div class="center">
<div id="slink">
  <input class="scheduleIn" value="<?php
    $scheduleLink = get_post_meta($id,'scheduleLink',true);
    echo $scheduleLink;
    ?>" type="text" name="scheduleLink"  id="scheduleLinkIn"> 
</input>
</div>
</div>

<div class="center">
  <button id="scheduleLinkOut" class="scheduleOutput gymSubs" >
  <a href="<?php
    $scheduleLink = get_post_meta($id,'scheduleLink',true);
    echo $scheduleLink;
    ?>">Full Schedule page
   </a>
  </button> 
</div>

<div class="center">
  <h6 id="fullPrice">Add a link to your full pricing page below</h6>
</div>

<div class="center">
<div id="plink">

  <button id="priceLinkOut" class="gymSubs" ><a href="<?php
$priceLink = get_post_meta($id,'priceLink',true);
    echo $priceLink;
   ?>">Full pricing page</a></button> 
  <input id="priceLink" name="priceLink" value="<?php
$priceLink = get_post_meta($id,'priceLink',true);
    echo $priceLink;
   ?>">

</div>
  </div>

<div class="center">
   <button type="submit" class="gymSubs scheduleIn" id="scheduleSub">Submit</button>

  </form>

 <button class="cancels scheduleIn" type="button" id="scheduleCan">Cancel</button>
</div>



<div id="fac">
<div id="facCon" class="center">

<div  id="facilitiest" class="menuContainer">
  <h2 id="desTitle">Facilities</h2>
</div>
</div>
</div>

  <button class="plusPic" id="editChecks"><i class="fas fa-edit"></i></button>

  <form method="post">

<?php wp_nonce_field( 'icon_update', 'dwcbehwjkrewwbhjds' ); ?>


<div id="checkB" class="right">
<div  class="checkbox-grid">
  <div>
    <input class="facilityCheck" name="locker" type="hidden" value="0" checked/>
    <input class="facilityCheck" name="locker" type="checkbox" value="1" /><label class="facilityCheck" for="text1">Locker Room</label>
  </div>
  <div>
    <input class="facilityCheck" name="shower" type="hidden" value="0" checked/>
    <input class="facilityCheck" name="shower" type="checkbox" value="1" /><label class="facilityCheck" for="text2">Showers</label>
  </div>
  <div>
    <input class="facilityCheck" name="weight" type="hidden" value="0" checked/>
    <input class="facilityCheck" name="weight" type="checkbox" value="1" /><label class="facilityCheck" for="text3">Weight room</label>
  </div>
  <div>
    <input class="facilityCheck" name="water" type="hidden" value="0" checked/>
    <input class="facilityCheck" name="water" type="checkbox"  value="1" /><label class="facilityCheck" for="text4">Water dispenser</label>
</div>
  <div>
    <input class="facilityCheck" name="giRent" type="hidden" value="0" checked/>
    <input class="facilityCheck" name="giRent" type="checkbox" value="1" /><label class="facilityCheck" for="text5">Gi rental</label>
  </div>
  <div>
    <input class="facilityCheck" name="food" type="hidden" value="0" checked/>
    <input class="facilityCheck" name="food" type="checkbox" value="1" /><label class="facilityCheck" for="text6">Food and drinks</label>
  </div>
  <div>
    <input class="facilityCheck" name="wifi" type="hidden" value="0" checked/>
    <input class="facilityCheck" name="wifi" type="checkbox" value="1" /><label class="facilityCheck" for="text7">Free Wifi</label>
  </div>
  <div>
    <input class="facilityCheck" type="hidden" value="0" checked/>
    <input class="facilityCheck"  id="otherCheck" type="checkbox" value="1" /><label class="facilityCheck" for="text8">Other (specify)</label>
  </div>
</div>
</div>

<div class="center">
<textarea name="otherText" id="other">

<?php 

  $otherOut = get_post_meta($post_id, 'otherText', true);

    echo $otherOut;
  

?>

</textarea>
</div>

<div class="center">
  <button type="submit" class="gymSubs checksIn" id="checksSub">
      Submit
  </button>

</form>

  <button class="cancels checksIn" type="button" id="checksCan">
    Cancel
  </button>

</div>


<div id="facilityIcons">
<div class="center">
<div class="spaceEven">
 

  <?php
  
  $weight = get_post_meta($post_id, 'weight', true);
  $giRent = get_post_meta($post_id, 'giRent', true);
  $locker = get_post_meta($post_id, 'locker', true);
  $water = get_post_meta($post_id, 'water', true);
  $wifi = get_post_meta($post_id, 'wifi', true);
  $food = get_post_meta($post_id, 'food', true);
  $shower = get_post_meta($post_id, 'shower', true);

  if ($locker === "true") {
    echo '<img title="Lockers" class="icons" style="height:40px; width:auto;" src="http://www.roamingrolls.com/wp-content/uploads/2021/03/lockers.png">';
  }

  
  if ($shower === "true") {
    echo '<i title="Shower" class="fas icons fa-shower fa-2x"></i>';
  }

  
  if ($weight === "true") {
    echo '<i title="Gym" class="fas icons fa-dumbbell fa-2x"></i>';
  }

  
  if ($water === "true") {
    echo '<i title="Water dispenser" class="fas icons fa-tint fa-2x"></i>';
  }

  
  if ($giRent === "true") {
    echo '<img title="Gi rental" class="icons" style="height:40px; width:auto;" src="http://www.roamingrolls.com/wp-content/uploads/2021/03/kimono-for-men.png">';
  }
  
  if ($food === "true") {
    echo '<i title="Snack Bar" class="fas icons fa-pizza-slice fa-2x"></i>';
  }
  
  if ($wifi === "true") {
    echo '<i title="Free Wifi" class="fas icons fa-wifi fa-2x"></i>';
  }
  
  ?>

</div>
</div>
</div>

<div class="center">
<div id="otherOut">
  <?php
  
    $otherOut = get_post_meta($post_id, 'otherText', true);

    echo $otherOut;
  
  ?>
</div>
</div>



<div class="center">
  <button id="gymDelete" class="scheduleOutput gymSubs" >
  Delete Gym
  </button> 
</div>


<button id="hiddenDeleteButton2" type="submit" >Delete account</button>




<!-- <div class="center">
<h6 id="facDes">Add a facility with its description</h6>
</div>
    </div>

<div class="center">
<div id="facpm">
<button type="button" id="plusFacility" class="plusevent"><i class="fas fa-plus-circle fa-lg"></i></button>
<button type="button" id="minusFacility" class="plusevent"><i class="fas fa-minus-circle fa-lg"></i></button>
</div>
</div>

<div class="center">
<div id="facilityCards" class="center">
  <div class="FacAccord" id="Facility2">
    <div class="FacCard2">
      <div class="instruct-card" id="FacPic1" data-toggle="collapse" data-target="#FacCollapse1" aria-expanded="true" aria-controls="collapseOne">
        <img class="InImage w-100" src="https://www.roamingrolls.com/wp-content/uploads/2020/08/Untitled-design-20.png">
      <div class="TContainer">
        <input class="titIn" placeholder="Facility Name"></input>
      </div>
    </div>
      <div id="FacCollapse1" class="collapse hide" aria-labelledby="inPic1" data-parent=".inCard2">
        <div class="card-body">
        <textarea class="desIn" name="desin1" placeholder="Describe your facility here."></textarea>
        </div>
      </div>
    </div>
  </div>
</div>-->





<button id="cancelPics" class="plusPic" >Cancel</button>
<form id="_imagesForm" action="" enctype="multipart/form-data" method="post">
<?php wp_nonce_field( 'gym_pic_upload', 'njvkdsnvklsvlnvdf' ); ?>

    <input id="_imagesInput" name="SlideImageInput[]" type="file" style="display:none" multiple>
    <button id="savePics" class="plusPic" type="submit">Save</button>
<div class="center">
<div id="slideshow-container">
<div onclick="hideslide()" id = "block2" class = "blocker"></div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

  <ul class="carousel-inner" id ="carousel-inner">

  <?php

      $imgArray = get_post_meta($post_id, "slide_img_array", true);
      foreach($imgArray as $key => $img) {
        if ($key == 0) {
              set_post_thumbnail($post_id, $imgArray[$key]);
        $imageSrc = wp_get_attachment_url($imgArray[$key]);
  echo "<li id='Pslide-".$key."' class='carousel-item active' name = 'Pslide-".$key."'><img class='slideImg w-100' src='".$imageSrc."'> </li>";
    } else {
      $imageSrc = wp_get_attachment_url($imgArray[$key]);
      echo "<li id='Pslide-".$key."' class='carousel-item' name = 'Pslide-".$key."'><img class='slideImg w-100' src='".$imageSrc."'> </li>";
    }
  }
 ?>
  </ul>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
  </form>
    



<div id="embeddedMapContain">
<div onclick="hideMap()" id = "block3" class = "blocker"></div>
  <div class="mapcenter">
<iframe
id="embeddedMap"
  width="450"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBljiMHni9ncYIaTHDA7W78ocNtCbCP6EQ&q=place_id:<?php

   $mapID = get_post_meta($post_id, 'mapID', true);
   echo $mapID;

  ?>" allowfullscreen>
  </div>
</iframe>
    </div> 




<br>

    </div>
    </div>

<script>


    

</script>







