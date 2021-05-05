@extends('layout.app')
@section('content')
    <div class="flex-center position-ref full-height restaurant-body">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        
        <div class="container-fluid slide1">
            <img class="img-st" src="{{url('/')}}/frontend/img/24h-back1.jpg" width="100%">
            <div class="slide1-comment">
                <h4>GESUND & SCHNELL GENIESSEN</h4>
                <h2>VISIT US IN UNSEREM <br> 24H FRISCHE-RESTAURANT!</h2>
                <h3>FÜR ALLE SINGLES, AFTER WORKER, <br> HAUSFRAUEN UND HAUSMÄNNER DIESER WELT.</h3>
            </div>
        </div>

        <div class="container-fluid slide2">
            <div class="row section-body">
                <div class="section-comment">
                    <h3>RUND UM DIE UHR GEÖFFNET!</h3>
                </div>
                <div class="about-ads-comment">
                    <div class="col-md-12 about-ads-title">
                        <div>
                            <img class="img-st" src="{{url('/')}}/frontend/img/Icon_Herz.svg" width="5%">
                        </div>
                        <h3>EINFACH LECKER</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 section-description">
                    <h2>VIEL ARBEIT, KEINE LUST ZUM EINKAUFEN,
                        ZUM KOCHEN ODER ES IST AUCH SCHON
                        VIEL ZU SPÄT?
                    </h2>
                    <br>
                    <bc>Unser MR. LUNCH & seine Family stehen für dich bereit und bieten dir frische, abwechslungsreiche Menüs, ohne die schlechte oder ungesunde Zugabe von Zusatzstoffen, kleine Snacks, Getränke oder Kaffeespezialitäten und das 24h am Tag!<bc>
                </div>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-3 lunch-list">
                <p>What you see is what you get:</p>
                <div class="lunch-group">
                    <img class="img-st" src="{{url('/')}}/frontend/img/heart-regular.svg" width="20px">
                    <span>100% Bio Verpackung</span>
                </div>
                <div class="lunch-group">
                    <img class="img-st" src="{{url('/')}}/frontend/img/heart-regular.svg" width="20px">
                    <span>Frische, leckere und vielfältige Menüs</span>
                </div>
                <div class="lunch-group">
                    <img class="img-st" src="{{url('/')}}/frontend/img/heart-regular.svg" width="20px">
                    <span>Leckere Kaffeespezialitäten, Snacks und Getränke</span>
                </div>
                <div class="lunch-group">
                    <img class="img-st" src="{{url('/')}}/frontend/img/heart-regular.svg" width="20px">
                    <span>24h flexibel</span>
                </div>
                <div class="lunch-group">
                    <img class="img-st" src="{{url('/')}}/frontend/img/heart-regular.svg" width="20px">
                    <span>Ready to go – alle Menüs einfach zum Direkt-Mitnehmen</span>
                </div>
                <div class="lunch-group">
                    <img class="img-st" src="{{url('/')}}/frontend/img/heart-regular.svg" width="20px">
                    <span>Faire Preise</span>
                </div>
            </div>
        </div>

        

        <div class="container-fluid text-center slide3">
            <div class="row section-body">
                <div class="section-comment">
                    <h3>MR. LUNCH MISSION</h3>
                </div>
                <div class="about-ads-comment">
                    <div class="col-md-12 about-ads-title">
                        <div>
                            <img class="img-st" src="{{url('/')}}/frontend/img/Icon_menu.svg" width="10%">
                        </div>
                        <h3>NICHT EINFACH NUR FAST FOOD</h3>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 section-description">
                    <h2>EINFACH REINKOMMEN, <br> AUSWÄHLEN UND GENIESSEN.</h2>
                    <br>
                    <bc>Bei uns läuft alles automatisiert. Du kannst aus unserem Angebot auswählen was du möchtest und mit allen gängigen Zahlsystemen bezahlen.<bc>
                </div>
            </div>
        </div>

        <div class="slide3-1">
            <img class="img-st" src="{{url('/')}}/frontend/img/back3.png" width="100%">
            <h2>UNSERE MISSION:
                <br>"JEDER MENSCH SOLL DIE MÖGLICHKEIT HABEN
                <br>SICH GESUND UND AUSGEWOGEN ZU ERNÄHREN –
                <br>UND DAS ZU FAIREN PREISEN"</h2>
            <h3>MR. LUNCH MISSION</h3>
        </div>

        <div class="slide3-2">
            <img class="img-st" src="{{url('/')}}/frontend/img/Zutaten.jpg" width="100%">
            <div class="slide3-2-comment">
                <div class="about-ads-comment">
                    <div class="col-md-12 about-ads-title">
                        <div>
                            <img class="img-st" src="{{url('/')}}/frontend/img/lunch-hat1.png" width="10%">
                        </div>
                        <h3>WIR KOCHEN MIT LIEBE</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4 col-sm-12 col-xs-12 section-description">
                    <h2>FRICH. GESUND. LECKER</h2>
                    <br>
                    <bc>Frisch gekocht und dabei ohne die Zugabe von Zusatzstoffen und
                        Geschmacksverstärkern. Das erreichen wir durch unser spezielles
                        Cook&Chill-Verfahren. So gewährleisten wir rund um die Uhr frisches,
                        hochqualitatives und gesundes Essen für Ihre Mitarbeiter. Die Menüs
                        kühlt unser MR. LUNCH nicht nur immer auf der richtigen Temperatur bis
                        zum Verzehr, er erwärmt die Menüs dann auch in der integrierten Erwärm-Station auf die perfekte Genuss-Temperatur.<bc>
                </div>
            </div>
        </div>
        
        <div class="container-fluid text-center slide slide4 slide4_24h">
            <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-comment slide4-comment">
                    <h4>FÜR ALLE MIT STRESSIGEM ARBEITSALLTAG</h4>
                    <h1>FÜR AFTER WORKER & <br> WORKAHOLICS</h1>
                    <bc style="font-weight: bold">Keine Zeit zum Vorkochen für die Arbeit, super viel Stress und
                        auch keine Lust das alles nach dem Job noch zu erledigen? Dann
                        einfach entspannt bei uns leckere Menüs genießen und das zu
                        der Zeit, die dir passt. Denn unsere Menüs gibt es 24h.
                    </bc>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid text-center home-slide slide slide5 slide5_24h">
            <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-comment slide5-comment">
                    <h4>FÜR ALLE, DIE NICHT GERNE ALLEINE DEN KOCHLÖFFEL SCHWINGEN</h4>
                    <h1>FÜR SINGLES</h1>
                    <bc style="font-weight: bold">
                    Keine Lust für dich alleine zu kochen? Oder Mengen einzukaufen, die dann sowieso im Müll landen, weil es für dich alleine zu viel ist? Dann ist unser 24h Restaurant die richtige Anlaufstelle. Zusätzlich brauchst du kein schlechtes Gewissen haben, weil unsere frischen Menüs komplett ohne die Zugabe von künstlichen Aromen und Zusatzstoffen auskommen.
                    </bc>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid text-center home-slide slide slide6 slide6_24h">
            <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-comment slide6-comment">
                    <h4>FÜR ALL, DIE MAL EINE PAUSE BRAUCHEN</h4>
                    <h1>HAUSFRAUEN & <br> HAUSMÄNNER</h1>
                    <bc style="font-weight: bold">
                    Keinen Bock mehr jeden Tag selbst zu kochen? Coronamüde? Hol dir einfach unsere leckeren Menüs im 24h Restaurant. Gerne auch mit nach Hause für die ganze Family – denn unsere Menüs sind komplett To Go verpackt in unserer 100% nachhaltigen Bio Verpackung.
                    </bc>
                </div>
            </div>
        </div>
    </div>
@endsection

