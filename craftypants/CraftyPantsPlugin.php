<?php
namespace Craft;

class CraftyPantsPlugin extends BasePlugin
{
    function getName()
    {
        return Craft::t('Crafty Pants');
    }

    function getVersion()
    {
        return '0.1.0';
    }

    function getDeveloper()
    {
        return 'Levi Durfee';
    }

    function getDeveloperUrl()
    {
        return 'https://6c657669.info';
    }

    protected function defineSettings()
    {
        return array(
            'craftyLevel' => array(AttributeType::Number, 'default' => array(5)),
            'pantsLevel'  => array(AttributeType::Number, 'default' => array(5)),
        );
    }

    public function getSettingsHtml()
    {
       return craft()->templates->render('craftypants/settings', array(
           'settings' => $this->getSettings()
       ));
   }

    public function getReleaseUrl()
    {
        return 'https://raw.githubusercontent.com/levidurfee/CraftyPants/master/releases.json';
    }
}
