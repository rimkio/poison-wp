<?php

/**
 * Header template
 */

$classes = [
   'poison-header',
];
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
<header class="<?php echo implode(' ', $classes) ?>">
   <div class="poison-header-inner">
      <div class="poison-header-logo">
         <?php
         if (has_custom_logo()) {
            echo '<a href="/"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
         } else {
            echo '<h1>' . get_bloginfo('name') . '</h1>';
         }
         ?>
      </div>

      <div class="d-none d-md-block poison-header-menu-wrap">
         <div class="poison-header-menu">
            <?php
            if (has_nav_menu('main-menu')) {
               wp_nav_menu([
                  'theme_location' => 'main-menu',
                  'menu_class' => 'main-menu',
                  'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'bootstrap' => false
               ]);
            }
            ?>
         </div>
      </div>

      <div id="poison-menu-open" class="d-md-none d-flex poison-actions  poison-menu-open">
         <span class="poison-actions__text">MENU</span>
      </div>
   </div>
</header> <!-- #site-header -->