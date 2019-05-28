<?php

	class Home extends Controller
	{
		public function index($name = '')
		{	
			$cars = $this->model('Cars');
			$data = $cars->index();

			$this->view('home/index', $data);
		}

		public function add($data = [])
		{	
			$cars = $this->model('Cars');
			
			$result = $cars->add($data);

			// echo 'it is test method';
		}

		public function remove($index)
		{
			$cars = $this->model('Cars');

			$result = $cars->remove($index);

			echo $result;
		}

		public function update($id, $data)
		{
			$cars = $this->model('Cars');

			$result = $cars->update($id, $data);
		}
	}