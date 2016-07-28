<?php

/**
 * This is the model class for table "notices".
 *
 * The followings are the available columns in table 'notices':
 * @property integer $id
 * @property string $notice_date
 * @property string $notice_text
 * @property string $news_link
 */
class Notices extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'notices';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, notice_date, notice_text, news_link', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('notice_text', 'length', 'max'=>100),
			array('news_link', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, notice_date, notice_text, news_link', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'notice_date' => 'Notice Date',
			'notice_text' => 'Notice Text',
			'news_link' => 'News Link',
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
		$criteria->compare('notice_date',$this->notice_date,true);
		$criteria->compare('notice_text',$this->notice_text,true);
		$criteria->compare('news_link',$this->news_link,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Notices the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
