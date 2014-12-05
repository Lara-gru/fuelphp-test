<?php
class Controller_Post extends Controller
{

    public function action_index() 
    {
        
        
        
        
        
         echo 'post';   
        
         // using "new"
         $new = new Model_Post();
         $new->title = '1name anfgular';
         $new->content = '1angular content';
         $new->save();
                 
//          $new = Model_Post::forge();
         
//          $new->save();
         var_dump($new);
         
         
        
    }
    
    public function action_new() 
    {
        var_dump('gru');
        
    }
    
    public function action_list() 
    {
        
        
    }
    
    
}