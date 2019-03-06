<?php 
/**
* Template Name: front-page
**/

get_header(); ?>

<div class="wrapper">
      <div class="tp-bgimg">
            <h1 class="main-heading orbitron">Space exploration <br>with Be</h1>
            <img class="satellite" src="<?php echo get_bloginfo( 'template_directory' );?>/images/universe-slider-satellite.png" alt="satellite">
            <div class="sat-text-wrapper"> 
                  <h2 class="white-text sat-h orbitron">SATELLITES</h2>
                  <p class="p-text sat-p">Vivamus in diam turpis. In condimentum maximus tristique. Maecenas non laoreet odio. Fusce lobortis porttitor purus, vel vestibulum libero pharetra vel. Pellentesque lorem augue, fermentum nec nibh et, fringilla sollicitudin orci.</p>
            </div>
            <div class="aux-wrapper">
                  <img class="line" src="<?php echo get_bloginfo( 'template_directory' );?>/images/universe-slider-line.png" alt="line" style="float:left; margin-right: 10px;">
                  <p class="line-p">Lorem ipsum dolor sit amet, <br>
                   consectetur adipisicing elit, <br>
                  sed do eiusmod tempor</p>
            </div>
      </div><!-- end tp-bgimg -->
      <div class="icon-wrapper" id="Howtostart">
            <div class="section-wrapper">
                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/universe-icon3.png" alt="microscope">
                  <h3 class="white-text orbitron">Study</h3>
                  <p class="orbitron grey">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed eiusmod didunt ut labore et dolore maa</p>
            </div>
            <div class="section-wrapper">
                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/universe-icon1.png" alt="brain">
                  <h3 class="white-text orbitron">Remember</h3>
                  <p class="orbitron grey">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed eiusmod didunt ut labore et dolore maa</p>
            </div>
            <div class="section-wrapper">
                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/universe-icon2.png" alt="spaceship">
                  <h3 class="white-text orbitron">Take off</h3>
                  <p class="orbitron grey">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed eiusmod didunt ut labore et dolore maa</p>
            </div>
      </div><!-- end icon-wrapper -->
      <div class="earth-wrapper" id="TheEarth">
            <section class="earth white-text">
                  <h2 class="white-text">THE EARTH</h2>
                  <p  class="orbitron grey" style="margin-bottom: 40px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris dolor, gravida a varius blandit, auctor eget purus. Phasellus scelerisque sapien sit amet mauris laoreet, eget scelerisque nunc cursus. Duis ultricies malesuada leo vel aliquet. Curabitur rutrum porta dui eget mollis. Nullam lacinia dictum auctor.</p>
                  <a  class="more-details" href="#">More Details</a>
            </section>
            <section class="h20">
                  <h2 class="white-text orbitron">H<sub>2</sub>O</h2>
                  <p class="orbitron grey">70% of the Earth’s Surface is Covered in Water</p>
            </section> 
            <section class="earth-atmosphere">
                  <h2 class="white-text orbitron">10,000 km</h2>
                  <p class="orbitron grey">The Earth’s Atmosphere Extends to a Distance of 10,000 km</p>
            </section>
            <img id="earth" src="<?php echo get_bloginfo( 'template_directory' );?>/images/universe-earth-globe.png" alt="earth">
      </div><!-- earth-warpper -->
      <div class="solar-system" id="TheSolarSystem">
            <div class="solar-section-wrapper" style="padding-top: 200px;">
                 <h2 class="white-text solar-section orbitron solar-heading">SOLAR SYSTEM</h2>
                  <section class="solar-section orbitron">
                        <p class="grey">Duis dignissim mi ut laoreet mollis. Nunc id tellus finibus, eleifend mi vel, maximus justo. Maecenas mi tortor, pellentesque a aliquam ut, fringilla eleifend lectus. Maecenas ultrices tellus sit amet sem placerat tempor.</p>

                        <p class="grey">Maecenas eget arcu venenatis, sagittis felis sit amet, dictum nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        </p>
                  </section>
                  <section class="solar-section orbitron">
                        <p class="grey">
                        Curabitur sed iaculis dolor, non congue ligula. Maecenas imperdiet ante eget hendrerit posuere. Nunc urna libero, congue porta nibh a, semper feugiat sem.
                        </p>
                  </section> 
            </div>
            <img id="planets" src="<?php echo get_bloginfo( 'template_directory' );?>/images/universe-planets.png" alt="planets">
            <section class="solar-subsection">
                  <h4 class="white-text orbitron solar-subsection-heading">
                     The Solar System formed 4.6 billion years ago from the gravitational collapse of a giant interstellar molecular cloud.   
                  </h4>
            </section>
            <div class="solar-section-wrapper">
                <div class="solar-bars white-text">    
                  Blanditiis voluptas <br>
                  <div class="bar" style="height:5px; width: 70%;"></div>
                  Dignissimos<br>
                  <div class="bar" style="height:5px; width: 50%;"></div>
                  Lorem ipsum dolor sit<br>
                  <div class="bar" style="height:5px; width:40%;"></div>
                  Quis dolorum<br>
                  <div class="bar" style="height:5px; width:20%;"></div>  
                  </div> <!-- solar-bars -->
                  <section class="solar-text">
                        <p class="grey orbitron">    
                        Mauris rhoncus orci in imperdiet placerat. Vestibulum euismod nisl suscipit ligula volutpat, a feugiat urna maximus. Cras massa nibh, tincidunt ut eros a, vulputate consequat odio. Vestibulum vehicula tempor nulla, sed hendrerit urna interdum in.  
                        </p>

                        <p class="grey orbitron" style="margin-top: 20px;">Morbi vestibulum id tellus commodo mattis. Aliquam erat volutpat. Aenean accumsan id mi nec semper.</p>
                  </section>
            </div>
      </div><!-- end TheSolarSystem -->
      <div id="TheMoon">
            <h2 class="orbitron grey moon-heading">The Moon</h2>
            <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/universe-moon-faze.png"  alt="the moon" style="max-width: 100%;">
            <section style="margin: 0 auto; width: 300px; padding: 10px;">
                  <p class="orbitron grey">Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condimentum, diam arcu tristique nibh, nec egestas diam elit at nulla.</p>
                  <p class="orbitron grey">Suspendisse potenti. In non lacinia risus, ac tempor ipsum.</p>
            </section>
      </div> <!-- TheMoon -->

      <div class="mars-wrapper" id="Mars">
            <section class="mars white-text">
                  <h2 class="white-text">Mars</h2>
                  <p  class="orbitron grey" style="margin-bottom: 40px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris dolor, gravida a varius blandit, auctor eget purus. Phasellus scelerisque sapien sit amet mauris laoreet, eget scelerisque nunc cursus. Duis ultricies malesuada leo vel aliquet. Curabitur rutrum porta dui eget mollis. Nullam lacinia dictum auctor.</p>
                  <a  class="more-details" href="#">More Details</a>
            </section>
            <section class="moons-of-doom">
                  <h2 class="white-text orbitron">The moons of doom</h2>
                  <p class="orbitron grey">Mars has 2 moons: Phobos and Deimos. The first one will one day destroy Mars and create a disc of matter that will last for another 100 milion years</p>
            </section> 
            <section class="mars-atmosphere">
                  <h2 class="white-text orbitron" style="word-wrap: break-word;">Terraforming</h2>
                  <p class="orbitron grey">To inhabit Mars, we would need first to create an atmosphere. Currently, the Carbon dioxide level is at 95.97% which is not so good for any living organism</p>
            </section>
            <img id="mars-globe" src="<?php echo get_bloginfo( 'template_directory' );?>/images/universe-mars.png" alt="earth">
      </div><!-- mars-warpper -->
      <div class="additional-info">
            <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/universe-long-line.png" alt="line" style="float: left;">
            <h4 class="orbitron white-text" style="margin-left: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
      </div>
      <div id="Gallery">
            <div class="img1"></div>
            <div class="img2"></div>
            <div class="img3"></div>
            <div class="img4"></div>
      </div>
      <div class="earth2">
            <h2 class="orbitron white-text">THE EARTH</h2>
            <p class="orbitron grey" style="margin-top: 30px;">Aliquam ac dui vel dui vulputate consectetur. Mauris accumsan, massa non consectetur condimentum, diam arcu tristique nibh, nec egestas diam elit at nulla. Suspendisse potenti. In non lacinia risus, ac tempor ipsum. Phasellus venenatis leo eu semper varius. Maecenas sit amet molestie leo. Morbi vitae urna mauris.</p>


            <p class="orbitron grey" style="margin-top: 30px;">Nulla nec tortor vitae eros iaculis hendrerit aliquet non urna. Nulla sit amet vestibulum magna, eget pulvinar libero.</p>
      </div><!-- end earth2 -->
      <div id="Subscribe">
            <div class="form-wrapper">
                  <h4 class="form-header">Sign up to our newsletter</h4>
                  <form action="">
                    <input type="text" name="your-name" value="" size="40" aria-required="true" class="input-data" aria-invalid="false" placeholder="Input data here">
                   <input type="submit" class="subscribe" value="Subscribe">
                  </form>
                  <p class="subscribe-p">Ut ultricies imperdiet sodales. Aliquam fringilla aliquam ex sit amet elementum.</p>
            </div> <!-- end form-wrapper -->
            <img class="footer-logo" src="<?php echo get_bloginfo( 'template_directory' );?>/images/universe-footer-logo.png" alt="footer logo">
      </div>
</div><!-- end wrapper -->
     





<script>

// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");
// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    header.classList.add("scroll-header");
  } else {
    header.classList.remove("sticky");
    header.classList.remove("scroll-header");
  }
}
</script>
<?php get_footer(); ?>