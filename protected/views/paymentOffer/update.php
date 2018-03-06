<?php
/* @var $this PaymentOfferController */
/* @var $model PaymentOffer */

$this->breadcrumbs=array(
	'Payment Offers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PaymentOffer', 'url'=>array('index')),
	array('label'=>'Create PaymentOffer', 'url'=>array('create')),
	array('label'=>'View PaymentOffer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PaymentOffer', 'url'=>array('admin')),
);
?>

<h1>Update PaymentOffer <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>