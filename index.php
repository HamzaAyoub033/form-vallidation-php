<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <title></title>
</head>
<body>
<div class="pagewrap">
  <form class="form" id="form">
    <h3 class="form__title">Login</h3>
    <div class="container">
      <input class="container__input" type="text" id="username" name="username" value="" required>
      <label id="userLabel" for="username" class="container__label">Username</label>
    </div>
    <div class="container">
      <input class="container__input" type="password" id="pass" name="password" value="" required>
      <label id="passLabel" for="pass" class="container__label">Password</label>
    </div>
    <button class="form__submit" id="submit" type="button" value="submit">Submit</button>
  </form>
</div>
</body>
<script type="text/javascript">
  function validate() {
var username = document.getElementById('username').value;
var password = document.getElementById('pass').value;
  
  if (username === "" || username === null) {
    intensify($('#userLabel'));
        return false;
  }
  
  if (password === "" || password === null) {
       intensify($('#passLabel'));
        return false;
  }
}

function intensify(intense) {
  intense.addClass('animated shakeit').delay(6000).queue(function(){
          intense.removeClass('animated shakeit').dequeue();
        });
}

function clicked() {
  $('button').addClass('clicked').delay(200).queue(function(){
    $('button').removeClass('clicked').dequeue();
  });
}

var submit = document.getElementById('submit');
submit.addEventListener('click', clicked);
submit.addEventListener('click', validate);
</script>
</html>
