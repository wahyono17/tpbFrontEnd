<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">

    <title><?php echo $judul; ?></title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link <?php if($this->uri->segment(1)== 'home') echo "active" ?>" href="<?php echo base_url() ?>home" id="home">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($this->uri->segment(1)== 'tpb') echo "active" ?>" href="<?php echo base_url() ?>tpb" id="tpb">TPB Unit2</a>
        </li>
        
      </ul>
    </div>
  </nav>  