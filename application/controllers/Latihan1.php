<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller {


	public function index()
	{
       //echo " SELAMAT DATANG .... DI PEMROGRAMAN WEB 2";
       $a= 10;
       $b= 20;
       $data ['c']= $a+$b;

       $this ->load->view('latihan1',$data);


		
	}
}

