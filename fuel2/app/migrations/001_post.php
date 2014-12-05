<?php
namespace Fuel\Migrations;

class Post
{

    function up()
    {
        \DBUtil::create_table('posts', array(
                'id' => array('type' => 'int', 'constraint' => 5),
                'title' => array('type' => 'varchar', 'constraint' => 100),
                'content' => array('type' => 'text'),
        ), array('id'));
    }

    function down()
    {
        \DBUtil::drop_table('posts');
    }
}