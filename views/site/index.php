<?php

/* @var $this yii\web\View */
include('include/header.php'); ?>

    <!-- home-one-info -->
    <section id="home-one-info" class="clearfix home-one">
        <!-- world -->
        <div id="banner-two" class="parallax-section">
            <div class="row text-center">
                <!-- banner -->
                <div class="col-sm-12 ">
                    <div class="banner">
                        <h1 class="title">Welcome to "Dubarah" Network!</h1>
                        <h3>We links those who has a problem with others <br> who has <span style="color:#ff3a1d">the solution</span></h3>
                        <br /><br />
                        <!-- banner-form -->
                        <div class="banner-form">
                            <form action="index.php?r=site/search" method="post">
                                <!-- category-change -->
                                <div class="dropdown category-dropdown">                        
                                    <a data-toggle="dropdown" href="#"><span class="change-text">Select Category</span> <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu category-change">
                                        <?php
                                        $query = \app\models\Categories::find()->andFilterWhere([ 'parent_categorie'=> "null"]);
                                        $categories  = $query->all();
                                        foreach ($categories as $cat ){
                                            echo " <li><a href=\"#\">" .$cat['english_name']."</a></li>" ;
                                        }
                                        ?>
                                    </ul>                               
                                </div><!-- category-change -->
                            
                                <input type="text" name="search" class="form-control" placeholder="What are you looking for...?">
                                <button type="submit" class="form-control" value="Search">Search</button>
                            </form>
                        </div><!-- banner-form -->
                        
                        <!-- banner-socail -->
                        <ul class="banner-socail">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul><!-- banner-socail -->
                    </div>
                </div><!-- banner -->
            </div><!-- row -->
        </div><!-- world -->

        <div class="container">
            <div class="section category-ad text-center">
                <ul class="category-list">
                    <?php
                    foreach ($categories as $category ){
                        echo "<li class='category-item'>
                        <a href=\"index.php?r=site/categories\">
                            <div class='category-icon'><img src='".$category['icon']."' alt='images' class='img-responsive'></div>
                            <span class='category-title'>".$category['english_name']."</span>
                            <span class='category-quantity'>(1298)</span>
                        </a>
                    }
                    </li> ";
                  }
                    ?>

                </ul>               
            </div><!-- category-ad -->  

            <!-- trending-ads -->
            <div class="section trending-ads">
                <div class="section-title tab-manu">
                    <h4>Trending Ads</h4>
                     <!-- Nav tabs -->      
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#recent-ads"  data-toggle="tab">Recent Ads</a></li>
                        <li role="presentation"><a href="#popular" data-toggle="tab">Popular Ads</a></li>
                        <li role="presentation"><a href="#hot-ads"  data-toggle="tab">Hot Ads</a></li>
                    </ul>
                </div>

                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- tab-pane -->
                    <div role="tabpanel" class="tab-pane fade in active" id="recent-ads">
                        <!-- ad-item -->
                        <div class="ad-item row">
                            <!-- item-image -->
                            <div class="item-image-box col-sm-3">
                                <div class="item-image">
                                    <a href="details.html"><img src="images/listing/1.jpg" alt="Image" class="img-responsive"></a>
                                    <a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
                                </div><!-- item-image -->
                            </div>
                            
                            <!-- rending-text -->
                            <div class="item-info col-sm-9">
                                <!-- ad-info -->
                                <div class="ad-info">
                                    <h3 class="item-price">$50.00</h3>
                                    <h4 class="item-title"><a href="#">Apple TV - Everything you need to know!</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Electronics & Gedgets</a></span> /
                                        <span><a href="#">Tv & Video</a></span>
                                    </div>  
                                </div><!-- ad-info -->
                                
                                <!-- ad-meta -->
                                <div class="ad-meta">
                                    <div class="meta-content">
                                        <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                        <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                    </div>                                  
                                    <!-- item-info-right -->
                                    <div class="user-option pull-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                        <a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>                                            
                                    </div><!-- item-info-right -->
                                </div><!-- ad-meta -->
                            </div><!-- item-info -->
                        </div><!-- ad-item -->

                        <!-- ad-item -->
                        <div class="ad-item row">
                            <div class="item-image-box col-sm-3">
                                <!-- item-image -->
                                <div class="item-image">
                                    <a href="details.html"><img src="images/trending/2.jpg" alt="Image" class="img-responsive"></a>
                                </div><!-- item-image -->
                            </div><!-- item-image-box -->
                            
                            <!-- rending-text -->
                            <div class="item-info col-sm-9">
                                <!-- ad-info -->
                                <div class="ad-info">
                                    <h3 class="item-price">$250.00 <span>(Negotiable)</span></h3>
                                    <h4 class="item-title"><a href="#">Bark Furniture, Handmade Bespoke Furniture</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Home Appliances</a></span> /
                                        <span><a href="#">Sofa</a></span>
                                    </div>                                      
                                </div><!-- ad-info -->
                                
                                <!-- ad-meta -->
                                <div class="ad-meta">
                                    <div class="meta-content">
                                        <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                        <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                    </div>                                  
                                    <!-- item-info-right -->
                                    <div class="user-option pull-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                        <a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>                                            
                                    </div><!-- item-info-right -->
                                </div><!-- ad-meta -->
                            </div><!-- item-info -->
                        </div><!-- ad-item -->

                        <!-- ad-item -->
                        <div class="ad-item row">
                            <div class="item-image-box col-sm-3">
                                <!-- item-image -->
                                <div class="item-image">
                                    <a href="details.html"><img src="images/trending/4.jpg" alt="Image" class="img-responsive"></a>
                                    <a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
                                </div><!-- item-image -->
                            </div><!-- item-image-box -->
                            
                            <!-- rending-text -->
                            <div class="item-info col-sm-9">
                                <!-- ad-info -->
                                <div class="ad-info">
                                    <h3 class="item-price">$800.00</h3>
                                    <h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Books & Magazines</a></span> /
                                        <span><a href="#">Story book</a></span>
                                    </div>                                      
                                </div><!-- ad-info -->
                                
                                <!-- ad-meta -->
                                <div class="ad-meta">
                                    <div class="meta-content">
                                        <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                        <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                    </div>                                  
                                    <!-- item-info-right -->
                                    <div class="user-option pull-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>                                           
                                    </div><!-- item-info-right -->
                                </div><!-- ad-meta -->
                            </div><!-- item-info -->
                        </div><!-- ad-item -->

                        <!-- ad-item -->
                        <div class="ad-item row">
                            <div class="item-image-box col-sm-3">
                                <!-- item-image -->
                                <div class="item-image">
                                    <a href="details.html"><img src="images/trending/3.jpg" alt="Image" class="img-responsive"></a>
                                </div><!-- item-image -->
                            </div><!-- item-image-box -->
                            
                            <!-- rending-text -->
                            <div class="item-info col-sm-9">
                                <!-- ad-info -->
                                <div class="ad-info">
                                    <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                                    <h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Electronics & Gedgets</a></span> /
                                        <span><a href="#">Mobile Phone</a></span>
                                    </div>  
                                </div><!-- ad-info -->                                          
                                
                                <!-- ad-meta -->
                                <div class="ad-meta">
                                    <div class="meta-content">
                                        <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                        <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                    </div>                                  
                                    <!-- item-info-right -->
                                    <div class="user-option pull-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-suitcase"></i> </a>                                           
                                    </div><!-- item-info-right -->
                                </div><!-- ad-meta -->
                            </div><!-- item-info -->
                        </div><!-- ad-item -->      
                        
                    </div><!-- tab-pane -->
                    
                    <!-- tab-pane -->
                    <div role="tabpanel" class="tab-pane fade" id="popular">
                        
                        <div class="ad-item row">
                            <div class="item-image-box col-sm-3">
                                <!-- item-image -->
                                <div class="item-image">
                                    <a href="details.html"><img src="images/trending/3.jpg" alt="Image" class="img-responsive"></a>
                                </div><!-- item-image -->
                            </div><!-- item-image-box -->
                            
                            
                            <div class="item-info col-sm-9">
                                <!-- ad-info -->
                                <div class="ad-info">
                                    <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                                    <h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Electronics & Gedgets</a></span> /
                                        <span><a href="#">Mobile Phone</a></span>
                                    </div>  
                                </div><!-- ad-info -->                                          
                                
                                <!-- ad-meta -->
                                <div class="ad-meta">
                                    <div class="meta-content">
                                        <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                        <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                    </div>                                  
                                    <!-- item-info-right -->
                                    <div class="user-option pull-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-suitcase"></i> </a>                                           
                                    </div><!-- item-info-right -->
                                </div><!-- ad-meta -->
                            </div><!-- item-info -->
                        </div><!-- ad-item -->  
                        
                        <!-- ad-item -->
                        <div class="ad-item row">
                            <div class="item-image-box col-sm-3">
                                <!-- item-image -->
                                <div class="item-image">
                                    <a href="details.html"><img src="images/trending/2.jpg" alt="Image" class="img-responsive"></a>
                                </div><!-- item-image -->
                            </div><!-- item-image-box -->
                            
                            <!-- rending-text -->
                            <div class="item-info col-sm-9">
                                <!-- ad-info -->
                                <div class="ad-info">
                                    <h3 class="item-price">$250.00 <span>(Negotiable)</span></h3>
                                    <h4 class="item-title"><a href="#">Bark Furniture, Handmade Bespoke Furniture</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Home Appliances</a></span> /
                                        <span><a href="#">Sofa</a></span>
                                    </div>                                      
                                </div><!-- ad-info -->
                                
                                <!-- ad-meta -->
                                <div class="ad-meta">
                                    <div class="meta-content">
                                        <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                        <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                    </div>                                  
                                    <!-- item-info-right -->
                                    <div class="user-option pull-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                        <a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>                                            
                                    </div><!-- item-info-right -->
                                </div><!-- ad-meta -->
                            </div><!-- item-info -->
                        </div><!-- ad-item -->
                        
                        <div class="ad-item row">
                            <!-- item-image -->
                            <div class="item-image-box col-sm-3">
                                <div class="item-image">
                                    <a href="details.html"><img src="images/trending/1.jpg" alt="Image" class="img-responsive"></a>
                                    <a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
                                </div><!-- item-image -->
                            </div>
                            
                            <!-- rending-text -->
                            <div class="item-info col-sm-9">
                                <!-- ad-info -->
                                <div class="ad-info">
                                    <h3 class="item-price">$50.00</h3>
                                    <h4 class="item-title"><a href="#">Apple TV - Everything you need to know!</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Electronics & Gedgets</a></span> /
                                        <span><a href="#">Tv & Video</a></span>
                                    </div>  
                                </div><!-- ad-info -->
                                
                                <!-- ad-meta -->
                                <div class="ad-meta">
                                    <div class="meta-content">
                                        <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                        <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                    </div>                                  
                                    <!-- item-info-right -->
                                    <div class="user-option pull-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                        <a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>                                            
                                    </div><!-- item-info-right -->
                                </div><!-- ad-meta -->
                            </div><!-- item-info -->
                        </div><!-- ad-item -->

                        <!-- ad-item -->
                        <div class="ad-item row">
                            <div class="item-image-box col-sm-3">
                                <!-- item-image -->
                                <div class="item-image">
                                    <a href="details.html"><img src="images/trending/4.jpg" alt="Image" class="img-responsive"></a>
                                    <a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
                                </div><!-- item-image -->
                            </div><!-- item-image-box -->
                            
                            <!-- rending-text -->
                            <div class="item-info col-sm-9">
                                <!-- ad-info -->
                                <div class="ad-info">
                                    <h3 class="item-price">$800.00</h3>
                                    <h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Books & Magazines</a></span> /
                                        <span><a href="#">Story book</a></span>
                                    </div>                                      
                                </div><!-- ad-info -->
                                
                                <!-- ad-meta -->
                                <div class="ad-meta">
                                    <div class="meta-content">
                                        <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                        <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                    </div>                                  
                                    <!-- item-info-right -->
                                    <div class="user-option pull-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>                                           
                                    </div><!-- item-info-right -->
                                </div><!-- ad-meta -->
                            </div><!-- item-info -->
                        </div><!-- ad-item -->                                  
                    </div><!-- tab-pane -->

                    <!-- tab-pane -->
                    <div role="tabpanel" class="tab-pane fade" id="hot-ads">
                        
                        <div class="ad-item row">
                            <div class="item-image-box col-sm-3">
                                <!-- item-image -->
                                <div class="item-image">
                                    <a href="details.html"><img src="images/trending/4.jpg" alt="Image" class="img-responsive"></a>
                                    <a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
                                </div><!-- item-image -->
                            </div><!-- item-image-box -->
                            
                            <!-- rending-text -->
                            <div class="item-info col-sm-9">
                                <!-- ad-info -->
                                <div class="ad-info">
                                    <h3 class="item-price">$800.00</h3>
                                    <h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Books & Magazines</a></span> /
                                        <span><a href="#">Story book</a></span>
                                    </div>                                      
                                </div><!-- ad-info -->
                                
                                <!-- ad-meta -->
                                <div class="ad-meta">
                                    <div class="meta-content">
                                        <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                        <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                    </div>                                  
                                    <!-- item-info-right -->
                                    <div class="user-option pull-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>                                           
                                    </div><!-- item-info-right -->
                                </div><!-- ad-meta -->
                            </div><!-- item-info -->
                        </div><!-- ad-item -->
                        
                        <!-- ad-item -->
                        <div class="ad-item row">
                            <!-- item-image -->
                            <div class="item-image-box col-sm-3">
                                <div class="item-image">
                                    <a href="details.html"><img src="images/trending/1.jpg" alt="Image" class="img-responsive"></a>
                                    <a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
                                </div><!-- item-image -->
                            </div>
                            
                            <!-- rending-text -->
                            <div class="item-info col-sm-9">
                                <!-- ad-info -->
                                <div class="ad-info">
                                    <h3 class="item-price">$50.00</h3>
                                    <h4 class="item-title"><a href="#">Apple TV - Everything you need to know!</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Electronics & Gedgets</a></span> /
                                        <span><a href="#">Tv & Video</a></span>
                                    </div>  
                                </div><!-- ad-info -->
                                
                                <!-- ad-meta -->
                                <div class="ad-meta">
                                    <div class="meta-content">
                                        <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                        <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                    </div>                                  
                                    <!-- item-info-right -->
                                    <div class="user-option pull-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                        <a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>                                            
                                    </div><!-- item-info-right -->
                                </div><!-- ad-meta -->
                            </div><!-- item-info -->
                        </div><!-- ad-item -->
                        <!-- ad-item -->
                        

                        <div class="ad-item row">
                            <div class="item-image-box col-sm-3">
                                <!-- item-image -->
                                <div class="item-image">
                                    <a href="details.html"><img src="images/trending/3.jpg" alt="Image" class="img-responsive"></a>
                                </div><!-- item-image -->
                            </div><!-- item-image-box -->
                            
                            <!-- ad-item -->
                            <div class="item-info col-sm-9">
                                <!-- ad-info -->
                                <div class="ad-info">
                                    <h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
                                    <h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Electronics & Gedgets</a></span> /
                                        <span><a href="#">Mobile Phone</a></span>
                                    </div>  
                                </div><!-- ad-info -->                                          
                                
                                <!-- ad-meta -->
                                <div class="ad-meta">
                                    <div class="meta-content">
                                        <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                        <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                    </div>                                  
                                    <!-- item-info-right -->
                                    <div class="user-option pull-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-suitcase"></i> </a>                                           
                                    </div><!-- item-info-right -->
                                </div><!-- ad-meta -->
                            </div><!-- item-info -->
                        </div><!-- ad-item -->  
                        
                        <!-- ad-item -->
                        <div class="ad-item row">
                            <div class="item-image-box col-sm-3">
                                <!-- item-image -->
                                <div class="item-image">
                                    <a href="details.html"><img src="images/trending/2.jpg" alt="Image" class="img-responsive"></a>
                                </div><!-- item-image -->
                            </div><!-- item-image-box -->
                            
                            <!-- rending-text -->
                            <div class="item-info col-sm-9">
                                <!-- ad-info -->
                                <div class="ad-info">
                                    <h3 class="item-price">$250.00 <span>(Negotiable)</span></h3>
                                    <h4 class="item-title"><a href="#">Bark Furniture, Handmade Bespoke Furniture</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Home Appliances</a></span> /
                                        <span><a href="#">Sofa</a></span>
                                    </div>                                      
                                </div><!-- ad-info -->
                                
                                <!-- ad-meta -->
                                <div class="ad-meta">
                                    <div class="meta-content">
                                        <span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
                                        <a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
                                    </div>                                  
                                    <!-- item-info-right -->
                                    <div class="user-option pull-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                        <a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>                                            
                                    </div><!-- item-info-right -->
                                </div><!-- ad-meta -->
                            </div><!-- item-info -->
                        </div><!-- ad-item -->                                  
                    </div><!-- tab-pane -->
                </div>
            </div><!-- trending-ads --> 

            <!-- cta -->
            <div class="cta text-center">
                <div class="row">
                    <!-- single-cta -->
                    <div class="col-sm-4">
                        <div class="single-cta">
                            <a href="index.php?r=site/ask-dubarji">
                                <!-- cta-icon -->
                                <div class="cta-icon icon-secure">
                                    <img src="images/icon/old/ask.png" alt="Icon" class="img-responsive">
                                </div><!-- cta-icon -->

                                <h4>Ask Dubarji</h4>
                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
                            </a>
                        </div>
                    </div><!-- single-cta -->

                    <!-- single-cta -->
                    <div class="col-sm-4">
                        <div class="single-cta">
                            <a href="#">
                                <!-- cta-icon -->
                                <div class="cta-icon icon-support">
                                    <img src="images/icon/old/housing.png" alt="Icon" class="img-responsive">
                                </div><!-- cta-icon -->

                                <h4>Donate</h4>
                                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
                            </a>
                        </div>
                    </div><!-- single-cta -->

                    <!-- single-cta -->
                    <div class="col-sm-4">
                        <div class="single-cta">
                            <a href="index.php?r=site/suggestions">
                                <!-- cta-icon -->
                                <div class="cta-icon icon-trading">
                                    <img src="images/icon/old/Suggestions.png" alt="Icon" class="img-responsive">
                                </div><!-- cta-icon -->

                                <h4>Suggestions</h4>
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
                            </a>
                        </div>
                    </div><!-- single-cta -->
                </div><!-- row -->
            </div><!-- cta -->  
        </div><!-- container -->
    </section><!-- home-one-info -->
    
<?php include('include/footer.php'); ?>