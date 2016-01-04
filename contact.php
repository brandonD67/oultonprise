<?php
include 'includes/header.php';
?>

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">About</li>
    </ol>

    <div class="row">

        <!-- Article main content -->
        <article class="col-sm-9 maincontent">
            <header class="page-header">
                <h1 class="page-title">Contact us</h1>
            </header>

            <p>
                Thank you for visiting OultonPrise! Your feedback is very important to us. We welcome all of your comments and suggestions.
            </p>
            <br>
            <form>
                <div class="row">
                    <div class="col-sm-4">
                        <input class="form-control" type="text" placeholder="Name">
                    </div>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" placeholder="Email">
                    </div>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" placeholder="Phone">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <textarea placeholder="Type your message here..." class="form-control" rows="9"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <label class="checkbox"><input type="checkbox"> Sign up for newsletter</label>
                    </div>
                    <div class="col-sm-6 text-right">
                        <input class="btn btn-action" type="submit" value="Send message">
                    </div>
                </div>
            </form>

        </article>
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class="col-sm-3 sidebar sidebar-right">

            <div class="widget">
                <h4>Address</h4>
                <address>
                    4 Flanders Ct, Moncton, NB E1C 0K6
                </address>
                <h4>Phone:</h4>
                <address>
                    (506)555-6767
                </address>
            </div>

        </aside>
        <!-- /Sidebar -->

    </div>
</div>	<!-- /container -->

<section class="container-full top-space">
    <div id="map"></div>
</section>

<?php
include '/includes/footer.php';
