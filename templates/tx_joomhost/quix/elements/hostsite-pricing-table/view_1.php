
  <div class="tx-table-heading">
    <div class="cost">
      <?php if($field['curency']):?>
        <span class="curency"><?php echo $field['curency']?></span><!-- /.curency -->
      <?php endif;?>

      <?php if($field['amount']):?>
        <span class="amount"><?php echo $field['amount']?></span><!-- /.amount -->
      <?php endif;?>

      <?php if($field['plantype']):?>
        <span class="plantype">/ <?php echo $field['plantype']?></span><!-- /.plantype -->
      <?php endif;?>
    </div><!-- /.cost -->

    <?php if($field['image_packege']) : ?>
      <div class="image">
        <img src="<?php echo $field['image_packege']; ?>" alt="<?php echo $field['packege']?>">
      </div>
    <?php endif; ?>

    <?php if($field['packege']):?>
      <h3 class="title">
        <?php echo $field['packege']?>
      </h3><!-- /.title -->
    <?php endif;?>

    <?php if($field['description']):?>
      <div class="description">
        <?php echo $field['description']?>
      </div><!-- /.description -->
    <?php endif;?>
  </div>

  <div class="tx-table-body">
    <?php foreach($field['featurelist'] as $feature):?>
      <span class="item"><?php echo $feature?></span>
    <?php endforeach;?>
  </div>

  <div class="tx-table-footer">
    <a class="qx-btn qx-element-<?php echo $field['btntype']?> <?php echo $field['btnstyle']?>" href="<?php echo $field['button']['url'] ?>" <?php echo ( $field['button']['target'] ) ? ' target="_blank"' : '' ?>><?php echo $field['button']['text'] ?></a>
  </div><!-- /.table-footer -->
