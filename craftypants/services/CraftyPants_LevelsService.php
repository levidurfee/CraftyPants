<?php
namespace Craft;

class CraftyPants_LevelsService extends BaseApplicationComponent
{
    public function getLevels($name = 'levi')
    {
        $q = craft()->db->createCommand();
        return $q->from('craftypants_levels')->where(array('name' => $name))->queryAll();
    }
}
