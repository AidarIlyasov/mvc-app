<?php 
	class Contacts extends Controller{

	   	protected $phoneNumber = '8955641312';

		public function index()
		{
			echo 'it is  <font color="#708fe8"> index </font> method in the <font color="#708fe8"> contacts </font> controller';
		}

		public function phone($number = '')
		{
			$this->phoneNumber = $number;
			echo $this->phoneNumber;
		}
	}
 ?>