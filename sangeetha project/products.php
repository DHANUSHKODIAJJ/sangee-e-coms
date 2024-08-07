<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sangee Shopify | Online Shopping Site for Women</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body class="color1">
<!--header -->
 <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<!--header ends -->
<div class="container " style="margin-top:65px">
         <!--jumbutron start-->
        <div class="jumbotron text-center">
            <h1>Welcome to Sangee Shopify!</h1>
            <p>We have wide range of products for you.No need to hunt around,we have all in one place</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
    <hr/>
    <!--menu list-->
    <div class="row text-center" id="watch">
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="https://www.titan.co.in/dw/image/v2/BKDD_PRD/on/demandware.static/-/Sites-titan-master-catalog/default/dw5e858117/images/Titan/Catalog/95141QM01_1.jpg?sw=800&sh=800" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6>Titan blue</h6>
                    <h6>Price :Rs 3000</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(1)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="https://www.titan.co.in/dw/image/v2/BKDD_PRD/on/demandware.static/-/Sites-titan-master-catalog/default/dw5487e70b/images/Titan/Catalog/2606WM08_1.jpg?sw=800&sh=800" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Titan pink</h6>
                    <h6>Price :Rs 2500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(2)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } else {
                        ?>
                        <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                         }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="https://www.titan.co.in/dw/image/v2/BKDD_PRD/on/demandware.static/-/Sites-titan-master-catalog/default/dw384106f8/images/Titan/Catalog/9937WM01_1.jpg?sw=800&sh=800" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Pink bral</h6>
                    <h6>Price :Rs 3500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(3)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="https://www.titan.co.in/dw/image/v2/BKDD_PRD/on/demandware.static/-/Sites-titan-master-catalog/default/dw710169a4/images/Titan/Catalog/2673WM04F_1.jpg?sw=800&sh=800" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Titan Watch</h6>
                    <h6>Price :Rs 1800</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(4)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center" id="shirt">
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="data:image/jpeg;base64,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" alt="" class="img-fluid pb-1"  >
                    <div class="figure-caption">
                    <h6>RIYYA BRAND</h6>
                    <h6>Price :Rs 1800</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(5)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="https://www.suratfabric.com/wp-content/uploads/2021/02/Tejaswee-Stylishta-Vol-11-Kurti-Wholesale-Catalog-4-Pcs-7.jpg" alt="" class="img-fluid pb-1" >
                    <div class="figure-caption">
                    <h6>Tejaswee Stylishta</h6>
                    <h6>Price :Rs 2500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(6)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="data:image/jpeg;base64,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" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>KURTI </h6>
                        <h6>Price :Rs 500</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(7)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="https://urbanjaipur.com/wp-content/uploads/2023/05/chudidar-kurta.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>WHITE CHURIDAR</h6>
                        <h6>Price :Rs 2300</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(8)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="shoes" >
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="https://thepremiummart.pk/cdn/shop/files/WhatsApp_Image_2024-02-28_at_17.55.08_815fe2b8-2ef4-4105-a25a-904978c3e0cd.jpg?v=1720021071&width=1445" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Green bag</h6>
                            <h6>Price :Rs 8000</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(9)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="https://5.imimg.com/data5/SELLER/Default/2022/6/FD/ZI/LB/155238252/party-wear-ladies-hand-bag.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Goldy</h6>
                            <h6>Price :Rs 7500</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(10)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                     <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                     <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="https://images-cdn.ubuy.co.in/6538723e9cdcd87a947e4a71-womens-purses-and-handbags-shoulder-bags.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>WHITESSSS</h6>
                            <h6>Price :Rs 7000</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(11)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3" >
                    <div class="card">
                        <img src="https://5.imimg.com/data5/ANDROID/Default/2022/7/ZK/PI/QH/29603120/product-jpeg-500x500.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                        <h6>BRAND KINGS</h6>
                    <h6>Price :Rs 6000</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(12)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" id="headphones">
                    <div class="col-md-3 col-6 py-3" >
                        <div class="card">
                            <img src="https://www.theamethyststore.com/cdn/shop/products/AMS-102-2363.jpg?v=1639465971&width=1800" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Kalyani Long Necklace</h6>
                                <h6>Price :Rs 22,500</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(13)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="https://yellowchimes.com/cdn/shop/products/61bsil4yRwL_cb8ac81a-5215-4c36-bf60-45af689c78cb.jpg?v=1688870846" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Yellow chimes</h6>
                                <h6>Price :Rs 4500</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(14)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=14" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="https://carltonlondon.co.in/cdn/shop/files/siln226_2.jpg?v=1701327166&width=1500" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Carlton</h6>
                                <h6>Price :Rs 10,500</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(15)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=15" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                   <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="https://assets.ajio.com/medias/sys_master/root/20230727/vY2w/64c2506ba9b42d15c97260c0/-473Wx593H-463482642-gold-MODEL.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>neckles neck</h6>
                                <h6>Price :Rs 15,000</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(16)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
      <!--menu list ends-->
      <!-- footer-->
        <?php include 'includes/footer.php'?>
      <!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>