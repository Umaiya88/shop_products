<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property integer $productcode
 * @property string $productName
 * @property string $productDescription
 * @property string $productVendor
 * @property integer $quantityInStock
 * @property string $costPrice
 * @property string $sellingPrice
 * @property integer $brands_brand_id
 */
class Products extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('productName, productDescription, productVendor, quantityInStock, costPrice, sellingPrice, brands_brand_id', 'required'),
			array('quantityInStock, brands_brand_id', 'numerical', 'integerOnly'=>true),
			array('productName, productDescription, productVendor', 'length', 'max'=>50),
			array('costPrice, sellingPrice', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('productcode, productName, productDescription, productVendor, quantityInStock, costPrice, sellingPrice, brands_brand_id', 'safe', 'on'=>'search'),
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
		'brandsBrand'=>array(self::BELONGS_TO,'Brands','brands_brand_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'productcode' => 'Productcode',
			'productName' => 'Product Name',
			'productDescription' => 'Product Description',
			'productVendor' => 'Product Vendor',
			'quantityInStock' => 'Quantity In Stock',
			'costPrice' => 'Cost Price',
			'sellingPrice' => 'Selling Price',
			'brands_brand_id' => 'Brands Name',
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
 $criteria->with='brandsBrand';
		$criteria->compare('productcode',$this->productcode);
		$criteria->compare('productName',$this->productName,true);
		$criteria->compare('productDescription',$this->productDescription,true);
		$criteria->compare('productVendor',$this->productVendor,true);
		$criteria->compare('quantityInStock',$this->quantityInStock);
		$criteria->compare('costPrice',$this->costPrice,true);
		$criteria->compare('sellingPrice',$this->sellingPrice,true);
		$criteria->compare('brandsBrand.brand_name',$this->brands_brand_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Products the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
