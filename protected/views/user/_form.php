<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
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
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'registration_date'); ?>
		<?php echo $form->textField($model,'registration_date'); ?>
		<?php echo $form->error($model,'registration_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'promotional_reward_points'); ?>
		<?php echo $form->textField($model,'promotional_reward_points'); ?>
		<?php echo $form->error($model,'promotional_reward_points'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'non_promotional_reward_points'); ?>
		<?php echo $form->textField($model,'non_promotional_reward_points'); ?>
		<?php echo $form->error($model,'non_promotional_reward_points'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'membership_type_id'); ?>
		<?php echo $form->textField($model,'membership_type_id'); ?>
		<?php echo $form->error($model,'membership_type_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->