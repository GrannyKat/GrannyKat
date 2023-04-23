<?php
$classes = classNames( "qx-btn qx-element qx-element-{$type} {$field['class']} {$field['style']}", $visibilityClasses, [
  "wow {$field['animation']}" => $field['animation'],
  "qx-hvr-{$field['hover_animation']}" => $field['hover_animation'],
  'qx-btn-block' => $field['type'] == 'fullwidth',
] );

  // Animation delay
  $animation_delay = '';
  if( $field['animation'] AND array_key_exists('animation_delay', $field) ){
    $animation_delay = 'data-wow-delay="'. $field['animation_delay'] .'s"';
  }

  // New icon system. Since @1.7
  $icon = get_icon($field);
?>

<div class ="<?php echo $id; ?>-hostsite-btn" <?php echo $animation_delay; ?>>
  <span><?php echo $field['button_prefix']?></span>
  <a id="<?php echo $id; ?>" class="<?php echo $classes ?>"
     href="<?php echo $field['button']['url'] ?>" <?php echo ( $field['button']['target'] ) ? ' target="_blank" rel="noopener noreferrer"' : '' ?>>
    <?php if ( ( $field['icon'] ) AND ( $field['icon_placement'] == 'left' ) ): ?>
      <i class="<?php echo $icon['class']?>"><?php echo $icon['content']?></i>
    <?php endif; ?>
    <?php echo $field['button']['text'] ?>
    <?php if ( ( $field['icon'] ) AND ( $field['icon_placement'] == 'right' ) ): ?>
      <i class="<?php echo $icon['class']?>"><?php echo $icon['content']?></i>
    <?php endif; ?>
  </a>
</div>
<!-- qx-element-button -->
