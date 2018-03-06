<?php
/* @var $this ProductCategoryDiscountController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product Category Discounts',
);

$this->menu=array(
	array('label'=>'Create ProductCategoryDiscount', 'url'=>array('create')),
	array('label'=>'Manage ProductCategoryDiscount', 'url'=>array('admin')),
);
?>

<h1>Product Category Discounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
