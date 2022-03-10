<?php 
session_start();
require_once ('./initdb.php');
require_once ('./functions.php');

setCustomerID();
// session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>The Hub | Pub & Club</title>

  <?php include "pocetni-linkovi.php";?>
  </head>
  <body>
  	<?php include "nav.php" ?>
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(images/spolja.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Dobrodošli</span>
              <h1 class="mb-4">THE HUB - PUB & CLUB</h1>
              
              <p><a href="#o-nama" class="btn btn-primary p-3 px-xl-4 py-xl-3">O nama</a>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/unutra.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading"></span>
              <h1 class="mb-4">Ambijent za poželeti</h1>
              <p class="mb-4 mb-md-5">Pažljivom restauracijom vratili smo joj dušu čija aura svetli žamorom ljudi, kvalitetnim muzičkim vibracijama, zveckanjem čaša i zvukom mešanja koktela</p>
              <p><a href="jelovnik.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Naš Jelovnik</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" id="pocetak"style="background-image: url(images/terasa.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading"></span>
              <h1 class="mb-4">U Srcu Niša</h1>
              <p class="mb-4 mb-md-5">Objekat dodatno dobija na značaju kada pročitate zanimljivu priču o ulici u kojoj se nalazi.</p>
              <p><a href="kartapica.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Naša Karta pića</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-about d-md-flex" id="o-nama">
    	<div class="one-half img" style="background-image: url(images/basta.jpg);"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">Saznajte više</span>
	          <h2 class="mb-4">O Nama</h2>
	        </div>
	        <div>
	  		<p>Tragovi prošlosti su nas učvrstili u nameri da otvaranjem kluba učestvujemo u istoriji i dopišemo joj još jedno poglavlje. Ulica generala Tranijea na čijem broju 1 se nalazimo, sedamdesetih godina prošlog veka postala je centralno mesto dešavanja novog buntovnog pokreta koji su karakterisali rock n' roll, deca cveća, hippie pokret koji je nosio mlade širom planete. Ovih stotinak metara gradskog asfalta su bili štrafta kojom su svako veče šetale i gluvarile gradske face i cice, stajali naslonjeni na fasade starih zgrada i oko drvoreda, razmenjivale su se ploče Led Zeppelina, Doorsa, Jimi Hendrixa, Deep purple... Ovde su odrastale i zaljubljivale se generacije svih onih koji su se smatrali gradskom decom i urbanom gerilom i nisu želeli da se šetaju korzoom u dve glavne ulice koji je bio rezervisan za običan svet. Nosile su se zvonare i šimike, duge kose i teksas prsluci, furao se ”Peace and free love” fazon. Čak i danas možete čuti da neko kaže: „To ti se nalazi kod Hipi doline“, što je i trajno obeleženo tablom na fasadi na početku ulice. Zapisano za budućnost. I kao da to nije dovoljno, u našoj ulici u hotelu Niš je davne 1972. otvorena prva niška diskoteka, čuveni ”Disco 13”. Na samo dvadesetak metara od našeg ulaza nalazilo se tada najbolje mesto za večernji spust, gde se slušala dobra muzika sa ploča, u kome su radili prvi niški DJ-evi, kultni klub koji je ušao u legendu. Dakle, naš zadatak je jasan, tradicija se mora nastaviti. Jednoga dana će sledeće generacije pisati o tome kako je u Hipi dolini, odmah preko puta nekadašnje diskoteke Trinaestica, decembra 2018. otvoren i čuveni niški Club & Pub, kultni The Hub :-)</p>
	  			</div>
  			</div>
    	</div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
  <div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="row">
			  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center">
				  <div class="text">
					  <div class="icon"><a href="https://www.google.com/search?q=the+hub&rlz=1C1BNSD_enRS970RS970&oq=the+hub&aqs=chrome..69i57j0i271l3j69i60l4.864j0j7&sourceid=chrome&ie=UTF-8#lrd=0x4755b1326503f4e5:0x85ef6a2bb4d47dea,1,,,"><i class="fa fa-star fa-2xx" aria-hidden="true"></a></i></div>
					  <strong class="text" style="color: #c49b63">1027</strong>
					  <span>Pozitivnih recenzija<br> na Google-u</span>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center">
				  <div class="text">
					  <div class="icon"><i class="fa fa-cutlery fa-2xx" aria-hidden="true"></i></div>
					  <strong class="text" style="color: #c49b63"><?php echo count($menu);  ?></strong>
					  <span>Raznovrsnih pića i jela</span>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center">
				  <div class="text">
					  <div class="icon"><i class="fa fa-check fa-2xx" aria-hidden="true"></i></div>
					  <strong class="text" style="color:#c49b63">5000+</strong>
					  <span>Zadovoljnih mušterija</span>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center">
				  <div class="text">
					  <div class="icon"><i class="fa fa-user fa-2xx" aria-hidden="true"></i></div>
					  <strong class="text" style="color: #c49b63">24</strong>
					  <span>Zaposlenih</span>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
	</div>
  </div>
</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading">Pogledajte </span>
	            <h2 class="mb-4">Naš Meni</h2>
	            <p class="mb-4">Pogledajte naš veliki asortiman hrane koju Vam nudimo, i razna pića koja idu uz to.</p>
	            <p><a href="jelovnik.php" class="btn btn-primary btn-outline-primary px-4 py-3" target="_self">Jelovnik</a><span>&nbsp;&nbsp;</span>
				<a href="kartapica.php" class="btn btn-primary btn-outline-primary px-4 py-3" target="_self">Karta pića</a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<img src="images/bez-pozadine.png" style="border: 0.1px solid #c49b63;width:400px;height:auto"/>
		    				</div>
    					</div>
    					
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Pogledajte</span>
            <h2 class="mb-4">raznovrsnost naših kafa</h2>
            
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/costa.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3>Espresso</h3>
    						
    						<p class="price"><span style="color:#c49b63">140 rsd</span></p>
    						
    					</div>
    				</div>
        	</div>
        	<div class="col-md-4">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/costa-coffee.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Capuccino</a></h3>
    						
    						<p class="price"><span style="color:#c49b63">170 rsd</span></p>
    						<a href="kartapica.php" class="btn btn-primary btn-outline-primary px-4 py-3" target="_self">Karta pića</a>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-4">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/costa2.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffeelatte</a></h3>
    						
    						<p class="price"><span style="color:#c49b63">180 rsd</span></p>
    					</div>
    				</div>
        	</div>
        	
        </div>
		
		</div>
    	</div>
    </section>

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="#ftco-testimony" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-heart"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#ftco-testimony" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-heart"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#ftco-testimony" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-heart"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#ftco-testimony" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-heart"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

		<section class="ftco-menu">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Upoznajte</span>
            <h2 class="mb-4">Naša jela</h2>
            
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Topla predjela</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Hladna predjela</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Jela po narudžbini</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="jelovnik.html" class="menu-img img mb-4" style="background-image: url(images/brusketi.jpg);"></a>
		              				<div class="text">
		              					<h3>Brusketi caprese</h3>
		              					<p>Gorgonzola namaz, mozzarella, čeri paradajz i pesto</p>
		              					<p class="price"><span>320 rsd</span></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
								  <a href="jelovnik.html" class="menu-img img mb-4" style="background-image: url(images/brusketi2.jfif);"></a>
		              				<div class="text">
		              					<h3>Brusketi masline</h3>
		              					<p>Gorgonzola namaz, crne i zelene masline i mirođija</p>
		              					<p class="price"><span>320 rsd</span></p>
		              					<p><a href="jelovnik.php" class="btn btn-primary btn-outline-nov">Ceo jelovnik</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
								  <a href="jelovnik.html" class="menu-img img mb-4" style="background-image: url(images/brusketi3.jpg);"></a>
		              				<div class="text">
		              					<h3>Brusketi losos</h3>
		              					<p>Sirni namaz, dimljeni losos, čeri paradajz i mirođija</p>
		              					<p class="price"><span>320 rsd</span></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
								  <a href="jelovnik.html" class="menu-img img mb-4" style="background-image: url(images/daska2.jpg);"></a>
		              				<div class="text">
		              					<h3>Suhomesnato</h3>
		              					<p>Svinjska pršuta, goveđa pečenica, kulen i goveđa pršuta</p>
		              					<p class="price"><span>990 rsd</span></p>
		              					
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
								  <a href="jelovnik.html" class="menu-img img mb-4" style="background-image: url(images/daska.jpg);"></a>
		              				<div class="text">
		              					<h3>Daska The Hub</h3>
		              					<p>Svinjska pršuta, goveđa pršuta, goveđa pečenica, dimljena mozzarella, gauda, sir u vinu, hajdučki, kulen, dimljeni kaonički i masline</p>
		              					<p class="price"><span>1950 rsd</span></p>
		              					<p><a href="jelovnik.html" class="btn btn-primary btn-outline-nov">Ceo jelovnik</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
								  <a href="jelovnik.html" class="menu-img img mb-4" style="background-image: url(images/sirevi.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Sirevi</a></h3>
		              					<p>Dimljeni kaonički, dimljena mozzarella, sir u vinu, hajdučki i gauda</p>
		              					<p class="price"><span>800 rsd</span></p>
		              					
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
								  <a href="jelovnik.html" class="menu-img img mb-4" style="background-image: url(images/biftek.png);"></a>
		              				<div class="text">
		              					<h3><a href="#">Obsession (biftek)</a></h3>
		              					<p>Biftek, krompir <strong style="color:#c49b63">“a la Chef”</strong>, mlada boranija, povrće i gorgonzola</p>
		              					<p class="price"><span>1500 rsd</span></p>
		              					
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
								  <a href="jelovnik.html" class="menu-img img mb-4" style="background-image: url(images/lazanja.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Lazanja</a></h3>
		              					<p>Mleveno juneće meso, pelat, gauda, beli, crni luk, biber, crveno vino i origano</p>
		              					<p class="price"><span>790 rsd</span></p>
		              					<p><a href="jelovnik.html" class="btn btn-primary btn-outline-nov">Ceo jelovnik</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
								  <a href="jelovnik.html" class="menu-img img mb-4" style="background-image: url(images/belisos.jfif);"></a>	
		              				<div class="text">
		              					<h3><a href="#">Piletina u belom sosu</a></h3>
		              					<p>Pileći file, dimljeni kaonički, gauda, pavlaka, parmezan i pomfrit</p>
		              					<p class="price"><span>550 rsd</span></p>
		              					
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

    <section class="ftco-section img" id="ftco-testimony" style="background-image: url('images/hub-naslovna.jpg');" >
    	<div class="overlay"></div>
	    <div class="container">
	      <div class="row justify-content-center mb-5">
	        <div class="col-md-7 heading-section text-center ftco-animate">
	        	<span class="subheading">Testimony</span>
	          <h2 class="mb-4">Ocene naših posetioca</h2>
	        </div>
	      </div>
	    </div>
	    <div class="container-wrap">
	      <div class="row d-flex no-gutters">
	        <div class="col-lg align-self-sm-end ftco-animate">
	          <div class="testimony">
	             <blockquote>
	                <p><i>&ldquo;Place is located in the city center near main Postoffice. Part of the city is called "Hipi valley" and was ultra popular 40 years ago. Completely renewed old house. Great architect job. Perfect place for coffee break or brunch. Also good for night drink or coctail. You can feel charm of this city. Service is warm and pleasant. Relax and enjoy!&rdquo;</i></p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                  <a href="https://www.google.com/maps/contrib/110176537694577796573/photos/@45.0811661,13.6387067,17z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-RS"><img src="images/unnamed.png" alt=""></a>
	                </div>
	                <div class="name align-self-center">Branislav Miljkovic <span class="position">Local Guide</span></div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end">
	          <div class="testimony overlay">
	             <blockquote>
	                <p><i>&ldquo;The food here is high quality and very tasty, especially the meat. Excellent double burger and beef salad. The savory breaded pancake with ham and cheese and tartar sauce was also quite nice. Only downside was the milkshake, which is not cold and tastes like powdered chocolate mix with water and was not very good at all. In saying that, the hot chocolate was good and overall, very nice ambience, service, and food. 👍&rdquo;</i></p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                  <a href="https://www.google.com/maps/contrib/113936693573841253856?hl=en-RS&sa=X&ved=2ahUKEwju8sKo8aPzAhVn_rsIHZtyDCYQvvQBegQIARAn"><img src="images/hannah.png" alt=""></a>
	                </div>
	                <div class="name align-self-center">Hannah Cui <span class="position">Local Guide</span></div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end ftco-animate">
	          <div class="testimony">
	             <blockquote>
	                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small  line of blind text by the name. &rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                  <img src="images/person_3.jpg" alt="">
	                </div>
	                <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end">
	          <div class="testimony overlay">
	             <blockquote>
	                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however.&rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                  <img src="images/person_2.jpg" alt="">
	                </div>
	                <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end ftco-animate">
	          <div class="testimony">
	            <blockquote>
	              <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small  line of blind text by the name. &rdquo;</p>
	            </blockquote>
	            <div class="author d-flex mt-4">
	              <div class="image mr-3 align-self-center">
	                <img src="images/person_3.jpg" alt="">
	              </div>
	              <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>

    

		
		<section class="ftco-appointment" id="rezervisi">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch" style="padding: 20px;">
    				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.7170793196706!2d21.896066415487013!3d43.32018167913404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b1326503f4e5%3A0x85ef6a2bb4d47dea!2sThe%20Hub%20-%20pub%20and%20club!5e0!3m2!1sen!2srs!4v1632920256833!5m2!1sen!2srs" width="700" height="500" style="border:2px solid #c49b63;padding: 20px;" allowfullscreen="" loading="lazy"></iframe>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Rezervišite Vaše mesto</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Ime">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Prezime">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" class="form-control appointment_date" placeholder="Datum">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control appointment_time" placeholder="Vreme">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Telefon">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Napomena"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Rezerviši" class="btn btn-primary py-3 px-4">
		            </div>
	    				</div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>

    <?php include "footer.php"; ?>
    
  

	<?php include "skripte.php"; ?>
  
    
  </body>
</html>