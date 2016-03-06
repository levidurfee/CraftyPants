<?php
namespace Craft;

class CraftyPants_NamesController extends Base Controller
{
    public function addName()
    {
        $this->requirePostRequest();

        // not sure how i get the post variable
        // i'll try the normal way
        $name = $_POST['name'];

        craft()->craftyPants_levels->addName($name);
    }
}
