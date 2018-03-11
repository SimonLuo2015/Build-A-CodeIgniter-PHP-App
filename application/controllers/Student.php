<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
    
    function index()
    {
        //显示视图
        $data['title'] = "Classroom: HomePage.";
        $data['headline'] = "Welcome to the Classroom Management System.";
        $data['include'] = 'student_index';

        $this->load->view('template', $data);
    }

}
