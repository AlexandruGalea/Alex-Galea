


<?php

    include "db.php";
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";

?>

    

    <section class="home-section" id="home-section">
	    <div class="home-section-content">
		    <div id="home-section-carousel" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="Design/images/barbershop_image_1.jpg" alt="First slide">
                        <div class="carousel-caption d-md-block">
                            <h3>Best in town</h3>
                            <p>
                                Arad
                            </p>
                        </div>
                </div>
            </div>
		</div>
	</section>



    <section id="about" class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_content" style="text-align: center;">
                        <h3>Cine suntem noi?</h3>
                        <h2>The Barber Shop </h2>
                        <img src="Design/images/about-logo.png" alt="logo">
                        <p style="color: #777">
                           Suntem o echipa de tineri talentati care dorim sa iti oferim o experienta cu adevarat speciala si neasteptata a hairstyling-ului.
                        </p>
                        <a href="#" class="default_btn" style="opacity: 1;">More about us</a>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

   

    <section class="services_section" id="services">
        <div class="container">
            <div class="services_title">
                <h2>Servicii oferite</h2>
            </div>
            <div class="section_heading">
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-scissors-1"></i>
                        <h3>Haircut</h3>
                        <p>Alege sa te mentii mereu fresh cu un haircut proaspat.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-beard"></i>
                        <h3>Tuns barba</h3>
                        <p>Alege sa-ti intretii barba cu serviciile noastre de top, iti garantam ca nu vrei regreta.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res" >
                    <div class="service_box">
                        <i class="bs bs-towel"></i>
                        <h3>Spalare+masaj</h3>
                        <p>Relaxeaza-te cu un spalat si un masaj capilar.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 padd_col_res">
                    <div class="service_box">
                        <i class="bs bs-hairbrush-1"></i>
                        <h3>Aranjare</h3>
                        <p>Nu-ti mai pierde timpul si lasa-ne pe noi sa-ti aranjam parul.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



   

   

    <section class="gallery-section" id="gallery">
        <div class="section_heading">
          
            <h2>Galerie foto</h2>
            <div class="heading-line"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galerie-1.jpg');">    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galerie-2.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galerie-3.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galerie-4.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galerie-5.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galerie-6.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galerie-7.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery-column">
                    <div style="height: 230px">
                        <div class="gallery-img" style="background-image: url('Design/images/galerie-8.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->

    <section id="team" class="team_section">
        <div class="container">
            <div class="team_title">
                <h2>Frizerii nostri</h2>
                
            </div>
            <div class="section_heading">
            <div class="heading-line"></div>
            </div>
            <ul class="team_members row"> 
                <li class="col-lg-4 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-1.jpg" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-4 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-2.jpg" alt="Team Member">
                    </div>
                </li>
                <li class="col-lg-4 col-md-6 padd_col_res">
                    <div class="team_member">
                        <img src="Design/images/team-3.jpg" alt="Team Member">
                    </div>
                </li>
               
            </ul>
        </div>
    </section>

    
   

    <section class="pricing_section" id="pricing">

      

            <?php

                $stmt = $con->prepare("Select * from service_categories");
                $stmt->execute();
                $categories = $stmt->fetchAll();

            ?>

    

        <div class="container">
            <div class="section_heading">
               
                <h2>Lista preturi</h2>
                <div class="heading-line"></div>
            </div>
            <div class="row">
                <?php

                    foreach($categories as $category)
                    {
                        $stmt = $con->prepare("Select * from services where category_id = ?");
                        $stmt->execute(array($category['category_id']));
                        $totalServices =  $stmt->rowCount();
                        $services = $stmt->fetchAll();

                        if($totalServices > 0)
                        {
                        ?>

                            <div class="col-lg-4 col-md-6 sm-padding">
                                <div class="price_wrap">
                                    <h3><?php echo $category['category_name'] ?></h3>
                                    <ul class="price_list">
                                        <?php

                                            foreach($services as $service)
                                            {
                                                ?>

                                                    <li>
                                                        <h4><?php echo $service['service_name'] ?></h4>
                                                       
                                                        <span class="price">$<?php echo $service['service_price'] ?></span>
                                                    </li>

                                                <?php
                                            }

                                        ?>
                                        
                                    </ul>
                                </div>
                            </div>

                        <?php
                        }
                    }

                ?>
                
            </div>
        </div>
    </section>

  

    

    <section class="widget_section">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-6 col-md-6">
                     <div class="footer_widget">
                        <h3>Adresa</h3>
                        <p>
                            
                            Arad, Calea Timisorii nr. 18
                        </p>
                        <p>
                            contact@barbershop.com
                            <br>
                            0257 277 277   
                        </p>
                     </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer_widget">
                        <h3>
                            Orar
                        </h3>
                        <ul class="opening_time">
                            <li>Luni-Vineri 09:00 - 20:00</li>
                            
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

  

    <?php include "Includes/templates/footer.php"; ?>