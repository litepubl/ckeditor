<?php
/**
* Lite Publisher
* Copyright (C) 2010 - 2015 Vladimir Yushko http://litepublisher.com/ http://litepublisher.ru/
* Licensed under the MIT (LICENSE.txt) license.
**/

class ckeditorplugin extends tplugin {
  
  public static function i() {
    return getinstance(__class__);
  }
  
  public function getvisual() {
    return '/plugins/ckeditor/init.js';
  }
  
  public function install() {
    tajaxposteditor ::i()->visual = $this->getvisual();
  }
  
  public function uninstall() {
    tajaxposteditor ::i()->visual = '';
  }
  
}//class