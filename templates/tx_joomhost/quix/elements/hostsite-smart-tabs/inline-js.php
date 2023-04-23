jQuery(function() {
  var active_first = <?php echo ($active_first_item) ? 'true' : 'false'; ?>

  jQuery('#<?= $id ?> .qx-triggers').each(function(key, val){
    var target = jQuery(this).data('target'),
        targetObj = jQuery( target );
        targetObj.clone().appendTo('#<?= $id ?> .qx-smart-tab-contents');
    // Remove original target
    targetObj.remove();
    if( key == 0 && active_first ){
        jQuery(this).addClass('active');
        return;
    }else{
      jQuery( target ).hide();
    }
  })

  jQuery('#<?= $id ?> .qx-triggers').on('click', function(){
    var target = jQuery(this).data('target');

    jQuery('#<?= $id ?> .qx-triggers.active').removeClass('active')

    jQuery(this).addClass('active')

    jQuery('#<?= $id ?> .qx-triggers').each(function(){
      jQuery( jQuery(this).data('target') ).hide();
    })

    jQuery( target ).show();

  })

});
