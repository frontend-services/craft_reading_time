<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class ReadingTimeTwigExtension extends Twig_Extension
{
    public function getName()
    {
        return 'Reading Time';
    }

    public function getFilters()
    {
        return array(
            'readingtime' => new Twig_Filter_Method($this, 'readingtimeFilter'),
        );
    }

    public function readingtimeFilter($content)
    {
        switch (substr(craft()->language, 0, 2)) {
            case 'ja':
                $chars = mb_strlen(strip_tags($content));
                $minutes = floor($chars / 500);
                break;
            default:
                $words = str_word_count(strip_tags($content));
                $minutes = floor($words / 250);
                break;
        }
        if ($minutes < 1) {
            $minutes = 1;
        }
        if ($minutes % 10 == 1) {
            $string = Craft::t("%d minute");
        } else {
            $string = Craft::t("%d minutes");
        }
        return sprintf($string, $minutes);
    }
}
