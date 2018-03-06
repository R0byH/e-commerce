<?php
/* @var $this ProductCategoryDiscountController */
/* @var $model ProductCategoryDiscount */

$this->breadcrumbs=array(
	'Product Category Discounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductCategoryDiscount', 'url'=>array('index')),
	array('label'=>'Manage ProductCategoryDiscount', 'url'=>array('admin')),
);
?>

<h1>Create ProductCategoryDiscount</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>