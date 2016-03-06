<?php
namespace levidurfee;

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
            'craftyLevel' => array(AttributeType::Int, 'default' => array(5)),
            'pantsLevel'  => array(AttributeType::Int, 'default' => array(5)),
        );
    }
}
