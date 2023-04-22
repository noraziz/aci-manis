<?php
namespace App\Controllers;

use \noraziz\ci4twiggy;
use \noraziz\ci4aauth;
use Config\Encryption;
use google\recaptcha;

class Home extends BaseController
{
    private $twiggy;
	
	public function index()
    {
        return view('welcome_message');
    }
	
	public function tw1()
	{
		$this->twiggy = new \noraziz\ci4twiggy\Twiggy();
		$this->twiggy->init(__CLASS__);
		$this->twiggy->title('Hello World on App');
		$this->twiggy->layout('layout_default')->template('page_index')->display();
	}
	
	public function myaauth()
	{
		$aa= new \noraziz\ci4aauth\Aauth();
		//$aa->tes();
		//$aa->ban_user(4);
		//$aa->create_group('admin', 'pengatur utama');
		
		//if ($aa->create_user('aku71@mail.com', '123abc', 'saya71') ) {
		/*
		$res= $aa->get_user(7);
		if ($res) {	
			echo 'berhasil';
			print_r($res);
		}
		else {
			echo 'gagal';
		}
		*/
		
		//$request = \Config\Services::request();
		//echo $request->getIPAddress();
		
		//$encrypter = \Config\Services::encrypter();
		//$plainText  = 'This is a plain-text message!';
		//echo $encrypter->encrypt($plainText);
		//$aa->send_pm(4, 5, 'Welcome', 'hai piye kabar e?');
		//echo $aa->generate_totp_qrcode('dasda');
		
		$recaptcha = new \ReCaptcha\ReCaptcha('123');
		
		echo "<br>\n\nhaoi..9c";
	}
}
