<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    .container {
      left: auto;
      display: flex;
      flex-wrap: nowrap;
    }
    .green-box{
      width: 100px;
      height: 100px;
      background-color: black;
      color: white;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="green-box">1</div>
  </div>
  <div class="container">
    <div class="green-box">2</div>
    <div class="green-box">2</div>
  </div>
    <div class="container">
        <div class="green-box">3</div>
        <div class="green-box">3</div>
        <div class="green-box">3</div>
    </div>
</body>
</html>