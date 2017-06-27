<?php
/**
 *
 * @author     Jordi Verdaguer <info@adpu.net>
 * @link       http://adpu.net
 * @since      1.0.0
 */
?>
<label class="screen-reader-text" for="amd-metatitle">Title tag</label><input type="text" name="amd-metatitle" id="id_amd_metatitle" value="<?php
      echo esc_attr( $val_title );
  ?>"  >
 <p>Optimal lenght: 60 characters (<a href="https://moz.com/learn/seo/title-tag" target="_blank">More info</a>)</p>
 <p id="adpuamd_title_charNum"></p>