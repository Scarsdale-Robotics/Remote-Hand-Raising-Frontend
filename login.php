<?php
require_once 'head.php'
?>
<body>
<?php
require_once 'nav.php'
?>

<div class="container">
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
        <h2 id="inputformsbox">Log In</h2>
    </div>
    <div class="row justify-content-center">
         <h6 id="smalltext">Enter Credentials to Login</h6>
    </div>
    <br>
    <div class="row justify-content-center">

<form action="#" method="post">

  <div class="form-group">
    <label id="inputformsbox" for="exampleInputEmail1">Email Address</label>
    <input id="inputformsinput" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label id="inputformsbox" for="password1">Password</label>
    <input id="inputformsinput" type="password" class="form-control" id="password1" placeholder="" required name=up>
  </div>


  <div class="col text-center">
    <button id="inputformsbtn" type="submit" class="btn btn-custom">Submit</button>
  </div>

</form>

    </div>
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




