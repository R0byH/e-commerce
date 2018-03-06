<?php
/* @var $this PaymentOfferController */
/* @var $model PaymentOffer */
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
		<?php echo $form->label($model,'institute_type'); ?>
		<?php echo $form->textField($model,'institute_type',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'institute_name'); ?>
		<?php echo $form->textField($model,'institute_name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'card_type'); ?>
		<?php echo $form->textField($model,'card_type',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coupon_code'); ?>
		<?php echo $form->textField($model,'coupon_code',array('size'=>10,'maxlength'=>10)); ?>
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
		<?php echo $form->label($model,'valid_from'); ?>
		<?php echo $form->textField($model,'valid_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valid_until'); ?>
		<?php echo $form->textField($model,'valid_until'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maximum_discount_amount'); ?>
		<?php echo $form->textField($model,'maximum_discount_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_category_id'); ?>
		<?php echo $form->textField($model,'product_category_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->