<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://adpu.net
 * @since      1.0.0
 *
 * @package    amd
 * @subpackage amd/public
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    amd
 * @subpackage amd/public
 * @author      Jordi Verdaguer <info@adpu.net>
 */
class Amd_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		add_action('add_meta_boxes', array( $this, 'amd_add_metaboxes'  ));
		add_action( 'save_post', array( $this, 'adpuamd_save_metatags'));


	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {


		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/amd-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

        
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/amd-admin.js', array( 'jquery' ), $this->version, true );

	}


	/**
* This function add meta box
* @since    1.0.0
*/
public function amd_add_metaboxes() {
	add_meta_box(
    'amd-metatitle',
    'Title tag',
    array( $this, 'amd_print_metatitle_meta_box' )
  );
  add_meta_box(
    'amd-metadescription',
    'Meta description',
    array( $this, 'amd_print_metadescription_meta_box' )
  );

	
  
}


/**
* This function print meta box 
* @since    1.0.0
* @param    string $val  value of metadescription
*/

public function amd_print_metatitle_meta_box() {
  $val_title = get_post_meta( get_the_ID(), '_amd_metatitle', true ); 
  include_once 'partials/amd_create_metatitle_metabox.php';
  
  }
  public function amd_print_metadescription_meta_box() {
  $val_desc = get_post_meta( get_the_ID(), '_amd_metadescription', true ); 
  include_once 'partials/amd_create_metadescription_metabox.php';
  
  }
/**
* This function save meta box value
* @since    1.0.0
*/


public function adpuamd_save_metatags() {
  
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return;
  }

 
  if ( ! isset( $_REQUEST['amd-metadescription'] ) ) {
    return;
  }
   if ( ! isset( $_REQUEST['amd-metatitle'] ) ) {
    return;
  }

  $texto_desc = trim( sanitize_text_field( $_REQUEST['amd-metadescription'] ) );
  $texto_title = trim( sanitize_text_field( $_REQUEST['amd-metatitle'] ) );

  update_post_meta( get_the_ID(), '_amd_metatitle', $texto_title );
  update_post_meta( get_the_ID(), '_amd_metadescription', $texto_desc );
}
	
}

