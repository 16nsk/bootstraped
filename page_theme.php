<?php
namespace Application\Theme\Bootstraped;

class PageTheme extends \Concrete\Core\Page\Theme\Theme
{

    public function registerAssets()
    {
        // required from Core
        $this->requireAsset('javascript', 'jquery');
        $this->requireAsset('javascript', 'picturefill');
        $this->requireAsset('javascript-conditional', 'html5-shiv');
        $this->requireAsset('javascript-conditional', 'respond');
        $this->requireAsset('css', 'font-awesome');
        // privided or replaced by the theme
        $this->providesAsset('javascript', 'bootstrap/*');
        $this->providesAsset('css', 'bootstrap/*');
    }

    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function getThemeBlockClasses()
    {
        return array(
            'feature' => array('feature-home-page'),
            'page_list' => array(
                'recent-blog-entry',
                'blog-entry-list',
                'page-list-with-buttons',
                'block-sidebar-wrapped',
            ),
            'next_previous' => array('block-sidebar-wrapped'),
            'share_this_page' => array('block-sidebar-wrapped'),
            'content' => array(
                'block-sidebar-wrapped',
                'block-sidebar-padded',
            ),
            'date_navigation' => array('block-sidebar-padded'),
            'topic_list' => array('block-sidebar-wrapped'),
            'testimonial' => array('testimonial-bio'),
            'image' => array(
                'image-right-tilt',
                'image-circle',
            ),
        );
    }

    public function getThemeAreaClasses()
    {
        return array(
            'Page Footer' => array('area-content-accent'),
        );
    }

    public function getThemeDefaultBlockTemplates()
    {

        return array(
            'image' => 'some_special_image_template',
        );

    }

    public function getThemeResponsiveImageMap()
    {
        return array(
            'large' => '900px',
            'medium' => '768px',
            'small' => '0',
        );
    }

    public function getThemeEditorClasses()
    {
        return array(
            array('title' => t('Lead body copy'), 'menuClass' => '', 'spanClass' => 'lead'),
            array('title' => t('Lowercased text'), 'menuClass' => '', 'spanClass' => 'text-lowercase'),
            array('title' => t('Uppercased text'), 'menuClass' => '', 'spanClass' => 'text-uppercase'),
            array('title' => t('Capitalized text'), 'menuClass' => '', 'spanClass' => 'text-capitalize')
        );
    }

}
