<?php
/**
 * @file
 */
?>

<div class="two-33-66 at-panel panel-display clearfix">
  <div class="region region-two-50-top region-conditional-stack">
    <div class="region-inner clearfix">
    </div>
  </div>
  <div class="region region-two-33-66-first">
    <div class="region-inner clearfix">
    </div>
  </div>
  <div class="region region-two-33-66-second">

    <div class="region-inner clearfix">

       <?php
          $actions = $form['actions'];
          unset($form['actions']);
          print drupal_render_children($form);
       ?>


    </div>
  </div>

  <div class="region region-two-33-66-bottom region-conditional-stack">
    <div class="region-inner clearfix">
      <?php print render($actions); ?>
    </div>
  </div>

</div>