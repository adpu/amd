<?php
/**
 *
 * @author     Jordi Verdaguer <info@adpu.net>
 * @link       http://adpu.net
 * @since      1.0.0
 */
?>
<div class="amd_title_tags_facts">
    <h2 class="amd_title_facts">Meta title facts</h2>
    <span class="amd_margin-right"><span class="amd_badge amd_background_color_red"><?php echo  $amd_page_title_tag_empty;?></span> No content </span><span class="amd_margin-right"><span class="amd_badge amd_background_color_orange"><?php echo $amd_page_title_tag_lenght_exceed;?></span>  Exceeds optimal length </span><span class="amd_badge amd_background_color_green"><?php echo $amd_page_title_tag_lenght_optimal;?></span> Optimal lenght</div>
    <div class="amd_meta_description_facts">
    <h2 class="amd_title_facts">Meta description facts</h2>
    <span class="amd_margin-right"><span class="amd_badge amd_background_color_red"><?php echo  $amd_page_meta_description_empty;?></span> No content </span><span class="amd_margin-right"><span class="amd_badge amd_background_color_orange"><?php echo $amd_page_meta_description_lenght_exceed;?></span>  Exceeds optimal length </span><span class="amd_badge amd_background_color_green"><?php echo $amd_page_meta_description_lenght_optimal;?></span> Optimal lenght</div>
    <table class="table-amdadpu-list-post-pages wp-list-table widefat fixed striped">
	<thead>
	<tr>
		<th scope="col" id="title" class="manage-column column-metatitle"><strong>Title</strong></th><th scope="col" id="metatitle" class="manage-column column-metatitle"><strong>Meta title</strong><br>(Optimal 60 characters)</th><th scope="col" id="metadescription" class="manage-column column-metadescription"><strong>Meta description</strong><br>(Optimal 160 characters)</th>
	</tr>
	</thead>

	<tbody id="the-list" >	
	
   <?php 
    foreach ( $lastpages as $page ) :

    $current_metatitle=get_post_meta( $page->ID, '_amd_metatitle', true );
    $current_metadesc=get_post_meta( $page->ID, '_amd_metadescription', true );
    $total_char_current_metatitle=strlen($current_metatitle);
    $total_char_current_metadesc=strlen($current_metadesc);
  ?>
   <tr>
	<td class="title column-title" data-colname="Title"><?php echo $page->post_title; ?></td><td class="metatitle column-metatitle" data-colname="Metatitle"><?php echo $current_metatitle;?> <span class="badge 
	<?php if ($total_char_current_metatitle > 60){
		 echo "amd_background_color_orange";
		}else{
		  if($total_char_current_metatitle==0){ 
			echo "amd_background_color_red"; 
		   }else{ 
			echo "amd_background_color_green";
		    }
		 }?>">
		 <?php if ($total_char_current_metatitle > 60){ 
		 	echo $total_char_current_metatitle; 
		 }else{ 
		 	if($total_char_current_metatitle==0){ 
		 		echo "0";
		 	}else{
		 		echo 60 - $total_char_current_metatitle;
		 	}
		 }?></span></td><td class="metadescription column-metadescription" data-colname="Metadescription"><?php echo $current_metadesc;?> <span class="badge 
		 <?php if ($total_char_current_metadesc > 160){
		 	echo "amd_background_color_orange";
		 }else{
		 	if($total_char_current_metadesc==0){ 
			echo "amd_background_color_red"; 
		   }else{ 
		 	echo "amd_background_color_green";
		   }
		 };?>">
		 <?php if ($total_char_current_metadesc > 160){ 
		 	echo $total_char_current_metadesc; 
		 }else{
		 	if($total_char_current_metadesc==0){
		 	 echo "0";
		 	}else{
		 	echo 160 -$total_char_current_metadesc;
		    }
		 }?></span></td>
	</tr>
    <?php endforeach; ?>
	</tbody>
	<tfoot>
	<tr>
		<th scope="col" id="title" class="manage-column column-metatitle"><strong>Title</strong></th><th scope="col" id="metatitle" class="manage-column column-metatitle"><strong>Meta title</strong><br>(Optimal 60 characters)</th><th scope="col" id="metadescription" class="manage-column column-metadescription"><strong>Meta description</strong><br>(Optimal 160 characters)</th>
	</tr>
	</tfoot>

</table>
<br>
<p class="amd_num_pages">Page <strong><?php echo $current_page;?> of <?php echo $total_numpages;?></p>
<?php if($current_page!=1){ ;?>
<a href="?page=scan-meta-tags&tab=pages&current_page=<?php echo $current_page-1;?>" class="amd_nav_before">Before pages</a>
<?php }?>
<?php if($current_page < $total_numpages){ ;?>
<a href="?page=scan-meta-tags&tab=pages&current_page=<?php echo $current_page+1;?>" class="amd_nav_next">Next pages</a>
<?php 
}