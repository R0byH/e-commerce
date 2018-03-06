<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Ingreso al Sistema',
);
?>
<div class="page-header">
	<h1><small>Datos de su cuenta</small></h1>
</div>
<div class="row-fluid">
	
    <div class="span6 offset3">
<?php
	$this->beginWidget('zii.widgets.CPortlet', array(
		'title'=>"Control de Acceso",
	));
	
?>



    <p>Ingrese su usuario y contraseña:</p>
    
    <div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>
    
        <p class="note">Todos los campos con <span class="required">*</span> son obligatorios</p>
    
        <div class="row">
            <?php echo $form->labelEx($model,'Usuario'); ?>
            <?php echo $form->textField($model,'username'); ?>
            <?php echo $form->error($model,'username'); ?>
        </div>
    
        <div class="row">
            <?php echo $form->labelEx($model,'Contrase&ntilde;a');//echo $form->labelEx($model,'Fecha de Nacimiento (01/11/1980)'); ?>
            <?php echo $form->textField($model,'password'); ?>
            <?php echo $form->error($model,'password'); ?>
            
        </div>
    
        
    
        <div class="row buttons">
            <?php echo CHtml::submitButton('Entrar',array('class'=>'btn btn btn-primary')); ?>
        </div>
    
    <?php $this->endWidget(); ?>
    </div><!-- form -->

<?php $this->endWidget();?>

    </div>

</div>