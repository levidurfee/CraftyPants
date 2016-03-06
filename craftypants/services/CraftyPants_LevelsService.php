<?php
namespace Craft;

class CraftyPants_LevelsService extends BaseApplicationComponent
{
    public function getLevels($name = 'levi')
    {
        $q = craft()->db->createCommand();
        return $q->from('craftypants_levels')->where(array('name' => $name))->queryAll();
    }

    public function addName($name)
    {
        $q = craft()->db->createCommand();
        $q->insert('craftypants_levels', array('name' => $name, 'level' => 2));
    }

    public function getAll()
    {
        $q = craft()->db->createCommand();
        return $q->from('craftypants_levels')->orderBy('id')->limit(10)->queryAll();
    }
}
