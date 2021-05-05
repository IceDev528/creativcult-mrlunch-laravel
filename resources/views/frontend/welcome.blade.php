@extends('layout.app')
@section('content')
    <div class="flex-center position-ref full-height">
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
            <img class="img-st" src="{{url('/')}}/frontend/img/back1.jpg" width="100%">
            <div class="slide1-comment">
                <h4>GESUND & SCHNELL ESSEN</h4>
                <h2>MR. LUNCH - FRESH FOOD AT WORK! <br> DIE HEISSE 24H MINI-KANTINE!</h2>
                <h3>ULTRAFRISCHES UND ULTRAGESUNDES ESSEN, SNACKS UND GETRÄNKE.</h3>
            </div>
        </div>

        <div class="container-fluid slide2" id="slide2">
            <div class="row section-body">
                <div class="section-comment">
                    <h3>DAS MR. LUNCH KONZEPT</h3>
                </div>
                <div class="about-ads-comment">
                    <div class="col-md-12 about-ads-title">
                        <div>
                            <img class="img-st" src="{{url('/')}}/frontend/img/Icon_Herz.svg" width="5%">
                        </div>
                        <h3>MR. LUNCH</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 section-description">
                    <h2>NICHT EINFACH NUR EIN SNACK-AUTOMAT!</h2>
                    <br>
                    <bc>Unser MR. LUNCH ist die Food-Revolution und bietet Ihnen die unkomplizierte und 
                        <br>kostengünstige tägliche Versorgung für Ihre Mitarbeiter mit frischen,
                        <br>warmen und ausgewogenen Gerichten.<bc>
                </div>
            </div>
        </div>

        <div class="container-fluid text-center slide3" id="slide3">
            <div class="row section-body">
                <div class="section-comment">
                    <h3>MR. LUNCH MISSION</h3>
                </div>
                <div class="about-ads-comment">
                    <div class="col-md-12 about-ads-title">
                        <div>
                            <img class="img-st" src="{{url('/')}}/frontend/img/Icon_menu.svg" width="10%">
                        </div>
                        <h3>NEXT GENERATION</h3>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 section-description">
                    <h2>DIE MR. LUNCH MISSION</h2>
                    <br>
                    <bc>Gesunde Ernährung überall, auf Abruf und für jeden!
                    <br>Mit unserem einzigartigen Essensautomaten machen wir das deutschlandweit möglich.<bc>
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
                <div class="col-lg-4 col-md-4 col-lg-offset-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-12 section-description">
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

        <div class="container-fluid text-center slide slide4">
            <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-comment slide4-comment">
                    <h4>DAMIT ES NIE LANGWEILIG WIRD</h4>
                    <h1>VIELFÄLTIGE <br> AUSWAHL.</h1>

                    <bc style="font-weight: bold">Unser Sortiment ist individuell auf den Standort anpassbar. Von italienischen über asiatische bis hin zu deutschen Gerichten bieten wir mit unserem stetig wachsenden Sortiment für alle Geschmäcker eine leckere Auswahl und immer Abwechslung. Dafür stellen wir ein genau zu dem Standort passendes Food-Konzept zusammen.
                    </bc>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid text-center home-slide slide slide5">
            <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-comment slide5-comment">
                    <h4>HYGIENE</h4>
                    <h1>KEEP IT CLEAN</h1>
                    <bc style="font-weight: bold">Unsere Automaten sind ein in sich geschlossenes System und
                        bieten lückenlose Sauberkeit. Unsere Gerichte werden unter
                        strengsten Vorschriften gemäß HACCP-Richtlinien produziert und
                        kontrolliert.
                    </bc>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid text-center home-slide slide slide6">
            <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-comment slide6-comment">
                    <h4>VON ANFANG BIS ENDE DURCHDACHT</h4>
                    <h1>NACHHALTIG UND
                        PLASTIKFREI.</h1>
                    <bc style="font-weight: bold">Für eine bessere Zukunft für uns alle setzen wir auf plastikfreie und damit auf 100% Bio-Verpackungen. Zusätzlich sind unsere Portionsgrößen optimal berechnet, um Lebensmittelverschwendung vorzubeugen.
                    </bc>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid text-center home-slide slide slide7">
            <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-comment slide7-comment">
                    <h4>DAMIT ES NIE LANGWEILIG WIRD</h4>
                    <h1>EMPLOYER-BRANDING.</h1>
                    <bc style="font-weight: bold">
                        Werten Sie Ihre Arbeitgeber-Marke mit dem perfektem Corporate Benefit auf. Unser MR. LUNCH spart Ihren Mitarbeitern wertvolle Lebenszeit, da lange Wege und das Anstehen in Warteschlangen wegfällt, die Mittagspause wird somit optimal genutzt. Darüber hinaus können Sie als Arbeitgeber dem Mitarbeiter aktuell einen Zuschuss in Höhe von bis zu 6,57 Euro pro Tag steuerbegünstigt zukommen lassen. Aufgrund der staatlichen Förderung von Essensgutscheinen können Unternehmen derzeit so ihre Lohnnebenkosten senken. 
                        <br><br>
                        Als Arbeitgeber leckeres, frisches & vielfältiges Essen bereitzustellen ist ein klares Statement der Wertschätzung an die Mitarbeiter. Das Angebot von geregelter Verpflegung zu günstigen Preisen fördert so zusätzlich die Unternehmenskultur und trägt zu steigender Produktivität und Zufriedenheit bei.
                    </bc>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid text-center home-slide slide slide8">
            <div class="col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 slide-comment slide8-comment">
                    <h4>WAS WIR IHNEN BIETEN:</h4>
                    <h1>FULL - SERVICE - UND DABEI KEINE KOSTEN AUSSER STROM!</h1>
                    <bc style="font-weight: bold">
                        Für unseren MR. LUNCH benötigen wir nichts von Ihnen außer einem Stromanschluss. Wir sind Ihr persönlicher Ansprechpartner und übernehmen die Aufstellung, Wartung, regelmäßige Reinigung sowie die Befüllung für Sie und sorgen für eine transparente Abrechnung.
                    </bc>
                </div>
            </div>
        </div>

        <div class="container-fluid slide9" id="slide9">
            <div class="row section-body">
                <div class="section-comment">
                    <h3>QUALITÄTSVERSPRECHEN</h3>
                </div>
                <div class="about-ads-comment">
                    <div class="col-md-12 about-ads-title">
                        <div>
                            <img class="img-st" src="{{url('/')}}/frontend/img/Icon_Herz.svg" width="5%">
                        </div>
                        <h3>QUALITÄT LIEGT UNS AM HERZEN</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 section-description">
                    <h2>UNSER SPEZIELLES <br> COOK & CHILL VERFAHREN.</h2>
                    <br>
                    <bc>Die Zubereitung unserer frischen und leckeren Menüs erfolgt durch erfahrene Köche unter strengsten hygienischen
                    Anforderungen des HACCP Konzeptes. Anschließend werden
                    die Menüs direkt heruntergekühlt. Dadurch bleiben alle wichtigen Vitamine und Nährstoffe erhalten.<bc>
                </div>
            </div>
        </div>

        <div class="container-fluid text-center slide3 slide10" id="slide10">
            <div class="row section-body">
                <div class="section-comment">
                    <h3>MITARBEITERVERPFLEGUNG</h3>
                </div>
                <div class="about-ads-comment">
                    <div class="col-md-12 about-ads-title">
                        <div>
                            <img class="img-st" src="{{url('/')}}/frontend/img/Icon_dishes.svg" width="10%">
                        </div>
                        <h3>MR. LUNCH</h3>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 section-description">
                    <h2>SO INDIVIDUELL <br> WIE IHR UNTERNEHMEN.</h2>
                    <br>
                    <bc>
                        MR. LUNCH ist die automatisierte Alternative zur Kantine und modular erweiterbar. Damit bieten wir eine flexible Lösung für Unternehmen jeglicher Größe an und können jede gewünschte Kapazität abbilden - und das an fast jedem Standort.
                        <br><br>
                        Unser MR. LUNCH bietet nicht nur die Möglichkeit aller neuen gängigen Zahlungsmittel wie zum Beispiel Apple Pay, Google Pay oder Kreditkarte, auch Sonderlösungen, wie die Anbindung Ihres Mitarbeiter-Karten-Systems ist möglich.
                    <bc>
                </div>
            </div>
        </div>

        <div class="container-fluid text-center slide slide11">
            <div class="section-comment">
                <h3>HOMEOFFICE</h3>
            </div>
            <div
                class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 slide11-comment">
                <div>
                    <img class="img-st" src="{{url('/')}}/frontend/img/Icon_deliver.svg" width="15%">
                </div>
                <h4>MR. LUNCH DIREKT ZU HAUSE</h4>
                <h1>HOMEOFFICE? <br> KÖNNEN WIR AUCH!</h1>
                <br>
                <bc>Bei Wunsch oder kurzzeitigem Bedarf versorgen wir Ihre Mitarbeiter auch im Homeoffice.
                    Dafür bieten wir eine individuelle Lösung mit gekühlter Lieferung direkt zu Ihrem Mitarbeiter nach Hause.
                </bc>
            </div>
        </div>
        
        <div class="container-fluid slide12">
            <img class="img-st" src="{{url('/')}}/frontend/img/back12.jpg" width="100%">
        </div>

        <div class="container-fluid text-center slide slide13">
            <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 slide13-comment">
                <h4>DARF’S EIN BISSCHEN MEHR SEIN?</h4>
                <h1>DIE MR. LUNCH FAMILY</h1>
                <br>
                <bc>Wenn Sie zusätzlich gerne noch Kaffee, Snacks und Getränke anbieten möchten ist das für unsere MR. LUNCH-Family kein
                    Problem. Unser System ist einfach modular erweiterbar, mit den gleichen tollen Eigenschaften.
                    <br><br>
                    Sie möchten für Ihre Mitarbeiter und Kunden auch Snacks und Kalt-Getränke anbieten – unsere Mrs. Snacki bietet Ihnen
                    genau hierfür eine große und ausgewählte Selektion führender Markenhersteller.
                    <br><br>
                    Auch verschiedenste aromatische Kaffeevariationen sind kein Problem – unser Eli Junior ist ein kleiner, aber wahrer
                    Barista
                    mit einem vielfältigen Sortiment an Heißgetränken.
                </bc>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 lunch-list">
            <p>Ein Anbieter – Eine Lösung:</p>
            <div class="lunch-group">
                <img class="img-st" src="{{url('/')}}/frontend/img/heart-regular.svg" width="20px">
                <span>Wir kümmern uns um die komplette Abwicklung. Das bedeutet für Sie nur einen Ansprechpartner.</span>
            </div>
            <div class="lunch-group">
                <img class="img-st" src="{{url('/')}}/frontend/img/heart-regular.svg" width="20px">
                <span>Full-Service inklusive (Wartung, Reinigung, Auffüllen, Kundenservice).</span>
            </div>
            <div class="lunch-group">
                <img class="img-st" src="{{url('/')}}/frontend/img/heart-regular.svg" width="20px">
                <span>Keine Produktbindung – wir bieten Ihnen eine große Auswahl an allen beliebten Markenartikeln.</span>
            </div>
            <div class="lunch-group">
                <img class="img-st" src="{{url('/')}}/frontend/img/heart-regular.svg" width="20px">
                <span>Einfache Bezahlung - alle gängigen Zahlungsmöglichkeiten werden unterstützt.</span>
            </div>
            <div class="lunch-group">
                <img class="img-st" src="{{url('/')}}/frontend/img/heart-regular.svg" width="20px">
                <span>Zuverlässigkeit, Hilfe & Service durch unseren Kundenservice.</span>
            </div>
            <div class="lunch-group">
                <img class="img-st" src="{{url('/')}}/frontend/img/heart-regular.svg" width="20px">
                <span>Energiesparende, erprobte Automaten.</span>
            </div>
            <div class="lunch-group">
                <img class="img-st" src="{{url('/')}}/frontend/img/heart-regular.svg" width="20px">
                <span>Komplette digitalisierte Abwicklung der Administration.</span>
            </div>
        </div>
        <div class="container-fluid">
            <div
                class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 slide13-comment">
                <img class="img-st" src="{{url('/')}}/frontend/img/back13.png" width="100%">
            </div>
        </div>

        <div class="container-fluid text-center slide3 slide14" id="slide14">
            <div class="row section-body">
                <div class="about-ads-comment">
                    <div class="col-md-12 about-ads-title">
                        <div>
                            <img class="img-st" src="{{url('/')}}/frontend/img/lunch-hat.png" width="10%">
                        </div>
                        <h3>SO EINFACH GEHT‘S</h3>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 section-description">
                    <h2>IHR WEG ZU UNSEREM MR. LUNCH</h2>
                    <br>
                    <img class="img-st" src="{{url('/')}}/frontend/img/grafik.svg" width="100%">
                </div>
            </div>
        </div>

        <div class="container-fluid text-center slide slide15">
            <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3 col-sm-10 col-xs-10 col-sm-offset-1 col-xs-offset-1 slide15-comment">
                <h4>INTERESSE?</h4>
                <h1>WIR BERATEN SIE GERN.</h1>
            </div>
        </div>
    </div>
@endsection

