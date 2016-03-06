<?php
namespace Craft;

class CraftyPants_NamesController extends BaseController
{

    protected $allowAnonymous = true;

    public function actionAddNewName()
    {
        $this->requirePostRequest();

        $name = $_POST['name'];

        // not Craft coding standards, but eh.
        if(isset($_POST['level']))
        {
            $level = $_POST['level'];
        } else {
            $level = 1;
        }

        craft()->craftyPants_levels->addName($name, $level);
        $this->redirectToPostedUrl();
    }
}
