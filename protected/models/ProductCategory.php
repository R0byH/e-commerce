<?php

/**
 * This is the model class for table "product_category".
 *
 * The followings are the available columns in table 'product_category':
 * @property integer $id
 * @property string $category_name
 * @property integer $max_reward_points_encash
 * @property integer $parent_category_id
 *
 * The followings are the available model relations:
 * @property PaymentOffer[] $paymentOffers
 * @property Product[] $products
 * @property ProductCategory $parentCategory
 * @property ProductCategory[] $productCategories
 * @property ProductCategoryDiscount[] $productCategoryDiscounts
 */
class ProductCategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, category_name, max_reward_points_encash', 'required'),
			array('id, max_reward_points_encash, parent_category_id', 'numerical', 'integerOnly'=>true),
			array('category_name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, category_name, max_reward_points_encash, parent_category_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'paymentOffers' => array(self::HAS_MANY, 'PaymentOffer', 'product_category_id'),
			'products' => array(self::HAS_MANY, 'Product', 'product_category_id'),
			'parentCategory' => array(self::BELONGS_TO, 'ProductCategory', 'parent_category_id'),
			'productCategories' => array(self::HAS_MANY, 'ProductCategory', 'parent_category_id'),
			'productCategoryDiscounts' => array(self::HAS_MANY, 'ProductCategoryDiscount', 'product_category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'category_name' => 'Category Name',
			'max_reward_points_encash' => 'Max Reward Points Encash',
			'parent_category_id' => 'Parent Category',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('category_name',$this->category_name,true);
		$criteria->compare('max_reward_points_encash',$this->max_reward_points_encash);
		$criteria->compare('parent_category_id',$this->parent_category_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
