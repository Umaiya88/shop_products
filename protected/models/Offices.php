<?php

/**
 * This is the model class for table "offices".
 *
 * The followings are the available columns in table 'offices':
 * @property integer $officeCode
 * @property string $city
 * @property string $phone
 * @property string $address
 * @property string $country
 * @property string $territory
 */
class Offices extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'offices';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('city, phone, address, country, territory', 'required'),
			array('city, phone, address, country, territory', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('officeCode, city, phone, address, country, territory', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'officeCode' => 'Office Code',
			'city' => 'City',
			'phone' => 'Phone',
			'address' => 'Address',
			'country' => 'Country',
			'territory' => 'Territory',
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

		$criteria->compare('officeCode',$this->officeCode);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('territory',$this->territory,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Offices the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
