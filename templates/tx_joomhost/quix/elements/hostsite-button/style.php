<?php
###################################
# Responsive Fields
###################################
// Element
Css::margin(".{$id}-hostsite-btn", $field['margin']);
Css::padding("#$id", $field['padding']);
Css::typography("#$id, .{$id}-hostsite-btn", $field['font']);
Css::padding(".{$id}-hostsite-btn span", $field['prefix_padding']);
Css::margin("#$id i", $field['icon_margin']);

?>




#<?php echo $id?> {
  float: right;
  <?php Css::prop('color', $field['text_color']);?>
  <?php Css::prop('background', $field['bg_color']);?>
  <?php if($field['border']):?>
    <?php Css::prop('border-style', $field['border_style']);?>
    <?php Css::prop('border-color', $field['border_color']);?>
    border-width: <?php echo $field['border_width']?>px;
    border-radius: <?php echo $field['border_radius']?>px;
  <?php endif;?>

  transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;

}
.<?php echo $id?>-hostsite-btn {
  display: table;
  <?php
    // Box shadow
    if( $field['box_shadow'] ):?>
    box-shadow: <?php echo ($field['box_shadow_inset']) ? 'inset' : '' ?> <?php echo $field['box_shadow_horizontal']?>px <?php echo $field['box_shadow_vertical']?>px <?php echo $field['box_shadow_blur']?>px <?php echo $field['box_shadow_spread']?>px <?php echo $field['box_shadow_color']?>;
  <?php endif;?>
}

.<?php echo $id?>-hostsite-btn span {
  float: left;
  <?php Css::prop('color', $field['prefix_text_color']);?>
  <?php Css::prop('background', $field['prefix_bg_color']);?>
}

<?php
  // Hover animation box shadow
  if( $field['hover_animation'] === 'shadow' ):?>
  #<?php echo $id?>:hover{
    box-shadow: <?php echo $field['hover_shadow_horizontal']?>px <?php echo $field['hover_shadow_vertical']?>px <?php echo $field['hover_shadow_blur']?>px <?php echo $field['hover_shadow_spread']?>px <?php echo $field['hover_shadow_color']?>;
    transform: scale(<?php echo $field['hover_shadow_scale']?>);
  }
<?php endif;?>

<?php if($field['button_icon_color']):?>
  #<?php echo $id?> i{
    <?php Css::prop('color', $field['button_icon_color']);?>
  }
<?php endif;?>

<?php if( $field['text_color_hover'] OR
          $field['bg_color_hover'] OR
          $field['border_hover_color'] ):?>
  #<?php echo $id?>:hover{
    <?php Css::prop('color', $field['text_color_hover']);?>
    <?php Css::prop('background', $field['bg_color_hover']);?>
    <?php Css::prop('border-color', $field['border_hover_color']);?>
  }
<?php endif;?>

<?php if( $field['border'] ) :?>
   #<?php echo $id?>:before{
    <?php Css::prop('border-color', $field['border_hover_color']);?>
  }
<?php endif;?>

<?php if($field['button_icon_color_hover']):?>
  #<?php echo $id?>:hover i{
    <?php Css::prop('color', $field['button_icon_color_hover']);?>
  }
<?php endif;?>


