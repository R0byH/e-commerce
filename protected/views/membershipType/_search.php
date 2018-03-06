<?php
/* @var $this MembershipTypeController */
/* @var $model MembershipType */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'membership_type'); ?>
		<?php echo $form->textField($model,'membership_type',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discount_value'); ?>
		<?php echo $form->textField($model,'discount_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discount_unit'); ?>
		<?php echo $form->textField($model,'discount_unit',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valid_until'); ?>
		<?php echo $form->textField($model,'valid_until'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_free_shipping_active'); ?>
		<?php echo $form->textField($model,'is_free_shipping_active',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->