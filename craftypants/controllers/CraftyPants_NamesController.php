<?php
namespace Craft;

class CraftyPants_NamesController extends BaseController
{

    protected $allowAnonymous = true;

    public function addNewName()
    {
        $this->requirePostRequest();

        // not sure how i get the post variable
        // i'll try the normal way
        $name = $_POST['name'];

        craft()->craftyPants_levels->addName($name);
        $this->redirectToPostedUrl();
    }
}
