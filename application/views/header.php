<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CI Intro</title>
<body>
    <a href="<?=base_url();?>dashboard">Dashboard</a> |
	<a href="<?=base_url();?>site/home">Home</a> |
    <a href="<?=base_url();?>site/about">About</a> |
    <a href="<?=base_url();?>site/getValues">getValues</a> |
    <a href="<?=base_url();?>site/insertValues">insert</a> |
    <a href="<?=base_url();?>site/insertValues2">insert2</a> |
    <a href="<?=base_url();?>site/updateValues">update</a> |
    <a href="<?=base_url();?>site/updateValues2">update2</a> |
    <a href="<?=base_url();?>site/deleteValues">delete</a> |
    <a href="<?=base_url();?>site/emptyTable">delete all</a> |
    <a href="<?=base_url();?>site/contact">Contact Ajax</a> |

    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5 alert-info"><?=$this->session->flashdata('message');?></div>
    <div class="col-md-3"></div>