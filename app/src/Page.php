<?php

namespace {

use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Assets\Image;
    use SilverStripe\Forms\TextField;
    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
    use SilverStripe\Forms\HTMLEditor\HtmlEditorConfig;
    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
    use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

    class Page extends SiteTree
    {
        private static $db = [
            'YellowBoxText' => 'HTMLText',

            'HeaderTitle' => 'Varchar',
            'HeaderTitle2' => 'Varchar',
            'HeaderSubtitle' => 'Varchar',
            'HeaderSubtitle2' => 'Varchar',
            'HeaderLinkTitle' => 'Varchar',
            'HeaderLink' => 'Varchar',

            'BlueBoxText' => 'HTMLText'
        ];

        private static $has_one = [
            'HeaderBackground' => Image::class
        ];

        private static $has_many = [
            'ContentBlock' => ContentBlock::class
        ];

        private static $owns = [
            'HeaderBackground'
        ];

        /**
         * CMS Fields
         * @return FieldList
         */
        public function getCMSFields()
        {
            $fields = parent::getCMSFields();

            if ($this->ClassName != "HomePage") {
                $fields->addFieldsToTab(
                    'Root.Header',
                    [
                        TextField::create(
                            'HeaderTitle',
                            'Title'
                        ),
                        TextField::create(
                            'HeaderTitle2',
                            'Title 2'
                        ),
                        TextField::create(
                            'HeaderSubtitle',
                            'Subtitle'
                        ),
                        TextField::create(
                            'HeaderSubtitle2',
                            'Subtitle 2'
                        ),
                        TextField::create(
                            'HeaderLinkTitle',
                            'Link Title'
                        ),
                        TextField::create(
                            'HeaderLink',
                            'Link'
                        ),
                        UploadField::create(
                            'HeaderBackground',
                            'Background'
                        )
                    ]
                );

                $fields->addFieldTotab("Root.BlueBox", HtmlEditorField::create(
                    'BlueBoxText'
                )->addExtraClass('stacked'));

                $gridFieldConfigSlider = GridFieldConfig_RecordEditor::create();
                $gridFieldConfigSlider->addComponent(GridFieldOrderableRows::create("Sort"));
                $gridFieldSlider = GridField::create("ContentBlock", "ContentBlock", $this->ContentBlock(), $gridFieldConfigSlider);
                
                $fields->addFieldToTab(
                    'Root.ContentBlocks',
                    $gridFieldSlider
                );
            }
            
            

            $fields->addFieldTotab("Root.YellowBox", HtmlEditorField::create(
                'YellowBoxText'
            )->addExtraClass('stacked'));

            return $fields;
        }
    }
}
