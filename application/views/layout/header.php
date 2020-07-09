<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>

<body> 
<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="row d_flex">
                <div class="col-md-3">
                    <a class="navbar-brand">
            <img src="<?=base_url()?>assets/img/Coronavirus-Updates.png" height="50%" width="120%"alt="">
        </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="col-md-9"> 
                        <div class="navbar-nav">
                            <strong><a class="nav-item nav-link active" style="color:coral;"href="<?=site_url('coronavirus/index')?>">Home</a></strong>
                            <strong><a class="nav-item nav-link active" style="color:coral;"href="<?=site_url('caseupdate')?>">Coronavirus Cases</a></strong>
                            <strong><a class="nav-item nav-link active" style="color:coral;"href="<?=site_url('coronavirus/about')?>">About Covid-19</a></strong>
                            <strong><a class="nav-item nav-link active" style="color:coral;"href="<?=site_url('coronavirus/symptoms')?>">Symptoms</a></strong>
                            <strong><a class="nav-item nav-link active" style="color:coral;"href="<?=site_url('coronavirus/prevention')?>">Prevention</a></strong>
      </div>
    </div>
  </div>
    </div>
    </nav>

</div>
<div class="container-fluid">
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?=base_url('assets/img/banner1.jpg')?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=base_url('assets/img/banner2.jpg')?>" alt="Second slide" width="50%">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=base_url('assets/img/banner3.jpg')?>" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=base_url('assets/img/banner4.jpg')?>" alt="Fourth slide">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</header>
</body>