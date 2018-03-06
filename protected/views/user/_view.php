<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_date')); ?>:</b>
	<?php echo CHtml::encode($data->registration_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('promotional_reward_points')); ?>:</b>
	<?php echo CHtml::encode($data->promotional_reward_points); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('non_promotional_reward_points')); ?>:</b>
	<?php echo CHtml::encode($data->non_promotional_reward_points); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membership_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->membership_type_id); ?>
	<br />


</div>