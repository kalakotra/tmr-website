<?php

use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;

class ContentBlock extends DataObject {

    private static $db = [
        'Title' => 'Varchar',
        'Text' => 'HTMLText',
        'Sort' => 'Int'
    ];

    private static $has_one = [
        'Page' => Page::class,
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