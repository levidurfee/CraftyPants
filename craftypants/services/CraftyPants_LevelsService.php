<?php
namespace Craft;

class CraftyPants_LevelsService extends BaseApplicationComponent
{
    public function getLevels($name = 'levi')
    {
        $q = craft()->db->createCommand();
        return $q->from('craftypants_levels')->where(array('name' => $name))->queryAll();
    }

    public function addName($name, $level = 1)
    {
        $q = craft()->db->createCommand();
        $q->insert('craftypants_levels', array('name' => $name, 'level' => $level));
    }

    public function getAll()
    {
        $q = craft()->db->createCommand();
        return $q->from('craftypants_levels')->order('id DESC')->limit(10)->queryAll();
    }
}
