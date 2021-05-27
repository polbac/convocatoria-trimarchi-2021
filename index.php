<html>
<head>
<title>TRIMARCHI</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;301;302;303;304;305;306;307;308;309;310;311;312;313;314;315;316;317;318;319;320;321;322;323;324;325;326;327;328;329;330;331;332;333;334;335;336;337;338;339;340;341;342;343;344;345;346;347;348;349;350;351;352;353;354;355;356;357;358;359;360;361;362;363;364;365;366;367;368;369;370;371;372;373;374;375;376;377;378;379;380;381;382;383;384;385;386;387;388;389;390;391;392;393;394;395;396;397;398;399;400;401;402;403;404;405;406;407;408;409;410;411;412;413;414;415;416;417;418;419;420;421;422;423;424;425;426;427;428;429;430;431;432;433;434;435;436;437;438;439;440;441;442;443;444;445;446;447;448;449;450;451;452;453;454;455;456;457;458;459;460;461;462;463;464;465;466;467;468;469;470;471;472;473;474;475;476;477;478;479;480;481;482;483;484;485;486;487;488;489;490;491;492;493;494;495;496;497;498;499;500;501;502;503;504;505;506;507;508;509;510;511;512;513;514;515;516;517;518;519;520;521;522;523;524;525;526;527;528;529;530;531;532;533;534;535;536;537;538;539;540;541;542;543;544;545;546;547;548;549;550;551;552;553;554;555;556;557;558;559;560;561;562;563;564;565;566;567;568;569;570;571;572;573;574;575;576;577;578;579;580;581;582;583;584;585;586;587;588;589;590;591;592;593;594;595;596;597;598;599;600;601;602;603;604;605;606;607;608;609;610;611;612;613;614;615;616;617;618;619;620;621;622;623;624;625;626;627;628;629;630;631;632;633;634;635;636;637;638;639;640;641;642;643;644;645;646;647;648;649;650;651;652;653;654;655;656;657;658;659;660;661;662;663;664;665;666;667;668;669;670;671;672;673;674;675;676;677;678;679;680;681;682;683;684;685;686;687;688;689;690;691;692;693;694;695;696;697;698;699;700;701;702;703;704;705;706;707;708;709;710;711;712;713;714;715;716;717;718;719;720;721;722;723;724;725;726;727;728;729;730;731;732;733;734;735;736;737;738;739;740;741;742;743;744;745;746;747;748;749;750;751;752;753;754;755;756;757;758;759;760;761;762;763;764;765;766;767;768;769;770;771;772;773;774;775;776;777;778;779;780;781;782;783;784;785;786;787;788;789;790;791;792;793;794;795;796;797;798;799;800;801;802;803;804;805;806;807;808;809;810;811;812;813;814;815;816;817;818;819;820;821;822;823;824;825;826;827;828;829;830;831;832;833;834;835;836;837;838;839;840&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="assets/form.css">

</head>

<body>
    <div class="menubar">
        <header>
            <img class="domestika" src="domestika-logo.svg"/>
            <nav class="menu">
                <a href="#" class="menu-item">CONVOCATORIA</a>
                <a href="#" class="menu-item">CATEGORÍAS+ESTÍMULOS</a>
                <a href="#" class="menu-item">JURADO</a>
                <a href="#" class="menu-item">QUIENES SOMOS</a>
                <a href="#" class="menu-item">F.A.Q</a>
            </nav>
            <img class="tmdg"src="tmdg-logo.svg"/>
        </header>
    </div>

    <div class="bloque uno" color="#ffffff">
        <p class="destacado" min-weight="300" max-weight="500">
            Junto a DOMESTIKA lanzamos la
        </p>
        <h1 class="titulo">
            <span min-weight="500" max-weight="840">CONVOCATORIA</span>
            <br /> <span min-weight="500" max-weight="840">TRIMARCHI 20211</span><br />
            <span min-weight="500" max-weight="840">JUN-15AGO</span>
        </h1>
        <p class="destacado">
        <span min-weight="300" max-weight="540">
            Llamado abierto a ilustradores, animadores,
        </span><br />
        <span min-weight="300" max-weight="540">
            diseñadores, artistas, emprendedores, educadores,
        </span><br />
        <span min-weight="300" max-weight="540">
            músicos, realizadores audiovisuales y mucho más,
        </span><br />
        <span min-weight="300" max-weight="540">
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
        
        let mX, mY

        function calculateDistance(elem, mouseX, mouseY) {
            return Math.floor(Math.sqrt(Math.pow(mouseX - (elem.offset().left+(elem.width()/2)), 2) + Math.pow(mouseY - (elem.offset().top+(elem.height()/2)), 2)));
        }

        $(document).mousemove(function(e) {  
            mX = e.pageX;
            mY = e.pageY;

            $("*[min-weight]").each(function(){
                distance = calculateDistance($(this), mX, mY);
                const fontWeight = $(this).attr('max-weight') - distance
                $(this).css({
                    fontWeight,
                })
            })
        });

        $(document).scroll(function(){
            const scrollTop = $(document).scrollTop()
            $("*[color]").each(function(){
                if (scrollTop >= $(this).offset().top - 100) {
                    $("body").css({
                        backgroundColor: $(this).attr("color")
                    })
                }
                
            })
        })

    })();
    </script>

    <div class="bloque dos" color="#b4ef56">
        <h1 class="titulo">
            CATEGORIAS
        </h1>
        <div class="columnas">
            <div class="columna">
                <div class="check-categoria">
                    <img class="animacion" src="reloj.svg"/>
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
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="animacion" src="reloj.svg"/>
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
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="animacion" src="reloj.svg"/>
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
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="animacion" src="reloj.svg"/>
                    <h2 class="subtitulo">
                        INDUMENTARIA
                    </h2>
                </div>
                <p class="texto">
                    ¿Querés crear o darle impulso a tu marca de indumentaria?
                    Éste es tu lugar dentro de la convocatoria. Inscribite en
                    esta categoría para:
                </p>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="animacion" src="reloj.svg"/>
                    <h2 class="subtitulo">
                        EMPRENDIMIENTO
                    </h2>
                </div>
                <p class="texto">
                    Si tenés un proyecto personal vinculado a la creatividad
                    o el arte al que querés hacer crecer, este es tu lugar
                    dentro de la convocatoria. Anotate acá para:
                </p>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="animacion" src="reloj.svg"/>
                    <h2 class="subtitulo">
                        MÚSICA
                    </h2>
                </div>
                <p class="texto">
                    Si sos una banda o músico solista, no podés perderte
                    esta oportunidad. Compartinos una canción de tu autoría
                    y si sos elegido:
                </p>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="animacion" src="reloj.svg"/>
                    <h2 class="subtitulo">
                        VIDEOCLIP
                    </h2>
                </div>
                <p class="texto">
                    En esta categoría buscamos personas que quieran dirigir
                    un videoclip. Inscribite y participá por:
                </p>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="animacion" src="reloj.svg"/>
                    <h2 class="subtitulo">
                        PORTADA
                    </h2>
                </div>
                <p class="texto">
                    En esta categoría unimos muchas cosas que amamos:
                    diseño, ilustración, tipografía, música, etc. Inscribite para:
                </p>
            </div>

            <div class="columna">
                <div class="check-categoria">
                    <img class="animacion" src="reloj.svg"/>
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
            </div>
        
        </div>
    </div>

    <div class="bloque tres" color="#5670ef">
        <?php require('modules/form.php'); ?>
    </div>

</body>

</html>