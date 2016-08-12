<?php

/**
 * CakePHP 3.x - Markdown
 * 
 * PHP version 5
 * 
 * Class MarkdownHelper
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @category CakePHP3
 * 
 * @package  Markdown\View\Helper
 * 
 * @author Ivan Amat <dev@ivanamat.es>
 * @copyright Copyright 2016, Iván Amat
 * @license MIT http://opensource.org/licenses/MIT
 * @link https://github.com/ivanamat/cakephp3-markdown
 */

namespace Markdown\View\Helper;

use Cake\View\Helper;
use Markdown\Parsedown\Parsedown;
use Markdown\Parsedown\ParsedownExtra;

class MarkdownHelper extends Helper {

    public $Parsedown = NULL;

    /**
     * Initialize the helper
     */
    public function initialize(array $config) {
        parent::initialize($config);
        
        $this->Parsedown = new ParsedownExtra();
    }

    /**
     * Parse
     * 
     * @param string $text Markdown format string.
     * @return string Html format string.
     */
    public function parse($text) {
        return $this->Parsedown->text($text);
    }

}