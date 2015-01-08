<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
        <link type="text/css" rel="stylesheet" href="<?=base_url()?>styles/style.css" />
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

        <h2>Add</h2>
        <p><?=$val1. "+" .$val2. "=" .$addTotal;?></p>

        <h2>Subtract</h2>
        <p><?=$val1. "+" .$val2. "=" .$subTotal;?></p>

        <a href="<?=base_url();?>site/home">Home</a> | <a href="<?=base_url();?>site/about">About</a>
</div>

</body>
</html>