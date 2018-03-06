<?php
/* @var $this UserRewardPointLogController */
/* @var $model UserRewardPointLog */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-reward-point-log-form',
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
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reward_points'); ?>
		<?php echo $form->textField($model,'reward_points'); ?>
		<?php echo $form->error($model,'reward_points'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reward_type'); ?>
		<?php echo $form->textField($model,'reward_type',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'reward_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operation_type'); ?>
		<?php echo $form->textField($model,'operation_type',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'operation_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expiry_date'); ?>
		<?php echo $form->textField($model,'expiry_date'); ?>
		<?php echo $form->error($model,'expiry_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->