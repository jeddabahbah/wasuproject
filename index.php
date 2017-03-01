<?php include('header.php') ?>

<section class="fullsize-video-bg" id="screens1">
            <div class="inner">
               <div class="container">
                  <div>
                     <img class="piclogo" src="img/logo.png" alt=""><br>
                  </div>
                  <div>
                     <button class="btn posbtn">Watch</button>
                  </div>
               </div>
            </div>

            <div id="video-viewport">
               <video width="1920" height="1280" autoplay muted loop>
                  <source src="video/mud-bg.mp4" type="video/mp4" />
               </video>
            </div>
         </section>
      
      <!-- /.Fullwidth Header --> 
         
         <section id="screens2">
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example" data-slide-to="1"></li>
                <li data-target="#carousel-example" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner">
                <div class="item active">
                  <a href="#"><img src="img/slider/s1.jpg" /></a>
                  <div class="carousel-caption">
                    <h3>Some Text</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit obcaecati, aperiam sunt tempore repudiandae, veniam quibusdam atque odit soluta voluptatem reprehenderit cum minima harum, itaque qui, blanditiis velit assumenda quisquam.</p>
                  </div>
                </div>
                <div class="item">
                  <a href="#"><img src="img/slider/s2.jpg" /></a>
                  <div class="carousel-caption">
                    <h3>Some Text</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus eum quasi ullam optio culpa molestiae corrupti voluptate, perspiciatis officia omnis voluptas necessitatibus earum recusandae tempore tenetur impedit hic iste, nemo!</p>
                  </div>
                </div>
                <div class="item">
                  <a href="#"><img src="img/slider/s3.jpg" /></a>
                  <div class="carousel-caption">
                    <h3>Some Text</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim possimus accusantium eveniet inventore, dignissimos provident voluptatibus non! Itaque at cum impedit distinctio molestias, aliquid porro quia animi libero est.</p>
                  </div>
                </div>
              </div>

              <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
            
         </section>

         <section id="screens3">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 block" align="center">
                        <div>
                           <img class="img-responsive piccase" src="img/case.jpg" alt="_case">
                        </div>
                     </div>

                     <div class="col-md-6" align="center">
                        <div class="detail" align="center">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio alias esse enim ullam maiores aperiam quam debitis quod perferendis odit! Perferendis, reprehenderit animi quasi dolore dolores eum corporis itaque obcaecati?</p>
                        </div>
                     </div>   
                  </div>                  
               </div>
         </section>

         <section id="screens4">
            
            <div>
               <img src="img/bg.jpg" alt="_bg">
               <p class="text-bg">TEXT</p>
            </div>
         </section>

         <section id="screens5">
            
               <div class="row picinbot">
                  <div class="col-md-3"><img src="img/01.jpg" width="350" alt=""></div>
                  <div class="col-md-3"><img src="img/03.jpg" width="350" alt=""></div>
                  <div class="col-md-3"><img src="img/02.jpg" width="350" alt=""></div>
                  <div class="col-md-3"><img src="img/04.jpg" width="350" alt=""></div>
               </div>               
            
         </section>




<?php include('footer.php') ?>