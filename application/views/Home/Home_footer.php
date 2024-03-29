<?php defined('BASEPATH') OR exit('No direct script access allowed');  ?>
<!--home footer nav-->
<!--TODO: links from # to actual links-->
<ul class="nav navbar-light text-light justify-content-center mb-4">
    <li class="nav-item">
        <a href="#" class="nav-link">News</a>
    </li>
    <span class="navbar-text">|</span>
    <li class="nav-item">
        <a href="#" class="nav-link">About</a>
    </li>
    <span class="navbar-text">|</span>
    <li class="nav-item">
        <a href="#" class="nav-link">FAQ</a>
    </li>
    <span class="navbar-text">|</span>
    <li class="nav-item">
        <a href="#" class="nav-link">Blogs</a>
    </li>
    <span class="navbar-text">|</span>
    <?= !$login ? '
    <li class="nav-item">
        <a href="/Register" class="nav-link">Create a new blog</a>
    </li>
    <span class="navbar-text">|</span>
    <li class="nav-item">
        <a href="/Login" class="nav-link">Login to your blog</a>
    </li>
    <span class="navbar-text">|</span>
    ' : ''; ?>
    <li class="nav-item">
        <a href="#" class="nav-link">Report a blog</a>
    </li>
    <span class="navbar-text">|</span>
    <li class="nav-item">
        <a href="#" class="nav-link">User guide</a>
    </li>
</ul>

</div>
<!--app js-->
<script src="/Public/app/js/app.js"></script>

</body>
</html>