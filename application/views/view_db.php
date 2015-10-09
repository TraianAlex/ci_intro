<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
        <?php
        //print_r($results);
        foreach ($results as $row){
            echo $row->id;
            echo $row->name;
            echo '<br>';
        }
        ?>
</div>

</body>
</html>

