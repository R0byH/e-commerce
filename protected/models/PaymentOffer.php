<?php

/**
 * This is the model class for table "payment_offer".
 *
 * The followings are the available columns in table 'payment_offer':
 * @property integer $id
 * @property string $institute_type
 * @property string $institute_name
 * @property string $card_type
 * @property string $coupon_code
 * @property integer $discount_value
 * @property string $discount_unit
 * @property string $create_date
 * @property string $valid_from
 * @property string $valid_until
 * @property integer $maximum_discount_amount
 * @property integer $product_id
 * @property integer $product_category_id
 *
 * The followings are the available model relations:
 * @property Product $product
 * @property ProductCategory $productCategory
 */
class PaymentOffer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'payment_offer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, institute_type, institute_name, coupon_code, discount_value, discount_unit, create_date, maximum_discount_amount', 'required'),
			array('id, discount_value, maximum_discount_amount, product_id, product_category_id', 'numerical', 'integerOnly'=>true),
			array('institute_type', 'length', 'max'=>50),
			array('institute_name', 'length', 'max'=>200),
			array('card_type, discount_unit', 'length', 'max'=>20),
			array('coupon_code', 'length', 'max'=>10),
			array('valid_from, valid_until', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, institute_type, institute_name, card_type, coupon_code, discount_value, discount_unit, create_date, valid_from, valid_until, maximum_discount_amount, product_id, product_category_id', 'safe', 'on'=>'search'),
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
			'product' => array(self::BELONGS_TO, 'Product', 'product_id'),
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
			'institute_type' => 'Institute Type',
			'institute_name' => 'Institute Name',
			'card_type' => 'Card Type',
			'coupon_code' => 'Coupon Code',
			'discount_value' => 'Discount Value',
			'discount_unit' => 'Discount Unit',
			'create_date' => 'Create Date',
			'valid_from' => 'Valid From',
			'valid_until' => 'Valid Until',
			'maximum_discount_amount' => 'Maximum Discount Amount',
			'product_id' => 'Product',
			'product_category_id' => 'Product Category',
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
		$criteria->compare('institute_type',$this->institute_type,true);
		$criteria->compare('institute_name',$this->institute_name,true);
		$criteria->compare('card_type',$this->card_type,true);
		$criteria->compare('coupon_code',$this->coupon_code,true);
		$criteria->compare('discount_value',$this->discount_value);
		$criteria->compare('discount_unit',$this->discount_unit,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('valid_from',$this->valid_from,true);
		$criteria->compare('valid_until',$this->valid_until,true);
		$criteria->compare('maximum_discount_amount',$this->maximum_discount_amount);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('product_category_id',$this->product_category_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PaymentOffer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
