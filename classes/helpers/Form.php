<?php
namespace Dynamedia\Posts\Classes\Helpers;
use Config;
use Lang;
use Cms\Classes\Theme;
use Cms\Classes\Layout;
use Cms\Classes\Partial;
use Cms\Classes\Content;

class Form
{
    public static function getCmsContentOptions()
    {
        $content = Content::listInTheme(Theme::getActiveTheme(), true);
        foreach ($content as $item) {
            $options[$item->fileName] = $item->fileName;
        }
        return $options;
    }

    public static function getCmsPartialOptions()
    {
        $partial = Partial::listInTheme(Theme::getActiveTheme(), true);
        foreach ($partial as $item) {
            $options[$item->fileName] = $item->fileName;
        }
        return $options;
    }

    public static function getCmsLayoutOptions()
    {
        $options = [
            '__inherit__' => 'Inherit'
        ];

        $layout = Layout::listInTheme(Theme::getActiveTheme(), true);
        foreach ($layout as $item) {
            $options[$item->fileName] = $item->description;
        }
        $options[''] = 'None';
        return $options;
    }

    public static function getImageStyleOptions()
    {
        return Config::get('dynamedia.posts::postSectionImageDropdown');
    }

    public static function getDefaultPostListSortOptions()
    {
        return [
            'published_at desc' => Lang::get('dynamedia.posts::lang.common.dropdown.newest_first'),
            'published_at asc'  => Lang::get('dynamedia.posts::lang.common.dropdown.oldest_first'),
            'updated_at desc'   => Lang::get('dynamedia.posts::lang.common.dropdown.recent_update'),
            '__random__'        => Lang::get('dynamedia.posts::lang.common.dropdown.random')
        ];
    }

    public static function getPostListSortOptions()
    {
        $inherit = ['__inherit__' => 'Inherit'];
        return array_merge($inherit, static::getDefaultPostListSortOptions());
    }

    public static function getDefaultPostListIncludeSubCategoriesOptions()
    {
        return [
            false => Lang::get('dynamedia.posts::lang.common.dropdown.no'),
            true  => Lang::get('dynamedia.posts::lang.common.dropdown.yes')
        ];
    }

    public static function getPostListIncludeSubCategoriesOptions()
    {
        $inherit = ['__inherit__' => 'Inherit'];
        return array_merge($inherit, static::getDefaultPostListIncludeSubCategoriesOptions());
    }

    public static function getDefaultPostListPerPageOptions()
    {
        $perPage = [];
        $min = Config::get('dynamedia.posts::postsListMinPerPage');
        $max = Config::get('dynamedia.posts::postsListMaxPerPage');

        for ($i = $min; $i <= $max; $i++) {
            $perPage[$i] = $i;
        }
        return $perPage;
    }

    public static function getPostListPerPageOptions()
    {
        $appended = ['__inherit__' => 'Inherit'];
        $default  = static::getDefaultPostListPerPageOptions();

        foreach ($default as $entry) {
            $appended[$entry] = $entry;
        }
        return $appended;
    }

    public static function getMicroCacheDuration()
    {
        $min = Config::get('dynamedia.posts::microCacheMinDuration');
        $max = Config::get('dynamedia.posts::microCacheMaxDuration');
        $step = Config::get('dynamedia.posts::microCacheDurationStep') ? Config::get('dynamedia.posts::microCacheDurationStep') : 1;

        for ($i = $min; $i <= $max; $i += $step) {
            $perPage[$i] = $i;
        }
        return $perPage;
    }
}
