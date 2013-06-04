<?php

/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 *
 * This is the model class for table "Services".
 *
 * The followings are the available columns in table 'Services':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $text
 * @property string $image
 */
class Services extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Services the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'Services';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, description, text', 'required'),
            //array('title', 'length', 'max'=>30),
            array('description', 'length', 'max' => 200),
            //array('image', 'length', 'max'=>50),
            array('text', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, title, description, text, image', 'safe', 'on' => 'search'),
            array('image', 'required', 'on' => 'insert'),
            array('image', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'on' => 'insert,update', 'minSize' => 50 * 50, 'maxSize' => 1024 * 500),
            array('image, title', 'length', 'max' => 255, 'on' => 'insert,update'),
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
            'id' => 'Services',
            'title' => 'Title',
            'description' => 'Description',
            'text' => 'Text',
            'image' => 'Image',
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
        $criteria->compare('description', $this->description, true);
        $criteria->compare('text', $this->text, true);
        $criteria->compare('image', $this->image, true);

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
                    'image' => array('width' => 50, 'height' => 50),
                ),
                'basePath' => Yii::getPathOfAlias('webroot') . '/uploads',
                'primaryKey' => 'id',
        ));
    }

}