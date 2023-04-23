<?php
###################################
# Responsive Fields
###################################
// Element
Css::margin("#$id", $field['margin']);
Css::padding("#$id", $field['padding']);
Css::typography("#$id h2", $field['font']);
?>

#<?php echo $id?> h2 {
<?php Css::prop("color", $field['color'])?>
}
#<?php echo $id?> h2 span {
<?php Css::prop("color", $field['slide_color'])?>
}
.tx-headline.loading-bar .tx-words-wrapper::after,
.tx-headline.clip .tx-words-wrapper::after {
<?php Css::prop("background", $field['slide_color'])?>
}