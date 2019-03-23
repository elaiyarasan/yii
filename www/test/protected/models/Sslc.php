<?php

/**
 * This is the model class for table "sslc".
 *
 * The followings are the available columns in table 'sslc':
 * @property integer $id
 * @property integer $tamil
 * @property integer $english
 * @property integer $maths
 * @property integer $science
 * @property integer $social
 * @property integer $register_number
 */
class Sslc extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sslc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tamil, english, maths, science, social, register_number', 'required'),
			array('tamil, english, maths, science, social, register_number', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tamil, english, maths, science, social, register_number', 'safe', 'on'=>'search'),
			array('register_number','unique'),
			array('tamil','g')
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
			'tamil' => 'Tamil',
			'english' => 'English',
			'maths' => 'Maths',
			'science' => 'Science',
			'social' => 'Social',
			'register_number' => 'Register Number',
			// 'email' => 'email',
	
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
		$criteria->compare('tamil',$this->tamil);
		$criteria->compare('english',$this->english);
		$criteria->compare('maths',$this->maths);
		$criteria->compare('science',$this->science);
		$criteria->compare('social',$this->social);
		$criteria->compare('register_number',$this->register_number);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sslc the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
