<?php

use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;

class Slide extends DataObject {

    private static $db = [
        'Title' => 'Varchar',
        'Title2' => 'Varchar',
        'Subtitle' => 'Varchar',
        'Subtitle2' => 'Varchar',
        'LinkTitle' => 'Varchar',
        'Link' => 'Varchar',
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