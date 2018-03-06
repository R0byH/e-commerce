<?php
/* @var $this ProductDiscountController */
/* @var $model ProductDiscount */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-discount-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id'); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount_value'); ?>
		<?php echo $form->textField($model,'discount_value'); ?>
		<?php echo $form->error($model,'discount_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount_unit'); ?>
		<?php echo $form->textField($model,'discount_unit',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'discount_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valid_from'); ?>
		<?php echo $form->textField($model,'valid_from'); ?>
		<?php echo $form->error($model,'valid_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valid_until'); ?>
		<?php echo $form->textField($model,'valid_until'); ?>
		<?php echo $form->error($model,'valid_until'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coupon_code'); ?>
		<?php echo $form->textField($model,'coupon_code',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'coupon_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minimum_order_value'); ?>
		<?php echo $form->textField($model,'minimum_order_value'); ?>
		<?php echo $form->error($model,'minimum_order_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maximum_discount_amount'); ?>
		<?php echo $form->textField($model,'maximum_discount_amount'); ?>
		<?php echo $form->error($model,'maximum_discount_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_redeem_allowed'); ?>
		<?php echo $form->textField($model,'is_redeem_allowed',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_redeem_allowed'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->