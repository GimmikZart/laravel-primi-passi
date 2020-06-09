@extends("mainlayout")
@section("contenutoDinamico")
  <!-- MEGACONTENITORE FEATURE ----------------------------------->
  <section id="feature">
    <div class="centratura vaialcentro">
      <!-- Parte in alto rubik + testi -->
      <img src="img/rubik.png" alt="" class="vaialcentro" id="rubik">
      <div class="testointerno vaialcentro">
        <h3 class="vaialcentro titologrosso"> Powerful alone. Better together.</h3>
        <p class="vaialcentro testonormale">
          HubSpot offers a full stack of software for marketing, sales, and customer service, with a <br> completely free CRM at its core. They’re powerful alone — but even better when used together.
        </p>
      </div>

      <!-- Free HubSpot CRM -->
      <div class="clearfix debug" id="freecrm">
        <!-- flottato sinistra -->
        <div class="sinistra">
          <img src="img/dati.PNG" alt="foto libri" id="libri" class="vaialcentro">
          <a href="#" class="vaialcentro getstarted">Get free CRM</a>
        </div>
        <!-- flottato a destra -->
        <div class="destra">
          <h5 class="titologrosso">Free HubSpot CRM</h5>
          <p class="testonormale">
              Everything you need to organize, track, and build better relationships with leads and customers. Yes, it's 100% free. Forever.
          </p>
          <h6 class="titologrosso alignleft">POPULAR FEATURES</h6>
          <ul class="alignleft">
            <li class="testonormale"> <i class="fas fa-check-circle check"></i> Contact Insights</li>
            <li class="testonormale"> <i class="fas fa-check-circle check"></i> Deals</li>
            <li class="testonormale"> <i class="fas fa-check-circle check"></i> Tasks</li>
          </ul>
        </div>
      </div>



        <!-- Contenitore triplo marketing-->
              <!--sales, service -->
      <div class="clearfix debug" id="marksalser">
        <!--blocco sinistra -->
        <div id="marketing">
          <div>
            <img src="img/magia.PNG" alt="magia" id="magia" class="vaialcentro">
            <h5 class="vaialcentro titologrosso">Marketing Hub</h5>
            <p class="vaialcentro testonormale">
              Marketing software to help you grow traffic, convert more visitors, and run complete inbound marketing campaigns at scale.
            </p>

            <h6 class="vaialcentro titologrosso">POPULAR FEATURES</h6>

            <ul class="alignleft">
              <li class="testonormale"><i class="fas fa-check-circle check"></i>Lead Generation</li>
              <li class="testonormale"><i class="fas fa-check-circle check"></i>Marketing Automation</li>
              <li class="testonormale"><i class="fas fa-check-circle check"></i>Analytics</li>
            </ul>

            <a href="#" class="getstarted vaialcentro">Get Started</a>


          </div>
        </div>


        <!-- blocco centro -->
        <div id="sales">
          <img src="img/cartella.PNG" alt="cartella" id="cartella" class="vaialcentro">
          <h5 class="vaialcentro titologrosso">Sales Hub</h5>
          <p class="vaialcentro testonormale">
            Time-saving sales software that helps you get deeper insights into prospects, automate the tasks you hate, and close more deals faster.
          </p>

          <h6 class="vaialcentro titologrosso">POPULAR FEATURES</h6>

          <ul class="alignleft">
            <li class="testonormale"><i class="fas fa-check-circle check"></i>Email Tracking</li>
            <li class="testonormale"><i class="fas fa-check-circle check"></i>Meeting Scheduling</li>
            <li class="testonormale"><i class="fas fa-check-circle check"></i>Email Automation</li>
          </ul>

          <a href="#" class="getstarted vaialcentro">Get Started</a>

        </div>


        <!-- blocco destra -->
        <div id="service">
          <img src="img/tavolo.png" alt="tavolo" id="tavolo" class="vaialcentro">
          <h5 class="vaialcentro titologrosso">Service Hub</h5>
          <p class="vaialcentro testonormale">
            Customer service software to help you connect with customers, exceed expectations, and turn them into promoters that grow your business.
          </p>

          <h6 class="vaialcentro titologrosso">POPULAR FEATURES</h6>

          <ul class="alignleft">
            <li class="testonormale"><i class="fas fa-check-circle check"></i>Tickets</li>
            <li class="testonormale"><i class="fas fa-check-circle check"></i>Customer Feedback</li>
            <li class="testonormale"><i class="fas fa-check-circle check"></i>Knowledge Base</li>
          </ul>

          <a href="#" class="getstarted vaialcentro">Get Started</a>
        </div>
      </div>
    </div>
  </section>
@endsection
