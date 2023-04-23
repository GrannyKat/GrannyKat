<?php
###################################
# Responsive Fields
###################################
// Element
Css::margin("#$id", $field['margin']);
Css::padding("#$id", $field['padding']);
Css::typography("#$id", $field['font']);
// Table Heading
Css::margin("#$id .tx-table-heading", $field['heading_margin']);
// Title
Css::typography("#$id .title", $field['title_font']);
Css::margin("#$id .title", $field['title_margin']);
// Description
Css::typography("#$id .description", $field['description_font']);
Css::margin("#$id .description", $field['description_margin']);
// Cost
Css::margin("#$id .cost", $field['cost_margin']);
// Curency
Css::typography("#$id .curency", $field['curency_font']);
// Amount
Css::typography("#$id .amount", $field['amount_font']);
// Plantype
Css::typography("#$id .plantype", $field['plantype_font']);
// Table Body
Css::margin("#$id .tx-table-body", $field['body_margin']);
// Footer
Css::margin("#$id .tx-table-footer", $field['footer_margin']);
// Button
Css::typography("#$id .qx-btn", $field['button_font']);
?>


#<?php echo $id?>{
  <?php Css::prop("background-color", $field['bg_color'])?>
  <?php Css::prop("color", $field['text_color'])?>
  <?php if($field['border']):?>
    <?php Css::prop('border-style', $field['border_style']);?>
    <?php Css::prop('border-color', $field['border_color']);?>
    border-width: <?php echo $field['border_width']?>px;
    border-radius: <?php echo $field['border_radius']?>px;
  <?php endif;?>
}
#<?php echo $id?> .tx-table-body .item {
  display: block;
}


#<?php echo $id?> .tx-table-heading {
overflow: hidden; clear: both;
<?php Css::prop('background', $field['table_heading_bg_color']);?>
}

#<?php echo $id?> .title {
  <?php Css::prop("color", $field['title_color'])?>
}
#<?php echo $id?> .description {
  <?php Css::prop("color", $field['description_color'])?>
}

#<?php echo $id?> .cost {
  <?php Css::prop('background', $field['table_heading_curve_bg_color']);?>
}
#<?php echo $id?> .curency {
  <?php Css::prop("color", $field['curency_color'])?>
}
#<?php echo $id?> .amount {
  <?php Css::prop("color", $field['amount_color'])?>
}
#<?php echo $id?> .plantype {
  <?php Css::prop("color", $field['duration_color'])?>
}

#<?php echo $id?> .tx-table-body {
<?php Css::prop('background', $field['table_body_bg_color']);?>
}

#<?php echo $id?> .tx-table-footer {
<?php Css::prop('background', $field['table_footer_bg_color']);?>
}
#<?php echo $id?> .qx-btn {
  border: 0;
}
