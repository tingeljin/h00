<?php

/**
 * This is the model class for table "source".
 *
 * The followings are the available columns in table 'source':
 * @property integer $id
 * @property integer $pid
 * @property string $name
 */
class Source extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Source the static model class
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
		return 'source';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pid, name', 'required'),
			array('pid', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, pid, name', 'safe', 'on'=>'search'),
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
			'pid' => 'Pid',
			'name' => 'Name',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * 获取数据来源的根类型
	 */
	public function getSourceTypesOptions()
	{
		$sourceTypesOptions = $this->findAllByAttributes(array('pid'=>0));
		$sourceTypesList=CHtml::listData($sourceTypesOptions, 'id', 'name');
		return $sourceTypesList;
	}
	/**
	 * 获取子目录数据
	 */
	public function getSourceOptions($pid)
	{
		$model = $this->findAllByAttributes(array('pid'=>$pid));
		return CHtml::listData($model, 'id', 'name');
	}

	
}