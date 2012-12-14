<?php

/**
 * This is the model class for table "config".
 *
 * The followings are the available columns in table 'config':
 * @property integer $setting_id
 * @property integer $setting_pid
 * @property string $setting_name
 */
class Config extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Config the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'config';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('setting_pid', 'required'),
			array('setting_pid', 'numerical', 'integerOnly'=>true),
			array('setting_name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('setting_id, setting_pid, setting_name', 'safe', 'on'=>'search'),
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
			'setting_id' => 'Setting',
			'setting_pid' => '类别',
			'setting_name' => '名称',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('setting_id',$this->setting_id);
		$criteria->compare('setting_pid',$this->setting_pid);
		$criteria->compare('setting_name',$this->setting_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * 获取数据来源的根类型
	 */
	public function getConfigTypesOptions()
	{
		$configTypesOptions = $this->findAllByAttributes(array('setting_pid'=>0));
		$configTypesList=CHtml::listData($configTypesOptions, 'setting_id', 'setting_name');
		return $configTypesList;
	}
	/**
	 * 获取性别类别中的子类。
	 * @return 当setting_pid=1的列表
	 */
	public function getConfigAgeOptions()
	{
		$configAgeOptions=$this->findAllByAttributes(array('setting_pid'=>1));
		$configAgeList=CHtml::listData($configAgeOptions, 'setting_id', 'setting_name');
		return $configAgeList;
	}
	/**
	 * 获取性别类别中的子类。
	 * @return 当setting_pid=4的列表
	 */
	public function getConfigEducationalLevelOptions()
	{
		$configEducationalLevelOptions=$this->findAllByAttributes(array('setting_pid'=>4));
		$configEducationalLevelList=CHtml::listData($configEducationalLevelOptions, 'setting_id', 'setting_name');
		return $configEducationalLevelList;
	}
	/**
	 * 获取状态类别中的子类。
	 * @return 当setting_pid=8的列表
	 */
	public function getConfigStatusOptions()
	{
		$configStatusOptions=$this->findAllByAttributes(array('setting_pid'=>8));
		$configStatusList=CHtml::listData($configStatusOptions, 'setting_id', 'setting_name');
		return $configStatusList;
	}
}