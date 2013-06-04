<?php

/**
 * @author Nykolay Bychko <nikolay17@ukr.net>
 *
 * This is the model class for table "Pages".
 *
 * The followings are the available columns in table 'Pages':
 * @property integer $id
 * @property string $url
 * @property string $title
 * @property string $banner
 * @property string $quote
 * @property string $content
 */
class Pages extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Pages the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'Pages';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('url, title', 'required'),
            array('url, title, quote', 'length', 'max' => 100),
            array('banner', 'length', 'max' => 200),
            array('content', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, url, title, banner, quote, content', 'safe', 'on' => 'search'),
            array('banner', 'required', 'on' => 'insert'),
            array('banner', 'file', 'types' => 'jpg, gif, png', 'allowEmpty' => true, 'on' => 'insert,update', 'minSize' => 50 * 50, 'maxSize' => 1024 * 500),
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
            'id' => 'Pages',
            'url' => 'Url',
            'title' => 'Title',
            'banner' => 'Banner',
            'quote' => 'Quote',
            'content' => 'Content',
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
        $criteria->compare('url', $this->url, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('banner', $this->banner, true);
        $criteria->compare('quote', $this->quote, true);
        $criteria->compare('content', $this->content, true);

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
                    'banner' => array('width' => 400, 'height' => 114),
                ),
                'basePath' => Yii::getPathOfAlias('webroot') . '/uploads',
                'primaryKey' => 'id',
        ));
    }

}