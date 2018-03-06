<?php
/* @var $this MembershipTypeController */
/* @var $data MembershipType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membership_type')); ?>:</b>
	<?php echo CHtml::encode($data->membership_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount_value')); ?>:</b>
	<?php echo CHtml::encode($data->discount_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount_unit')); ?>:</b>
	<?php echo CHtml::encode($data->discount_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valid_until')); ?>:</b>
	<?php echo CHtml::encode($data->valid_until); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_free_shipping_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_free_shipping_active); ?>
	<br />


</div>