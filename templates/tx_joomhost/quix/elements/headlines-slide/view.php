<?php
  $classes = classNames( "qx-element qx-element-{$type} {$field['class']}", $visibilityClasses, [
    'qx-text-left' => $field['alignment'] === 'left',
    'qx-text-center' => $field['alignment'] === 'center',
    'qx-text-right' => $field['alignment'] === 'right',
    "wow {$field['animation']}" => $field['animation']
  ] );


Assets::Css('qx-headslide', QUIX_TEMPLATE_URL."/elements/headlines-slide/css/style.css");
Assets::Js('qx-headslide', QUIX_TEMPLATE_URL."/elements/headlines-slide/js/main.js");

?>

<div id="<?php echo $id;?>" class="<?php echo $classes?> tx-intro">
  <h2 class="tx-headline <?php echo $field['sliding-style'] ?>"><?php echo $field['headline']?>
  <span class="tx-words-wrapper">
    <?php foreach($field['animated'] as $key => $text):?>
      <b  class="<?php echo ($key ===0) ? 'is-visible' :'' ?>"><?php echo $text?></b>
    <?php endforeach;?>
  </span></h2>
</div>
<!-- qx-element-person -->
