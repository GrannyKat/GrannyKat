<?php
###################################
# Responsive Fields
###################################
// Element
Css::margin("#$id", $field['margin']);
Css::padding("#$id", $field['padding']);

Css::typography("#$id .qx-testimony", $field['font']);
Css::typography("#$id h4", $field['name_font']);
Css::typography("#$id .qx-designation", $field['designation_font']);
?>



#<?php echo $id?> .qx-testimony{
  <?php Css::prop('color', $field['text_color']);?>
}
#<?php echo $id?> h4{
  <?php Css::prop('color', $field['name_color']);?>
}
#<?php echo $id?> .qx-designation{
  <?php Css::prop('color', $field['designation_color']);?>
}
#<?php echo $id?> .slick-prev:before,
#<?php echo $id?> .slick-next:before{
  <?php Css::prop('color', $field['nav_color']);?>
}



#<?php echo $id?> .testi-image {
  background: #267ae9;
  <?php Css::prop('background-color', $field['image_bg_color']);?>
  padding: 30px 25px;
  display: flex;
  align-items: center;
}
#<?php echo $id?> .slick-initialized .slick-slide {
  display: flex;
}
#<?php echo $id?> .slick-initialized .slick-slide:last-child {
  margin-right: 0;
}
#<?php echo $id?> .qx-testimonial {
    <?php Css::prop('background-color', $field['bg_color']);?>
    display: flex;
    margin: 0 15px;
    box-shadow: 0 0 1px 0 rgba(18,32,73,.08), 0 8px 32px 0 rgba(55,92,192,.08);
}
#<?php echo $id?> .testi-content {
    padding: 60px 30px;
}
