<?php

namespace Filterus\Filters;

class Regex extends String {
    
    protected $defaultOptions = array(
        'min' => 0,
        'max' => PHP_INT_MAX,
        'default' => '',
        'regex' => '/.?/',
    );

    public function filter($var) {
        $var = parent::filter($var);
        if (!preg_match($this->options['regex'], $var)) {
            return $this->options['default'];
        }
        return $var;
    }

}