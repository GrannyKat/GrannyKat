<?php
###################################
# Responsive Fields
###################################
// Element
Css::margin("#$id", $field['margin']);
Css::padding("#$id .domain-price", $field['domain_price_padding']);
Css::padding("#$id .domain-extension", $field['domain_extension_padding']);
Css::typography("#$id .domain-extension", $field['domain_extension_font']);
Css::typography("#$id .domain-price", $field['domain_price_font']);
?>


#<?php echo $id?> {
  <?php

  if( $field['box_shadow'] ):?>
    box-shadow: <?php echo ($field['box_shadow_inset']) ? 'inset' : '' ?> <?php echo $field['box_shadow_horizontal']?>px <?php echo $field['box_shadow_vertical']?>px <?php echo $field['box_shadow_blur']?>px <?php echo $field['box_shadow_spread']?>px <?php echo $field['box_shadow_color']?>;
  <?php endif;?>
}
#<?php echo $id?> .domain-extension {
  font-size: 38px;
  background: #fff;
  color: #2f3f54;
  padding: 60px 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  line-height: 1;
  <?php Css::prop("background", $field['domain_extension_bg'])?>
  <?php Css::prop("background", $field['domain_extension_color'])?>
}
#<?php echo $id?> .domain-price {
  font-size: 20px;
  background: #267ae9;
  color: #fff;
  padding: 20px 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  line-height: 1;
  <?php Css::prop("background", $field['domain_price_bg'])?>
  <?php Css::prop("background", $field['domain_price_color'])?>
}
