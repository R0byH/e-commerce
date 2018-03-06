<?php
/* @var $this ProductDiscountController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product Discounts',
);

$this->menu=array(
	array('label'=>'Create ProductDiscount', 'url'=>array('create')),
	array('label'=>'Manage ProductDiscount', 'url'=>array('admin')),
);
?>

<h1>Product Discounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
