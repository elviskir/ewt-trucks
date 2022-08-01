<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
  	
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
wp_enqueue_style( 'style-responsive', get_stylesheet_directory_uri().'/css/style-responsive.css');
wp_enqueue_script( 'vikas-jquery', get_stylesheet_directory_uri().'/js/script-vv.js', array( 'jquery' ), '1.0.0', true );

}

/**
* CF7: Numbers Only Validation
* Validate the input fields with CSS class .wpcf7-numbers-only to allow numbers only.
*/
add_action( 'wp_footer', 'wpcf7_input_numbers_only');
function wpcf7_input_numbers_only() {
  echo '
  <script>
  onload =function(){ 
    var ele = document.querySelectorAll(\'.wpcf7-numbers-only\');
    console.log("HI Vika");
    ele.forEach(function(element){
        console.log(element);
        element.onkeypress = function(e) {
            if(isNaN(this.value+""+String.fromCharCode(e.charCode)))
            return false;
        }
        element.onpaste = function(e){
            e.preventDefault();
        }
    })
  }
  </script>
  ';
}






//update_option( 'siteurl', 'http://10.25.3.74:8888/ewtlogistics.com' );
//update_option( 'home', 'http://10.25.3.74:8888/ewtlogistics.com' );



?>