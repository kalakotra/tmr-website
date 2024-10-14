<?php

namespace {

    
    use SilverStripe\Assets\Image;
    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
    use SilverStripe\Forms\HTMLEditor\HtmlEditorConfig;
    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
    use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

    class HomePage extends Page
    {
        private static $db = [
            'IconText' => 'HTMLText',
            'GreyBoxText' => 'HTMLText',
            'GreyBoxImageText' => 'HTMLText'
        ];

        private static $has_one = [
            'IconImage' => Image::class,
            'ContentImage' => Image::class,
            'GreyBoxImage' => Image::class
        ];

        private static $has_many = [
            'Slide' => Slide::class,
            'Icon' => Icon::class
        ];

        private static $owns = [
            'IconImage',
            'ContentImage',
            'GreyBoxImage'
        ];

        /**
         * CMS Fields
         * @return FieldList
         */
        public function getCMSFields()
        {
            $fields = parent::getCMSFields();

            

            $gridFieldConfigSlider = GridFieldConfig_RecordEditor::create();
            $gridFieldConfigSlider->addComponent(GridFieldOrderableRows::create("Sort"));
            $gridFieldSlider = GridField::create("Slide", "Slide", $this->Slide(), $gridFieldConfigSlider);
            
            $fields->addFieldToTab(
                'Root.Slider',
                $gridFieldSlider
            );

            $gridFieldConfig = GridFieldConfig_RecordEditor::create();
            $gridFieldConfig->addComponent(GridFieldOrderableRows::create("Sort"));
            $gridField = GridField::create("Icon", "Icon", $this->Icon(), $gridFieldConfig);
            
            $fields->addFieldsToTab(
                'Root.IconsBlock',
                [
                    HtmlEditorField::create(
                        'IconText'
                    )->addExtraClass('stacked'),
                    UploadField::create(
                        'IconImage'
                    ),
                    $gridField
                ]
            );

            $fields->addFieldsToTab(
                'Root.GreyBox',
                [
                    HtmlEditorField::create(
                        'GreyBoxText'
                    )->addExtraClass('stacked'),
                    HtmlEditorField::create(
                        'GreyBoxImageText'
                    )->addExtraClass('stacked'),
                    UploadField::create(
                        'GreyBoxImage'
                    )
                ]
            );

            $fields->addFieldTotab("Root.Main", UploadField::create(
                'ContentImage'
            ));

            return $fields;
        }
    }
}
