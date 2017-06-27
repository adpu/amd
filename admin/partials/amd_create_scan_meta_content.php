<?php
/**
 *
 * @author     Jordi Verdaguer <info@adpu.net>
 * @link       http://adpu.net
 * @since      1.0.0
 */
?>
<div class="wrap">
	<h1>Scan Meta tags.</h1>
	<p>In this page you can check the content of your meta description and title tags of your posts and pages.</p>
                 
         
        <h2 class="nav-tab-wrapper">
            <a href="?page=scan-meta-tags&tab=posts" class="nav-tab <?php echo $active_tab == 'posts' ? 'nav-tab-active' : ''; ?>">Posts <span class="count">(<?php echo $count_posts->publish;?>)</span></a>
            <a href="?page=scan-meta-tags&tab=pages" class="nav-tab <?php echo $active_tab == 'pages' ? 'nav-tab-active' : ''; ?>">Pages <span class="count">(<?php echo $count_pages->publish;?>)</span></a>
        </h2>
         
      
    <?php
         
        if( $active_tab == 'posts' ) {
           include_once 'amd_scan_meta_content_posts.php';
        } else {
            include_once 'amd_scan_meta_content_pages.php';
        } // end if/else
?></div><!--.wrap-->