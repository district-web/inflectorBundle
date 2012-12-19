<?php

namespace Dw\Bundle\InflectorBundle\Twig\Extension;

use Dw\Bundle\InflectorBundle\Tools\Inflector;

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