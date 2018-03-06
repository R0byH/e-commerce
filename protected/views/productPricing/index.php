<?php
/* @var $this ProductPricingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product Pricings',
);

$this->menu=array(
	array('label'=>'Create ProductPricing', 'url'=>array('create')),
	array('label'=>'Manage ProductPricing', 'url'=>array('admin')),
);
?>

<h1>Product Pricings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
