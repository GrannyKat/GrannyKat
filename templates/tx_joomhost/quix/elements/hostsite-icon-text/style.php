<?php
###################################
# Responsive Fields
###################################
// Element
Css::margin("#$id", $field['margin']);
Css::padding("#$id", $field['padding']);
?>


#<?php echo $id; ?> .icon-text {
  margin-bottom: <?php echo $field['space_between']?>px;
}
#<?php echo $id; ?> i {
  font-size: <?php echo $field['icon_size']?>px;
  <?php Css::prop('color',$field['icon_color']);?>
}

#<?php echo $id; ?> .title {
  <?php Css::fonts($field['text_font']); ?>
  <?php Css::prop('color',$field['text_color']);?>
  margin-left: <?php echo $field['text_indent']?>px;
}

<?php
  // Hover animation box shadow
  if( $field['hover_animation'] === 'shadow' ):?>
  #<?php echo $id?> i:hover{
    box-shadow: <?php echo $field['hover_shadow_horizontal']?>px <?php echo $field['hover_shadow_vertical']?>px <?php echo $field['hover_shadow_blur']?>px <?php echo $field['hover_shadow_spread']?>px <?php echo $field['hover_shadow_color']?>;
    transform: scale(<?php echo $field['hover_shadow_scale']?>);
  }
<?php endif;?>
