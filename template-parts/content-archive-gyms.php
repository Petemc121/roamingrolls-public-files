





<div id="gymCards">
<a href="<?php the_permalink();?>">
    <img class="thumbnails" src="<?php
        the_post_thumbnail_url('thumbnail');
        ?>" alt="image">
        </a>
    <div class="gymInfo">
        <h3 class="title mb-1"><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h3>
        <div class="meta mb-1">Last Updated: <span class="date"><?php 
        $modified = get_the_modified_date(); 
        echo $modified;
        
        ?></span>
        </div>
        <div class="intro">
        <?php
            $gymDesOut = get_post_meta($id,'gymDes',true);
    echo $gymDesOut;
        ?>
        </div>
        <a style="font-weight:bold;" class="more-link" href="<?php the_permalink();?>">Read more &rarr;</a>
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

        <div class="center">
            Author: 
            
            <div id="postAuthor">
                <a href="https://roamingrolls.com/Profiles/<?php 
                
                $kv_author =get_the_author_meta('display_name'); 

                     echo $kv_author;
                ?>">
        <?php

            $kv_author =get_the_author_meta('display_name'); 
                
            echo $kv_author;

        ?>
        </a>
        </div>

        </div>


      
</div>
</div>





