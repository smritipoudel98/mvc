<?php

//home page...
class Home 
{

   use Controller;

  public function index()
{

    $this->view('home');
}



}