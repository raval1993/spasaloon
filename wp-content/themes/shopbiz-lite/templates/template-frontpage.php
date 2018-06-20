<?php 
/**
Template Name: Home Page
*/
get_header(); 
		
		//=========== Get Home Slider ===========//
		get_template_part('sections/home','slider');
		
?>
<style>
  #service .ta-heading h3.ta-heading-inner {
    color:  ;
  }
  #service .ta-heading .ta-heading-inner::before {
    border-color:  ;
  }  
</style>

<section id="service" class="ta-section text-center" style="background:  ;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 wow fadeInDown animated padding-bottom-50 text-center">
        <div class="ta-heading">
          <h3 class="ta-heading-inner">Our Services</h3>        </div>
        
				<p style="color:  ;">laoreet ipsum eu laoreet. ugiignissimat Vivamus dignissim feugiat erat sit amet convallis.</p>

			      </div>
    </div>
    <div class="row">
      <div id="shopbiz_service_widget-4" class="ta-widget widget_shopbiz_service_widget">
       <div class="col-sm-4 col-md-4">
       <div class="ta-service">
            

                <img class="img-responsive" src="https://themeansar.com/demo/wp/shopbiz/spa/wp-content/uploads/2016/11/service1.jpg">
                <div class="ta-service-inner">
				<h3 class="widgettitle">Massage</h3>                    <p>Donec sed augue semper, malesuada nisl vel, condimentum purus.</p>
                                <a class="btn btn-theme margin-bottom-20" href="#" target="_self">Read More</a>
                 
                    
            </div>
          </div>
        </div>

        </div><div id="shopbiz_service_widget-3" class="ta-widget widget_shopbiz_service_widget">
       <div class="col-sm-4 col-md-4">
       <div class="ta-service">
            

                <img class="img-responsive" src="https://themeansar.com/demo/wp/shopbiz/spa/wp-content/uploads/2016/11/service2.jpg">
                <div class="ta-service-inner">
				<h3 class="widgettitle">Stones Massage</h3>                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a class="btn btn-theme margin-bottom-20" href="#" target="_self">Read More</a>
                 
                    
            </div>
          </div>
        </div>

        </div><div id="shopbiz_service_widget-2" class="ta-widget widget_shopbiz_service_widget">
       <div class="col-sm-4 col-md-4">
       <div class="ta-service">
            

                <img class="img-responsive" src="https://themeansar.com/demo/wp/shopbiz/spa/wp-content/uploads/2016/11/service3.jpg">
                <div class="ta-service-inner">
				<h3 class="widgettitle">Skin Care</h3>                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a class="btn btn-theme margin-bottom-20" href="#" target="_self">Read More</a>
                 
                    
            </div>
          </div>
        </div>

        </div>    </div>
  </div>
</section>


<?php 

get_footer();

?>
