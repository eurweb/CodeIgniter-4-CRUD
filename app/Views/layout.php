<!doctype html>
<html>
<head>
  <title>CRUD  CodeIgniter 4</title>

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style type="text/css">
  .mb20{
     margin-bottom: 20px;
  }
  .actionbutton{
     width: 100%;
     height: 55px;
  }
  .errors{
     color: red;
  }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <?= $this->renderSection('content') ?>
      </div>
    </div>


     <div class="row">
      <div class="col-md-12"> alll view 
         <?= $this->renderSection('footer') ?>
      </div>
    </div>

  </div>
</body>
</html>