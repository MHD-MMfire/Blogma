<?php defined('BASEPATH') OR exit('No direct script access allowed');  ?>
<div class="row">
    <!--TODO: responsive in mobile-->
    <aside id="user_nav" class="col-2">
        <div class="nav-item">
            <a href="/User/newpost" class="nav-link">New Post</a>
        </div>
        <div class="nav-item">
            <a href="/User/newpost" class="nav-link">New Post</a>
        </div>
        <div class="nav-item">
            <a href="/User/newpost" class="nav-link">New Post</a>
        </div>
    </aside>

    <div class="col-10 offset-2">

        <div id="firstElementBody" class="jumbotron bg-secondary">
            <h1 class="display-4 text-center mb-4 text-primary">Welcome to your blog, <span class="text-black"><?= $username ?></span></h1>
            <div class="lead d-flex justify-content-center">
                <a class="btn btn-primary btn-lg" href="/User/newpost" role="button">New Post</a>
            </div>
        </div>



<!--TODO : influence by this comments:-->
<!--
            <div class="body-wrapper">
                <aside class="mdc-persistent-drawer mdc-persistent-drawer--open">
                    <nav class="mdc-persistent-drawer__drawer">
                        <div class="mdc-persistent-drawer__toolbar-spacer">
                            <a href="/User" class="brand-logo">
                                <img src="/Public/third_party/Dashboard/images/logo.svg" alt="logo">
                            </a>
                        </div>
                        <div class="mdc-list-group">
                            <nav class="mdc-list mdc-drawer-menu">
                                <div class="mdc-list-item mdc-drawer-item">
                                    <a class="mdc-drawer-link" href="/User">
                                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">desktop_mac</i>
                                        Dashboard
                                    </a>
                                </div>
                                <div class="mdc-list-item mdc-drawer-item">
                                    <a class="mdc-drawer-link" href="/Public/third_party/Dashboard/pages/forms/basic-forms.html">
                                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                                        Forms
                                    </a>
                                </div>

                                <div class="mdc-list-item mdc-drawer-item">
                                    <a class="mdc-drawer-link" href="/Public/third_party/Dashboard/pages/ui-features/tables.html">
                                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                                        Tables
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </nav>
                </aside>
            </div>
            -->