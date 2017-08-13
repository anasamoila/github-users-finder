<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	<meta charset="utf-8" />
	<title>Github users finder</title>
	<meta name="title" content="Github users finder" />
	<meta name="description" content="Find github users based on a query" />

	<link href="https://bootswatch.com/simplex/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	
</head>

<body>
	<div class="container">
	    <div class="search-container">
		<h1>Search Github users</h1>
		<p class="lead">Enter a username to fetch a user's profile info and repos</p>
		<input type="text" id="searchUser" class="form-control" placeholder="Github Username..."/>
	    </div>
	</div>
	<br/>
	<div id="profile"></div>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
