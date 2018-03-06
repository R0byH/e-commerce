<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
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
		<?php echo $form->labelEx($model,'product_name'); ?>
		<?php echo $form->textField($model,'product_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'product_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_description'); ?>
		<?php echo $form->textField($model,'product_description',array('size'=>60,'maxlength'=>4000)); ?>
		<?php echo $form->error($model,'product_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'units_in_stock'); ?>
		<?php echo $form->textField($model,'units_in_stock'); ?>
		<?php echo $form->error($model,'units_in_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_category_id'); ?>
		<?php echo $form->textField($model,'product_category_id'); ?>
		<?php echo $form->error($model,'product_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reward_points_credit'); ?>
		<?php echo $form->textField($model,'reward_points_credit'); ?>
		<?php echo $form->error($model,'reward_points_credit'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->