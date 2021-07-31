<?php
namespace App\Controllers;

class Map extends BaseController
{
	public function index()
	{
		return view('explore');
	}

  public function site($site){

    return view('explore');
  }

  public function getSiteImage(){
    header("Content-type:application/json");

		$siteID = $this->request->getGet('ID');

		$siteImages = $this->imageModel->where('SITE_ID', $siteID)->findAll();

		return $this->setResponseFormat('json')->respond($siteImages, 200);
	}


}
 ?>
