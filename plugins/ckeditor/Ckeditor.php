<?php
/**
* Lite Publisher
* Copyright (C) 2010 - 2015 Vladimir Yushko http://litepublisher.com/ http://litepublisher.ru/
* Licensed under the MIT (LICENSE.txt) license.
**/

namespace litepubl\plugins\ckeditor;

use litepubl\admin\posts\Ajax;

class Ckeditor extends \litepubl\core\Plugin
 {
  
  public function getVisual() {
    return '/plugins/ckeditor/init.js';
  }
  
  public function install() {
    $ajax = Ajax::i();
$ajax->visual = $this->getVisual();
$ajax->save();
  }
  
  public function uninstall() {
    $ajax = Ajax::i();
$ajax->visual = '';
$ajax->save();
  }
  
}
