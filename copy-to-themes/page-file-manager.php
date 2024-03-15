<?php

if( !is_user_logged_in() ) {
 wp_redirect(esc_url(site_url('/')));
 exit;
}


get_header();

while (have_posts()) {

  the_post();
  ?>

  <div >
    <br><br><br><br><br><br><br>
    <h2>File Manager</h2>
    <p><?php echo do_shortcode('
      [file_manager_advanced 
        login="yes"
        path="wp-content/file-manager-folder"
        hide="plugins"
        operations="all"
        view="grid"
        theme="light"
        lang ="en"
        upload_allow="all"
      ]'); ?></p>
    </div>

  

  </div>

<?php }
get_footer();
?>
