<?php

namespace DistrictWeb\InflectorBundle\Twig\Extension;

use DistrictWeb\InflectorBundle\Tools\Inflector;

class InflectorExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'inflector';
    }
    
    public function getFilters()
    {
        return array('slug' => new \Twig_Filter_Method($this, 'urlize'));
    }
    
    public function urlize($text)
    {
        return Inflector::urlize($text);
    }
}