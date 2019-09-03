<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>



<?php foreach ($rows as $id => $row): ?>
  <?php $id_ = $id+1; # порядковый номер ?>
      <div
      <?php
       	if ($classes_array[$id]) { 
      	print ' class="' . $classes_array[$id] .'"';  
      } 
     ?>>
      <?php $image = $view->render_field('field_photo',$id);?>
      <style>
       .view-id-promotions .view-content .views-row.views-row-<?php echo $id_;?> {
          background: url(<?php echo $image;?>);
        }   
      </style>

      <?php print $row; ?>

    </div>
  <?php endforeach; ?>