<?php
namespace Craft;

class CraftyPants_LevelRecord extends BaseRecord
{
    public function getTableName()
    {
        return 'craftypants_levels';
    }

    protected function defineAttributes()
    {
        return array(
            'name'  => AttributeType::String,
            'level' => AttributeType::Number
        );
    }
}



