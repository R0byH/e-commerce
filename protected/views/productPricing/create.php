<?php
/* @var $this ProductPricingController */
/* @var $model ProductPricing */

$this->breadcrumbs=array(
	'Product Pricings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductPricing', 'url'=>array('index')),
	array('label'=>'Manage ProductPricing', 'url'=>array('admin')),
);
?>

<h1>Create ProductPricing</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>