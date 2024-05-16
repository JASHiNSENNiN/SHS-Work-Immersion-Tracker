
<!doctype html>
<html>
<head>
<title>tracking....</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"> -->
<!-- [if lt IE 9]> -->
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<!-- <![endif] -->
 <!--    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/loginform.css"> -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
<style>
html {
  background: #001000;
  font-family: "Roboto Condensed", sans-serif;
}

element.caption {
  background-color: green;
  color: black;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: fit-content;
  margin-top: 30vh;
  font-size: 30px;
  transition-duration: 0.3s;
  border: 2px solid green;
}

element.caption:hover {
  background-color: black;
  color: green;
  border: 2px solid green;
}

div.range {
  animation-name: load;
  animation-duration: 5s;
  background-color: green;
  height: 5px;
  width: 0px;
  display: block;
  margin-top: 20px;
  margin-left: 25%;
}

@keyframes load {
  0% {
    width: 0;
  }
  20%,
  25% {
    width: 10%;
  }
  40% {
    width: 15%;
  }
  80% {
    width: 45%;
  }
  95% {
    width: 46%;
  }
  99% {
    width: 50%;
  }
  100% {
    display: none;
  }
}

</style>
</head>
<body>
<element class="caption">YOU ARE TRACKING </element>
<div class="range"></div>
<script>
    /*Some javascript to change the caption after animation...*/

setTimeout(function () {
  var caption = document.querySelector(".caption");

  caption.innerHTML = "DONE";
  caption.style.color = "green";
  caption.style.background = "transparent";
  caption.style.border = "2px solid transparent";
  /*Easter egg over here....*/
  /*You should wait a while until the DONE disappear.*/
  setTimeout(function () {
    caption.innerHTML = "";
    setTimeout(function () {
      caption.style.color = "red";
      caption.innerHTML = "=";
      setTimeout(function () {
        caption.innerHTML = "=)";
        setTimeout(function () {
          caption.innerHTML = "=";
          setTimeout(function () {
            caption.innerHTML = "";
          }, 500);
        }, 1500);
      }, 500);
    }, 1000);
  }, 1000);
}, 4700);

</script>
</body>
</html>