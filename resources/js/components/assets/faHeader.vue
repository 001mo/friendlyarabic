<template>
    <nav class="navbar navbar-expand-md fixed-top navbar-light shadow-sm px-md-5">
        <div class="p-2 mr-4">
            <a href="#">
                <img src="images/fa-logo.png" width="50px" height="35px">
            </a>
        </div>

        <div class="navbar-nav flex-row d-md-none">
            <slot name="outCollapse" ref="icons"></slot>
            <button type="button" class="navbar-toggler border-0" data-toggle="collapse" data-target="#nav" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse justify-content-md-between" id="nav">
            <ul class="navbar-nav">
                <li><a href="#" class="nav-link" v-html="'Membership'"></a></li>
                <li><a href="#" class="nav-link" v-html="'Teachers'"></a></li>
                <li><a href="#" class="nav-link" v-html="'About us'" ref="test2"></a></li>
                <li><a href="#" class="nav-link" v-html="'Contact us'" ref="test"></a></li>
            </ul>

            <slot name="inCollapse"></slot>
        </div>
        <div class="d-none d-md-flex">
            <slot name="outCollapse"></slot>
        </div>
    </nav>
</template>
