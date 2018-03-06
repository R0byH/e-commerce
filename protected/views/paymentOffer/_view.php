<?php
/* @var $this PaymentOfferController */
/* @var $data PaymentOffer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institute_type')); ?>:</b>
	<?php echo CHtml::encode($data->institute_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institute_name')); ?>:</b>
	<?php echo CHtml::encode($data->institute_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_type')); ?>:</b>
	<?php echo CHtml::encode($data->card_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coupon_code')); ?>:</b>
	<?php echo CHtml::encode($data->coupon_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount_value')); ?>:</b>
	<?php echo CHtml::encode($data->discount_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount_unit')); ?>:</b>
	<?php echo CHtml::encode($data->discount_unit); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valid_from')); ?>:</b>
	<?php echo CHtml::encode($data->valid_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valid_until')); ?>:</b>
	<?php echo CHtml::encode($data->valid_until); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maximum_discount_amount')); ?>:</b>
	<?php echo CHtml::encode($data->maximum_discount_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_category_id); ?>
	<br />

	*/ ?>

</div>