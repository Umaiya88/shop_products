<?php

/**
 * This is the model class for table "customers".
 *
 * The followings are the available columns in table 'customers':
 * @property integer $customerNumber
 * @property string $customerName
 * @property string $phone
 * @property string $address
 * @property string $city
 * @property string $country
 * @property integer $salesRepEmployeeNumber
 */
class Customers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customerName, phone, address, city, country, salesRepEmployeeNumber', 'required'),
			array('salesRepEmployeeNumber', 'numerical', 'integerOnly'=>true),
			array('customerName, phone, address, city, country', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('customerNumber, customerName, phone, address, city, country, salesRepEmployeeNumber', 'safe', 'on'=>'search'),
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
		'employees'=>array(self::BELONGS_TO,'Employees','salesRepEmployeeNumber'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'customerNumber' => 'Customer Number',
			'customerName' => 'Customer Name',
			'phone' => 'Phone',
			'address' => 'Address',
			'city' => 'City',
			'country' => 'Country',
			'salesRepEmployeeNumber' => 'Sales Rep Employee Name',
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

		$criteria->compare('customerNumber',$this->customerNumber);
		$criteria->compare('customerName',$this->customerName,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('employees.EmployeeName',$this->salesRepEmployeeNumber);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Customers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
