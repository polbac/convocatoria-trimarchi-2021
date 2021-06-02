<html>
<head>
<title>TRIMARCHI</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;301;302;303;304;305;306;307;308;309;310;311;312;313;314;315;316;317;318;319;320;321;322;323;324;325;326;327;328;329;330;331;332;333;334;335;336;337;338;339;340;341;342;343;344;345;346;347;348;349;350;351;352;353;354;355;356;357;358;359;360;361;362;363;364;365;366;367;368;369;370;371;372;373;374;375;376;377;378;379;380;381;382;383;384;385;386;387;388;389;390;391;392;393;394;395;396;397;398;399;400;401;402;403;404;405;406;407;408;409;410;411;412;413;414;415;416;417;418;419;420;421;422;423;424;425;426;427;428;429;430;431;432;433;434;435;436;437;438;439;440;441;442;443;444;445;446;447;448;449;450;451;452;453;454;455;456;457;458;459;460;461;462;463;464;465;466;467;468;469;470;471;472;473;474;475;476;477;478;479;480;481;482;483;484;485;486;487;488;489;490;491;492;493;494;495;496;497;498;499;500;501;502;503;504;505;506;507;508;509;510;511;512;513;514;515;516;517;518;519;520;521;522;523;524;525;526;527;528;529;530;531;532;533;534;535;536;537;538;539;540;541;542;543;544;545;546;547;548;549;550;551;552;553;554;555;556;557;558;559;560;561;562;563;564;565;566;567;568;569;570;571;572;573;574;575;576;577;578;579;580;581;582;583;584;585;586;587;588;589;590;591;592;593;594;595;596;597;598;599;600;601;602;603;604;605;606;607;608;609;610;611;612;613;614;615;616;617;618;619;620;621;622;623;624;625;626;627;628;629;630;631;632;633;634;635;636;637;638;639;640;641;642;643;644;645;646;647;648;649;650;651;652;653;654;655;656;657;658;659;660;661;662;663;664;665;666;667;668;669;670;671;672;673;674;675;676;677;678;679;680;681;682;683;684;685;686;687;688;689;690;691;692;693;694;695;696;697;698;699;700;701;702;703;704;705;706;707;708;709;710;711;712;713;714;715;716;717;718;719;720;721;722;723;724;725;726;727;728;729;730;731;732;733;734;735;736;737;738;739;740;741;742;743;744;745;746;747;748;749;750;751;752;753;754;755;756;757;758;759;760;761;762;763;764;765;766;767;768;769;770;771;772;773;774;775;776;777;778;779;780;781;782;783;784;785;786;787;788;789;790;791;792;793;794;795;796;797;798;799;800;801;802;803;804;805;806;807;808;809;810;811;812;813;814;815;816;817;818;819;820;821;822;823;824;825;826;827;828;829;830;831;832;833;834;835;836;837;838;839;840&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="assets/form.css">

</head>

<body id="top">
    <div class="menubar" >
        <header>
            <img class="domestika" src="domestika-logo.svg"/>
            <nav class="menu">
                <a href="#convocatoria" class="menu-item smooth-link">CONVOCATORIA</a>
                <a href="#categorias" class="menu-item smooth-link">CATEGORÍAS+ESTÍMULOS</a>
                <a href="#jurado" class="menu-item smooth-link">JURADO</a>
                <a href="#inscripcion" class="menu-item smooth-link">INSCRIPCIÓN</a>
                <a href="#quienes" class="menu-item smooth-link">QUIENES SOMOS</a>
                <a href="#faq" class="menu-item smooth-link">FAQs</a>

                <span class='lang-switcher'>
                    <a href="/" class="lang current">ES</a>/<a class="lang" href="/en">EN</a>
                </span>
            </nav>
            <img class="tmdg"src="tmdg-logo.svg"/>
        </header>
    </div>

    <div class="bloque uno" id="convocatoria" color="#ffff66">
        <p class="destacado" >
            Junto a DOMESTIKA lanzamos la
        </p>
        <h1 class="titulo">
            <span min-weight="740" max-weight="840">CONVOCATORIA</span>
            <br /> <span min-weight="600" max-weight="840">TRIMARCHI 20211</span><br />
            <span min-weight="600" max-weight="840">JUN-15AGO</span>
        </h1>
        <p class="destacado">
        <span>
            Llamado abierto a ilustradores, animadores,
        </span><br />
        <span >
            diseñadores, artistas, emprendedores, educadores,
        </span><br />
        <span >
            músicos, realizadores audiovisuales y mucho más,
        </span><br />
        <span >
            para ser parte de diversos proyectos remotos.
        </span></p>
        <img class="animacion" src="reloj.svg"/>
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
        <h1 class="titulo">
            CATEGORÍAS
        </h1>
        <div class="columnas">
            <div class="columna">
                <div class="check-categoria">
                    <img class="normal" src="dibujo1-blank.png"/>
                    <img class="hover" src="dibujo1-hover.png"/>
                    <img class="select" src="dibujo1-select.png"/>
                    <h2 class="subtitulo">
                        CONFERENCIA
                    </h2>
                </div>
                <p class="texto">
                    Las conferencias son parte del corazón de TRImarchi.
                    En nuestro camino, hemos gozado con la presencia en nuestros
                    escenarios de enormes figuras como Seymour Chwast, Paula Scher,
                    Stefan Sagmeister, Ellen Lupton, entre muchos otros.<br />
                    Este año, la oportunidad es tuya. Si querés hablarle a la
                    comunidad sobre tu carrera, proyectos y experiencias,
                    inscribite en esta categoría y participa por:
                </p>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        Ser contratado* para brindar una charla en el encuentro virtual
                        de cierre de la Convocatoria TRImarchi 2021. <a href="#">*Ver bases legales</a>
                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        Tener un encuentro directo con...<br />donde hará una review de tu porfolio.
                    </p>
                </div>
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                        Quedan<br />
                        <contador date="30/5/2021" hour="20:20"></contador>
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
                    Artistas muy diversos siempre han tenido lugar en TRImarchi
                    para mostrar su trabajo. Sabemos que hay muchas buenas ideas
                    que solo necesitan una mano amiga para ver la luz. Por eso,
                    si tenés en mente una obra artística para desarrollar y exponer,
                    inscribite en esta categoría y participa por:
                </p>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        Obtener un incentivo económico de<br />
                        U$S 3.000para desarrollar tu obra
                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    Contar con la asesoría de <span>DIANA AIZEMBERG</span> durante el proceso
                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        Exhibir tu obra en el Museo MAR<br />
                        en Mar del Plata
                    </p>
                </div>
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                        Quedan<br />
                        <contador date="30/5/2021" hour="00:20"></contador>
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
                    Una de las razones por las que nace TRImarchi es saciar
                    la sed de quienes buscan data. Si tenés vocación de enseñar
                    y querés compartir lo que sabés, anotate en esta categoría
                    para participar por la posibilidad de:
                </p>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    Tener tu propio curso en<br />
                    <span>DOMESTIKA</span>
                    </p>
                </div>
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                        Quedan<br />
                        <contador date="30/5/2021" hour="20:20"></contador>
                    </p>
                </div>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="normal" src="dibujo4-blank.png"/>
                    <img class="hover" src="dibujo4-hover.png"/>
                    <img class="select" src="dibujo4-select.png"/>
                    <h2 class="subtitulo">
                        INDUMENTARIA
                    </h2>
                </div>
                <p class="texto">
                    ¿Querés crear o darle impulso a tu marca de indumentaria?
                    Éste es tu lugar dentro de la convocatoria. Inscribite en
                    esta categoría para:
                </p>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        Obtener un incentivo económico de<br />
                        U$S 2.000 para desarrollar o impulsar<br />
                        tu proyecto
                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        Tener una serie de encuentros con<br />
                        <span>DAVID MENDEZ ALONSO</span> (Outsider<br />
                        Division), para que te oriente y ofrezca<br />
                        sus consejos.
                    </p>
                </div>
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                        Quedan<br />
                        <contador date="30/6/2021" hour="20:20"></contador>
                    </p>
                </div>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="normal" src="dibujo5-blank.png"/>
                    <img class="hover" src="dibujo5-hover.png"/>
                    <img class="select" src="dibujo5-select.png"/>
                    <h2 class="subtitulo">
                        EMPRENDIMIENTO
                    </h2>
                </div>
                <p class="texto">
                    Si tenés un proyecto personal vinculado a la creatividad
                    o el arte al que querés hacer crecer, este es tu lugar
                    dentro de la convocatoria. Anotate acá para:
                </p>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        Obtener un incentivo económico de<br />
                        U$S 2.000 para desarrollar o impulsar<br />
                        tu proyecto.
                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        Tener una serie de encuentros con <span>VIK<br />
                        ARRIETA</span> (Monoblock), para que te<br />
                        ayude a encontrar el mejor camino<br />
                        para tu iniciativa.
                    </p>
                </div>
                
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                    Quedan<br />
                    <contador date="30/5/2021" hour="20:20"></contador>
                    </p>
                </div>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="normal" src="dibujo6-blank.png"/>
                    <img class="hover" src="dibujo6-hover.png"/>
                    <img class="select" src="dibujo6-select.png"/>
                    <h2 class="subtitulo">
                        MÚSICA
                    </h2>
                </div>
                <p class="texto">
                    Si sos una banda o músico solista, no podés perderte
                    esta oportunidad. Compartinos una canción de tu autoría
                    y si sos elegido:
                </p>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        Financiamos la grabación de un simple<br />
                        en un estudio de primer nivel.
                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        Filmamos el videoclip de tu simple,<br />
                        con un director seleccionado de la<br />
                        sección <span>VIDEOCLIP</span>, acompañado por<br />
                        <span>ORCO VIDEOS</span>.
                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        Conversá con <span>CA7RIEL</span> para que te<br />
                        tire info única.
                    </p>
                </div>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        Diseñamos la portada de tu simple,<br />
                        con el participante seleccionado de la<br />
                        sección <span>PORTADA</span>.
                    </p>
                </div>
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                        Quedan<br />
                        <contador date="30/9/2021" hour="1:20"></contador>
                    </p>
                </div>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="normal" src="dibujo7-blank.png"/>
                    <img class="hover" src="dibujo7-hover.png"/>
                    <img class="select" src="dibujo7-select.png"/>
                    <h2 class="subtitulo">
                        VIDEOCLIP
                    </h2>
                </div>
                <p class="texto">
                    En esta categoría buscamos personas que quieran dirigir
                    un videoclip. Inscribite y participá por:
                </p>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                        Ser contratado* para dirigir un video-<br />
                        clip producido íntegramente <span>ORCO<br />
                        VIDEOS</span>. <a href="">*Ver bases legales</a>
                    </p>
                </div>
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                        Quedan<br />
                        <contador date="29/5/2021" hour="20:20"></contador>
                    </p>
                </div>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="normal" src="dibujo8-blank.png"/>
                    <img class="hover" src="dibujo8-hover.png"/>
                    <img class="select" src="dibujo8-select.png"/>
                    <h2 class="subtitulo">
                        PORTADA
                    </h2>
                </div>
                <p class="texto">
                    En esta categoría unimos muchas cosas que amamos:
                    diseño, ilustración, tipografía, música, etc. Inscribite para:
                </p>
                <div class="item">
                    <img src="item.svg"/>
                    <p class="texto">
                    Ser contratado* para diseñar la portada<br />
                    del simple de la banda seleccionada<br />
                    en esta Convocatoria. <a href="">*Ver bases legales</a>
                    </p>
                </div>
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                        Quedan<br />
                        <contador date="6/8/2021" hour="20:20"></contador>
                    </p>
                </div>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="normal" src="dibujo9-blank.png"/>
                    <img class="hover" src="dibujo9-hover.png"/>
                    <img class="select" src="dibujo9-select.png"/>
                    <h2 class="subtitulo">
                        COLECTIVO
                    </h2>
                </div>
                <p class="texto">
                    Inscribite en esta categoría para tener la posibilidad de trabajar
                    junto a nosotros en proyectos puntuales que tendrán lugar a lo
                    largo del año. Hay muchas ideas dando vueltas, así que la búsqueda
                    es amplia: ilustradorxs, diseñadorxs, tipógrafxs, fotógrafxs,
                    ceramistas, artesanos y un largo etcétera. No hay plazo límite para
                    inscribirse si querés formar parte del colectivo TRImarchi, pero no
                    duermas, porque hay proyectos que comienzan muy pronto.
                </p>
                <div class="item">
                    <img src="cronometro-verde.svg"/>
                    <p class="texto">
                        Quedan<br />
                        <contador date="10/6/2021" hour="20:20"></contador>
                    </p>
                </div>
            </div>
        
        </div>
    </div>

    <div class="bloque tres" id="jurado" color="#ffccff">
        <h1 class="titulo">
            JURADO
        </h1>
        <div class="columnas">

            <div class="columna">
                <img class="jurado" src="blank.jpg"/>
                <h2 class="subtitulo">
                    BRAULIO<br />AMADO
                </h2>
                <p class="texto">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                sed diam nonummy nibh eu ismod tincidunt ut laoreet dolore
                magna ali quam erat volutpat. Ut wisi enim. Lorem ipsum dolor
                sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                eu ismod tincidunt ut laoreet dolore magna ali quam erat.
                </p>
            </div>

            <div class="columna">
                <img class="jurado" src="blank.jpg"/>
                <h2 class="subtitulo">
                    DIANA<br />AIZEMBERG
                </h2>
                <p class="texto">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh eu ismod tincidunt ut laoreet dolore
                    magna ali quam erat volutpat. Ut wisi enim. Lorem ipsum dolor
                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    eu ismod tincidunt ut laoreet dolore magna ali quam erat.
                </p>
            </div>

            <div class="columna">
                <img class="jurado" src="blank.jpg"/>
                <h2 class="subtitulo">
                    SOFIE
                </h2>
                <p class="texto">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh eu ismod tincidunt ut laoreet dolore
                    magna ali quam erat volutpat. Ut wisi enim. Lorem ipsum dolor
                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    eu ismod tincidunt ut laoreet dolore magna ali quam erat.
                </p>
            </div>

            <div class="columna">
                <img class="jurado" src="blank.jpg"/>
                <h2 class="subtitulo">
                    CA7RIEL
                </h2>
                <p class="texto">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh eu ismod tincidunt ut laoreet dolore
                    magna ali quam erat volutpat. Ut wisi enim. Lorem ipsum dolor
                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    eu ismod tincidunt ut laoreet dolore magna ali quam erat.
                </p>
            </div>

            <div class="columna">
                <img class="jurado" src="blank.jpg"/>
                <h2 class="subtitulo">
                    MONOBLOCK
                </h2>
                <p class="texto">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh eu ismod tincidunt ut laoreet dolore
                    magna ali quam erat volutpat. Ut wisi enim. Lorem ipsum dolor
                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    eu ismod tincidunt ut laoreet dolore magna ali quam erat.
                </p>
            </div>

            <div class="columna">
                <img class="jurado" src="blank.jpg"/>
                <h2 class="subtitulo">
                    DAVID MÉNDEZ<br />ALONSO
                </h2>
                <p class="texto">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh eu ismod tincidunt ut laoreet dolore
                    magna ali quam erat volutpat. Ut wisi enim. Lorem ipsum dolor
                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    eu ismod tincidunt ut laoreet dolore magna ali quam erat.
                </p>
            </div>

            <div class="columna">
                <img class="jurado" src="blank.jpg"/>
                <h2 class="subtitulo">
                MARTÍN<br />GARABAL
                </h2>
                <p class="texto">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh eu ismod tincidunt ut laoreet dolore
                    magna ali quam erat volutpat. Ut wisi enim. Lorem ipsum dolor
                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    eu ismod tincidunt ut laoreet dolore magna ali quam erat.
                </p>
            </div>

            <div class="columna">
                <img class="jurado" src="blank.jpg"/>
                <h2 class="subtitulo">
                    TRIMARCHI
                </h2>
                <p class="texto">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh eu ismod tincidunt ut laoreet dolore
                    magna ali quam erat volutpat. Ut wisi enim. Lorem ipsum dolor
                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    eu ismod tincidunt ut laoreet dolore magna ali quam erat.
                </p>
            </div>

            <div class="columna">
                <img class="jurado" src="blank.jpg"/>
                <h2 class="subtitulo">
                    DOMESTIKA
                </h2>
                <p class="texto">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                    sed diam nonummy nibh eu ismod tincidunt ut laoreet dolore
                    magna ali quam erat volutpat. Ut wisi enim. Lorem ipsum dolor
                    sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                    eu ismod tincidunt ut laoreet dolore magna ali quam erat.
                </p>
            </div>

        </div>
    </div>

    <div class="bloque cuatro" id="inscripcion" color="#ffff66">
        <?php require('modules/form.php'); ?>
    </div>

    <div class="bloque cinco" id="quienes" color="#99ff99">
        <h1 class="titulo">
            TRIMARCHI
        </h1>
        <div class="columnas">

            <div class="columna">
                <img class="jurado" src="blank.jpg"/>
                <p class="caption">
                    ¿Querés saber más? Visitá <a class='black lowercase' href="https://www.trimarchidg.net/">TRIMARCHIDG.NET</a>
                </p>
            </div>

            <div class="columna">
                <p class="texto">
                    TRImarchi es una comunidad internacional con foco en el diseño,
                    pero que navega por las más diversas expresiones artísticas.<br /><br />
                    Desde hace más de 20 años, organizamos anualmente un encuentro
                    en la ciudad de Mar del Plata, Argentina. Allí nucleamos a miles
                    de mentes sedientas de conocimiento y experiencias movilizantes
                    en una verdadera celebración, uniendo conferencias de referentes
                    del mundo del diseño, ilustración, arquitectura, tecnología, etc
                    con recitales en vivo, workshops, fiestas, exposiciones, mercado
                    de emprendedores y mucho más.<br /><br />
                    La situación sanitaria nos impedirá reunirnos físicamente este año,
                    pero gracias a esta convocatoria estaremos muy cerca.
                    Estas movidas no serían posibles en tiempos difíciles como los
                </p>
            </div>

            <div class="columna">
                <p class="texto">
                    que corren, si no las impulsáramos junto a amigos que comparten
                    nuestras pasiones, ideales y anhelos. Cuando recién comenzábamos
                    a soñar con TRImarchi, ya deambulábamos por rincones donde curiosos
                    y sabios compartían generosamente, lugares que nos llenaban de data
                    y nos ayudaban a entender que no estábamos solos en este delirio nerd.
                    Uno de esos lugares era el foro de DOMESTIKA. Desde ese entonces,
                    Domestika siempre ocupó en nuestro tablero un lugar de respeto,
                    admiración y cariño. El año pasado, el destino nos cruzó, nos conocimos
                    personalmente y todo ese amor platónico se hizo realidad.<br /><br />
                    Hoy, gracias a ese encuentro y al compromiso que asumimos juntos con
                    la comunidad creativa, lanzamos la convocatoria TRImarchi más ambiciosa
                    de nuestra historia.
                </p>
            </div>
    
        </div>

    </div>

    <div class="bloque seis" id="faq" color="#ffccff">
        <h1 class="titulo">
            FAQs
        </h1>
        <div class="columnas">
            <p class="texto">
                <span>QUIÉNES PUEDEN PARTICIPAR?</span><br />
                La Convocatoria está abierta a creativos de todo el mundo, mayores de 18 años.
                <br /><br />
                <span>¿CÓMO PUEDO PARTICIPAR?</span><br />
                Los participantes deberán inscribirse a través de la página web <a href="http://trimarchidg.net/convocatoriatrimarchi2021">trimarchidg.net/convocatoriatrimarchi2021</a> completando de forma obligatoria un formulario con la
                siguiente información: usuario en domestika, nombre y apellido, edad, e-mail, link a
                porfolio, ciudad y país. Además deberán seleccionar la/s categoría/s en las que
                quieren participar.
                <br /><br />
                <span>¿TENGO QUE TENER UN PORFOLIO ONLINE PARA PARTICIPAR?</span><br />
                No es necesario. Si no tienes un porfolio online puedes subir un archivo para
                mostrarnos tu trabajo en alguno de los siguientes formatos: pdf, jpg o mp3. El
                tamaño máximo admitido es de 20 MB.
                <br /><br />
                <span>¿CÓMO HAGO PARA REGISTRARME EN DOMESTIKA?</span><br />
                Si todavía no tenés usuario en Domestika, podés crearlo ingresando en <a href="https://www.
                domestika.org/es" target="_blank">https://www.
                domestika.org/es</a> y allí hacé click en “Crear cuenta”. Al crear tu perfil, te
                recomendamos hacerlo de manera completa (agregá una foto de perfil y contanos
                algo sobre vos. Eso nos ayudará a conocerte más y te dará mayores chances de ser
                elegido. Recordá que estar registrado en Domestika es un requisito obligatorio
                para inscribirte en cualquiera de las categorías.
                <br /><br />
                <span>SI YA TENGO USUARIO EN DOMESTIKA PERO NO RECUERDO EL NOMBRE,<br />
                ¿CÓMO HAGO PARA CONSULTARLO?</span><br />
                Para saber cuál es tu nombre de usuario en Domestika, ingresá
                <a href="https://www.domestika.org/" target="_blank">https://www.domestika.org/</a> y una vez que estés logueado, hacé click en el
                avatar (con tu foto de perfil) que está en el margen superior derecho. En el menú
                que se despliega, clickeá en “ver Perfil”. Allí debajo de tu nombre, aparecerá tu
                nombre de usuario precedido por un @.
                <br /><br />
                <span>¿ME PUEDO INSCRIBIR EN MÁS DE UNA CATEGORÍA?</span><br />
                Sí. Los participantes pueden inscribirse en todas las categorías que quieran de
                manera simultánea.
                <br /><br />
                <span>¿CUÁL ES EL PLAZO PARA INSCRIBIRME?</span><br />
                El plazo para inscribirse en las categorías 1 a 7 es desde el 01/05/2021 al
                15/06/2021 inclusive.
                El plazo para inscribirse en la categoría 8 es desde el 01/05/2021 al 15/12/2021 inclusive.
                <br /><br />
                <span>¿CUANDO SE ANUNCIAN LOS GANADORES?</span><br />
                Los ganadores de las categorías 1 a 7 serán anunciados en <a href="https://trimarchidg.net/convocatoriatrimarchi2021" target="_blank">trimarchidg.net/convocatoriatrimarchi2021</a>
                a partir del 30/06.
                Al mismo tiempo, serán contactados a través de la cuenta de email asociada a su
                usuario en Domestika.
                Los ganadores de la categoría 8 serán contactados a través de la cuenta de email
                asociada a su usuario en Domestika a medida que sean seleccionados para un
                proyecto en particular.
                <br /><br />
                <span>¿TENÉS MÁS PREGUNTAS?</span><br />
                Escribinos a <a href="mailto:convocatoria@trimarchidg.net">convocatoria@trimarchidg.net</a>
            </p>
        </div>
    
    </div>


    <footer>
        <div class="footer-brand-domestica">
            <img class="domestika" src="domestika-logo.svg"/>
            <img class="tmdg" src="tmdg-logo.svg"/>
        </div>

        <nav class="menu">
            <div>
                <a href="#convocatoria" class="menu-item smooth-link">CONVOCATORIA</a>
                <a href="#categorias" class="menu-item smooth-link">CATEGORÍAS+ESTÍMULOS</a>
                <a href="#jurado" class="menu-item smooth-link">JURADO</a>
            </div>

            <div>
                <a href="#inscripcion" class="menu-item smooth-link">INSCRIPCIÓN</a>
                <a href="#quienes-somos" class="menu-itemv">QUIENES SOMOS</a>
                <a href="#faq" class="menu-item smooth-link">FAQs</a>
            </div>

            <div>
                <a href="mailto:info@trimarchidg.net">INFO@TRIMARCHIDG.NET</a>
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

                $(this).html(`${numdays} Días, ${numhours}h, ${numminutes}min`)
            })  
        }, 1000)
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js">
    </script>
    <script>
         $(".smooth-link").on("click", function() {
            const classElement = $(this).attr("href")
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
                
                $("nav a.menu-item").removeClass("active")
                $("nav a.menu-item[href='#" + $current.attr("id") + "']").addClass('active')
            }

            checkScroll()
        
            $(document).scroll(checkScroll)
        

        

        
        
        

    </script>

</body>

</html>