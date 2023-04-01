<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>    <div class="widget-social-footer home2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="widget widget-menu bottom">                                                                  
                                <ul class="flex link-style-1">
                                    <li><a href="home.php">Home</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="hostel-360.php">Hostel</a></li>
                                    <li><a href="map.php">Map</a></li>
                                    <li><a href="register.php">Hostelregistration</a></li>
                                    <li><a href="contact.php">Contactus</a></li>
                                </ul>
                            </div>
                        </div>                     
                        </div>
                    </div>
                </div>
            </div>
        <!-- Bottom -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Modal Popup Bid -->
    <div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40">
                    <h2 class="text-center">Your Bidding
                        Successfuly Added</h2>
                    <p class="text-center">your bid <span class="price color-popup">(2.39ETH) </span> has been listing
                        to our database</p>
                    <a href="#" class="btn btn-primary"> Watch the listings</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40">
                    <h2>Place a Bid</h2>
                    <p class="text-center">You must bid at least <span class="price color-popup">2.39 ETH</span>
                    </p>
                    <input type="text" class="form-control" placeholder="00.00 ETH">
                    <p>Enter quantity. <span class="color-popup">1 available</span>
                    </p>
                    <input type="text" class="form-control quantity" value="1">
                    <div class="hr"></div>
                    
                    <div class="d-flex justify-content-between">
                        <p> Current Bid</p>
                        <p class="text-right price color-popup"> 2.39 ETH </p>
                    </div>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#popup_bid_success"
                        data-dismiss="modal" aria-label="Close"> Place a bid</a>
                </div>
            </div>
        </div>
    </div>

        
        <script src="" async defer></script>
    </body>
</html>