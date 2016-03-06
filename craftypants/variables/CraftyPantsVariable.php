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
        return 'getting levi!!! plz hold...';
    }
}
