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
    // $hover_class = " qx-hvr-{$field['hover_animation']}";

?>
<div id="<?php echo $id; ?>" class="<?php echo $classes; ?>" <?php echo $animation_delay; ?>>


  <?php
    foreach($field['icon_text'] as $item) :
      // New icon system. Since @1.7
      $icon = get_icon($item);
  ?>

    <?php
      $media = '';
      if( $item['icon_enabled'] ){
        $media = '<i class="qx-icon '.$icon['class'].'">'.$icon['content'].'</i>';
      }elseif( $item['image'] ){
        $media = '<img class="qx-image" src="'.$item['image'].'" alt="'.$item['image_alt_text'].'" />';
      }
    ?>

    <div class="icon-text">
      <?php echo $media; ?> <span class="title"><?php echo $item['title']; ?></span>
    </div>

  <?php endforeach; ?>

</div>
<!-- qx-element-icon -->
