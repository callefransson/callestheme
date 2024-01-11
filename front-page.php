<?php get_header();?>


<section class="page-wrap">
    <div class="container">
        
        
        <?php if (have_posts()) : while(have_posts()) : the_post();?>
        
            <?php the_content();?>

        <?php endwhile; endif;?>

    </div>
</section>

<div class="section" id="first-section">
    <div class="container" id="top-section">
        <h1>Välkommen till vår hemsida!</h1>
        <p>På denna sidan kommer du att kunna se allt från släphyra, gasolpriser, våran meny,
            nyheter, månadens kampanjer och mycket mera!</p>
        <div class="button-container">
            <a href="http://localhost/wordpress/wp-content/uploads/2022/11/Var-Meny-PDF.pdf" target="_blank" class="button-primary"><i class="fa-solid fa-burger"></i>Vår meny(pdf)</a>
            <a href="http://localhost/wordpress/slapvagnar/" class="button-primary"><i class="fa-solid fa-trailer"></i>Släpvagnar</a>
            <a href="tel:+065020218" class="button-primary"><i class="fa-solid fa-phone"></i>Ring oss</a>
        </div>
    </div>
</div>






<section class="section-menu"> 

    <div class="header-menu-section">
        <h1>Vår Meny</h1>

    </div>
    <div class="title-section">
        

    </div>
<div class="inner-section-menu">
        <div class="col-sm-6" id="left-section-menu">
            <ul class="rätter">
            <div class="menu-title">
                    <h2>Våra burgare</h2>
                </div>
                <li>
                    <h4>BurgerMeal 90/150g</h4>
                    <p>Hamburgare inkl. strips & dryck 40cl mugg</p>
                        <p>Dressing, sallad, ost, senap, ketchup & lök.</p>
                        <div class="pris"><p>85/100kr</p></div>
                </li>
                <li>
                    <h4>DubbelMeal 90/150g</h4>
                    <p>Dubbelburgare inkl. strips & dryck 40cl mugg</p> 
                        <p>Dressing, sallad, ost, senap, ketchup & lök.</p>
                        <div class="pris"><p>105/125kr</p></div>
                </li>
                <li>
                    <h4>Tryffel Meal 90/150g</h4>
                    <p>Hamburgare inkl. strips & dryck 40cl mugg</p>
                        <p>Tryffel-mayo, sallad, tomat, ost, bacon & picklad lök</p>
                        <div class="pris"><p>95/110kr</p></div>
                </li>
                <li>
                    <h4>Chili-Chipotle 90/150g</h4>
                    <p>Hamburgare inkl. strips & dryck 40cl mugg</p>
                        <p>Chipotle-mayo, sallad, picklad lök, ost, sourcreamdressing & lökringar</p>
                        <div class="pris"><p>95/110kr</p></div>
                </li>
                <li>
                    <h4>TexasMeal 90/150g</h4>
                    <p>Texasburgare inkl. strips & dryck 40cl mugg</p>
                        <p>Dallassallad, sallad, ost, senap, ketchup, hickoreysås & lök.</p>
                        <div class="pris"><p>90/105kr</p></div>
                </li>
                <li>
                    <h4>TexMexMeal 90/150g</h4>
                    <p>Texmexburgare inkl. strips, cheddardipp & dryck 40cl mugg</p>
                        <p>Sourcream, sallad, tomat, ost, salsa, jalapeños, lök & nacho-chips.</p>
                        <div class="pris"><p>95/105kr</p></div>
                </li>
                <li>
                    <h4>Egg & Bacon Meal 90/150g</h4>
                    <p>Ägg & Bacon-burgare inkl. strips & dryck 40cl mugg</p>
                        <p>Dressing, salld, ost, bacon, stekt ägg, senap, ketchup, saltgurka rostad lök.</p>
                        <div class="pris"><p>95/105kr</p></div>
                </li>
                <li>
                    <h4>Mangoraja Chicken Meal 120g</h4>
                    <p>Kycklingburgare inkl. strips & dryck 40cl mugg</p>
                        <p>Mangoraja-dressing, sallad, tomat, bacon, lök.</p>
                        <div class="pris"><p>105kr</p></div>
                </li>
                <li>
                    <h4>Snitsare Meal 140g</h4>
                    <p>Friterad snitsare inkl. strips & dryck 40cl mugg</p>
                        <p>Citronpeppar, ost, picklad paprika</p>
                        <div class="pris"><p>100kr</p></div>
                </li>
                <li>
                    <h4>Parisare Meal 110g</h4>
                    <p>Parisare inkl. strips & dryck 40cl mugg</p>
                        <p>Dressing, sallad, senap, ketchup, bostongurka</p>
                        <div class="pris"><p>90kr</p></div>
                </li>
                <li>
                    <h4>Halloumi Meal 75g</h4>
                    <p>Halloumiburgare inkl. strips & dryck 40cl mugg</p>
                        <p>Srirasha-mayo, sallad, tomat, lökringar & sourcream</p>
                        <div class="pris"><p>100kr</p></div>
                </li>

            </ul>
            

        </div>

        <div class="col-sm-6" id="right-section-menu">
            <ul class="rätter">
                <div class="menu-title">
                    <h2>Övrig meny</h2>
                </div>
            <li>
                    <h4>KebabTallrik</h4>
                    <p>Kebabtallrik inkl. strips & dryck 40cl mugg</p>
                        <p>Sallad, tomat, gurka, lök, fefferoni, vit & röd kebabsås</p>
                        <div class="pris"><p>100kr</p></div>
                </li>
                <li>
                    <h4>KebabRulle</h4>
                    <p>Kebabrulle i tunnbröd inkl. dryck 40cl mugg</p>
                        <p>Sallad, tomat, gurka, lök, fefferoni, vit & röd kebabsås</p>
                        <div class="pris"><p>100kr</p></div>
                </li>
                <li>
                    <h4>LövbitsTallrik</h4>
                    <p>Lövbitstallrik inkl. strips & dryck 40cl mugg</p>
                        <p>Sallad, tomat, gurka, lök & bearnaisesås</p>
                        <div class="pris"><p>105kr</p></div>
                </li>
                <li>
                    <h4>LövbitsRulle</h4>
                    <p>Lövbitsrulle med mos inkl. dryck 40cl mugg</p>
                        <p>Sallad, tomat, gurka, lök, bearnaisesås</p>
                        <div class="pris"><p>100kr</p></div>
                </li>
                <li>
                    <h4>Chicken Nuggets Meal</h4>
                    <p>Chicken nuggets inkl. strips, dryck 40cl mugg & valfri dippsås</p>
                        <p>4st Nuggets inkl 1st dippsås</p>
                        <p>8st Nuggets inkl 2st dippsås</p>
                        <p>12st Nuggets inkl 2st dippsås</p>
                        <div class="pris"><p>75/95/105kr</p></div>
                </li>
                <li>
                    <h4>Köttbull-menyn</h4>
                    <p>Köttbullar 10/15st m. mos inkl. dryck 40cl mugg</p>
                        <p>Sallad, inlagd gurka, lingonsylt</p>
                        <div class="pris"><p>80/90kr</p></div>
                </li>
                <li>
                    <h4>tunnbrödsrulle</h4>
                    <p>tunnbrödsrulle en eller två korvar inkl. dryck 40cl mugg</p>
                        <p>Korv, mos, valfritt tillbehör, senap, ketchup, lök, sallad</p>
                        <div class="pris"><p>80/95kr</p></div>
                </li>
                <li>
                    <h4>Stora korvmenyn</h4>
                    <p>två korvar m. mos eller strips inkl. dryck 40cl mugg</p>
                        <p>Korv, valfritt tillbehör ketchup, senap</p>
                        <div class="pris"><p>85kr</p></div>
                </li>
                <li>
                    <h4>Lilla korvmenyn</h4>
                    <p> En korv m. mos eller strips inkl. dryck 40cl mugg</p>
                        <p>Korv, valfritt tillbehör, ketchup, senap</p>
                        <div class="pris"><p>70kr</p></div>
                </li>
                <li>
                    <div class="korv-priser">
                        <h4>Korv-priser</h4>
                            <p> Korv m. bröd inkl. dryck 40cl mugg</p>
                            <p>38kr</p>
                            <p> Korv i baguette inkl. dryck 40cl mugg</p>
                            <p>47kr</p>
                            <p>Kryddkorv m. bröd inkl. dryck 40cl mugg</p>
                            <p>45kr</p>
                            <p>Kryddkorv i baguette inkl. dryck 40cl mugg</p>
                            <p>55kr</p>
                    </div>
                </li>
                    
                </div>
            </ul>
        </div>
</div>
<div class="container-fluid" id="tillbehör-section">
        <div class="extra-tillbehör">
                        <h4>Dippsåser 9kr</h4>
                            <div class="row" id="dippsåser">
                                <div class="column-first">
                                
                                <div class="column">
                                    <p>Bearneaisås<p>
                                    <p>Mangoraja<p>
                                    <p>Cheddar<p>
                                    <p>Sourcreme<p>
                                    <p>Bbq<p>
                                    <p>TryffelMayo<p>
                                </div>
                                <div class="column">
                                    <p>Sweet&Sour<p>
                                    <p>Hot Chili<p>
                                    <p>Chipottle<p>
                                    <p>Orginal Dressing<p>
                                    <p>Vitlök<p>
                                    <p>Sriracha Mayo</p>
                                </div>
                            </div>
                        </div>
                            
                    <h4 style="padding-top:20px;">Extra tillbehör</h4>
                    <div class="row" id="tillbehör">
                        <div class="column-first">
                            <div class="column">
                                <p>Lökringar 5st</p>
                                <p>Lökringar 10st</p>
                                <p>Liten strips</p>
                                <p>Stor strips</p>
                                <p>Räksallad halv</p>
                                <p>Räksallad hel</p>
                                <p>Gurksallad halv</p>
                                <p>Gurksallad hel</p>
                                <p>Bostongurka</p>
                            </div>
                            <div class="column">
                                <p>20kr</p>
                                <p>30kr</p>
                                <p>20kr</p>
                                <p>30kr</p>
                                <p>15kr</p>
                                <p>25kr</p>
                                <p>12kr</p>
                                <p>18kr</p>
                                <p>10kr</p>
                            </div>
                    </div>
                </div>
        </div>
</div>

</section>
<div class="container">
<section class="släpvagnar-section">
<h1> Våra släpvagnar</h1>
    <div class="row">
        <div class="col-sm">
            <img src="http://localhost/wordpress/wp-content/uploads/2022/11/grindvagn.png">
            <h3>Stor grind med tipp</h3>
            <ul>
                <li>4h: 230kr</li>
                <li>24h: 290kr</li>
                <li>Längd: 325cm</li>
                <li>Bredd: 152cm</li>
                <li>Maxlast: 690kg</li>
            </ul>
        </div>
        <div class="col-sm">
        <img src="http://localhost/wordpress/wp-content/uploads/2022/11/kapvagn.png">

        <h3>Stor vagn med kåpa</h3>
        <ul>
                <li>4h: 250kr</li>
                <li>24h: 360kr</li>
                <li>Längd: 258cm</li>
                <li>Bredd: 128cm</li>
                <li>Höjd: 140cm</li>
                <li>Maxlast: 690kg</li>
            </ul>
        </div>
        <div class="col-sm">
        <img src="http://localhost/wordpress/wp-content/uploads/2022/11/flyttskap.png">

            <h3>Flyttskåp</h3>
            <ul>
                <li>4h: 370kr</li>
                <li>24h: 520kr</li>
                <li>Längd: 366cm</li>
                <li>Bredd: 159cm</li>
                <li>Höjd: 194cm</li>
                <li>Maxlast: 390kg</li>
            </ul>
        </div>






    </div>
                </div>



</section>



<?php get_footer();?>