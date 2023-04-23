<?php
  // HTML class
  $classes = classNames( "qx-element qx-element-{$type} {$field['class']}",$visibilityClasses,[]);
  // css
  Assets::Css('qx-slick', QUIX_URL."/assets/css/slick.css");
  // JS script
  Assets::Js('qx-slick', QUIX_URL."/assets/js/slick.min.js");

  // RTL detection
  $direction = Jfactory::getDocument()->direction;

  $script = array();
  $script[] = 'fade: true';
  $script[] = 'infinite: true';
  $script[] = 'adaptiveHeight: true';
  $script[] = ($field['arrows']) ? 'arrows:true' : 'arrows:false';
  $script[] = ($field['dots']) ? 'dots:true' : 'dots:false';
  $script[] = ($field['autoplay']) ? 'autoplay:true' : 'autoplay:false';
  if( 'rtl' == $direction ){ $script[] = 'rtl:true'; }
  $script[] = 'autoplaySpeed:' . $field['autoplay_speed'];

?>

<div id="<?php echo $id;?>" class="<?php echo $classes?>" dir="<?php echo $direction; ?>">
  <div class="qx-sliders">
  <?php foreach($field['sliders'] as $key => $slide):?>
    <div class="qx-slide qx-slide-<?php echo ($key+1)?>" >
        <div class="qx-slide__container <?php echo ($field['v_center']) ? 'qx-flex qx-flex-column qx-flex-center' : '' ?>">
          <?php
            $title = "<{$slide['title_tag']} class=\"qx-slide__title\"> {$slide['title']} </{$slide['title_tag']}>";
          ?>

          <?php if($slide['image_position'] == 'right') :?>

            <div class="slider-content qx-pull-left">
              <?php if($slide['sub_title_position'] == 'bft') : ?>

                <?php if($slide['sub_title']) : ?>
                  <h3 class="sub-title"><?php echo $slide['sub_title']; ?></h3>
                <?php endif; ?>

                <?php if($slide['title']):?>
                  <?php echo $title ?>
                <?php endif;?>

              <?php else :?>

                <?php if($slide['title']):?>
                  <?php echo $title ?>
                <?php endif;?>

                <?php if($slide['sub_title']) : ?>
                  <h3 class="sub-title"><?php echo $slide['sub_title']; ?></h3>
                <?php endif; ?>

              <?php endif; ?>

              <?php if($slide['content']):?>
              <div class="qx-slide__content"><?php echo $slide['content']?></div>
              <?php endif;?>

              <?php if($slide['button_enabled'] AND !empty($slide['button']['url'])):?>
                <div class="qx-slide__btn">
                  <a class="qx-btn qx-btn-lg qx-btn-primary" href="<?php echo $slide['button']['url'] ?>" <?php echo ( $slide['button']['target'] ) ? ' target="_blank" rel="noopener noreferrer"' : '' ?>><?php echo $slide['button']['text']?></a>
                </div>
              <?php endif;?>
            </div>

            <?php if($slide['enable_image'] && $slide['image']) : ?>
              <div class="slider-image qx-pull-right">
                <img class="qx-img-responsive" src="<?php echo $slide['image'];?>" alt="<?php echo $slide['alt_text'];?>">
              </div>
            <?php endif; ?>

          <?php elseif($slide['image_position'] == 'left') : ?>

            <?php if($slide['enable_image'] && $slide['image']) : ?>
              <div class="slider-image qx-pull-left">
                <img class="qx-img-responsive" src="<?php echo $slide['image'];?>" alt="<?php echo $slide['alt_text'];?>">
              </div>
            <?php endif; ?>

            <div class="slider-content qx-pull-left">
              <?php if($slide['sub_title_position'] == 'bft') : ?>

                <?php if($slide['sub_title']) : ?>
                  <h3 class="sub-title"><?php echo $slide['sub_title']; ?></h3>
                <?php endif; ?>

                <?php if($slide['title']):?>
                  <?php echo $title ?>
                <?php endif;?>

              <?php else :?>

                <?php if($slide['title']):?>
                  <?php echo $title ?>
                <?php endif;?>

                <?php if($slide['sub_title']) : ?>
                  <h3 class="sub-title"><?php echo $slide['sub_title']; ?></h3>
                <?php endif; ?>

              <?php endif; ?>

              <?php if($slide['content']):?>
              <div class="qx-slide__content"><?php echo $slide['content']?></div>
              <?php endif;?>

              <?php if($slide['button_enabled'] AND !empty($slide['button']['url'])):?>
                <div class="qx-slide__btn">
                  <a class="qx-btn qx-btn-lg qx-btn-primary" href="<?php echo $slide['button']['url'] ?>" <?php echo ( $slide['button']['target'] ) ? ' target="_blank" rel="noopener noreferrer"' : '' ?>><?php echo $slide['button']['text']?></a>
                </div>
              <?php endif;?>
            </div>

          <?php else :?>

            <div class="slider-content">

              <?php if($slide['sub_title_position'] == 'bft') : ?>

                <?php if($slide['sub_title']) : ?>
                  <h3 class="sub-title"><?php echo $slide['sub_title']; ?></h3>
                <?php endif; ?>

                <?php if($slide['title']):?>
                  <?php echo $title ?>
                <?php endif;?>

              <?php else :?>

                <?php if($slide['title']):?>
                  <?php echo $title ?>
                <?php endif;?>

                <?php if($slide['sub_title']) : ?>
                  <h3 class="sub-title"><?php echo $slide['sub_title']; ?></h3>
                <?php endif; ?>

              <?php endif; ?>

              <?php if($slide['content']):?>
              <div class="qx-slide__content"><?php echo $slide['content']?></div>
              <?php endif;?>

              <?php if($slide['button_enabled'] AND !empty($slide['button']['url'])):?>
                <div class="qx-slide__btn">
                  <a class="qx-btn qx-btn-lg qx-btn-primary" href="<?php echo $slide['button']['url'] ?>" <?php echo ( $slide['button']['target'] ) ? ' target="_blank" rel="noopener noreferrer"' : '' ?>><?php echo $slide['button']['text']?></a>
                </div>
              <?php endif;?>
            </div>

            <?php if($slide['enable_image'] && $slide['image']) : ?>
              <div class="slider-image">
                <img class="qx-img-responsive" src="<?php echo $slide['image'];?>" alt="<?php echo $slide['alt_text'];?>">
              </div>
            <?php endif; ?>

          <?php endif; ?>


        </div>
    </div>
  <?php endforeach;?>
  </div>
</div>

<?php
  Assets::js( 'qx-slider-pro-' . $id, QUIX_ELEMENTS_PATH . '/slider-pro/inline-js.php', compact(['id', 'script']), ['qx-slick']);
?>
<!-- qx-element-slider-pro -->
