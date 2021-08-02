<?php

namespace App\Controllers;


class Home extends BaseController
{


	public function index()
	{
		return view('homepage');
	}

	public function admin(){
		if($this->session->has('allow')){
			return view('admin');
		}
		return redirect()->to('/admin/login/');
	}

	public function adminLogin(){
		return view('login');
	}

	public function viewSites(){
		header("Content-type:application/json");

		// get all site
		$siteInfo = $this->siteModel->findAll();

		$data = [
			'sites' => $siteInfo,
		];
		echo view('admin_temp/header');
		echo view('admin_pages/viewsites',$data);
		echo view('admin_temp/footer');
	}

	public function editSite(){
		$siteID = $this->uri->getSegment(4);

		$siteInfo = $this->siteModel->find($siteID);

		$data = [
			'info' => $siteInfo,
		];

		echo view('admin_temp/header');
		echo view('admin_pages/editsite',$data);
		echo view('admin_temp/footer');
	}

	public function removeSite(){
		$siteID = $this->uri->getSegment(4);
		$siteInfo = $this->siteModel->find($siteID);

		$data = [
			'info' => $siteInfo,
		];

		echo view('admin_temp/header');
		echo view('admin_pages/deleteConfirmation',$data);
		echo view('admin_temp/footer');
	}

	public function validateCredentials(){
		header("Content-type:application/json");
		// get passed data
		$password = $this->request->getPost('password');

		// query db
		$validate = $this->adminModel->where("password", $password)->first();

		if ($validate){
			$this->session->set('allow',1);
			return $this->setResponseFormat('json')->respond(null, 200);
		}
		return $this->setResponseFormat('json')->respond(null, 400,"Invalid Password.");
		// redirect to
	}

}
