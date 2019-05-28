<!DOCTYPE><html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- Bootstrap Font-awesome -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Main styles -->
	<link rel="stylesheet" href="public/css/style.css">

    <title>Hello, world!</title>
</head>
<body>
	<div class="container">
		<div class="col-lg-12">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Company</th>
			      <th scope="col">Model</th>
			      <th scope="col">Release date</th>
			      <th scope="col">Horsepower</th>
			      <th scope="col">Transmission</th>
			      <th scope="col">Engine power</th>
			    </tr>
			  </thead>
			  
<!-- 			  
			  <button></button> -->
			  	<tbody>
					<?php 
					    foreach ($data as $index => $element)
					    {
					        echo "<tr><td class='index'>$index</td>";
					            for ($j = 1 ; $j < count($element)/2 ; ++$j) echo "<td>$element[$j]</td>";
					        echo '<td><button class="btn btn-small" onclick="update('.$element['id'].','.$index.')"><i class="fa fa-pencil" aria-hidden="true"></i></button><button class="btn btn-small" onclick="remove('.$element['id'].','.$index.')"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td></tr>';
					    }
					?>
				</tbody>	
			</table>
		</div>	
		<div class="col-lg-4" style="margin-left: auto; display: flex; justify-content: flex-end;">
			<button class="btn btn-primary" data-toggle="modal" data-target=".bd-modal">Add car</button>
		</div>
	</div>


	<div class="modal fade bd-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form class="action-form">
					<h3 class="text-center modal-title">Add item</h3>
					<div class="col-lg-12 form-group">
						<label>Car Name</label>
						<input name="name" value="car Name" type="text" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div>
					<div class="col-lg-12 form-group">
						<label>Company</label>
						<input name="company" value="company name" type="text" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div>
					<div class="col-lg-12 form-group">
						<label>Model</label>
						<input name="model"value="344" type="number" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div>
					<div class="col-lg-12 form-group">
						<label>Release date</label>
						<input name="release" type="date" value="2018-04-12" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div>
					<div class="col-lg-12 form-group">
						<label>Horsepower</label>
						<input name="horsepower" type="number" value="12" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div>
					<div class="col-lg-12 form-group">
						<label>Transmission</label>
						<input name="transmission" type="text" value="45" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div>
					<div class="col-lg-12 form-group">
						<label>Engine power</label>
						<input name="engine" type="number" value="45" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div>
					<div class="col-lg-12">
						<button class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>	
	</div>

	<div class="modal fade bd-update" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form class="update_form">
					<h3 class="text-center modal-title">Update item</h3>
					<div class="col-lg-12 form-group">
						<label>Car Name</label>
						<input name="name" value="car Name" type="text" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div>
					<div class="col-lg-12 form-group">
						<label>Company</label>
						<input name="company" value="company name" type="text" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div>
					<div class="col-lg-12 form-group">
						<label>Model</label>
						<input name="model"value="344" type="number" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div>
					<div class="col-lg-12 form-group">
						<label>Release date</label>
						<input name="release" type="date" value="2018-04-12" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div>
					<div class="col-lg-12 form-group">
						<label>Horsepower</label>
						<input name="horsepower" type="number" value="12" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div>
					<div class="col-lg-12 form-group">
						<label>Transmission</label>
						<input name="transmission" type="text" value="45" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div>
					<div class="col-lg-12 form-group">
						<label>Engine power</label>
						<input name="engine" type="number" value="45" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
					</div>
					<div class="col-lg-12">
						<button class="btn btn-primary action" >Submit</button>
					</div>
				</form>
			</div>
		</div>	
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>
		var formAdd = $('.action-form');

		formAdd.submit(function(e){
			e.preventDefault();
			var data = {
				name: $(this).find('input[name="name"]').val(),
				company: $(this).find('input[name="company"]').val(),
				model: $(this).find('input[name="model"]').val(),
				release: $(this).find('input[name="release"]').val(),
				horsepower: $(this).find('input[name="horsepower"]').val(),
				transmission: $(this).find('input[name="transmission"]').val(),
				engine: $(this).find('input[name="engine"]').val()
			}
			var sd = data;
			var data = JSON.stringify(data);

			sd['index'] = +$('.table tr:last-child td:first-child').text()+1;

			$.ajax({
			  type: 'post',
			  dataType: "json",
			  url: '/public/home/add/'+data,
			  data: data,
			  contentType: 'application/json',
			  success: function(response){
		    	$('.table tbody').append(`
		    		<tr>
		    			<td>${sd.index}</td><td>${sd.name}</td><td>${sd.company}</td><td>${sd.model}</td><td>${sd.release}</td><td>${sd.horsepower}</td><td>${sd.transmission}</td><td>${sd.engine}</td>
		    			<td><button class="btn btn-small"><i class="fa fa-pencil" aria-hidden="true"></i></button><button class="btn btn-small" onclick="remove(${response},${sd.index})"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
		    		</tr>
		    	`);
			  }
			});
			$('.bd-modal').modal('hide');
		});

		function remove(id,index){
			$.ajax({
			  type: 'post',
			  dataType: "json",
			  url: '/public/home/remove/'+id,
			  data: id,
			  contentType: 'application/json',
			  success: function(response){
			  	$('.table tbody tr').eq(index).remove();
			 },
			 error:function(error){
			 	console.error(error);
			 }
			});
		};



		function update(id,index){
			$('.update_form').submit(function(e){
				e.preventDefault();
			})
			var formName = '.bd-update';
			$(formName).modal('show');

			var beforeUpdate = {
				name: $('.table tbody tr').eq(index).find('td')[1].innerText,
				company: $('.table tbody tr').eq(index).find('td')[2].innerText,
				model: $('.table tbody tr').eq(index).find('td')[3].innerText,
				release: $('.table tbody tr').eq(index).find('td')[4].innerText,
				horsepower: $('.table tbody tr').eq(index).find('td')[5].innerText,
				transmission: $('.table tbody tr').eq(index).find('td')[6].innerText,
				engine: $('.table tbody tr').eq(index).find('td')[7].innerText
			}



			$(formName).find('input[name="name"]').val(beforeUpdate.name);
			$(formName).find('input[name="company"]').val(beforeUpdate.company);
			$(formName).find('input[name="model"]').val(beforeUpdate.model);
			$(formName).find('input[name="release"]').val(beforeUpdate.release);
			$(formName).find('input[name="horsepower"]').val(beforeUpdate.horsepower);
			$(formName).find('input[name="transmission"]').val(beforeUpdate.transmission);
			$(formName).find('input[name="engine"]').val(beforeUpdate.engine);


			$('button.action').click(function(){

				var afterUpdate = {
					name: $(formName).find('input[name="name"]').val(),
					company: $(formName).find('input[name="company"]').val(),
					model: $(formName).find('input[name="model"]').val(),
					release: $(formName).find('input[name="release"]').val(),
					horsepower: $(formName).find('input[name="horsepower"]').val(),
					transmission: $(formName).find('input[name="transmission"]').val(),
					engine: $(formName).find('input[name="engine"]').val()
				}

				var data = {};
				var i = 1;
				for(var element in beforeUpdate){
					if(beforeUpdate[element] != afterUpdate[element]){
						data[element] = afterUpdate[element];
						$('.table tbody tr').eq(index).find('td')[i].innerText = afterUpdate[element];
					}
					i++;
				}



				
				var data = JSON.stringify(data);

				$.ajax({
				  type: 'post',
				  dataType: "json",
				  url: '/public/home/update/'+id+'/'+data,
				  data: id,
				  contentType: 'application/json',
				  success: function(response){
				  	console.log(response);
				  	for(var item in afterUpdate){
						$(formName).modal('hide');
				  	}
				 },
				 error: function(error){
				 	console.log(error.responseText);
				 },
				});	
			})
		}

	</script>
</body>
</html>