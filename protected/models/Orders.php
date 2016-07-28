<?php

/**
 * This is the model class for table "orders".
 *
 * The followings are the available columns in table 'orders':
 * @property integer $orderNumber
 * @property string $orderDate
 * @property string $requiredDate
 * @property integer $shippedDate
 * @property string $status
 * @property string $comment
 * @property integer $customerNumber
 */
class Orders extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orders';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('orderDate, requiredDate, shippedDate, status, comment, customerNumber', 'required'),
			array(' customerNumber', 'numerical', 'integerOnly'=>true),
			array('status', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('orderNumber, orderDate, requiredDate, shippedDate, status, comment, customerNumber', 'safe', 'on'=>'search'),
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
		'customers'=>array(self::BELONGS_TO,'Customers','customerNumber'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'orderNumber' => 'Order Number',
			'orderDate' => 'Order Date',
			'requiredDate' => 'Required Date',
			'shippedDate' => 'Shipped Date',
			'status' => 'Status',
			'comment' => 'Comment',
			'customerNumber' => 'Customer Name',
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

		$criteria->compare('orderNumber',$this->orderNumber);
		$criteria->compare('orderDate',$this->orderDate,true);
		$criteria->compare('requiredDate',$this->requiredDate,true);
		$criteria->compare('shippedDate',$this->shippedDate);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('customerNumber',$this->customerNumber);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Orders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
