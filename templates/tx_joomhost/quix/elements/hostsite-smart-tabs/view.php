<?php
  $classes = classNames("qx-element qx-element-{$type} {$field['class']} {$field['style']}", $visibilityClasses);
  $active_first_item = $field['active_first_item'];
  ?>


  <div id="<?php echo $id; ?>" class="<?php echo $classes;?> qx-clearfix">
    <ul class="qx-nav qx-nav-tabs">
      <?php
      foreach($field['tabs'] as $key => $tab):
        // New icon system. Since @1.7
        $icon = get_icon($tab);

        ?>
        <li class="qx-triggers" data-target="#<?php echo $tab['trigger_id']?>">
          <?php if($tab['select_icon']) : ?>
            <?php if($tab['select_icon'] == 'image') : ?>
              <span class="icon"><img src="<?php echo $tab['image']?>" alt="<?php echo $tab['title']?>"></span>
            <?php else : ?>
              <span class="icon <?php echo $icon['class']?>"><?php echo $icon['content']?></span>
            <?php endif?>
          <?php else : ?>
            <span class="title"><?php echo $tab['title']?></span>
            <?php if($tab['sub_title']) : ?>
              <span class="sub-title"><?php echo $tab['sub_title']?></span>
            <?php endif; ?>
          <?php endif; ?>
        </li>
      <?php endforeach;?>
    </ul>
    <div class="qx-smart-tab-contents"></div>
  </div>
  <!-- qx-element-tabs -->


<?php
  Assets::js( 'qx-smart-tab-'. $id, QUIX_TEMPLATE_PATH . '/elements/hostsite-smart-tabs/inline-js.php', compact(['id', 'active_first_item']) );
?>
