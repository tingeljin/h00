<?php

/**
 * This is the model class for table "staff_main".
 *
 * The followings are the available columns in table 'staff_main':
 * @property integer $staff_id
 * @property integer $recruitment_id
 * @property string $staff_inspur_id
 * @property string $staff_name
 * @property string $staff_en_name
 * @property integer $staff_age
 * @property string $staff_contact_number
 * @property string $staff_id_card
 * @property integer $staff_work_status
 * @property integer $source_types
 * @property string $source
 * @property string $bank_card
 * @property string $avatar_path
 * @property integer $educational_level
 * @property string $graduated_school
 * @property string $hometown
 * @property string $hometown_address
 * @property string $emergency_contact
 * @property string $emergency_telephone
 * @property string $other
 * @property integer $create_user_id
 * @property integer $create_time
 * @property integer $update_user_id
 * @property integer $update_time
 *
 * The followings are the available model relations:
 * @property AccommodationManagement[] $accommodationManagements
 * @property AccountManagement[] $accountManagements
 * @property ItResources[] $itResources
 * @property JobChanges[] $jobChanges
 * @property LockersUse[] $lockersUses
 * @property RecruitmentMain $recruitment
 * @property StaffPost[] $staffPosts
 */
class StaffMain extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StaffMain the static model class
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
		return 'staff_main';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('recruitment_id, staff_age, staff_work_status, source_types, educational_level, create_user_id, create_time, update_user_id, update_time', 'numerical', 'integerOnly'=>true),
			array('staff_inspur_id, staff_name, staff_en_name', 'length', 'max'=>30),
			array('staff_contact_number, staff_id_card, bank_card, emergency_telephone', 'length', 'max'=>12),
			array('source, graduated_school, hometown_address', 'length', 'max'=>50),
			array('avatar_path', 'length', 'max'=>100),
			array('hometown', 'length', 'max'=>10),
			array('emergency_contact', 'length', 'max'=>20),
			array('other', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('staff_id, recruitment_id, staff_inspur_id, staff_name, staff_en_name, staff_age, staff_contact_number, staff_id_card, staff_work_status, source_types, source, bank_card, avatar_path, educational_level, graduated_school, hometown, hometown_address, emergency_contact, emergency_telephone, other, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'accommodationManagements' => array(self::HAS_MANY, 'AccommodationManagement', 'staff_id'),
			'accountManagements' => array(self::HAS_MANY, 'AccountManagement', 'staff_id'),
			'itResources' => array(self::HAS_MANY, 'ItResources', 'staff_id'),
			'jobChanges' => array(self::HAS_MANY, 'JobChanges', 'staff_id'),
			'lockersUses' => array(self::HAS_MANY, 'LockersUse', 'staff_id'),
			'recruitment' => array(self::BELONGS_TO, 'RecruitmentMain', 'recruitment_id'),
			'staffPosts' => array(self::HAS_MANY, 'StaffPost', 'staff_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'staff_id' => 'Staff',
			'recruitment_id' => 'Recruitment',
			'staff_inspur_id' => 'Staff Inspur',
			'staff_name' => 'Staff Name',
			'staff_en_name' => 'Staff En Name',
			'staff_age' => 'Staff Age',
			'staff_contact_number' => 'Staff Contact Number',
			'staff_id_card' => 'Staff Id Card',
			'staff_work_status' => 'Staff Work Status',
			'source_types' => 'Source Types',
			'source' => 'Source',
			'bank_card' => 'Bank Card',
			'avatar_path' => 'Avatar Path',
			'educational_level' => 'Educational Level',
			'graduated_school' => 'Graduated School',
			'hometown' => 'Hometown',
			'hometown_address' => 'Hometown Address',
			'emergency_contact' => 'Emergency Contact',
			'emergency_telephone' => 'Emergency Telephone',
			'other' => 'Other',
			'create_user_id' => 'Create User',
			'create_time' => 'Create Time',
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

		$criteria->compare('staff_id',$this->staff_id);
		$criteria->compare('recruitment_id',$this->recruitment_id);
		$criteria->compare('staff_inspur_id',$this->staff_inspur_id,true);
		$criteria->compare('staff_name',$this->staff_name,true);
		$criteria->compare('staff_en_name',$this->staff_en_name,true);
		$criteria->compare('staff_age',$this->staff_age);
		$criteria->compare('staff_contact_number',$this->staff_contact_number,true);
		$criteria->compare('staff_id_card',$this->staff_id_card,true);
		$criteria->compare('staff_work_status',$this->staff_work_status);
		$criteria->compare('source_types',$this->source_types);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('bank_card',$this->bank_card,true);
		$criteria->compare('avatar_path',$this->avatar_path,true);
		$criteria->compare('educational_level',$this->educational_level);
		$criteria->compare('graduated_school',$this->graduated_school,true);
		$criteria->compare('hometown',$this->hometown,true);
		$criteria->compare('hometown_address',$this->hometown_address,true);
		$criteria->compare('emergency_contact',$this->emergency_contact,true);
		$criteria->compare('emergency_telephone',$this->emergency_telephone,true);
		$criteria->compare('other',$this->other,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('update_user_id',$this->update_user_id);
		$criteria->compare('update_time',$this->update_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}