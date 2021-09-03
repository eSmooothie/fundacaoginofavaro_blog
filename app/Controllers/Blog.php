<?php
namespace App\Controllers;




class Blog extends BaseController{
  public function post(){
    $post_no = $this->uri->getSegment(3);
    $post = [
      1 => 'a_better_future_ahead',
      2 => 'deep_gulf',
      3 => 'energy_for_our_people',
      4 => 'signing_of_mou.php',
      5 => 'the_potential_development_of_soibada',
    ];

    $titles = [
      1 => 'Timor-Leste: A Better Future&nbsp;Ahead',
      2 => 'Deep Gulf and Fundação Gino Fávaro partnership',
      3 => 'Energy for Our People',
      4 => 'Signing of MOU',
      5 => 'The Potential Development of Soibada',
    ];

    $data = [
      'title' => $titles[$post_no],
    ];
    echo view("blog_layout/header.php",$data);
    echo view('post/'.$post[$post_no]);
    echo view('blog_layout/footer.php');
  }

}

 ?>
