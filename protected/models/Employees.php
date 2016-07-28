<?php

/**
 * This is the model class for table "employees".
 *
 * The followings are the available columns in table 'employees':
 * @property integer $employeeNumber
 * @property string $employeeName
 * @property string $extension
 * @property string $email
 * @property integer $officeCode
 * @property string $jobtitle
 */
class Employees extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employees';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employeeName, extension, email, officeCode, jobtitle', 'required'),
			array('officeCode', 'numerical', 'integerOnly'=>true),
			array('employeeName, jobtitle', 'length', 'max'=>50),
			array('extension', 'length', 'max'=>10),
			array('email', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('employeeNumber, employeeName, extension, email, officeCode, jobtitle', 'safe', 'on'=>'search'),
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
			'employeeNumber' => 'Employee Number',
			'employeeName' => 'Employee Name',
			'extension' => 'Extension',
			'email' => 'Email',
			'officeCode' => 'Office Code',
			'jobtitle' => 'Jobtitle',
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

		$criteria->compare('employeeNumber',$this->employeeNumber);
		$criteria->compare('employeeName',$this->employeeName,true);
		$criteria->compare('extension',$this->extension,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('officeCode',$this->officeCode);
		$criteria->compare('jobtitle',$this->jobtitle,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employees the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
