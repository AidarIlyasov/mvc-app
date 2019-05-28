<?php
	
	class Cars extends Config
	{	

		public function index()
		{
			try
			{
				$dbh = new PDO('mysql:host=localhost;dbname=cars', $this->user, $this->password);
				$result = $stmt = $dbh->query("SELECT * FROM cars");

				return $result;
			} 
			catch (PDOException $e)
			{
			    print "Error!: " . $e->getMessage() . "<br/>";
			    die();
			}
		}

		public function add($data)
		{	
			try
			{
				$characters = json_decode($data, true);

				$dbh = new PDO('mysql:host=localhost;dbname=cars', $this->user, $this->password);
				$sql = "INSERT INTO cars (name, manufacturer, model, created, horsepower, transmission, engine_power) 
					VALUES (:name, :manufacturer, :model, :release, :horsepower,:transmission,:engine)";

				$stmt = $dbh->prepare($sql); 

				$stmt->bindParam(':name', $name);
				$stmt->bindParam(':manufacturer', $value);
				$stmt->bindParam(':model', $model); 
				$stmt->bindParam(':release', $release); 
				$stmt->bindParam(':horsepower', $horsepower); 
				$stmt->bindParam(':transmission', $transmission); 
				$stmt->bindParam(':engine', $engine); 

				$name = $characters['name'];
				$value = $characters['company'];
				$model = $characters['model'];
				$release = $characters['release'];
				$horsepower = $characters['horsepower'];
				$transmission = $characters['transmission'];
				$engine = $characters['engine'];

				$stmt->execute();

		        echo $dbh->lastInsertId();

			}
			catch (DOException $e)
			{
				echo $e->getMessage();
			}

		}

		public function remove($index)
		{
			try
				{
				$dbh = new PDO('mysql:host=localhost;dbname=cars', $this->user, $this->password);

				$sql = "DELETE FROM cars WHERE id = ?";
				$stmt = $dbh->prepare($sql);
				$stmt->execute(array($index));

				echo 'true';
			}
			catch(DOException $e)
			{
				echo $e->getMessage();
			}	
		}

		public function update($id,$data){

				$data = json_decode($data, true);


				//$dbh = new PDO('mysql:host=localhost;dbname=cars', $this->user, $this->password);


				// $sql = "UPDATE cars SET ";

				// if(isset($data['name'])){
				// 	$sql .= "name=:name";
				// }
				// if(isset($data['company'])){
				// 	$sql .= 'manufacturer=:manufacturer,';
				// }
				// if(isset($data['model'])){
				// 	$sql .= 'model=:model,';
				// }

				// if(isset($data['release'])){
				// 	$sql .= 'created=:created,';
				// }

				// if(isset($data['horsepower'])){
				// 	$sql .= 'horsepower=:horsepower,';
				// }
				
				// if(isset($data['transmission'])){
				// 	$sql .= 'transmission=:transmission,';
				// }

				// if(isset($data['engine'])){
				// 	$sql .= 'engine_power=:engine,';
				// }
				// $sql .= ' where id = :id';

				// $sql = "UPDATE cars SET name=:name WHERE id = :id";
				// $stmt = $dbh->prepare($sql);
				// // $sql = trim($sql,",");
				// $stmt->bindParam(':id', $id);



				// $stmt->execute();

				$link = '';

				if(isset($data['name'])){
					$link.= "name='".$data['name']."', ";
				}
				if(isset($data['company'])){
					$link.= "manufacturer='".$data['company']."', ";
				}  
				if(isset($data['model'])){
					$link.= "model='".$data['model']."', ";
				};
				if(isset($data['release'])){
					$link.= "created='".$data['release']."', ";
				}
				if(isset($data['horsepower'])){
					$link.= "horsepower='".$data['horsepower']."', ";
				}
				if(isset($data['transmission'])){
					$link.= "transmission='".$data['transmission']."', "; 
				}
				if(isset($data['engine']))
				{ 
					$link.= "engine_power='".$data['engine']."', "; 
				}

				$string = substr($link,'0','-2');

				$conn = new mysqli($this->host, $this->user, $this->password, $this->database);


				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "UPDATE cars SET ".$string." WHERE id=".$id;


				if ($conn->query($sql) === TRUE) {
				    echo true;
				} else {
					echo $string;
				    echo "Error updating record: " . $conn->error;
				}

				$conn->close();
		}
	}