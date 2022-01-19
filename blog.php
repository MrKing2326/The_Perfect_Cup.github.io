<?php
//Initiating Session...
session_start();

if (isset($_SESSION['login'])) {
    
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog - The Perfect Cup</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">2326 Melrose Place | Beverly Hills, HR 121004 | +91 7678140996</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">

                <h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
                
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/cc.jpg" alt="">
                    <h2>Cappuccino COFFEE 
                        <br>
                        <small>October 13, 2021</small>
                    </h2>
                    <p><em>"Start your morning off with this great recipe for hot coffee with Cappuccino and butter."</em></p>
                    <p>Cappuccino is a latte made with more foam than steamed milk, often with a sprinkle of cocoa powder or cinnamon on top. Sometimes you can find variations that use cream instead of milk or ones that throw in flavor shot, as well.</p>

                    <h3>Recipe</h3>
                    <h4><strong>What You’ll Need:</strong></h4>
                    
                    <p>Espresso</p>
                      <p>  Steamed milk</p>
                    <p>Foamed Milk</p>
                    
    
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mymodal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/ic.jpg" alt="">
                    <h2>IRISH COFFEE
                        <br>
                        <small>October 14, 2021</small>
                    </h2>
                    <p><em>"Take the edge off with a Fresh Hot cup of coffee made with Irish Whiskey and Irish Cream."</em></p>
                    <h3>Recipe</h3>
                    <h4><strong>What You’ll Need:</strong></h4>
                    
                    <p>2 teaspoons sugar</p>
                    <p>2 cups hot strong brewed coffee (French or another dark roast)</p>
                    <p>2 ounces Irish whiskey</p>
                   <p>1/4 cup heavy whipping cream</p>

                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mymodal2">Read More</button>                    
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/fcl.jpg" alt="">
                    <h2>FROZEN CARAMEL LATTE
                        <br>
                        <small>October 15, 2021</small>
                    </h2>
                    <p><em>"Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of the day."</em></p>

                    <h3>Recipe</h3>
                    <h4><strong>What You’ll Need:</strong></h4>
                    
                    <p>3 fluid ounces brewed espresso</p>
                    <p>1 tablespoon caramel sauce</p>
                    <p>2 tablespoons white sugar</p>
                    <p>¾ cup milk</p>
                    <p>1½ cups ice cubes</p>
                    <p>2 tablespoons whipped cream</p>

                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mymodal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->



    <!-- Modal 1 -->
    <div id="mymodal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal Content -->
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Cappuccino Coffee</h4>
                </div>
                <div class="modal-body">
                <h3>Steps to follow : </h3>
                <p>1. Foam and texture the required quantity of milk - Remember! We want more foam than steamed milk</p>
                <p>2. Brew a single or double espresso (as per taste or order) directly into your serving cup</p>
                <p>3. Gently swirl the milk to release any large air bubbles - tap the milk jug against a counter to remove any stubborn bubbles</p>
                <p>4. Pour the milk over the espresso from a low height for a smooth drink</p>
                <p>5. Finish by giving the milk a slight 'wiggle' to ensure foam transfers from milk jug to the cup to top off your Cappuccino</p>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Close
                    </button>
                </div>
            </div>
        </div>
    </div>

   <!-- Modal 2 -->
    <div id="mymodal2" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal Content -->
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Irish Coffee</h4>
                </div>
                <div class="modal-body">
                    <h3>Steps to follow : </h3>
                    
                        <p>1. Heat Up the Mug</p>
                        <p>2. Mix the Libations</p>
                        <p>3. Whip the Cream</p>
                        <p>4. Add the Crown</p>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Close
                    </button>
                </div>
            </div>
        </div>
    </div>

   <!-- Modal 3 -->
    <div id="mymodal3" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal Content -->
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Frozen Caramel Latte</h4>
                </div>
                <div class="modal-body">
                    <h3>Steps to follow : </h3>
                    <p> 1. Place the espresso, caramel sauce, and sugar into a blender pitcher.</p>
                    <p> 2. Blend on high until the caramel and sugar dissolve into the espresso.</p>
                    <p> 3. Pour in the milk and add the ice; continue blending until smooth and frothy.</p>
                    <p> 4. Top with whipped cream to serve.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"> Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2021<br>
                    Developed by Mr. Vikas Bharti</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php 

} else {

    header("location:login.php ");
}
?>