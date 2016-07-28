<?php

/**
 * This is the model class for table "image".
 *
 * The followings are the available columns in table 'image':
 * @property integer $id
 * @property integer $productcode
 * @property string $filename
 * @property string $caption
 * @property string $alt_text
 * @property string $tags
 * @property integer $sort_order
 * @property string $created_dt
 * @property string $lastupdate_dt
 */
class Image extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'image';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('productcode, sort_order', 'numerical', 'integerOnly'=>true),
			array('filename', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			array('filename', 'length', 'max'=>255, 'on'=>'insert,update'),
			array('tags', 'length', 'max'=>256),
			array('caption, alt_text, created_dt, lastupdate_dt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, productcode, filename, caption, alt_text, tags, sort_order, created_dt, lastupdate_dt', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'productcode' => 'ProductName',
			'filename' => 'Filename',
			'caption' => 'Caption',
			'alt_text' => 'Alt Text',
			'tags' => 'Tags',
			'sort_order' => 'Sort Order',
			'created_dt' => 'Created Dt',
			'lastupdate_dt' => 'Lastupdate Dt',
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
		$criteria->compare('productcode',$this->productcode);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('caption',$this->caption,true);
		$criteria->compare('alt_text',$this->alt_text,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('sort_order',$this->sort_order);
		$criteria->compare('created_dt',$this->created_dt,true);
		$criteria->compare('lastupdate_dt',$this->lastupdate_dt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Image the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
