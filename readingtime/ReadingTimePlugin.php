<?php
namespace Craft;

class ReadingTimePlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Reading Time');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Frontend.services';
    }

    function getDeveloperUrl()
    {
        return 'http://frontend.services';
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/frontend-services/craft_reading_time/blob/master/README.md';
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.readingtime.twigextensions.ReadingTimeTwigExtension');

        return new ReadingTimeTwigExtension();
    }
}
