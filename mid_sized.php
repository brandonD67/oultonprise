<?php
include 'includes/header.php';
?>

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><a  href="cars.php">Cars</a></li>
        <li class="active">Mid-Sized</li>
    </ol>

    <div class="row">

        <!-- Article main content -->
        <article class="col-sm-8 maincontent">
            <header class="page-header">
                <h1 class="page-title">Mid-Sized</h1>
            </header>
            <h3><img src="AudiA6.png" alt="" class="img-rounded" width="400" ></h3>
            <h3>$19.99/Day</h3>
            <!--<p><img src="assets/images/mac.jpg" alt="" class="img-rounded pull-right" width="300" > </p> -->
            <p>Our mid-sized cars run at a medium rate and will get where you need to go!</p>
            
            <button type="button" class="btn btn-primary btn-lg btn-block">RENT NOW</button>
        </article>
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class="col-sm-4 sidebar sidebar-right">

            <div class="widget">
                <h4>Cars</h4>
                <ul class="list-unstyled list-spaces">
                     <div class="col-lg-12 col-md-8 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="ToyotaP.png" alt="A6">
        <div class="overlay">
           <h2>Economy</h2>
           <a class="info" href="economy.php">Rent Economy<br>$9.99</a>
        </div>
    </div>
                
</div> <br>
           <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
    <div class="hovereffect">
        <img class="img-responsive" src="LRD.png" alt="Discovery">
        <div class="overlay">
           <h2>S.U.V.</h2>
           <a class="info" href="suv.php">Rent S.U.V.<br>$24.99</a>
        </div>
    </div>
</div>
                </ul>
            </div>

        </aside>
        <!-- /Sidebar -->

    </div>
</div>	<!-- /container -->

<?php
include '/includes/footer.php';
