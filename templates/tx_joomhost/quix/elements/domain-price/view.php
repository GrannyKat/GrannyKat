<?php
  $classes = classNames( "qx-element qx-element-{$type} {$field['class']}", $visibilityClasses, [
    "wow {$field['animation']}" => $field['animation'],
    "qx-hvr-{$field['hover_animation']}" => $field['hover_animation']
  ]);
  // Animation delay
  $animation_delay = '';
  if( $field['animation'] AND array_key_exists('animation_delay', $field) ){
    $animation_delay = 'data-wow-delay="'. $field['animation_delay'] .'s"';
  }


?>

<div id="<?php echo $id;?>" class="<?php echo $classes?>" <?php echo $animation_delay; ?>>
  <div class="domain-extension">
    <?php echo $field['domain_extension']; ?>
  </div>
  <div class="domain-price">
    <?php echo $field['domain_price']?>
  </div>
</div>
<!-- qx-element-person -->
