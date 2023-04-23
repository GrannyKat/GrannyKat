#<?php echo $id; ?> .qx-nav.qx-nav-tabs {
  padding: 0;
  margin: 0;
}
#<?php echo $id; ?> .qx-triggers .title {
  font-size: 22px;
  line-height: 1.5;
}


#<?php echo $id; ?>.pills .qx-nav.qx-nav-tabs {
  text-align: center;
  border: 1px solid #0a00b6;
  display: inline-block;
  border-radius: 40px;
}
#<?php echo $id; ?>.pills .qx-triggers {
  padding: 15px 35px;
  cursor: pointer;
  display: inline-block;
  border-radius: 40px;
}
#<?php echo $id; ?>.pills .qx-triggers.active {
  background: #0a00b6;
  color: #fff;
}


#<?php echo $id; ?>.tabs ul.qx-nav-tabs {
  text-align: center;
  border-bottom: 1px solid #ddd;

}
#<?php echo $id; ?>.tabs .qx-triggers {
  cursor: pointer;
  display: inline-block;
  padding: 0 60px 30px;
  line-height: 1;
}
#<?php echo $id; ?>.tabs .qx-triggers.active {
  color: #0a00b6;
  position: relative;
}
#<?php echo $id; ?>.tabs .qx-triggers.active:before {
  content: '';
  position: absolute;
  width: 100%;
  height: 1px;
  bottom: -1px;
  background: #0a00b6;
  left: 0;
  right: 0;
}
#<?php echo $id; ?>.tabs .sub-title {
  display: block;
  font-size: 16px;
}



#<?php echo $id; ?>.vertical {

}
#<?php echo $id; ?>.vertical .qx-triggers {
  display: block;
  margin: 40px 0;
  position: relative;
}
#<?php echo $id; ?>.vertical .qx-triggers.active:before {
  content: '';
  position: absolute;
  right: 0;
  border-right: 10px solid <?php echo $field['trigger_arrow_color']; ?>;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  top: 50%;
  margin-top: -12px;
}
#<?php echo $id; ?>.vertical .qx-triggers span.icon {
    display: block;
    cursor: pointer;
}
#<?php echo $id; ?>.vertical .qx-nav.qx-nav-tabs,
#<?php echo $id; ?>.vertical .qx-smart-tab-contents {
  float: left;
}



<?php
###################################
# Responsive Fields
###################################
// Element
Css::margin("#$id", $field['margin']);
Css::padding("#$id", $field['padding']);

Css::padding("#{$id}.vertical .qx-nav.qx-nav-tabs", $field['nav_tab_padding']);
Css::margin("#{$id}.vertical .qx-nav.qx-nav-tabs", $field['nav_tab_margin']);

Css::padding("#$id .qx-smart-tab-contents", $field['content_padding']);
Css::margin("#$id .qx-smart-tab-contents", $field['content_margin']);

Css::padding("#$id .qx-triggers, #{$id}.vertical .qx-triggers", $field['trigger_padding']);
Css::margin("#$id .qx-triggers, #{$id}.vertical .qx-triggers", $field['trigger_margin']);

Css::typography("#$id .qx-triggers .title", $field['title_font']);
Css::typography("#$id .qx-triggers .sub-title", $field['sub_title_font']);
?>


#<?php echo $id; ?>.vertical .qx-nav.qx-nav-tabs {
  text-align: center;
  <?php Css::prop("background", $field['nav_tab_bg'])?>
  width: <?php echo $field['nav_width']; ?>%;
}
#<?php echo $id; ?>.vertical .qx-smart-tab-contents {
  width: <?php echo $field['tab_content_width']; ?>%;
}
#<?php echo $id; ?> .qx-smart-tab-contents {
  <?php Css::prop("background", $field['nav_content_bg'])?>
}
#<?php echo $id; ?> .qx-triggers .title {
  <?php Css::prop("color", $field['title_color'])?>
}
#<?php echo $id; ?> .qx-triggers .sub-title {
  <?php Css::prop("color", $field['sub_title_color'])?>
}
