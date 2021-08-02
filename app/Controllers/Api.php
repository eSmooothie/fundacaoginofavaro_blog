<?php
namespace App\Controllers;




class Api extends BaseController{

    public function addNewSite(){
    		header("Content-type:application/json");
    		// get passed data
    		$name = $this->request->getPost('name');
    		$latitude = $this->request->getPost('latitude');
    		$longitude = $this->request->getPost('longitude');
    		$address = $this->request->getPost('address');
    		$desc = $this->request->getPost('description');


    		$data = [
    			'NAME' => $name,
    			'LAT' => floatval($latitude),
    			'LNG' => floatval($longitude),
    			'ADDRESS' => $address,
    			'DESCRIPTION' => $desc
    		];

    		$this->siteModel->insert($data);
    		$newSiteID = $this->siteModel->getInsertID();

    		//image
    		$imgList = $this->request->getFileMultiple('imgs');
    		if($imgList){ // check if not empty
    			$this->uploadImage($imgList,$newSiteID);
    		}

    		return $this->setResponseFormat('json')->respond($data, 200);
	   }

    public function addImageSite(){
    		header("Content-type:application/json");
    		$siteID = $this->request->getPost("SITEID");
    		$imgList = $this->request->getFileMultiple('imgs');
    		if($imgList){
    			$this->uploadImage($imgList,$siteID);
    		}
    		return $this->setResponseFormat('json')->respond('Success', 200);
	   }

  	private function uploadImage($imgList,$siteID){
  		foreach ($imgList as $key => $img) {
  			$name = $img->getRandomName();
  			$path = FCPATH.'uploads/';
  			$compressImage = \Config\Services::image()->withFile($img)->resize(700, 700, true, 'height')->save($path.$name);

  			$data = [
  				'PATH' => $path,
  				'NAME' => $name,
  				'TYPE' => $img->getClientMimeType(),
  				'SITE_ID' => $siteID
  			];

  			$this->imageModel->insert($data);
  		}
  	}

  	public function getSite(){
  		header("Content-type:application/json");

  		// get all site
  		$siteInfo = $this->siteModel->findAll();

  		return $this->setResponseFormat('json')->respond($siteInfo, 200);
  	}

    public function editSite(){
        header("Content-type:application/json");

        // get passed data
        $id = $this->request->getPost('id');
    		$name = $this->request->getPost('name');
    		$latitude = $this->request->getPost('latitude');
    		$longitude = $this->request->getPost('longitude');
    		$address = $this->request->getPost('address');
    		$desc = $this->request->getPost('description');



        $data = [
                'ID' => $id,
    			'NAME' => $name,
    			'LAT' => floatval($latitude),
    			'LNG' => floatval($longitude),
    			'ADDRESS' => $address,
    			'DESCRIPTION' => $desc,
    		];

            $this->siteModel->update($id, $data);

    		//image
    		$imgList = $this->request->getFileMultiple('imgs');
    		if($imgList){ // check if not empty
    			$this->uploadImage($imgList,$id);
    		}


    		return $this->setResponseFormat('json')->respond($data, 200);

    }

    public function deleteSite(){
      header("Content-type:application/json");

      // get passed data
      $id = $this->request->getPost('id');
      $name = $this->request->getPost('name');

      $siteInfo = $this->siteModel->find($id);

      // validation
      if(strcmp($siteInfo['NAME'], $name) == 0){
         $this->siteModel->delete($id);
         return $this->setResponseFormat('json')->respond("Success", 200);
      }
    	return $this->setResponseFormat('json')->respond("Invalid inputted name", 201);

    }
}

 ?>
