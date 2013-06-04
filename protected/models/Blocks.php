<?php

/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 *
 * This is the model class for table "Blocks".
 *
 * The followings are the available columns in table 'Blocks':
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property string $text
 * @property string $buttonUrl
 * @property string $buttonImage
 * @property string $buttonTitle
 */
class Blocks extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Blocks the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'Blocks';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title', 'length', 'max' => 30),
            //array('image, buttonImage', 'length', 'max'=>50),
            array('buttonUrl', 'length', 'max' => 200),
            array('buttonTitle', 'length', 'max' => 45),
            array('text', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, title, image, text, buttonUrl, buttonImage, buttonTitle', 'safe', 'on' => 'search'),
            array('image, buttonImage', 'required', 'on' => 'insert'),
            array('image, buttonImage', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'on' => 'insert,update', 'maxSize' => 1024 * 500),
            array('title, image, buttonImage', 'length', 'max' => 255, 'on' => 'insert,update'),
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
            'id' => 'Blocks',
            'title' => 'Title',
            'image' => 'Image',
            'text' => 'Text',
            'buttonUrl' => 'Button Url',
            'buttonImage' => 'Button Image',
            'buttonTitle' => 'Button Title',
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
        $criteria->compare('title', $this->title, true);
        $criteria->compare('image', $this->image, true);
        $criteria->compare('text', $this->text, true);
        $criteria->compare('buttonUrl', $this->buttonUrl, true);
        $criteria->compare('buttonImage', $this->buttonImage, true);
        $criteria->compare('buttonTitle', $this->buttonTitle, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * @return array images and upload dir.
     */
    public function behaviors() {
        return array(
            'ImageUploadBehavior' => array(
                'class' => 'application.models.behaviors.ImageUploadBehavior',
                'fields' => array(
                    'image' => array('width' => 278, 'height' => 111),
                    'buttonImage' => array('width' => 131, 'height' => 28),
                ),
                'basePath' => Yii::getPathOfAlias('webroot') . '/uploads',
                'primaryKey' => 'id',
        ));
    }

}