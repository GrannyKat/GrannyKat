<?php
  // HTML class
  $classes = classNames( "qx-element qx-element-{$type} {$field['class']}", $visibilityClasses,[
    'qx-text-left' => $field['alignment'] === 'left',
    'qx-text-center' => $field['alignment'] === 'center',
    'qx-text-right' => $field['alignment'] === 'right'
  ]);

// css
Assets::Css('qx-slick', QUIX_URL."/assets/css/slick.css");
// JS script
Assets::Js('qx-slick', QUIX_URL."/assets/js/slick.min.js");

$direction = Jfactory::getDocument()->direction;

  $script = array();
  $script[] = 'slidesToShow: 2';
  $script[] = 'infinite: true';
  $script[] = 'adaptiveHeight: true';
  $script[] = ($field['arrows']) ? 'arrows:true' : 'arrows:false';
  $script[] = ($field['dots']) ? 'dots:true' : 'dots:false';
  $script[] = ($field['autoplay']) ? 'autoplay:true' : 'autoplay:false';
  $script[] = 'autoplaySpeed:' . $field['autoplay_speed'];
  if( 'rtl' == $direction ){ $script[] = 'rtl:true'; }
  $script[] = ' responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]';
?>

<div id="<?php echo $id; ?>" class="<?php echo $classes; ?>">
    <?php foreach( $field['testimonials'] as $testimonial ):?>
      <div class="qx-testimonial clearfix">
        <div class="pull-left qx-media-left testi-image">
          <?php if($testimonial['image']):?>
            <img class="qx-img-responsive <?php echo $field['image_style']?>" src="<?php echo $testimonial['image']?>" alt="<?php echo $testimonial['name']?>">
          <?php endif;?>
        </div>
        <div class="qx-media-body testi-content">
          <div class="qx-testimony"><?php echo $testimonial['testimony']?></div>

          <div class="user-info">
            <span class="qx-name"><?php echo $testimonial['name']?></span>
            <span class="qx-text-muted"><?php echo $testimonial['company']?></span>
          </div>
        </div>
      </div>
    <?php endforeach;?>
</div>

<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('#<?php echo $id?>').slick({<?php echo implode(',', $script)?>});
  });
</script>
<!-- qx-element-testimonial-pro -->
