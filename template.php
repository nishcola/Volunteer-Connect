<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Wheelchair_symbol.svg/898px-Wheelchair_symbol.svg.png">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Template</title>
</head>

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    body {
        padding-bottom: 3rem;
        color: rgb(var(--bs-tertiary-color-rgb));
    }

    .carousel {
        margin-bottom: 4rem;
    }

    .carousel-caption {
        bottom: 3rem;
        z-index: 10;
    }

    .carousel-item {
        height: 32rem;
    }

    @media (min-width: 40em) {

        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
    }

    @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
    }
</style>

<body class="text-bg-dark">
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="newSignup.php" target="_blank" class="nav-link active" aria-current="page">Sign Up</a></li>
                <li class="nav-item"><a href="newSignin.php" target="_blank" class="nav-link">Log In</a></li>
                <li class="nav-item"><a href="#servicessegment" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#pricingsegment" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="#aboutsegment" class="nav-link">About</a></li>
            </ul>
        </header>
    </div>
    <main>
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images\ismael-paramo-Cns0h4ypRyA-unsplash.jpg" style="object-fit: cover;" width="100%"
                        height="100%" class="bd-placeholder-img" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Connecting the world. Together.</h1>
                            <p>Our mission is to ensure that nobody lacks the help they need, regardless of social or economic status.</p>
                            <p><a class="btn btn-lg btn-primary" href="newSignup.php" target="_blank">Sign Up Today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images\7cb62729-5bf6-4e1a-bed8-ff7a03fb08fd.jpg" style="object-fit: cover;" width="100%"
                        height="100%" class="bd-placeholder-img" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>The world's next-generation volunteering platform.</h1>
                            <p>Find tasks that suit your interests.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images\25cc406b-e09b-4566-a89f-f11030284dce.jpg" style="object-fit: cover;" width="100%"
                        height="100%" class="bd-placeholder-img" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Find help when you need it the most.</h1>
                            <p>Create tasks for others to find and assist you with.</p>
                            <p><a class="btn btn-lg btn-primary" href="newSignup.php" target="_blank">Start Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <svg class="d-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy"
                        xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="867" height="673.00476"
                        viewBox="0 0 867 673.00476" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="M279.60885,409.65a137.19911,137.19911,0,0,1-72.31766-70.94226c-7.92978-18.13106-11.80123-37.793-14.00554-57.45919-2.16264-19.29432-2.60422-39.647,5.69938-57.1969a61.53473,61.53473,0,0,1,105.04853-10.338c5.45032,7.34911,9.28237,16.16739,9.38015,25.31648.20512,19.1909-15.226,34.59216-21.99555,52.5506-6.99568,18.55821-4.47426,39.12053-3.285,58.91781s.43546,41.25953-11.57691,57.04084"
                            transform="translate(-166.5 -113.49762)" fill="#f2f2f2" />
                        <path
                            d="M858.4256,652.31485a137.1991,137.1991,0,0,0,83.13691-57.887c10.84272-16.55452,17.93929-35.29539,23.39277-54.31843,5.35038-18.66337,9.18033-38.65734,3.92011-57.34632a61.53472,61.53472,0,0,0-101.85288-27.71384c-6.59971,6.33712-11.84885,14.39276-13.47121,23.39739-3.403,18.88788,9.24319,36.64711,12.92274,55.48308,3.80243,19.46505-2.11318,39.31881-6.5877,58.64044s-7.31088,40.609,1.90112,58.17275"
                            transform="translate(-166.5 -113.49762)" fill="#f2f2f2" />
                        <path
                            d="M598.5,621.49762A219.9951,219.9951,0,0,1,464.0791,576.191a223.64621,223.64621,0,0,1-78.77734-114.5957l1.9209-.5586C414.35107,554.33649,501.23145,619.49762,598.5,619.49762a218.6918,218.6918,0,0,0,84.7207-16.9043l.77051,1.84571A220.6799,220.6799,0,0,1,598.5,621.49762Z"
                            transform="translate(-166.5 -113.49762)" fill="#e6e6e6" />
                        <path
                            d="M808.50586,333.74371C779.64844,241.48444,695.25391,179.49762,598.5,179.49762a218.75925,218.75925,0,0,0-83.58838,16.43555l-.76074-1.84961a222.33109,222.33109,0,0,1,217.03857,27.41553A223.90632,223.90632,0,0,1,810.415,333.147Z"
                            transform="translate(-166.5 -113.49762)" fill="#e6e6e6" />
                        <path
                            d="M868.5,691.49762c-90.98145,0-165-74.01855-165-165s74.01855-165,165-165,165,74.01855,165,165S959.48145,691.49762,868.5,691.49762Zm0-328c-89.87842,0-163,73.12158-163,163,0,89.87891,73.12158,163,163,163s163-73.12109,163-163C1031.5,436.6192,958.37842,363.49762,868.5,363.49762Z"
                            transform="translate(-166.5 -113.49762)" fill="#3f3d56" />
                        <path
                            d="M331.5,443.49762c-90.98145,0-165-74.01855-165-165s74.01855-165,165-165,165,74.01855,165,165S422.48145,443.49762,331.5,443.49762Zm0-328c-89.87842,0-163,73.12158-163,163s73.12158,163,163,163,163-73.12158,163-163S421.37842,115.49762,331.5,115.49762Z"
                            transform="translate(-166.5 -113.49762)" fill="#3f3d56" />
                        <path
                            d="M318.67089,279.42535l-14.5705,28.29845,14.3868,8.24735s9.8695-31.78674,10.16009-32.993a7.93939,7.93939,0,1,0-9.97639-3.55276Z"
                            transform="translate(-166.5 -113.49762)" fill="#a0616a" />
                        <path
                            d="M243.8954,283.27448c6.49952,24.0805,29.86111,39.37475,49.26053,57.71081a18.19655,18.19655,0,0,0,23.67918-12.7603l6.53848-25.58806-16.61845-.44428-6.87747,7.47446L277.62486,293.81Z"
                            transform="translate(-166.5 -113.49762)" fill="#3f3d56" />
                        <path
                            d="M843.97012,552.13554a10.85509,10.85509,0,0,1,10.13845,11.24482,10.414,10.414,0,0,1-.23432,1.70553l32.0415,20.186-17.71427,7.83458L840.4901,572.73638a10.825,10.825,0,0,1-7.65374-10.77376,10.35947,10.35947,0,0,1,10.84978-9.84478Q843.82825,552.12474,843.97012,552.13554Z"
                            transform="translate(-166.5 -113.49762)" fill="#ffb6b6" />
                        <path
                            d="M874.86807,576.097,866.927,592.48175l31.39839,20.20507a15.61915,15.61915,0,0,0,15.18325,1.01717h0a14.96555,14.96555,0,0,0,8.30012-15.96237L911.62057,539.5773a16.13612,16.13612,0,0,0-17.716-13.361h0a15.30328,15.30328,0,0,0-13.5492,16.876q.02589.23676.05913.47261a15.70016,15.70016,0,0,0,.32082,1.66059l11.12228,41.36534Z"
                            transform="translate(-166.5 -113.49762)" fill="#6c63ff" />
                        <path
                            d="M846.33136,582.73974l-11.82393-30.50919a4.227,4.227,0,0,1,2.41124-5.46287l6.6493-2.577a4.227,4.227,0,0,1,5.46287,2.41124l11.82393,30.50919a4.227,4.227,0,0,1-2.41124,5.46287l-6.6493,2.577A4.227,4.227,0,0,1,846.33136,582.73974Z"
                            transform="translate(-166.5 -113.49762)" fill="#3f3d56" />
                        <path
                            d="M838.29977,548.02223a2.278,2.278,0,0,0-1.29938,2.94387l11.82393,30.50919a2.278,2.278,0,0,0,2.94387,1.29938l6.6493-2.577a2.278,2.278,0,0,0,1.29938-2.94387L847.893,546.74465a2.278,2.278,0,0,0-2.94387-1.29938Z"
                            transform="translate(-166.5 -113.49762)" fill="#6c63ff" />
                        <rect x="872.6365" y="601.49726" width="44.90328" height="44.90328"
                            transform="translate(1623.67628 1134.40019) rotate(-180)" fill="#ffb8b8" />
                        <polygon points="599.649 620.243 582.5 614.473 572.95 661.153 584.57 665.062 599.649 620.243"
                            fill="#ffb6b6" />
                        <polygon points="630.062 611.362 612.454 615.526 629.013 660.202 640.944 657.38 630.062 611.362"
                            fill="#ffb6b6" />
                        <path
                            d="M915.92913,658.13148c9,60-110.851,24.527-110.851,24.527L767.5,734.49762l-22-4s9.89923-31.12035,27.57809-72.83914c7.851-18.527,97-14,97-14l1.851-14.527,51-1Z"
                            transform="translate(-166.5 -113.49762)" fill="#2f2e41" />
                        <path d="M801.295,669.78619l-32.641.751c5.23261,45.00684,9.846,62.96045,9.846,62.96045l19-6Z"
                            transform="translate(-166.5 -113.49762)" fill="#2f2e41" />
                        <path
                            d="M890.27708,528.52944l9.03811-11.61773,12.89268-.559,1.28678,10.92665,6.38829,2.94575a171.32916,171.32916,0,0,1,2.88591,74.22664l0,0h0a6.60916,6.60916,0,0,0-1.88,6.42l.41415,1.65108-.03833.06048a9.67167,9.67167,0,0,0-1.284,7.22046h0l3.05076,5.42093a15.39474,15.39474,0,0,1-8.19434,22.01792c-18.75278,6.79736-36.332,9.32923-49.33708-9.745l-4.08932-66.47044Z"
                            transform="translate(-166.5 -113.49762)" fill="#6c63ff" />
                        <circle cx="733.2453" cy="382.66153" r="23.83777" fill="#ffb8b8" />
                        <path
                            d="M911.7121,467.42307c10.09326.1939,18.09854,9.55613,17.88038,20.91112,7.46919,7.79365,4.99943,17.33022-1.24159,27.52808-11.41665,1.32527-14.08175,1.87748-24.09385,5.96063l-1.31913-6.16418-2.98978,8.02729q-3.81665,1.7595-7.57569,3.86276c-1.80085-8.2605-1.35437-16.28992,3.486-23.28372,4.30017-6.21326-6.16458-13.5896-13.64852-12.547h0l.10964-5.70656-1.87981,5.67254c-2.91724,2.14371-6.14435,1.36762-9.45355-.18161v-.00006C865.62006,463.613,907.16614,455.98612,911.7121,467.42307Z"
                            transform="translate(-166.5 -113.49762)" fill="#2f2e41" />
                        <path
                            d="M756.35215,786.455l-7.6404-.998-.42149-7.39164-4.43515,6.75724-20.26433-2.64706a4.5939,4.5939,0,0,1-1.50369-8.64189l17.64236-9.0623.95261-7.29261,16.88839,3.23931Z"
                            transform="translate(-166.5 -113.49762)" fill="#2f2e41" />
                        <path
                            d="M811.82841,782.24735l-7.6423.98344-2.29259-7.03975-2.56525,7.66488-20.26935,2.60834a4.5939,4.5939,0,0,1-3.65786-7.97266L790.149,765.22973l-.93868-7.29442,17.15608-1.17473Z"
                            transform="translate(-166.5 -113.49762)" fill="#2f2e41" />
                        <path
                            d="M846.84469,557.7125a10.85509,10.85509,0,0,1,10.13845,11.24482,10.414,10.414,0,0,1-.23432,1.70554l32.0415,20.186-17.71427,7.83458-27.71138-20.37009a10.825,10.825,0,0,1-7.65374-10.77377,10.35946,10.35946,0,0,1,10.84978-9.84478Q846.70282,557.70171,846.84469,557.7125Z"
                            transform="translate(-166.5 -113.49762)" fill="#ffb6b6" />
                        <path
                            d="M877.74264,581.674l-7.94109,16.38472,31.39839,20.20507a15.61912,15.61912,0,0,0,15.18325,1.01716h0a14.96551,14.96551,0,0,0,8.30011-15.96237l-10.18816-58.16432a16.13615,16.13615,0,0,0-17.716-13.361h0a15.30329,15.30329,0,0,0-13.54919,16.87606q.02589.23674.05913.47261a15.70114,15.70114,0,0,0,.32082,1.66059l11.12228,41.36534Z"
                            transform="translate(-166.5 -113.49762)" fill="#6c63ff" />
                        <polygon points="110.415 465.016 120.487 469.559 142.805 432.873 127.94 426.167 110.415 465.016"
                            fill="#a0616a" />
                        <path
                            d="M271.82,588.85961,302.79168,602.832l.17671-.39168a13.22574,13.22574,0,0,0-6.616-17.49357l-.00074-.00034-3.72086-6.84437-12.492-.46975-2.70362-1.21971Z"
                            transform="translate(-166.5 -113.49762)" fill="#2f2e41" />
                        <polygon points="235.159 415.125 245.796 412.139 239.34 369.685 223.639 374.093 235.159 415.125"
                            fill="#a0616a" />
                        <path
                            d="M404.39932,539.82548l32.713-9.18355-.11612-.41371a13.22574,13.22574,0,0,0-16.30689-9.15872l-.00079.00022-7.248-2.85606-9.87631,7.66343-2.85563.80166Z"
                            transform="translate(-166.5 -113.49762)" fill="#2f2e41" />
                        <path
                            d="M240.65839,404.5739c.272,7.87008,17.0098,29.1032,25.81263,32.14761,1.49629.51819,2.37077.80319,2.37077.80319l3.06383-.92627L309.00849,425.373c6.49686,3.82171,25.87739,5.76495,41.77957,6.73656,12.65693.77082,19.71194,7.38806,19.71194,7.38806,3.734,28.398,14.49881,49.10076,26.91276,74.54525l14.89814-2.591-14.07451-94.77805a10.558,10.558,0,0,0-7.77162-8.66346L289.21984,381.52711s-5.58356-1.01048-17.35957,4.67026C252.47326,395.55081,240.46407,398.84782,240.65839,404.5739Z"
                            transform="translate(-166.5 -113.49762)" fill="#2f2e41" />
                        <path
                            d="M260.0044,403.05131c-3.39548,7.10514,1.63633,33.66974,8.03614,40.43737l1.69875,1.15541.57444.29932c3.83908,12.98569,45.03722,50.96705,45.03722,50.96705-13.916,17.72776-26.3174,39.35538-31.851,63.58716l16.091,5.87953L344.88541,497.759a10.55794,10.55794,0,0,0-.13065-11.94222l-18.47834-26.32132-30.10954-58.32278C274.65171,400.509,262.47807,397.88345,260.0044,403.05131Z"
                            transform="translate(-166.5 -113.49762)" fill="#2f2e41" />
                        <path
                            d="M241.26378,407.668c-.04983,0-1.22918-3.08718-1.25314-3.09414-.401-.112-5.82971-.64774-4.60886-9.63549l1.562-9.89155-1.52489-8.73407-2.56494-2.56493,4.12229-4.1219L234.46992,350.93,233.5,313.49762c-2.43435-12.8579-1.79862-24.61783,9.99413-30.28085l13.5197-12.53994,15.38408-.18621,17.45357,10.34705,8.45624,16.85825,3.27993,45.68776,2.449,5.71441-.20979.18969c-.01622.01469-1.64775,1.49013-2.38065,2.30145-.35505.50418.311,4.26948,1.13354,7.46648l1.05471,7.89183-2.658,1.89965,3.45584,4.08211,9.42132,15.92464-.56445-.14025c-.63592-.1584-6.56075,8.735-71.59,18.62441C241.39908,407.38374,241.38857,407.668,241.26378,407.668Z"
                            transform="translate(-166.5 -113.49762)" fill="#3f3d56" />
                        <path
                            d="M315.72652,308.78982l-5.38337-2.80906a3.59929,3.59929,0,0,1-1.52426-4.85074l12.88891-24.7007a3.59928,3.59928,0,0,1,4.85074-1.52426l5.38338,2.80907a3.59928,3.59928,0,0,1,1.52425,4.85074l-12.8889,24.7007A3.59928,3.59928,0,0,1,315.72652,308.78982Z"
                            transform="translate(-166.5 -113.49762)" fill="#3f3d56" />
                        <path
                            d="M325.27125,275.8362a1.93971,1.93971,0,0,0-2.614.8214l-12.8889,24.7007a1.93971,1.93971,0,0,0,.8214,2.614l5.38338,2.80906a1.93969,1.93969,0,0,0,2.614-.8214l12.8889-24.7007a1.93969,1.93969,0,0,0-.8214-2.614Z"
                            transform="translate(-166.5 -113.49762)" fill="#6c63ff" />
                        <circle cx="101.67233" cy="131.62527" r="21.99582" fill="#a0616a" />
                        <path
                            d="M257.35408,259.28991a5.25909,5.25909,0,0,0-3.39908-1.14146,2.735,2.735,0,0,0-1.87144,1.24267,1.10585,1.10585,0,0,1-.97.41274c-2.347.08548-7.3496-4.26852-7.69167-12.66961-.16257-3.99269-2.55144-10.74884,1.25153-14.40791.25492-1.47672,3.22449-16.73922,16.61049-17.15987,13.7045-.43552,22.82733,2.3174,25.01885,7.54047h0a75.90505,75.90505,0,0,1,3.45791,12.76641l.45956,2.58529-1.07378-2.39616c-.02024-.04491-1.97866-4.335-5.61052-5.76613a6.16209,6.16209,0,0,1-.525,2.01977c-1.18511,2.56821-4.17239,4.24419-7.61069,4.27013a19.64532,19.64532,0,0,1-6.91456-1.48684,2.26327,2.26327,0,0,1-2.13522,3.53571l-.63572-.07907a.86423.86423,0,0,0-.51459,1.61968l.55981.2992-.67937.32862a13.544,13.544,0,0,0-7.84569,14.57142l.792,4.45515Z"
                            transform="translate(-166.5 -113.49762)" fill="#2f2e41" />
                        <path
                            d="M605.61,599.17663a2.93681,2.93681,0,0,1-2.12843-5.09021l.20123-.8q-.03973-.09607-.07995-.192a7.88661,7.88661,0,0,0-14.54775.05407c-2.37936,5.73059-5.40869,11.471-6.15459,17.53012a23.33148,23.33148,0,0,0,.40958,8.02417,93.541,93.541,0,0,1-8.50907-38.85058,90.2853,90.2853,0,0,1,.56-10.07209q.46393-4.11247,1.28727-8.16637a94.62481,94.62481,0,0,1,18.765-40.10438,25.18231,25.18231,0,0,0,10.47328-10.86616,19.20886,19.20886,0,0,0,1.747-5.24918c-.50985.06688-1.02809.10866-1.53794.14207-.15884.00832-.326.0167-.48484.02509l-.0599.00268a2.90971,2.90971,0,0,1-2.38968-4.74041q.33021-.40638.66084-.81237c.33438-.418.67708-.82753,1.01139-1.24542a1.44792,1.44792,0,0,0,.10866-.12543c.38456-.47645.769-.94451,1.15353-1.421a8.41388,8.41388,0,0,0-2.75835-2.66632c-3.85331-2.2568-9.16937-.69377-11.9528,2.79175-2.79175,3.48546-3.3183,8.37531-2.34877,12.73009a33.71856,33.71856,0,0,0,4.66414,10.398c-.209.26751-.42634.52663-.63529.79413a95.23582,95.23582,0,0,0-9.94022,15.74769,39.59064,39.59064,0,0,0-2.36359-18.389c-2.26238-5.45772-6.50286-10.05425-10.23711-14.77245-4.48544-5.66727-13.68325-3.19394-14.47349,3.99022q-.01146.10433-.0224.20861.832.46937,1.62883.99636a3.98357,3.98357,0,0,1-1.60609,7.24935l-.08123.01255a39.63576,39.63576,0,0,0,1.04479,5.92626,40.81016,40.81016,0,0,0,20.31966,25.57723c.326.16715.64367.33431.96967.49315a97.2075,97.2075,0,0,0-5.23248,24.62433,92.19713,92.19713,0,0,0,.06687,14.88662l-.02509-.17554a24.3626,24.3626,0,0,0-8.31682-14.06747c-6.40022-5.25757-15.44255-7.19362-22.34726-11.41968a4.57218,4.57218,0,0,0-7.00278,4.448q.01387.09226.02824.18453a26.76115,26.76115,0,0,1,3.00069,1.446q.832.46947,1.62883.99636a3.98362,3.98362,0,0,1-1.60609,7.24943l-.0813.01247c-.05849.00839-.10866.01677-.16709.02516a39.67085,39.67085,0,0,0,7.297,11.42611,40.84639,40.84639,0,0,0,29.62279,12.99759h.00838a97.17963,97.17963,0,0,0,6.52808,19.05754h23.32035c.08365-.25912.15884-.52662.2341-.78574a26.49615,26.49615,0,0,1-6.45288-.38442c1.73025-2.12312,3.46044-4.26295,5.19069-6.386a1.44585,1.44585,0,0,0,.10866-.12536c.87764-1.08658,1.76366-2.16485,2.6413-3.25143l.00047-.00134a38.8113,38.8113,0,0,0-1.13723-9.8869Z"
                            transform="translate(-166.5 -113.49762)" fill="#e6e6e6" />
                        <path
                            d="M717.70852,237.56485a2.93681,2.93681,0,0,1-2.02855,5.13083l-.7025.43247q-.0386.09655-.07677.19334a7.8866,7.8866,0,0,0,10.45585,10.11508c5.70369-2.44317,11.87968-4.43968,16.6429-8.25823a23.33146,23.33146,0,0,0,5.30727-6.03223,93.5411,93.5411,0,0,1-21.02267,33.7612,90.28487,90.28487,0,0,1-7.431,6.82208q-3.20259,2.62126-6.62169,4.94974a94.62479,94.62479,0,0,1-41.4296,15.62282,25.18239,25.18239,0,0,0-15.08445.47165,19.20884,19.20884,0,0,0-4.91479,2.5398c.4118.308.81209.63975,1.20053.97169.11955.1049.24511.21557.36471.32043l.04477.03988a2.90971,2.90971,0,0,1-1.59729,5.06268q-.52013.06054-1.04026.12052c-.53118.06593-1.06246.12-1.59355.186a1.44716,1.44716,0,0,0-.16536.014c-.60794.0728-1.20992.13968-1.81786.21248a8.41394,8.41394,0,0,0,.11435,3.83466c1.18431,4.30564,6.08226,6.89672,10.50834,6.34336,4.432-.54752,8.222-3.68179,10.56717-7.47709a33.71861,33.71861,0,0,0,3.9173-10.70176c.33639-.04569.67288-.07956,1.00922-.1253a95.23578,95.23578,0,0,0,18.10984-4.33953,39.59055,39.59055,0,0,0-11.1422,14.81867c-2.18913,5.48751-2.36059,11.73894-2.9795,17.72417-.74338,7.1892,7.56977,11.8377,13.15,7.24444q.081-.06671.16164-.13375-.2682-.91683-.471-1.8504a3.98357,3.98357,0,0,1,6.21-4.07051l.06693.04772a39.63665,39.63665,0,0,0,3.3881-4.97322,40.8102,40.8102,0,0,0,3.3004-32.49909c-.11679-.34724-.22762-.68867-.35021-1.03a97.20791,97.20791,0,0,0,20.934-13.98222A92.19793,92.19793,0,0,0,733.035,268.36376l-.10456.14322a24.3627,24.3627,0,0,0-3.86263,15.879c.91382,8.23225,6.038,15.92993,8.0331,23.77559a4.57219,4.57219,0,0,0,8.11948,1.70232q.05445-.07576.10857-.15186a26.75994,26.75994,0,0,1-1.13965-3.12989q-.26814-.9169-.471-1.8504a3.98361,3.98361,0,0,1,6.21-4.07055l.06693.0478c.04774.03482.08952.06384.13721.09861a39.67036,39.67036,0,0,0,2.7494-13.27564,40.84638,40.84638,0,0,0-12.142-29.98364l-.006-.00585a97.17993,97.17993,0,0,0,8.6265-18.20409l-16.70048-16.27677c-.24076.12719-.48131.26627-.71606.39931a26.49612,26.49612,0,0,1,4.35281,4.77917c-2.721.31279-5.45352.63758-8.17443.95032a1.449,1.449,0,0,0-.16532.01393c-1.3869.16558-2.774.31935-4.1609.48493l-.00127.00063a38.81161,38.81161,0,0,0-6.08629,7.87408Z"
                            transform="translate(-166.5 -113.49762)" fill="#e6e6e6" />
                        <path
                            d="M315.66315,302.84123l-21.02951,23.89269,11.94222,11.50576s17.32072-28.42177,17.89661-29.52083a7.93939,7.93939,0,1,0-8.80932-5.87762Z"
                            transform="translate(-166.5 -113.49762)" fill="#a0616a" />
                        <path
                            d="M242.20526,288.34545c.43308,24.93845,19.36144,45.46638,33.70561,67.97844a18.19656,18.19656,0,0,0,26.07551-6.60281L314.56545,326.499l-16.00877-4.48213-8.4921,5.57237-17.71581-20.8035Z"
                            transform="translate(-166.5 -113.49762)" fill="#3f3d56" />
                    </svg>
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Volunteer Connect</h1>
                    <h3 class="text-secondary">Your next volunteering platform.</h3>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam delectus quidem odio dolores eos optio dignissimos aut nobis blanditiis impedit fuga, commodi distinctio neque iure placeat error quibusdam eligendi. Sit atque tempora corrupti assumenda eaque ipsa, placeat beatae aut repudiandae.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Sign Up</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr class="featurette-divider">
            <div class="container marketing pt-2">
                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="fw-normal">About</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore dolores unde consectetur
                            laborum dolorum aliquam, dolor maiores et veritatis blanditiis a mollitia odit dolorem
                            delectus?</p>
                        <p><a class="btn btn-secondary" href="#aboutsegment">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <h2 class="fw-normal">Services</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates minus, ipsum soluta rem,
                            odit quae corporis aspernatur mollitia molestias dolor illum minima dolore, temporibus sed.
                        </p>
                        <p><a class="btn btn-secondary" href="#servicessegment">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <h2 class="fw-normal">Pricing</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam cumque minus iusto obcaecati
                            reprehenderit facere quibusdam ea reiciendis. Quaerat autem dicta sed debitis minima eos.
                        </p>
                        <p><a class="btn btn-secondary" href="#pricingsegment">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->


                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1" id="aboutsegment">About Us</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt pariatur atque, quam expedita, aut quae doloribus sint, alias voluptates animi sapiente? Dignissimos iure officiis nihil suscipit, ab quas nostrum tempore consequatur mollitia quidem porro est eveniet architecto quaerat iusto fugiat commodi blanditiis aut id distinctio minus vel fugit quasi alias. Aut, beatae, facilis nisi nemo rem atque sint culpa voluptatem laudantium voluptates, quasi fugit? Provident nihil suscipit nulla natus inventore temporibus ex velit debitis at! Corporis laborum accusantium ducimus eos perspiciatis reprehenderit voluptatum sed quod illum! Quia provident iusto, corporis veniam sit rerum! Sapiente temporibus ullam velit recusandae voluptas alias.</p>
                    </div>
                    <div class="col-md-5">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                                fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                        </svg>
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1" id="servicessegment">Our Services</h2>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus cumque repellendus, quae deleniti neque vel quas temporibus cum provident modi veritatis nesciunt optio eveniet natus quod perferendis numquam molestias eius necessitatibus ducimus qui corporis iusto ea? Soluta minus dolor at cum laudantium eius quasi in quos consequuntur pariatur laboriosam, atque distinctio neque tenetur praesentium omnis hic laborum. Impedit iusto eos vitae corporis? Natus error rerum neque praesentium temporibus veniam nam laudantium qui quasi corrupti, tenetur perspiciatis vel ratione numquam accusantium magnam laborum accusamus deleniti quo minima quia quas repellat nisi? Vel modi atque saepe, nulla quaerat non repellat eius dolore.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                                fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                        </svg>
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1" id="pricingsegment">Pricing</h2>
                        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam totam numquam reprehenderit ipsum eius et a nobis, voluptatum laudantium ducimus vel soluta at neque cumque quis nemo voluptatem sapiente quasi molestiae. Fugiat animi voluptas cumque consectetur magnam, placeat exercitationem. Omnis corporis praesentium culpa voluptas iusto laudantium quas. Earum aspernatur a ullam repudiandae voluptates reiciendis cupiditate, laboriosam assumenda rem officiis quis iusto hic quasi amet pariatur molestias, delectus eum qui unde facere. Vero, inventore repellendus! Explicabo consectetur rem sit molestias deserunt harum soluta? Neque aliquam nesciunt non exercitationem, nisi magni iure nemo laborum dolorum qui quis explicabo et a laboriosam sequi?</p>
                    </div>
                    <div class="col-md-5">
                        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                            width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%" y="50%"
                                fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                        </svg>
                    </div>
                </div>
                <hr class="featurette-divider">
            </div>
        </div>
    </main>
</body>

</html>