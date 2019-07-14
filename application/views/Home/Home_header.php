<?php defined('BASEPATH') OR exit('No direct script access allowed');  ?>
<!DOCTYPE html>
<html lang="en"> <!--TODO-->
<head>
    <title>BLOGMA</title>
    <!--meta-->
    <meta charset="utf-8" />
    <meta name="description" content="Create your free Weblog" />
    <meta name="keywords" content="blog,post" />
    <meta name="author" content="MHD Fire" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <!--third party css-->
    <link rel="stylesheet" href="/Public/third_party/bootstrap.min.css" />
    <link rel="stylesheet" href="/Public/third_party/fontawesome/css/all.min.css" />
    <!--third js-->
    <script src="/Public/third_party/jquery.min.js"></script>
    <script src="/Public/third_party/bootstrap.min.js"></script>
    <script src="/Public/third_party/popper.min.js"></script>
    <!--app css-->
    <link rel="stylesheet" href="/Public/app/css/app.css">
    <!--TODO: limit access to public-->
</head>
<body>
<div class="container-fluid">
    <!--top nav-->
    <ul id="topNav" class="nav nav-pills fixed-top bg-light text-dark align-items-center px-2 shadow">
        <li class="nav-item">
            <!--TODO-->
            <a href="/" class="nav-link border mr-3"><i>Blogma</i></a>
        </li>
        <li class="nav-item">
            <a href="/Home" class="nav-link active"><i class="fa fa-home"></i></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Menu12</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Menu13</a>
        </li>
        <li class="nav-item ml-auto">
            <a href="https://github.com/MHD-MMfire/Blogma" target="_blank" title="github" class="nav-link"><i class="fab fa-github nav-link topNavIcon"></i></a>

        </li>
        <li class="nav-item">
            <i id="user_icon" class="fas fa-user topNavIcon"></i>
        </li>
        <li class="nav-item mr-2">
            <a href="/Login" class="nav-link btn btn-primary">Login</a>
        </li>
    </ul>