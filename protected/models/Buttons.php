<?php

/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 *
 * This is the model class for table "Buttons".
 *
 * The followings are the available columns in table 'Buttons':
 * @property integer $id
 * @property string $title
 * @property string $url
 * @property string $image
 * @property integer $Banners_id
 *
 * The followings are the available model relations:
 * @property Banners $bannersBanners
 */
class Buttons extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Buttons the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'Buttons';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('Banners_id', 'required'),
            array('image', 'required', 'on' => 'insert'),
            array('Banners_id', 'numerical', 'integerOnly' => true),
            array('title', 'length', 'max' => 45),
            array('url', 'length', 'max' => 200),
            /* array('image', 'length', 'max'=>50), */
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, title, url, image, Banners_id', 'safe', 'on' => 'search'),
            /* array('image', 'required'), */
            array('image', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'on' => 'insert,update', 'maxSize' => 1024 * 500),
            array('title, image', 'length', 'max' => 255, 'on' => 'insert,update'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'bannersBanners' => array(self::BELONGS_TO, 'Banners', 'Banners_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Buttons',
            'title' => 'Title',
            'url' => 'Url',
            'image' => 'Image',
            'Banners_id' => 'Banners Banners',
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
        $criteria->compare('url', $this->url, true);
        $criteria->compare('image', $this->image, true);
        $criteria->compare('Banners_id', $this->Banners_id);

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
                    'image' => array(
                        'width' => 181,
                        'height' => 84
                    ),
                ),
                'basePath' => Yii::getPathOfAlias('webroot') . '/uploads',
                'primaryKey' => 'id'
        ));
    }

}