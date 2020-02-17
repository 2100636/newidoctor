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

  <!-- Модалка в меню -->
<div class="modal fade" id="promotionModal" role="dialog" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-header-top"></div>
        <div class="modal-header-bottom">
          <p>При замене дисплея на IPhone мы наклеим обычное защитное стекло бесплатно. На 3D стекло акция не распространяется.</p>
        </div>
      </div>
      <div class="modal-body text-justify">
        <p>Заполните форму ниже и мы свяжемся с Вами!</p>
        <form action="">  
          <input type="text" name="email" class="email" placeholder="email" >
          <input type="text" name="phone" class="phone" placeholder="телефон" >
          <a href="" class="btn btn-primary">Подробнее</a>
        </form>
      </div>
    </div>
  </div>      
</div>