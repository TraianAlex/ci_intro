<!doctype html>
<html lang="en">
<head>
    <title>To Do List</title>
    <link href="<?=base_url()?>public/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>public/css/style.css" rel="stylesheet" />
    
    <script src="<?=base_url()?>public/js/jQuery.js"></script>
    <script src="<?=base_url()?>public/js/bootstrap.js"></script>
    <script src="<?=base_url()?>public/js/ci_intro/dashboard/result.js"></script>
    <script src="<?=base_url()?>public/js/ci_intro/dashboard/event.js"></script>
    <script src="<?=base_url()?>public/js/ci_intro/dashboard/template.js"></script>
    <script src="<?=base_url()?>public/js/ci_intro/dashboard.js"></script>
    <script>
    $(function() {
        // Init the Dashboard Application
        var dashboard = new Dashboard();
    });
    </script>
</head>
<body>

<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <span class="brand">Traian</span>
            <ul class="nav">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">User</a></li>
                <li><a href="<?=base_url('dashboard/logout')?>">Logout</a></li>
                <li><a href="<?=base_url('site')?>">Site</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- start:container -->
<div class="container">
    
    <div id="error" class="alert alert-error hide"></div>
    <div id="success" class="alert alert-success hide"></div>