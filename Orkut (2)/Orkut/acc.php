<?php include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>

<style>
    @import url('https://fonts.googleapis.com/css?family=Nunito:400,700');


* {
  transition: all 0.3s ease-out;
}

html,
body {
  height: 100%;
  font-family: "Nunito", sans-serif;
  font-size: 16px;
}

.container {
  width: 100%;
  height: 100%;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}

h3 {
  color: #262626;
  font-size: 17px;
  line-height: 24px;
  font-weight: 700;
  margin-bottom: 4px;
}

p {
  font-size: 17px;
  font-weight: 400;
  line-height: 20px;
  color: #666666;

  &.small {
    font-size: 14px;
  }
}

.go-corner {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  width: 32px;
  height: 32px;
  overflow: hidden;
  top: 0;
  right: 0;
  background-color: #00838d;
  border-radius: 0 4px 0 32px;
}

.go-arrow {
  margin-top: -4px;
  margin-right: -4px;
  color: white;
  font-family: courier, sans;
}

.card1 {
  display: block;
  position: relative;
  max-width: 262px;
  background-color: #f2f8f9;
  border-radius: 4px;
  padding: 32px 24px;
  margin: 12px;
  text-decoration: none;
  z-index: 0;
  overflow: hidden;

  &:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -16px;
    right: -16px;
    background: #00838d;
    height: 32px;
    width: 32px;
    border-radius: 32px;
    transform: scale(1);
    transform-origin: 50% 50%;
    transition: transform 0.25s ease-out;
  }

  &:hover:before {
    transform: scale(21);
  }
}

.card1:hover {
  p {
    transition: all 0.3s ease-out;
    color: rgba(255, 255, 255, 0.8);
  }
  h3 {
    transition: all 0.3s ease-out;
    color: #ffffff;
  }
}

</style>

</head>
<body><br><br><br><br>
<div class="container">
    <center>
    <div class="row">
     <div class="col-lg-6">
     <a class="card1" href="#">
    <h3>This is option 1</h3>
    <p class="small">Card description with lots of great facts and interesting details.</p>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
     </div>

     <div class="col-lg-6">
     <a class="card1" href="#">
    <h3>This is option 1</h3>
    <p class="small">Card description with lots of great facts and interesting details.</p>
    <div class="go-corner" href="#">
      <div class="go-arrow">
        →
      </div>
    </div>
  </a>
     </div>
    </div>
    </center>
    </div>


    
</body>
</html>