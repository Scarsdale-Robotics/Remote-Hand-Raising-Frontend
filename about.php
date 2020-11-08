<!doctype html>
<html lang="en">

<head>
<?php
require 'meta.php';
?>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index"> <img alt="logo" src="logo.png" width="30" height="30"></a>
        <input class="mr-auto" type="text" name="search" placeholder="Search">
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#collapse"
            aria-controls="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="jumbotron jumbotron-fluid">
        <div class="backlogo"></div>
        
        <div class="img-overlay">
            <div id="hmm">
                <h1>About Us</h1>
            </div>
            <div class="btn-group" id="flip">
                <button id="f" class="btn" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Category
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="https://www.youtube.com/watch?v=oHg5SJYRHA0">Subdomain</a>
                    <a class="dropdown-item" href="#">Testing</a>
                    <a class="dropdown-item" href="#">Testing</a>
                    <a class="dropdown-item" href="#">Testing</a>
                    <a class="dropdown-item" href="#">Testing</a>
                </div>
            </div>
        </div>
    </div>

    <div id = "recent">
        <p>Recent</p>
    </div>
    
    <div id ="help" class="container-fluid">
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>