<?php

/**
 * This is the model class for table "product_pricing".
 *
 * The followings are the available columns in table 'product_pricing':
 * @property integer $id
 * @property integer $product_id
 * @property integer $base_price
 * @property string $create_date
 * @property string $expiry_date
 * @property string $in_active
 *
 * The followings are the available model relations:
 * @property Product $product
 */
class ProductPricing extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_pricing';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, product_id, base_price, create_date, in_active', 'required'),
			array('id, product_id, base_price', 'numerical', 'integerOnly'=>true),
			array('in_active', 'length', 'max'=>1),
			array('expiry_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, base_price, create_date, expiry_date, in_active', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'product_id' => 'Product',
			'base_price' => 'Base Price',
			'create_date' => 'Create Date',
			'expiry_date' => 'Expiry Date',
			'in_active' => 'In Active',
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
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('base_price',$this->base_price);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('expiry_date',$this->expiry_date,true);
		$criteria->compare('in_active',$this->in_active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductPricing the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
