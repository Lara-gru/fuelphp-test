<?php
class Controller_Blog extends Controller
{
    public function action_index() 
    {
         return Response::forge(Presenter::forge('blog/index'));
    }
    
    
}
#wdev 78jugg

#mary switch