<?php

use SilverStripe\ORM\DataObject;
use BucklesHusky\FontAwesomeIconPicker\Forms\FAPickerField;

class SocialLink extends DataObject {

    private static $db = [
        'Title' => 'Varchar',
        'Link' => 'Varchar',
        'FAIcon' => 'Varchar(20)',
        'Sort' => 'Int'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName("Sort");
        $fields->addFieldToTab("Root.Main", FAPickerField::create("FAIcon"));
        return $fields;
    }

}