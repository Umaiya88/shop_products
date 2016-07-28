<?php

/**
 * This is the model class for table "orderdetails".
 *
 * The followings are the available columns in table 'orderdetails':
 * @property integer $orderNumber
 * @property integer $productcode
 * @property integer $quantityOrdered
 * @property double $priceEach
 */
class Orderdetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orderdetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('productcode, quantityOrdered, priceEach', 'required'),
			array('productcode, quantityOrdered', 'numerical', 'integerOnly'=>true),
			array('priceEach', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('orderNumber, productcode, quantityOrdered, priceEach', 'safe', 'on'=>'search'),
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
		'products'=>array(self::BELONGS_TO,'Products','productcode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'orderNumber' => 'Order Number',
			'productcode' => 'Product Name',
			'quantityOrdered' => 'Quantity Ordered',
			'priceEach' => 'Price Each',
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
		$criteria->compare('products.productName',$this->productcode);
		$criteria->compare('quantityOrdered',$this->quantityOrdered);
		$criteria->compare('priceEach',$this->priceEach);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Orderdetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
