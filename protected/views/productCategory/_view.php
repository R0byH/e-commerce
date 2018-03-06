<?php
/* @var $this ProductCategoryController */
/* @var $data ProductCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_name')); ?>:</b>
	<?php echo CHtml::encode($data->category_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_reward_points_encash')); ?>:</b>
	<?php echo CHtml::encode($data->max_reward_points_encash); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_category_id); ?>
	<br />


</div>