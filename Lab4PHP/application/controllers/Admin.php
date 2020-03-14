<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  var $TPL;

  public function __construct()
  {
    parent::__construct();
    // Your own constructor code

   $this->TPL['loggedin'] = $this->userauth->loggedin('Admin');
   $this->TPL['active'] = array('home' => false,
                                'members'=>false,
                                'editors'=>false,
                                'admin' => true,
                                'login'=>false);

  }

  public function index()
  {
    $CI =& get_instance();
    $query = $CI->db->get('userslab4')->result();
    $this->TPL['users'] = $query;
    $this->template->show('admin', $this->TPL);
  }

  public function create()
  {
    $this->template->show('admin_create', $this->TPL);
  }

  public function store()
  {
    $CI =& get_instance();
    $count = $CI->db->get_where('userslab4', array('username' => $_POST['username']))->row();

    if ($count != null)
    {
      $this->TPL['msg'] ='Username already exist';
      $this->template->show('admin_create', $this->TPL);
    }
    else
    {
      $data = array(
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'accesslevel' => $_POST['accesslevel']
      );
  
      $CI->db->insert('userslab4', $data);

      return redirect(base_url('index.php?/Admin'));
    }
  }

  public function delete($id)
	{
    $CI =& get_instance();
		$CI->db->query('DELETE FROM userslab4 where compid='.$id);
		return redirect(base_url('index.php?/Admin'));
  }
  
  public function freeze($id)
	{
    $CI =& get_instance();

    $data = array(
			'frozen' => true
		);

		$CI->db->where('compid', $id);
    $CI->db->update('userslab4', $data);
    
		return redirect(base_url('index.php?/Admin'));
  }
  
  public function unfreeze($id)
	{
    $CI =& get_instance();

    $data = array(
			'frozen' => false
		);

		$CI->db->where('compid', $id);
    $CI->db->update('userslab4', $data);
    
		return redirect(base_url('index.php?/Admin'));
	}
}