<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Inicio';
//$this->breadcrumbs=array(
//	'Login',
//);
//if (!Yii::app()->user->isGuest)

?>
<h1>Login</h1>
<div class="form">
  <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); 
  
  ?>
  <p class="note"><?php echo "Usuario:"
  . "<br>"; ?>
	  <?php echo $form->textField($model,'username',array('SIZE'=>'12')). "<br>"; ?>
	  <?php echo $form->error($model,'username'); ?>  </p>
           
  
  <p class="note"><?php echo "<br>"."Contraseña:"
  . "<br>"; ?>
	  <?php echo $form->passwordField($model,'password',array('SIZE'=>'12')). "<br>"; ?>
	  <?php echo $form->error($model,'password'); ?>  </p>
  

	
        <?php if ($model->scenario == 'withCaptcha' && CCaptcha::checkRequirements()): ?>
            <div class="row">
                <?php echo $form->labelEx($model, 'verifyCode'); ?>
                <div>
                    <?php $this->widget('CCaptcha'); ?>
                    <?php echo $form->textField($model, 'verifyCode'); ?>
                </div>
                <?php echo $form->error($model, 'verifyCode'); ?>
            </div>
        <?php endif; ?>
	<div class="row buttons">
		<?php echo "<br>".CHtml::submitButton('Ingresar'); ?>
	</div>

<?php $this->endWidget(); ?>
</div>