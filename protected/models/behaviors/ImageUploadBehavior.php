<?php

/**
 * ImageUploadBehavior class file.
 * 
 * @author Nykolay Bychko <nikolay17@ukr.net>
 * 
 * This is the class ImageUploadBehavior for upload and resize images".
 */
class ImageUploadBehavior extends CActiveRecordBehavior {

    /**
     * For upload images
     */
    public $fields = array(
        'image' => array('width', 'height'),
        'buttonImage' => array('width', 'height'),
        'banner' => array('width', 'height'),
    );
    public $primaryKey;
    public $basePath;

    /**
     * @see CActiveRecordBehavior::afterSave()
     */
    public function afterSave($event) {
        parent::afterSave($event);
        foreach ($this->fields as $field => $attr) {

            if (is_object($this->getOwner()->{$field})) {

                $fullPathDir = $this->basePath . '/' . $this->getOwner()->tableName() . '/' . $this->getOwner()->{$this->primaryKey};
                if (file_exists($fullPathDir)) {
                    $fullPath = $fullPathDir . '/' . $this->getOwner()->{$field}->getName();
                } else {
                    mkdir($fullPathDir, 0777, true);
                    $fullPath = $fullPathDir . '/' . $this->getOwner()->{$field}->getName();
                }


                if ($this->getOwner()->{$field}->saveAs($fullPath)) {
                    if (isset($attr['width']) && isset($attr['height'])) {
                        $image = Yii::app()->image->load($fullPath);
                        $image->resize($attr['width'], $attr['height']);
                        $image->save();
                    }
                }
            }
        }
    }

    /**
     * @see CActiveRecordBehavior::beforeDelete()
     */
    public function beforeDelete() {

        $fullPathDir = $this->basePath . '/' . $this->getOwner()->getMetaData()->tableSchema->name . '/' . $this->getOwner()->id;



        $fullPathDir = rtrim($fullPathDir, '/') . '/';


        $handle = opendir($fullPathDir);
        while (false !== ($file = readdir($handle))) {
            if ($file != '.' and $file != '..') {
                $fullPath = $fullPathDir . $file;

                if (is_dir($fullPath))
                    rmdir($fullPath);
                else
                    unlink($fullPath);
            }
        }
        closedir($handle);
        rmdir($fullPathDir);

        return true;
    }

    /**
     *  Gets image path
     */
    public function getImagePath() {
        return $imagePath = '/uploads/' . $this->getOwner()->getMetaData()->tableSchema->name . '/' . $this->getOwner()->id . '/' . $this->getOwner()->image;
    }

    /**
     *  Gets image path for buttons
     */
    public function getButtonImagePath() {
        return $buttonImagePath = '/uploads/' . $this->getOwner()->getMetaData()->tableSchema->name . '/' . $this->getOwner()->id . '/' . $this->getOwner()->buttonImage;
    }

    /**
     *  Gets banner path for pages
     */
    public function getBannerPath() {
        return $buttonImagePath = '/uploads/' . $this->getOwner()->getMetaData()->tableSchema->name . '/' . $this->getOwner()->id . '/' . $this->getOwner()->banner;
    }

}
