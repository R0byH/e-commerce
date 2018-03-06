<?php

/**
 * This is the model class for table "product_category_discount".
 *
 * The followings are the available columns in table 'product_category_discount':
 * @property integer $id
 * @property integer $product_category_id
 * @property integer $discount_value
 * @property string $discount_unit
 * @property string $create_date
 * @property string $valid_from
 * @property string $valid_until
 * @property string $coupon_code
 * @property integer $minimum_order_value
 * @property integer $maximum_discount_amount
 * @property string $is_redeem_allowed
 *
 * The followings are the available model relations:
 * @property ProductCategory $productCategory
 */
class ProductCategoryDiscount extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_category_discount';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, product_category_id, discount_value, discount_unit, create_date, coupon_code, maximum_discount_amount, is_redeem_allowed', 'required'),
			array('id, product_category_id, discount_value, minimum_order_value, maximum_discount_amount', 'numerical', 'integerOnly'=>true),
			array('discount_unit', 'length', 'max'=>20),
			array('coupon_code', 'length', 'max'=>10),
			array('is_redeem_allowed', 'length', 'max'=>1),
			array('valid_from, valid_until', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_category_id, discount_value, discount_unit, create_date, valid_from, valid_until, coupon_code, minimum_order_value, maximum_discount_amount, is_redeem_allowed', 'safe', 'on'=>'search'),
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
			'productCategory' => array(self::BELONGS_TO, 'ProductCategory', 'product_category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'product_category_id' => 'Product Category',
			'discount_value' => 'Discount Value',
			'discount_unit' => 'Discount Unit',
			'create_date' => 'Create Date',
			'valid_from' => 'Valid From',
			'valid_until' => 'Valid Until',
			'coupon_code' => 'Coupon Code',
			'minimum_order_value' => 'Minimum Order Value',
			'maximum_discount_amount' => 'Maximum Discount Amount',
			'is_redeem_allowed' => 'Is Redeem Allowed',
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
		$criteria->compare('product_category_id',$this->product_category_id);
		$criteria->compare('discount_value',$this->discount_value);
		$criteria->compare('discount_unit',$this->discount_unit,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('valid_from',$this->valid_from,true);
		$criteria->compare('valid_until',$this->valid_until,true);
		$criteria->compare('coupon_code',$this->coupon_code,true);
		$criteria->compare('minimum_order_value',$this->minimum_order_value);
		$criteria->compare('maximum_discount_amount',$this->maximum_discount_amount);
		$criteria->compare('is_redeem_allowed',$this->is_redeem_allowed,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductCategoryDiscount the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
