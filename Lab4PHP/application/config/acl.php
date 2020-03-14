<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['acl'] = array('Home' => array('public' => true, 'member' => true, 'editor' => true, 'admin' => true),
    'Members' => array('public' => false, 'member' => true, 'editor' => false, 'admin' => true),
    'Editors' => array('public' => false, 'member' => false, 'editor' => true, 'admin' => true),
    'Admin' => array('public' => false, 'member' => false, 'editor' => false, 'admin' => true),
    'Login' => array('public' => true, 'member' => true, 'editor' => true, 'admin' => true)
    );
