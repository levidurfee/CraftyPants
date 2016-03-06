<?php
namespace Craft;

class CraftyPantsVariable
{
    public function getCrafty()
    {
        $craftyLevel = craft()->config->get('craftyLevel', 'craftypants');
        return $craftyLevel;
    }

    public function getPants()
    {
        $pantsLevel = craft()->config->get('pantsLevel', 'craftypants');
        return $pantsLevel;
    }

    public function getLevi()
    {
        $q = craft()->db->createCommand();
        $q->insert('craftypants_levels', array('name' => 'levi', 'level' =>  1));
        return 'getting levi!!! plz hold...';
    }

    public function getTest()
    {
        $data = craft()->craftyPants_levels->getLevels();
        return $data;
    }
}
