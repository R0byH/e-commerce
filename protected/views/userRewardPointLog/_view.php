<?php
/* @var $this UserRewardPointLogController */
/* @var $data UserRewardPointLog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reward_points')); ?>:</b>
	<?php echo CHtml::encode($data->reward_points); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reward_type')); ?>:</b>
	<?php echo CHtml::encode($data->reward_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('operation_type')); ?>:</b>
	<?php echo CHtml::encode($data->operation_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expiry_date')); ?>:</b>
	<?php echo CHtml::encode($data->expiry_date); ?>
	<br />


</div>