<?php
/**
 * Post Controller fuel/app/classes/controller/<span class="skimlinks-unlinked">posts.php</span>
 */
class Controller_Posts extends \Controller_Template
{
    //list posts
    function action_index()
    {

    }

    //add new one
    function action_add()
    {
        $fieldset = Fieldset::forge()->add_model('Model_Post');
        $form     = $fieldset->form();
        
        $this->template->set('content', $form->build(), false); //false will tell fuel not to convert the html tags to safe string.
    }

    //edit
    function action_edit($id)
    {

    }
}