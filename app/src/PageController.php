<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\View\Requirements;
    use SilverStripe\View\SSViewer;

    class PageController extends ContentController
    {
        /**
         * An array of actions that can be accessed via a request. Each array element should be an action name, and the
         * permissions or conditions required to allow the user to access it.
         *
         * <code>
         * [
         *     'action', // anyone can access this action
         *     'action' => true, // same as above
         *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
         *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
         * ];
         * </code>
         *
         * @var array
         */
        private static $allowed_actions = [];

        protected function init()
        {
            parent::init();
            // You can include any CSS or JS required by your project here.
            // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/

            if ($this->URLSegment != "Security") {
                $myThemes = SSViewer::get_themes();
                $myThemePath = "themes/".$myThemes[1]."/";

                Requirements::css($myThemePath.'css/scss/bootstrap.scss');

                Requirements::css($myThemePath.'css/editor.scss');

                Requirements::backend()->setWriteHeaderComment(false);
                $css = [];

                // animate on scroll plugin
                //$css[] = $myThemePath.'css/aos.css';

                // fontawesome
                $css[] = $myThemePath.'css/all.min.css';

                // custom fonts
                $css[] = $myThemePath.'css/fonts.css';

                // hamburger menu
                $css[] = $myThemePath.'css/hamburgers.min.css';

                // fancybox (uncomment js to)
                //$css[] = $myThemePath.'css/jquery.fancybox.min.css';

                $css[] = $myThemePath.'css/layout.css';
                $css[] = $myThemePath.'css/navigation.css';

                Requirements::combine_files('styles.css', $css);
                Requirements::process_combined_files();

                $js = [];
                $js[] = $myThemePath.'javascript/empty.js';
                $js[] = $myThemePath.'javascript/jquery-3.6.0.min.js';
                Requirements::combine_files('jquery.js', $js);
                Requirements::process_combined_files();

                $js = [];
                $js[] = $myThemePath.'javascript/bootstrap.bundle.min.js';
                
                // animate on scroll plugin
                //$js[] = $myThemePath.'javascript/aos.js';
                
                // fancybox (uncomment css to)
                //$js[] = $myThemePath.'javascript/jquery.fancybox.min.js';

                $js[] = $myThemePath.'javascript/script.js';
                Requirements::combine_files('javascripts.js', $js, ["async"=>true, "defer" => true]);
                Requirements::process_combined_files();
            }
        }

        public function getMyClass($className = "Page") {
            return $className::get();
        }
    }
}
