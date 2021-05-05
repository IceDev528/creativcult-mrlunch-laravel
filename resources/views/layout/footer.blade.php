    <div class="container-fluid social-footer">
        <div class="col-md-10 col-md-offset-1 social-footer-icons">
            <a href="http://www.instagram.com/MR. LUNCH.de"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/mrlunch.de"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/company/MR. LUNCH-de/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="container-fluid footer">
        <div class="col-md-10 col-md-offset-1 footer-body">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="kontakt_footer">
                    <span><a href="{{url('widerruf')}}">WIDERRUF</a></span>
                    <span><a href="{{url('agb')}}">AGB</a></span>
                    <span><a href="{{url('impressum')}}">Impressum</a></span>
                    <span><a href="{{url('datenschutz')}}">DATENSCHUTZ</a></span>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="kontakt_footer">
                    <span>FRESHFOOD24 GMBH</span>
                    <br>
                    <p>Bürgermeister-Ebert-StraBe 1</p>
                    <p>36124 Eichenzell</p>
                    <p>T: 0800 7767677</p>
                    <p>M: info@lunch4you.de</p>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="kontakt_footer">
                    <span>Sichere Zahlungsarten</span>
                    <br>
                    <img src="{{ URL::asset('/frontend/img/paymentCards.png') }}" class="img-responsive"
                        alt="Zahlungsmoeglichkeiten">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footer_copy">
        <div class="col-md-12 text-center copy-right">
            <a href="http://www.creativ-cult.de/">© {{date('Y')}} Creativ-Cult All rights reserved.</a>
        </div>
    </div>
</body>
</html>