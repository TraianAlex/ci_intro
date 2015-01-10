<!doctype html>
<html lang="en">
    <head>
        <title>Test</title>
        <link href="<?=base_url()?>public/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?=base_url()?>public/css/style.css" rel="stylesheet" />
        
        <script src="<?=base_url()?>public/js/jQuery.js"></script>
        <script src="<?=base_url()?>public/js/bootstrap.js"></script>
        <script src="<?=base_url()?>public/js/ci_intro/dashboard/result.js"></script>
        <script src="<?=base_url()?>public/js/ci_intro/dashboard/event.js"></script>
        <script src="<?=base_url()?>public/js/ci_intro/dashboard/template.js"></script>
        <script src="<?=base_url()?>public/js/ci_intro/dashboard.js"></script>
    </head>
    <body>

        <nav class="navbar">
            <div class="navbar-inner">
                <span class="brand">Traian</span>
                <ul class="nav">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">User</a></li>
                    <li><a href="<?=base_url('dashboard/logout')?>">Logout</a></li>
                </ul>
            </div>
        </nav>
        <!-- start wrapper -->
        <div class="wrapper">
            
            <div id="error" class="alert alert-error hide"></div>
            <div id="success" class="alert alert-success hide"></div>