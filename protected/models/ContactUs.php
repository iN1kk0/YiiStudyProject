<?php

/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 *
 * This is the model class for table "ContactUs".
 *
 * The followings are the available columns in table 'ContactUs':
 * @property integer $id
 * @property string $inquiry
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $comment
 * @property string $verifyCode
 */
class ContactUs extends CActiveRecord {

    public $verifyCode;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return ContactUs the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'ContactUs';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('inquiry, name, email, phone, comment', 'required'),
            array('inquiry', 'length', 'max' => 10),
            array('name', 'length', 'max' => 50),
            array('email', 'length', 'max' => 200),
            array('phone', 'length', 'max' => 20),
            array('comment', 'safe'),
            array('email', 'email', 'checkMX' => true),
            array('phone', 'match', 'pattern' => '/[^a-zA-Z0]/'),
            array('verifyCode', 'captcha', 'allowEmpty' => !CCaptcha::checkRequirements()),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, inquiry, name, email, phone, comment', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Contact Us',
            'inquiry' => 'Inquiry',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'comment' => 'Comment',
            'verifyCode' => 'Verification Code',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('inquiry', $this->inquiry, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('comment', $this->comment, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}