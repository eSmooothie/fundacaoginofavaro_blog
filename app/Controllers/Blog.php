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

    $data = [
      'title' => $post[$post_no],
    ];

    return view('post/'.$post[$post_no],$data);
  }

}

 ?>
