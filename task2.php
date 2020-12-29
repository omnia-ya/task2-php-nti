<?php
$users = [
    "user1"=>[
        'id'=>1,
        'name'=>'ahmed',
        'hobbies'=>[
            'football','swimming','running'
        ],
        'activities'=>(object)[
            "school"=>'drawing',
            'home'=>'painting'
        ],
        "gender"=>(object)[
            'gender'=>'m'
        ],
    ]
    ,
    "user2"=>[
        'id'=>2,
        'name'=>'mohamed',
        "gender"=>(object)[
            'gender'=>'f'
        ],
        'hobbies'=>[
            'swimming','running',
        ],
        'activities'=>(object)[
            "school"=>'x',
            'home'=>'drawing'
        ]
    ]
    ,
    "user3"=>[
        'id'=>3,
        'name'=>'mena',
        "gender"=>(object)[
            'gender'=>'m'
        ],
        'hobbies'=>[
            'running',
        ],
        'activities'=>(object)[
            "school"=>'painting',
            'home'=>'drawing'
        ],
        
    ]

];
//print_r($users['user1']['activities']);
foreach($users AS $k1=>$v1){
	if (($v1['gender']->gender) == "m"){
		$v1['gender']->gender = "male";
		
	}
	else if (($v1['gender']->gender) == "f"){
		$v1['gender']->gender = "female";
		
	}
	
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">hobbies</th>
      <th scope="col">activities</th>
      <th scope="col">gender</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php print_r($users['user1']['id']); ?></th>
      <td><?php print_r($users['user1']['name']); ?></td>
      <td>
      	<?php
      		$hobb = $users['user1']['hobbies'];
			for ($i=0;$i<count($hobb);$i++){
				echo $hobb[$i] . "<br>";
				} 
      	 ?>	
      </td>
      <td>
      	<?php
      		$acc1 =  $users['user1']['activities'];
			foreach ($acc1 AS $key => $value){
			echo $value."<br>";
		}
      	?>
      </td>
      <td><?php print_r($users['user1']['gender']->gender); ?></td>
    </tr>
    <tr>
      <th scope="row"><?php print_r($users['user2']['id']); ?></th>
      <td><?php print_r($users['user2']['name']); ?></td>
      <td>
      	<?php
      		$hobb2 = $users['user2']['hobbies'];
			for ($i=0;$i<count($hobb2);$i++){
				echo $hobb2[$i] . "<br>";
				} 
      	 ?>	
      </td>
      <td>
      	<?php
      		$acc2 =  $users['user2']['activities'];
			foreach ($acc2 AS $key => $value){
			echo $value."<br>";
		}
      	?>
      </td>
      <td><?php print_r($users['user2']['gender']->gender); ?></td>
    </tr>
    <tr>
      <th scope="row"><?php print_r($users['user3']['id']); ?></th>
      <td><?php print_r($users['user3']['name']); ?></td>
      <td>
      	<?php
      		$hobb3 = $users['user3']['hobbies'];
			for ($i=0;$i<count($hobb3);$i++){
				echo $hobb3[$i] . "<br>";
				} 
      	 ?>	
      </td>
      <td>
      	<?php
      		$acc3 =  $users['user3']['activities'];
			foreach ($acc3 AS $key => $value){
			echo $value."<br>";
		}
      	?>
      </td>
      <td><?php print_r($users['user3']['gender']->gender); ?></td>
    </tr>
   
  </tbody>
</table>
</body>
</html>
