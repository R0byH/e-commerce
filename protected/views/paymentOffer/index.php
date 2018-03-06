<?php
/* @var $this PaymentOfferController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Payment Offers',
);

$this->menu=array(
	array('label'=>'Create PaymentOffer', 'url'=>array('create')),
	array('label'=>'Manage PaymentOffer', 'url'=>array('admin')),
);
?>

<h1>Payment Offers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
