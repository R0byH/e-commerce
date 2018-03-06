<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_name')); ?>:</b>
	<?php echo CHtml::encode($data->product_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_description')); ?>:</b>
	<?php echo CHtml::encode($data->product_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('units_in_stock')); ?>:</b>
	<?php echo CHtml::encode($data->units_in_stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reward_points_credit')); ?>:</b>
	<?php echo CHtml::encode($data->reward_points_credit); ?>
	<br />


</div>