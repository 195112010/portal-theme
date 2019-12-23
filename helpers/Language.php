<?php
use kouosl\site\models\Setting;
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Nav;
use kouosl\theme\widgets\NavBar;
use kouosl\theme\widgets\Breadcrumbs;
use kouosl\theme\widgets\Alert;
use kouosl\theme\bundles\CustomAsset;
use kouosl\theme\Module;
use kouosl\theme\helpers\Language;

namespace kouosl\theme\helpers;

class Language
{
   

     private function getLanguage()
    {

        $settings = Setting::find()->asArray()->all();
        foreach ($settings as $setting){
        $settings[$setting['setting_key']] = $setting['value'];
        return $setting;
      
    }


}
    private function getUserLanguage()
    {

        $languages = ['tr-TR' => 'Türkçe','en-US' => 'English'];
        $lang = (!Yii::$app->session->get('lang')) ? $settings['language'] : Yii::$app->session->get('lang');
        Yii::$app->session->set('lang',$lang);
        $activeLangLabel = $languages[$lang];  
        return $lang;
    } 

    private function getMenu()
{
    


}
}
