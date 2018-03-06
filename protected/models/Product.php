<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id
 * @property string $product_name
 * @property string $product_description
 * @property integer $units_in_stock
 * @property integer $product_category_id
 * @property integer $reward_points_credit
 *
 * The followings are the available model relations:
 * @property PaymentOffer[] $paymentOffers
 * @property ProductCategory $productCategory
 * @property ProductDiscount[] $productDiscounts
 * @property ProductPricing[] $productPricings
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, product_name, product_description, units_in_stock, product_category_id, reward_points_credit', 'required'),
			array('id, units_in_stock, product_category_id, reward_points_credit', 'numerical', 'integerOnly'=>true),
			array('product_name', 'length', 'max'=>100),
			array('product_description', 'length', 'max'=>4000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_name, product_description, units_in_stock, product_category_id, reward_points_credit', 'safe', 'on'=>'search'),
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
			'paymentOffers' => array(self::HAS_MANY, 'PaymentOffer', 'product_id'),
			'productCategory' => array(self::BELONGS_TO, 'ProductCategory', 'product_category_id'),
			'productDiscounts' => array(self::HAS_MANY, 'ProductDiscount', 'product_id'),
			'productPricings' => array(self::HAS_MANY, 'ProductPricing', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'product_name' => 'Product Name',
			'product_description' => 'Product Description',
			'units_in_stock' => 'Units In Stock',
			'product_category_id' => 'Product Category',
			'reward_points_credit' => 'Reward Points Credit',
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
		$criteria->compare('product_name',$this->product_name,true);
		$criteria->compare('product_description',$this->product_description,true);
		$criteria->compare('units_in_stock',$this->units_in_stock);
		$criteria->compare('product_category_id',$this->product_category_id);
		$criteria->compare('reward_points_credit',$this->reward_points_credit);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
