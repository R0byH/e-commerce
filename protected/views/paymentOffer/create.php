<?php
/* @var $this PaymentOfferController */
/* @var $model PaymentOffer */

$this->breadcrumbs=array(
	'Payment Offers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PaymentOffer', 'url'=>array('index')),
	array('label'=>'Manage PaymentOffer', 'url'=>array('admin')),
);
?>

<h1>Create PaymentOffer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>