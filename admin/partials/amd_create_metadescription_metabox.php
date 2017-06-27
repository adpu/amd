<?php
/**
 *
 * @author     Jordi Verdaguer <info@adpu.net>
 * @link       http://adpu.net
 * @since      1.0.0
 */
?>
<label class="screen-reader-text" for="amd-metadescription">Text</label><textarea rows="1" cols="40" name="amd-metadescription" id="id_amd_metadescription"   ><?php
      echo esc_attr( $val_desc );
  ?></textarea>
  <p>Optimal lenght: 160 characters (<a href="https://moz.com/learn/seo/meta-description" target="_blank">More info</a>)</p>
  <p id="adpuamd_desc_charNum"></p>