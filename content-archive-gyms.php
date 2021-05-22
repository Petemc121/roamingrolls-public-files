





<div id="gymCards">
<a href="<?php the_permalink();?>">
    <img class="thumbnails" src="<?php
        the_post_thumbnail_url('thumbnail');
        ?>" alt="image">
        </a>
    <div class="gymInfo">
        <h3 id ="gymCardTitle" class="title mb-1"><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
        
        <div>
            <?php 
            
              $post_id = get_the_ID();
            
            $address = get_post_meta($post_id,'address_1',true);
  echo $address;?>,
   </div>
    <div>
           <?php 
          
  $taxonomy = wp_get_object_terms($post_id, 'country_state_city');
  $value = ""; 
  if (sizeof($taxonomy) !== 0) {
  
      $value = $taxonomy[0]->name; 
      print_r($value);
 
}?>
  , 
  </div>
  <div><?php
  $taxonomy = wp_get_object_terms($post_id, 'country_state_city');
  $value = ""; 
  if (sizeof($taxonomy) !== 0) {
  
      $value = $taxonomy[1]->name; 
      print_r($value);
 
}?>,
</div>
  <div> <p> <?php
$taxonomy = wp_get_object_terms($post_id, 'country_state_city');
$value = ""; 
if (sizeof($taxonomy) !== 0) {

    $value = $taxonomy[2]->name; 
    print_r($value);
}
 ?>
        </div>


        <div class="intro">
        <?php
            $gymDesOut = get_post_meta($id,'gymDes',true);
    echo $gymDesOut;
        ?>
        </div>
        <a style="font-weight:bold;" class="more-link"  href="<?php the_permalink();?>"><div id="readMore">Read more &rarr;</div></a>
       
        <!-- <div class="center">
            Author: 
            
            <div id="postAuthor">
                <a href="https://roamingrolls.com/Profiles/<?php 
                
                // $kv_author =get_the_author_meta('display_name'); 

                //      echo $kv_author;
                ?>">
        <?php

            // $kv_author =get_the_author_meta('display_name'); 
                
            // echo $kv_author;

        ?>
        </a>
        </div> -->

        <!-- </div> -->


      
</div>

<div id="gymCardClasses">
<h3 id="GCCTitle" class="title">Classes</h3>

<?php
  $kids = get_post_meta($post_id, 'kids', true);
  $women = get_post_meta($post_id, 'women', true);
  $giClassbool = get_post_meta($post_id, 'giClass', true);
  $noGi = get_post_meta($post_id, 'no-gi', true);
  $mma = get_post_meta($post_id, 'mma', true);
  $wrestling = get_post_meta($post_id, 'wrestling', true);




  $kidsClass = new gymClass();
  $kidsClass->bool = $kids;
  $kidsClass->string = 'Kids Classes';

  $womenClass = new gymClass();
  $womenClass->bool = $women;
  $womenClass->string = 'Women Only Classes';

  $giClass = new gymClass();
  $giClass->bool = $giClassbool;
  $giClass->string = 'Gi Classes';

  $noGiClass = new gymClass();
  $noGiClass->bool = $noGi;
  $noGiClass->string = 'No-gi Classes';

  $mmaClass = new gymClass();
  $mmaClass->bool = $mma;
  $mmaClass->string = 'MMA Classes';

  $wrestlingClass = new gymClass();
  $wrestlingClass->bool = $wrestling;
  $wrestlingClass->string = 'wrestling Classes';


  $classes = array($kidsClass, $womenClass, $giClass, $noGiClass, $mmaClass, $wrestlingClass);
    

    $classEcho = "";
  
    for($i = 0; $i < count($classes); $i++)
    {
        if ($classes[$i]->bool == "true")
        {
            $classEcho .= append($classes[$i]->string);
        }
    }

  echo $classEcho;

  $facebook = get_post_meta($post_id, 'facebook', true);
  $website = get_post_meta($post_id, 'website', true);

?>
<div class="gymCardFW">
<?php
  if ($website != "") {
    if (strpbrk($website, 'https://') == $website)
      {
    echo '<a href="'.$website.'"><i id="gymCardWeb" title="Website" class="fas fa-link fa-2x topIcon"></i></a>';
  } else{
      echo '<a href="https://'.$website.'"><i id="gymCardWeb" title="Website" class="fas fa-link fa-2x topIcon"></i></a>';
  }
  }

   if ($facebook != "") {
      if (strpbrk($facebook, 'https://') == $facebook)
      {
    echo '<a href="'.$facebook.'"><i id="gymCardFace" title="Facebook page" class="fab fa-facebook-square fa-2x topIcon"></i></a>';
      } 
      else
      {
         echo '<a href="https://'.$facebook.'"><i id="gymCardFace" title="Facebook page" class="fab fa-facebook-square fa-2x topIcon"></i></a>';
      }
  }
  
?>
</div>





</div>


</div>





