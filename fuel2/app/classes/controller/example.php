<?php
class Controller_Example extends Controller
{

    public function action_index()
    {
        return Response::forge(Presenter::forge('example/index'));
    }
}