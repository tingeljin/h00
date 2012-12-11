<?php

/**
 * This is the model class for table "recruitment_main".
 *
 * The followings are the available columns in table 'recruitment_main':
 * @property integer $recruitment_id
 * @property string $recruitment_name
 * @property integer $age
 * @property integer $contact_number
 * @property integer $user_status
 * @property integer $educational_level
 * @property string $graduated_school
 * @property string $hometown
 * @property string $hometown_address
 * @property integer $applied_position
 * @property integer $source_types
 * @property string $source
 * @property integer $channel
 * @property string $other
 * @property integer $create_user_id
 * @property integer $collect_time
 * @property integer $update_user_id
 * @property integer $update_time
 *
 * The followings are the available model relations:
 * @property RecruitmentContact[] $recruitmentContacts
 * @property StaffMain[] $staffMains
 */
class RecruitmentMain extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RecruitmentMain the static model class
	 */
	
	/**
	 * 定义2常量，分别为男，女
	 * @return 0，1
	 */
	const AGE_MAN=0;
	const AGE_WOMAN=1;
	
	/**
	 * 定义4常量，分别记录学历情况，中专，大专，本科
	 * @return 0,1,2
	 */
	const XUELI_ZHONGZHUAN=0;
	const XUELI_DAZHUAN=1;
	const XUELI_BENKE=2;
	
	/**
	 * 定义4常量，分别记录学历情况，中专，大专，本科
	 * @return 0,1,2
	 */
	const SOURCE_TALENT_MARKET=0;
	const SOURCE_ONLINE_RECRUITMENT=1;
	const SOURCE_CAMPUS_RECRUITMENT=2;
	const SOURCE_INTRODUCED=3;
	const SOURCE_TRANSFER=4;


	
	
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'recruitment_main';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('recruitment_name, contact_number', 'required'),
			array('age, contact_number, user_status, educational_level, applied_position, source_types,channel, create_user_id, collect_time, update_user_id, update_time', 'numerical', 'integerOnly'=>true),
			array('recruitment_name, hometown', 'length', 'max'=>10),
			array('contact_number', 'length', 'max'=>12),
			array('graduated_school, hometown_address, source', 'length', 'max'=>50),
			array('other', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('recruitment_id, recruitment_name, age, contact_number, user_status, educational_level, graduated_school, hometown, hometown_address, applied_position, source_types, source,channel, other, create_user_id, collect_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'recruitmentContacts' => array(self::HAS_MANY, 'RecruitmentContact', 'recruitment_id'),
			'staffMains' => array(self::HAS_MANY, 'StaffMain', 'recruitment_id'),
			'sourceType'=>array(self::BELONGS_TO,'Source','id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'recruitment_id' => 'Recruitment_id',
			'recruitment_name' => '姓名',
			'age' => '性别',
			'contact_number' => '联络电话',
			'user_status' => '状态',
			'educational_level' => '文化程度',
			'graduated_school' => '毕业学校',
			'hometown' => '籍贯',
			'hometown_address' => '家庭住址',
			'applied_position' => '应聘职位',
			'source_types' => '来源类型',
			'source' => '信息来源',
			'channel'=>'收集途径',
			'other' => 'Other',
			'create_user_id' => 'Create User',
			'collect_time' => 'Collect Time',
			'update_user_id' => 'Update User',
			'update_time' => 'Update Time',
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

		$criteria->compare('recruitment_id',$this->recruitment_id);
		$criteria->compare('recruitment_name',$this->recruitment_name,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('contact_number',$this->contact_number);
		$criteria->compare('user_status',$this->user_status);
		$criteria->compare('educational_level',$this->educational_level);
		$criteria->compare('graduated_school',$this->graduated_school,true);
		$criteria->compare('hometown',$this->hometown,true);
		$criteria->compare('hometown_address',$this->hometown_address,true);
		$criteria->compare('applied_position',$this->applied_position);
		$criteria->compare('source_types',$this->source_types);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('channel',$this->channel);
		$criteria->compare('other',$this->other,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('collect_time',$this->collect_time);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('update_time',$this->update_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * get config age options
	 */
	public function getAgeOptions()
	{
		return array(
					self::AGE_MAN=>'男',
					self::AGE_WOMAN=>'女',
				);
	}
	public function getAgeText(){
		$ageOptions=$this->ageOptions;
		return isset($ageOptions[$this->age]) ?
		$ageOptions[$this->age] :
		"unknow age ({$this->age})";
	}
	/**
	 * get config Educational Level options
	 */
	public function getEducationalLevelOptions()
	{
		return array(
				self::XUELI_ZHONGZHUAN=>'中专',
				self::XUELI_DAZHUAN=>'大专',
				self::XUELI_BENKE=>'本科',
		);
	}
	public function getEducationalLevelText(){
		$educationalLevelOptions=$this->educationalLevelOptions;
		return isset($educationalLevelOptions[$this->educational_level]) ?
		$educationalLevelOptions[$this->educational_level] :
		"unknow Educational Level ({$this->educational_level})";
	}

	public function getSourceTypesText(){
		$sourceTypesList=Source::model()->sourceTypesList;
		return isset($sourceTypesList[$this->source_types]) ?
		$sourceTypesList[$this->source_types] :
		"unknow Source Types ({$this->source_types})";
	}
}