<?php
	//use app\core\Controller;

	
	Router::get('/test',function(){
		echo '<h2> hello from @home router home GET </h2>';
	});

	Router::get('/','HomeController@index');
	
	/*Router::get('/',function(){
		$ct = new Controller;
		$ct->render('index',['age' => 22, 'name' => 'tai']);
	});*/

	Router::get('/home',function(){
		

		echo '<h4> Hi, you are going to access to the homepage of newnuke/vietfony framework</h4>';
	});


	Router::any('*',function(){
		echo '404 responding code ! Sorry! The URL you are looking for is not available! ';
		
		//echo $this->basePath;
		//header("Location: /index.php");

		//print_r($this->defaultlFileLoad());
	});
?>