<?php


class Home extends Controller
{

  public function index($a = '', $b = '', $c = '')
{
    $user = new User;
//     $data = [
//     'name' => 'shruti',
//     'age' => 14
// ];
$result=$user->findAll(); 

    show($result);
    $this->view('home');
}


}