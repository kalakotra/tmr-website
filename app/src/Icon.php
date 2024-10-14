<?php

use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;

class Icon extends DataObject {

    private static $db = [
        'Title' => 'Varchar',
        'Sort' => 'Int'
    ];

    private static $has_one = [
        'HomePage' => HomePage::class,
        'Image' => Image::class
    ];

    private static $owns = [
        'Image'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName("Sort");
        return $fields;
    }

}