<?php

use Bummzack\SortableFile\Forms\SortableUploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

class CustomSiteConfig extends DataExtension
{

    private static $db = [
        'Telephone' => 'Varchar',
        'WhatsApp' => 'Varchar',
        'YellowBoxText' => 'HTMLText',

        'ContactPersonName' => 'Varchar',
        'ContactPersonEmail' => 'Varchar',
        'ContactPersonTelephone' => 'Varchar',
        'ContactPersonWhatsApp' => 'Varchar'
    ];

    private static $has_one = [
        'ContactPersonImage' => Image::class
    ];

    private static $has_many = [

    ];

    private static $many_many = [
        'Certificate' => Image::class
    ];

    private static $many_many_extraFields = [
        'Certificate' => [ 'SortOrder' => 'Int']
    ];

    private static $owns = [
        'Certificate',
        'ContactPersonImage'
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab(
            'Root.Main',
            [
                TextField::create(
                    'Telephone',
                    'Telephone'
                ),
                TextField::create(
                    'WhatsApp',
                    'WhatsApp'
                )
            ]
        );

        $gridFieldConfig = GridFieldConfig_RecordEditor::create();
        $gridFieldConfig->addComponent(GridFieldOrderableRows::create("Sort"));
        $gridField = GridField::create("SocialLink", "SocialLink", SocialLink::get(), $gridFieldConfig);

        $fields->addFieldsToTab(
            'Root.Footer',
            [
                SortableUploadField::create(
                    'Certificate',
                    'Certificate'
                ),
                $gridField
            ]
        );

        $fields->addFieldTotab("Root.YellowBox", HtmlEditorField::create(
            'YellowBoxText'
        )->addExtraClass('stacked'));

        $fields->addFieldsToTab(
            'Root.ContactPerson',
            [
                TextField::create("ContactPersonName", "Name"),
                TextField::create("ContactPersonEmail", "Email"),
                TextField::create("ContactPersonTelephone", "Telephone"),
                TextField::create("ContactPersonWhatsApp", "WhatsApp"),
                SortableUploadField::create("ContactPersonImage", "Image")
            ]
        );
    }
}
