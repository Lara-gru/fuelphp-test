<?php
/**
 * @author Gru
 */
class Model_Post extends Orm\Model
{
//     protected static $_properties = array('id', 'title', 'contents', 'publish');
    protected static $_table_name = 'posts';
    protected static $_primary_key = array('id');

    protected static $_properties = array(
            'id', // both validation & typing observers will ignore the PK
            'title' => array(
                    'data_type' => 'varchar',
                    'label' => 'Article Name',
                    'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
                    'form' => array('type' => 'text'),
                    'default' => 'New article',
            ),
            'content' => array(
                    'data_type' => 'text',
                    'label' => 'Article Content',
                    'validation' => array('required', 'min_length' => array(3), 'max_length' => array(255)),
                    'form' => array('type' => 'text'),
                    'default' => 'Content',
            ),
//             'gender' => array(
//                     'data_type' => 'varchar',
//                     'label' => 'Gender',
//                     'form' => array('type' => 'select', 'options' => array('m' => 'Male', 'f' => 'Female')),
//                     'validation' => array('required'),
//             ),
//             'created_at' => array(
//                     'data_type' => 'int',
//                     'label' => 'Created At',
//                     'form' => array(
//                             'type' => false, // this prevents this field from being rendered on a form
//                     ),
//             ),
//             'updated_at' => array('data_type' => 'int', 'label' => 'Updated At')
    );
    
    
    
    }