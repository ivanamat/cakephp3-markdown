<?php

/**
 * CakePHP 3.x - Markdown
 * 
 * PHP version 5
 * 
 * Class MarkdownComponent
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @category CakePHP3
 * 
 * @package  Markdown\Controller\Component
 * 
 * @author Ivan Amat <dev@ivanamat.es>
 * @copyright Copyright 2016, Iván Amat
 * @license MIT http://opensource.org/licenses/MIT
 * @link https://github.com/ivanamat/cakephp3-markdown
 */

namespace Markdown\Controller\Component;

use Cake\Controller\Component;
use Markdown\Parsedown\Parsedown;
use Markdown\Parsedown\ParsedownExtra;

class MarkdownComponent extends Component {

    public $Parsedown = NULL;

    /**
     * Initialize the component
     */
    public function initialize(array $config){
        parent::initialize($config);
        
        $this->Parsedown = new ParsedownExtra();
        
        return null;
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
