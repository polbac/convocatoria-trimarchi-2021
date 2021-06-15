<?php 
$r_gif = (int)rand(1, 16);
?>

<html>
<head>
<title>TRIMARCHI</title>
<meta name="viewport" content="width=device-width">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;301;302;303;304;305;306;307;308;309;310;311;312;313;314;315;316;317;318;319;320;321;322;323;324;325;326;327;328;329;330;331;332;333;334;335;336;337;338;339;340;341;342;343;344;345;346;347;348;349;350;351;352;353;354;355;356;357;358;359;360;361;362;363;364;365;366;367;368;369;370;371;372;373;374;375;376;377;378;379;380;381;382;383;384;385;386;387;388;389;390;391;392;393;394;395;396;397;398;399;400;401;402;403;404;405;406;407;408;409;410;411;412;413;414;415;416;417;418;419;420;421;422;423;424;425;426;427;428;429;430;431;432;433;434;435;436;437;438;439;440;441;442;443;444;445;446;447;448;449;450;451;452;453;454;455;456;457;458;459;460;461;462;463;464;465;466;467;468;469;470;471;472;473;474;475;476;477;478;479;480;481;482;483;484;485;486;487;488;489;490;491;492;493;494;495;496;497;498;499;500;501;502;503;504;505;506;507;508;509;510;511;512;513;514;515;516;517;518;519;520;521;522;523;524;525;526;527;528;529;530;531;532;533;534;535;536;537;538;539;540;541;542;543;544;545;546;547;548;549;550;551;552;553;554;555;556;557;558;559;560;561;562;563;564;565;566;567;568;569;570;571;572;573;574;575;576;577;578;579;580;581;582;583;584;585;586;587;588;589;590;591;592;593;594;595;596;597;598;599;600;601;602;603;604;605;606;607;608;609;610;611;612;613;614;615;616;617;618;619;620;621;622;623;624;625;626;627;628;629;630;631;632;633;634;635;636;637;638;639;640;641;642;643;644;645;646;647;648;649;650;651;652;653;654;655;656;657;658;659;660;661;662;663;664;665;666;667;668;669;670;671;672;673;674;675;676;677;678;679;680;681;682;683;684;685;686;687;688;689;690;691;692;693;694;695;696;697;698;699;700;701;702;703;704;705;706;707;708;709;710;711;712;713;714;715;716;717;718;719;720;721;722;723;724;725;726;727;728;729;730;731;732;733;734;735;736;737;738;739;740;741;742;743;744;745;746;747;748;749;750;751;752;753;754;755;756;757;758;759;760;761;762;763;764;765;766;767;768;769;770;771;772;773;774;775;776;777;778;779;780;781;782;783;784;785;786;787;788;789;790;791;792;793;794;795;796;797;798;799;800;801;802;803;804;805;806;807;808;809;810;811;812;813;814;815;816;817;818;819;820;821;822;823;824;825;826;827;828;829;830;831;832;833;834;835;836;837;838;839;840&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="assets/form.css">
<link rel="icon" type="image/png" href="/favicon.png">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.theme.min.css">


</head>

<body id="top">
    <div class="menubar" >
        <header>
            <a href="https://www.domestika.org/" target="_blank"><img class="domestika" src="domestika-logo.svg"/></a>
            <nav class="menu">
                <a href="#convocatoria" class="menu-item smooth-link">OPEN CALL</a>
                <a href="#categorias" class="menu-item smooth-link">CATEGORIES+INCENTIVES</a>
                <a href="#jurado" class="menu-item smooth-link">JURY</a>
                <a href="#inscripcion" class="menu-item smooth-link">REGISTRATION</a>
                <a href="#quienes" class="menu-item smooth-link">WHO ARE WE?</a>
                <a href="#faq" class="menu-item smooth-link">FAQs</a>

                <span class='lang-switcher'>
                <a href="/" class="lang">ES</a>/<a class="lang current" href="/en">EN</a>
                </span>
            </nav>
            <a href="https://www.trimarchidfg.net/" target="_blank"><img class="tmdg"src="tmdg-logo.svg"/></a>
        </header>
    </div>

    <div class="menu-mobile">MENU</div>

    <div class="bloque uno" id="convocatoria" color="#ffff66">
        <p class="destacado" >
            TRIMARCHI & DOMESTIKA ARE PROUD TO ANNOUNCE THE
        </p>
        <h1 class="titulo">
            <span min-weight="740" max-weight="840">TRIMARCHI</span>
            <br /> <span min-weight="600" max-weight="840">2021 OPEN CALL</span><br />
            <span min-weight="600" max-weight="840">JUN15-JUL31</span>
        </h1>
        <p class="destacado">
        <span>
            Invitation to illustrators, animators, designers, artists,
        </span><br />
        <span >
            entrepreneurs, educators, musicians, audiovisual artists, and many
        </span><br />
        <span >
            more, to become part of various remote projects.
        </span></p>
        
        <img class="animacion gif-<?php print $r_gif; ?>" src="assets/home/<?php print $r_gif; ?>.gif"/>
    </div>

    <script
    src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
    integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
    crossorigin="anonymous"></script>
    <script>
        (function() {

            var xMousePos = 0;
            var yMousePos = 0;
            var lastScrolledLeft = 0;
            var lastScrolledTop = 0;

            $(document).mousemove(function(event) {
                captureMousePosition(event);
                updateFonts()
            })  

                $(window).scroll(function(event) {
                    if(lastScrolledLeft != $(document).scrollLeft()){
                        xMousePos -= lastScrolledLeft;
                        lastScrolledLeft = $(document).scrollLeft();
                        xMousePos += lastScrolledLeft;
                    }
                    if(lastScrolledTop != $(document).scrollTop()){
                        yMousePos -= lastScrolledTop;
                        lastScrolledTop = $(document).scrollTop();
                        yMousePos += lastScrolledTop;
                    }
                    updateFonts()
                });

                function captureMousePosition(event){
                    xMousePos = event.pageX;
                    yMousePos = event.pageY;
                }

                function updateFonts() {
                    $("*[min-weight]").each(function(){
                    distance = calculateDistance($(this), xMousePos, yMousePos);
                    const fontWeight = $(this).attr('max-weight') - (distance/2)
                    $(this).css({
                        fontWeight,
                    })
                })
                }
                
            
            //--
            
            let mX, mY

            function calculateDistance(elem, mouseX, mouseY) {
                return Math.floor(Math.sqrt(Math.pow(mouseX - (elem.offset().left+(elem.width()/2)), 2) + Math.pow(mouseY - (elem.offset().top+(elem.height()/2)), 2)));
            }

        function checkBackground() {
            const scrollTop = $(document).scrollTop()
            $("*[color]").each(function(){
                if (scrollTop >= $(this).offset().top - 100) {
                    $("body").css({
                        backgroundColor: $(this).attr("color")
                    })
                }
                
            })
        }
        checkBackground()
        $(document).scroll(function(){
            checkBackground()
        })

    })();
    </script>

    <div class="bloque dos" id="categorias" color="#99ff99">
        <h1 class="titulo" min-weight="740" max-weight="840">
            CATEGORIES
        </h1>
        <div class="columnas">
            <div class="columna">
                <div class="check-categoria">
                    <img class="normal" src="dibujo1-blank.png"/>
                    <img class="hover" src="dibujo1-hover.png"/>
                    <img class="select" src="dibujo1-select.png"/>
                    <h2 class="subtitulo">
                        Conference
                    </h2>
                </div>
                <p class="texto">
                Conferences are a part of TRImarchi’s essence. Along the road, our stage has been honored by the presence of major figures such as Seymour Chwast, Paula Scher, Stefan Sagmeister, Ellen Lupton, among many other speakers.<br/>
 This year, it’s your turn. If you wish to speak to the community about your career, projects and experiences, sign up for this category and participate to win:

                </p>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    The possibility of giving a talk in the livestreamed closing show of the 2021 TRImarchi Open Call.

                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        A virtual meeting with <b>BRAULIO AMADO</b>, where he will give you feedback on your proposal.

                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    A virtual meeting with <b>Pablo and Seba</b>, where they will guide you to prepare your talk.

                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        An incentive of USD 1,000
                    </p>
                </div>
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                        There are<br />
                        <contador date="01/08/2021" hour="00:00"></contador>
                    </p>
                </div>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="normal" src="/dibujo-dg-blank.png"/>
                    <img class="hover" src="/dibujo-dg-hover.png"/>
                    <img class="select" src="/dibujo-dg-select.png"/>
                    <h2 class="subtitulo">
                            
                    </h2>
                </div>
                <p class="texto">
                Although TRImarchi loves and wants to support various artistic expressions and disciplines, it was graphic design that marked our path. For that reason we especially think about this proposal: If you are a graphic designer, register in this category to show us what you do and participate for:


                </p>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    Designing the visual identity of the livestreamed closing show of the 2021 TRImarchi Open Call for Proposals.
                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    A virtual consultation meeting with <b>Braulio Amado</b>.
                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    An incentive of USD 1,500.
                    </p>
                </div>
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                        There are<br />
                        <contador date="01/08/2021" hour="00:00"></contador>
                    </p>
                </div>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="normal" src="dibujo2-blank.png"/>
                    <img class="hover" src="dibujo2-hover.png"/>
                    <img class="select" src="dibujo2-select.png"/>
                    <h2 class="subtitulo">
                        EXPO
                    </h2>
                </div>
                <p class="texto">
                A wide range of artists have found in TRImarchi a place to showcase their work. We know that many good ideas just need a helping hand to materialize. So if you have an artistic project in mind that you wish to develop and exhibit, sign up for this category and participate to win:

                </p>
                <!-- <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    The possibility of showcasing your work at Museo MAR

                    </p>
                </div> -->
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    Three virtual consultation meetings with <b>DIANA AISENBERG</b>

                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    USD 2,500 in financial support to develop your work

                    </p>
                </div>
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                        There are<br />
                        <contador date="01/08/2021" hour="00:00"></contador>
                    </p>
                </div>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="normal" src="dibujo3-blank.png"/>
                    <img class="hover" src="dibujo3-hover.png"/>
                    <img class="select" src="dibujo3-select.png"/>
                    
                    <h2 class="subtitulo">
                        WORKSHOP
                    </h2>
                </div>
                <p class="texto">
                TRImarchi was created to meet the needs of trend seekers, and for many other reasons. If teaching is your thing and you want to share what you know with the world, sign up for this category and participate for:  	

                </p>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    Having your own course at Domestika

                    </p>
                </div>
                
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                        There are<br />
                        <contador date="01/08/2021" hour="00:00"></contador>
                    </p>
                </div>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="normal" src="dibujo4-blank.png"/>
                    <img class="hover" src="dibujo4-hover.png"/>
                    <img class="select" src="dibujo4-select.png"/>
                    <h2 class="subtitulo">
                    Fashion design
                    </h2>
                </div>
                <p class="texto">
                Are you looking to create or give a boost to your apparel brand? Then you’ve come to the right place. Sign up for this category and win:

                </p>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    USD 2,500 in financial support to develop or promote your project.

                    </p>
                </div>

                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    Three virtual consultation meetings with Spanish designer David Méndez Alonso (Outsiders Division)

                    </p>
                </div>
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                        There are<br />
                        <contador date="01/08/2021" hour="00:00"></contador>
                    </p>
                </div>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="normal" src="dibujo5-blank.png"/>
                    <img class="hover" src="dibujo5-hover.png"/>
                    <img class="select" src="dibujo5-select.png"/>
                    <h2 class="subtitulo">
                    Entrepreneurs
                    </h2>
                </div>
                <p class="texto">
                This section is for those who make things happen in the community. If you have a personal creative or artistic project that you wish to grow, this is your place in this open call.  Sign up here to win:

                </p>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    Three virtual consultation meetings with Vik Arrieta (Monoblock)

                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    USD 2,500 in financial support to develop your project

                    </p>
                </div>
                
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                    There are<br />
                    <contador date="01/08/2021" hour="00:00"></contador>
                    </p>
                </div>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="normal" src="dibujo10-blank.png"/>
                    <img class="hover" src="dibujo10-hover.png"/>
                    <img class="select" src="dibujo10-select.png"/>
                    <h2 class="subtitulo">
                    Music video
                    </h2>
                </div>
                <p class="texto">
                This category is for people wishing to direct a music video. Sign up and participate to win:

                </p>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    A chance to direct a music video, fully produced by <span>ORCO Videos</span>

                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    An incentive of USD 1,000

                    </p>
                </div>
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                        There are<br />
                        <contador date="01/08/2021" hour="00:00"></contador>
                    </p>
                </div>
            </div>

            <div class="columna-big">
                <div class="check-categoria">
                    <img class="normal" src="dibujo6-blank.png"/>
                    <img class="hover" src="dibujo6-hover.png"/>
                    <img class="select" src="dibujo6-select.png"/>
                    <h2 class="subtitulo">
                        MUSIC
                    </h2>
                </div>

                <div class="outer-box">

                    <div class="inner-box">

                        <p class="texto">
                        Music has always held a special place in our heart, so this category will be recognizing the work of two artists. If you make music, both as a solo artist or in a band, you cannot miss out on this opportunity. Share a song that you’ve written, and if you’re selected, you can win:

                        </p>
                        <div class="item">
                            <!--img src="item.svg"/-->
                            <p class="texto">
                                <span>Music artist 1</span>
                            </p>
                        </div>
                        <div class="item">
                            <img src="item.svg"/>
                            <p class="texto">
                            Shooting of a music video for your song, with a director selected from the category “Music video” and produced by <span>ORCO videos</span>.

                            </p>
                        </div>
                        <div class="item">
                            <img src="item.svg"/>
                            <p class="texto">
                            A virtual meeting with musician and songwriter <span>Ca7riel</span> to discuss your music

                            </p>
                        </div>

                    </div>

                    <div class="inner-box">

                        <div class="item select">
                            <!--img src="item.svg"/-->
                            <p class="texto">
                                <span>Music artist 2</span>
                            </p>
                        </div>
                        <div class="item">
                            <img src="item.svg"/>
                            <p class="texto">
                            Funding for the recording and production of a single in a top-level recording studio.

                            </p>
                        </div>
                        <div class="item">
                            <img src="item.svg"/>
                            <p class="texto">
                            A virtual meeting with musician and songwriter Ca7riel to discuss your music

                            </p>
                        </div>
                        <div class="item">
                            <img src="item.svg"/>
                            <p class="texto">
                            Design of the cover art for your single by a participant selected from the category “TRImarchi collective”

                            </p>
                        </div>
                        <div class="item">
                            <img src="cronometro-verde.svg"/>
                            <p class="texto">
                                There are<br />
                                <contador date="01/08/2021" hour="00:00"></contador>
                            </p>
                        </div>

                    </div>

                </div>

            </div>
           
            <div class="columna-bloque">
                <div class="check-categoria">
                    <img class="normal" src="dibujo-sapo-blank.png"/>
                    <img class="hover" src="dibujo-sapo-hover.png"/>
                    <img class="select" src="dibujo-sapo-select.png"/>
                    <span style="display: none">COLECTIVO TRIMARCHI</span>
                </div>
                <div class="columna">
                    <h2 class="subtitulo">
                        Colectivo TRImarchi
                    </h2>
                    <p class="texto">
                    Colectivo TRImarchi is our idea of a large scale studio that leaves no one out. Throughout these years, we have carried out projects with a number of brands and music bands, bringing together the TRImarchi community by combining enjoyment and professionalism.<br/>
    Sign up for this category to access the possibility of working with us in specific projects that will take place throughout the year. We have a number of ideas in the pipeline, so this call is far-reaching: illustrators, designers, typographers, photographers, ceramists, muralists, artisans, and a very long etcetera.

                    </p>
                    <div class="item">
                        <img src="cronometro-verde.svg"/>
                        <p class="texto">
                            There are<br />
                            <contador date="01/08/2021" hour="00:00"></contador>
                        </p>
                    </div>
                </div>
            </div>

           

            
        
        </div>
    </div>

    <div class="bloque tres" id="jurado" color="#ffccff" min-weight="740" max-weight="840">
        <h1 class="titulo"  min-weight="740" max-weight="840">
        JURY
        </h1>
        <div class="columnas">

            <div class="columna">

                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Braulio/braulio01.jpg" /></li>
                            <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Braulio/braulio02.jpg" /></li>
                            <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Braulio/braulio03.jpg" /></li>
                        </ul>
                        <div data-glide-el="controls">
                            <button class='prev-arrow' data-glide-dir="<"><</button>
                            <button class='next-arrow' data-glide-dir=">">></button>
                        </div>
                    </div>
                </div>
                
                <h2 class="subtitulo">
                    BRAULIO<br />AMADO
                </h2>
                <p class="texto">
                Designer, illustrator, and art director. He is currently the director of his own agency, BAD Studio. He worked for Pentagram, Bloomberg Business Week, and Wieden Kennedy and collaborated with artists such as Frank Ocean, Beck, Washed Out, and major clients such as Boiler Room, The New York Times, Apple, Nike, and Adidas.

                </p>
                <credit>Foto © Chris Maggio</credit>
            </div>

            <div class="columna">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Diana/diana01.jpg" /></li>
                        </ul>
                    </div>
                    
                </div>
                <h2 class="subtitulo">
                    DIANA<br />AISENBERG
                </h2>
                <p class="texto">
                Visual artist, painter, writer, teacher and curator. She was a member of the faculty of the Universidad de Buenos Aires and coordinated the visual arts department of the Centro Cultural Rojas. Her educational work has been recognized by the Argentine Critics Association.


                </p>
            </div>

            <div class="columna">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Sofie/sofie01.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Sofie/sofie02.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Sofie/sofie03.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Sofie/sofie04.jpg" /></li>
                        </ul>
                    </div>
                    <div data-glide-el="controls">
                            <button class='prev-arrow' data-glide-dir="<"><</button>
                            <button class='next-arrow' data-glide-dir=">">></button>
                        </div>
                </div>
                <h2 class="subtitulo">
                    SOFIE FATOURETCHI
                </h2>
                <p class="texto">
                DJ, curator, violinist, radio host, and artist. She worked for the independent rap label Stones Throw Records and was a member of the Boiler Room crew. In 2020, she released Cult Survivor, her debut album.


                </p>
                <credit>Fotos © Matthias Aschauer</credit>
            </div>

            <div class="columna">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Ca7riel/ca7riel01.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Ca7riel/ca7riel02.jpg" /></li>
                        </ul>
                    </div>
                    <div data-glide-el="controls">
                            <button class='prev-arrow' data-glide-dir="<"><</button>
                            <button class='next-arrow' data-glide-dir=">">></button>
                        </div>
                </div>
                <h2 class="subtitulo">
                    CA7RIEL
                </h2>
                <p class="texto">
                Musician, singer and songwriter. In 2015 he released his first hip hop album, Cve7e. In 2018 he formed a trap duo with Paco Amoroso. He collaborated with other major urban sound acts including WOS, Chita, Duki and Bizarrap.

 

                </p>
            </div>

            <div class="columna">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Vik/vik01.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Vik/vik02.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Vik/vik03.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Vik/vik04.jpg" /></li>
                        </ul>
                    </div>
                    <div data-glide-el="controls">
                            <button class='prev-arrow' data-glide-dir="<"><</button>
                            <button class='next-arrow' data-glide-dir=">">></button>
                        </div>
                </div>
                <h2 class="subtitulo">
                    VIK ARRIETA
                    <span class="subtitulo">
                    (MONOBLOCK)
                </span>
                </h2>
                
                <p class="texto">
                Vik is a social communicator, editor, writer, illustrator, and director of Monoblock, a project that she co-founded with Pablo Galuppo in 2004. In 2014, she published her first novel, Dangerous Networks, and in 2015 she launched her own line of products, Happimess.

                </p>
            </div>

            <div class="columna">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/David/david01.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/David/david02.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/David/david03.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/David/david04.jpg" /></li>
                        </ul>
                    </div>
                    <div data-glide-el="controls">
                            <button class='prev-arrow' data-glide-dir="<"><</button>
                            <button class='next-arrow' data-glide-dir=">">></button>
                        </div>
                </div>
                <h2 class="subtitulo">
                    DAVID MÉNDEZ<br />ALONSO
                </h2>
                <p class="texto">
                Illustrator, art director, designer, and director of the apparel design project Outsiders Division. He worked for a number of brands including Adidas, Converse, G-Star, H&M, Levi’s, Wrangler, Samsung, Nissan, Perrier, Pull & Bear and Reebok.

                </p>
            </div>

            <div class="columna">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Garabal/garabal01.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Garabal/garabal02.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Garabal/garabal03.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Garabal/garabal04.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Garabal/garabal05.jpg" /></li>
                        </ul>
                    </div>
                    <div data-glide-el="controls">
                            <button class='prev-arrow' data-glide-dir="<"><</button>
                            <button class='next-arrow' data-glide-dir=">">></button>
                    </div>
                </div>
                <h2 class="subtitulo">
                MARTÍN<br />GARABAL
                </h2>
                <p class="texto">
                Cartoonist, comedian, actor, radio host and director. He created and starred in the series Famoso; he developed the shows El Show de Cúmulo & Nimbo, Total Periodismo, Aventuras de Corazón Roto and Acquaintance for UN3.TV; he was also co-host of the radio show Últimos Cartuchos.

                </p>
            </div>

            <div class="columna">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Orco/orco01.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Orco/orco02.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Orco/orco03.jpg" /></li>
                        </ul>
                    </div>
                    <div data-glide-el="controls">
                            <button class='prev-arrow' data-glide-dir="<"><</button>
                            <button class='next-arrow' data-glide-dir=">">></button>
                    </div>
                </div>
                <h2 class="subtitulo">
                    ORCO<br />VIDEOS
                </h2>
                <p class="texto">
                Julián Gonzalez Díaz (aka Orco) is an audiovisual producer mainly known for his music videos. He directed music videos for Pablo Lescano, Paulo Londra, Dante, Neo Pistea, Duki, Cazzu, Nathy Peluso, Perota Chingó, Ca7riel and Paco Amoroso, among other acts. In 2016 he presented his first feature film, Me quedo contigo (I stand by you).

                </p>
            </div>

            <div class="columna">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                        <li class="glide__slide"><img loading="lazy"height="400" src="assets/bio/Trimarchi/trimarchi01.jpg" /></li>
                        </ul>
                    </div>
                </div>
                <h2 class="subtitulo" style="width: calc(100% + 5vw); margin-left: -2.5vw;">
                    PABLO &amp; SEBA
                    <span class="subtitulo">
                    (DOMESTIKA / TRIMARCHI)
                </span>
                </h2>
                
                <p class="texto">
                Pablo "Pacheco" González Díaz and Sebastián "Acampante" Valdivia are both graphic designers and founders of TRImarchi, the most important design conference of Latin America with 20 years of history. A little over one year ago, TRImarchi joined forces with Domestika, with whom it shares its commitment to the creative community and dedication to fostering and democratizing knowledge.

                </p>
            </div>

        </div>
    </div>

    <div class="bloque cuatro" id="inscripcion" color="#ffff66">
        <?php require('modules/form_en.php'); ?>
    </div>

    <div class="bloque cinco" id="quienes" color="#99ff99">
        <h1 class="titulo"  min-weight="740" max-weight="840">
        WHO ARE WE?

        </h1>
        <div class="columnas">

            <div class="columna">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                        <li class="glide__slide"><img loading="lazy"height="400" src="tmdg01.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="tmdg02.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="tmdg03.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="tmdg04.jpg" /></li>
                        <li class="glide__slide"><img loading="lazy"height="400" src="tmdg05.jpg" /></li>
                        </ul>
                    </div>
                </div>
                <p class="caption">
                Do you want to know more? Visit <a class='black lowercase' href="https://www.trimarchidg.net/">TRIMARCHIDG.NET</a>
                </p>
            </div>

            

            <div class="columna">
                <p class="texto">
                    TRImarchi is an international community focusing on design yet navigating the most diverse artistic expressions.
                </p>
                <br/>
                <p class="texto">
                    For more than 20 years, we have organized an annual meeting in the city of Mar del Plata, Argentina, which over time has gained increasing international relevance, maybe for its being the first design meeting in the world to be held in a stadium due to its magnitude. Thousands of minds come together in this place, eager to learn and be exposed to mesmerizing experiences in the context of a true celebration that combines conferences given by icons of design, illustration, architecture, technology, and other areas with live music, workshops, parties, exhibitions, an entrepreneurs’ market and much more.
                </p>
            </div>

            <div class="columna">
                <p class="texto">Due to the health crisis, we will not be able to meet face to face this year. However, thanks to this open call, we will feel very close. These initiatives would not be possible in these difficult times if we couldn’t promote them with friends who share our passions, ideals and aspirations. When TRImarchi was barely a dream, we were already exploring hidden corners where the wise and the curious would generously share their knowledge; places that blew our minds with info and helped us understand we weren’t alone in this geeky fever. Domestika was one of these corners. Domestika has always held a special place in our mental map, a place of respect, admiration and affection. Last year, fate brought us together; after meeting personally, all that platonic love finally became a reality.</p>
                <br/>
                <p class="texto">
                Thanks to this partnership and our commitment to the creative community, we are proud to be launching the most ambitious TRImarchi open call in history.
</p>
            </div>
    
        </div>

    </div>

    <div class="bloque seis" id="faq" color="#ffccff">
        <h1 class="titulo" min-weight="740" max-weight="840">
            FAQs
        </h1>
        <div class="columnas">
            <p class="texto">
                <span>WHO CAN PARTICIPATE?</span><br />
                This open call is for creative minds from all over the world, 16 or older.
                <br /><br />
                <span>HOW CAN I PARTICIPATE?</span><br />
                Participants must register through this website by completing a form with the
                following mandatory information: Domestika user, first and last name, age, e-mail, city,
                country and link to portfolio. Registrants will also need to choose the category/ies in which
                they wish to participate.
                <br /><br />
                <span>DO I NEED TO HAVE AN ONLINE PORTFOLIO TO PARTICIPATE?</span><br />
                Yes. If you still don’t have one, remember you can show us your work by resorting to
                different platforms: Behance, Instagram, Domestika’s projects section, YouTube, Vimeo or
                any other you consider appropriate. You can also attach various types of files to the form:
                pdf, jpeg, mp3, etc., with a maximum file size of 10 MB.
                <br /><br />
                <span>HOW DO I REGISTER AT DOMESTIKA?</span><br />
                If you still don’t have a user profile at Domestika, you can create one at <a href="https://www.
                domestika.org" target="_blank">https://www.domestika.org</a> by clicking on “Crear cuenta” (Create Account).
                When creating your profile, we recommend completing all the steps of the process (add a
                profile photo and tell us something about yourself). This will help us get to know you better
                and will increase your chances of being selected.
                <br /><br />
                <span>I ALREADY HAVE A DOMESTIKA PROFILE BUT, I CAN'T REMEMBER MY USERNAME. HOW CAN I FIND THAT
OUT?</span><br />
                In order to find your Domestika username, log in at <a href="https://www.domestika.org/" target="_blank">https://www.domestika.org/</a> and click
                on the Avatar (with your profile pic) on the upper right corner. In the drop down menu, click
                on “ver Perfil” (view profile). Under your name, you will see your username preceded by an
                @.
                <br /><br />
                <span>CAN I REGISTER FOR MORE THAN ONE CATEGORY?</span><br />
                Yes. Participants can register for all the categories they want simultaneously.
                <br /><br />
                <span>WHAT IS THE TIMEFRAME FOR REGISTRATION?</span><br />
                Registration starts on 6-15-2021 and ends on 7-31-2021.
                <br /><br />
                <span>WHEN WILL THE WINNERS BE ANNOUNCED?</span><br />
                Winners will be announced at trimarchidg.net/convocatoriatrimarchi2021 starting on August 10.
                The selected artists will also receive an email at the address indicated on the registration form.
                <br /><br />
                <span>ANY OTHER QUESTIONS?</span><br />
                Write to <a href="mailto:convocatoria2021@trimarchidg.net">convocatoria2021@trimarchidg.net</a>
            </p>
        </div>
    
    </div>


    <footer>

        <!--div class="footer-brand-domestica">
            <img class="domestika" src="domestika-logo.svg"/>
            <img class="tmdg" src="tmdg-logo.svg"/>
        </div-->

        <nav class="menu">
            <div>
                <a href="#convocatoria" class="menu-item smooth-link">OPEN CALL</a>
                <a href="#categorias" class="menu-item smooth-link">CATEGORIES+INCENTIVES
</a>
                <a href="#jurado" class="menu-item smooth-link">JURY</a>
            </div>

            <div>
                <a href="#inscripcion" class="menu-item smooth-link">REGISTRATION</a>
                <a href="#quienes" class="menu-item smooth-link">WHO ARE WE?</a>
                <a href="#faq" class="menu-item smooth-link">FAQs</a>
            </div>

            <div>
                <a href="mailto:convocatoria2021@trimarchidg.net">convocatoria2021@trimarchidg.net</a>
                <a target="_blank" href="https://instagram.com/trimarchidg">IG/TRIMARCHIDG</a>
                <a target="_blank" href="https://instagram.com/domestika">IG/DOMESTIKA</a>
            </div>

        </nav>

        <div class="footer-icon">
            <a href="#top" class='go-to-top smooth-link'>
                <img src="assets/top.svg" />
            </a>
        </div>

    </footer>

    <aside>
        <div class="modal">
            REVISA EL FORMULARIO
        </div>
    </aside>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js"></script>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script>
        setInterval(function(){
            $("contador").each(function(){
                const date = $(this).attr("date").split("/")
                const hour = $(this).attr("hour").split(":")
                
                // 30 Dias, 23h, 59min
                const finalDate = moment()
                
                finalDate.set({
                    date: +date[0],
                    month: +date[1]-1,
                    year: +date[2],
                    hours: +hour[0],
                    minutes: +hour[1],
                })

                var diffMinutes = finalDate.diff(moment(), 'minutes'); 

                var numdays = Math.floor(diffMinutes / 1440); 
                var numhours = Math.floor((diffMinutes % 1440) / 60); 
                var numminutes = Math.floor((diffMinutes % 1440) % 60); 

                $(this).html(`${numdays} Days, ${numhours}h, ${numminutes}min`)
            })  
        }, 1000)
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>

    <script>
         $(".smooth-link").on("click", function() {
            const classElement = $(this).attr("href")
            if ($(window).width() < 640) {
                $(".menu").hide()
            }
            window.scrollTo({ top: $(classElement).offset().top, behavior: 'smooth' })
            return false
        })

            function checkScroll() {
                const $scrollPos = $("body").scrollTop()
                let $current = null
                
                $('.bloque').each(function() {
                    if ($scrollPos <= $(this).offset().top + $(this).height() && !$current) {
                        $current = $(this)
                    }
                })
                
                $("header nav a.menu-item").removeClass("active")
                $("header nav a.menu-item[href='#" + $current.attr("id") + "']").addClass('active')
            }

            checkScroll()
        
            $(document).scroll(checkScroll)

            document.querySelectorAll('.glide')
                .forEach(t => {
                    new Glide(t, { autoplay: false, rewind: false }).mount()
                })  

            $(".menu-mobile").click(function() {
                $(".menu").toggle()
            })
    </script>

    <script>
        
    </script>

</body>

</html>