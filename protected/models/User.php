<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $registration_date
 * @property integer $promotional_reward_points
 * @property integer $non_promotional_reward_points
 * @property integer $membership_type_id
 *
 * The followings are the available model relations:
 * @property MembershipType $membershipType
 * @property UserRewardPointLog[] $userRewardPointLogs
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, first_name, last_name, registration_date, promotional_reward_points, non_promotional_reward_points', 'required'),
			array('id, promotional_reward_points, non_promotional_reward_points, membership_type_id', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, last_name, registration_date, promotional_reward_points, non_promotional_reward_points, membership_type_id', 'safe', 'on'=>'search'),
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
			'membershipType' => array(self::BELONGS_TO, 'MembershipType', 'membership_type_id'),
			'userRewardPointLogs' => array(self::HAS_MANY, 'UserRewardPointLog', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'registration_date' => 'Registration Date',
			'promotional_reward_points' => 'Promotional Reward Points',
			'non_promotional_reward_points' => 'Non Promotional Reward Points',
			'membership_type_id' => 'Membership Type',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('registration_date',$this->registration_date,true);
		$criteria->compare('promotional_reward_points',$this->promotional_reward_points);
		$criteria->compare('non_promotional_reward_points',$this->non_promotional_reward_points);
		$criteria->compare('membership_type_id',$this->membership_type_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
