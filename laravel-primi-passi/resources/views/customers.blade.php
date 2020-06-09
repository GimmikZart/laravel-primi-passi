@extends("mainlayout")
@section("contenutoDinamico")
  <!-- MEGACONTENITORE INVITO ----------------------------->
  <section id="invito">
    <div class="centratura vaialcentro">

      <!-- BLOCCO SOPRA ------------------->
      <div class="clearfix" id="bloccosopra">

        <!-- SINISTRA -->
        <div class="flottati" id="numeroclienti" >
          <h5 class="titologrosso alignleft">73,400</h5>
          <p class="testonormale alignleft">
            customers in over 120 countries growing their businesses with HubSpot
          </p>
        </div>

        <!-- DESTRA -->
        <div id="boxloghi">
          <div>
            <img src="img/Atlassian-horizontal-blue@2x.webp" alt="atalassian" class="loghi" id="atalassian">
            <img src="img/doordash_owler_20181011_194113_original@2x.webp" alt="doordash" class="loghi" id="doordash">
            <img src="img/g2crowd-logo@2x.webp" alt="crowd" class="loghi" id="crowd">
            <img src="img/purple-logo@2x.webp" alt="purple" class="loghi" id="purple">
          </div>

          <div>
            <img src="img/Subaru_Logo_v2_186x63@2x.webp" alt="Subaru" class="loghi" id="subaru">
            <img src="img/Wistia_logo@2x.webp" alt="Wistia" class="loghi" id="wistia">
            <img src="img/Classpass-logo@2x.webp" alt="Classpass" class="loghi" id="classpass">
            <img src="img/VMware_logo_gry_RGB_300dpi@2x.webp" alt="VMware" class="loghi" id="wmare">
          </div>
        </div>
      </div>

      <!-- BLOCCO SOTTO  ----------------->
      <div class="clearfix" id="bloccosotto">

        <!-- SINISTRA -->
        <div class="flottati metalarghezza alignleft" id="startgrowing" >
          <h5 class="titologrosso" >Start Growing With HubSpot Today</h5>
          <p class="testonormale">With tools to make every part of your process more human and a support team excited to help you, getting started with inbound has never been easier.</p>
          <a href="#" class="getstarted vaialcentro">Get HubSpot free</a>
          <p class="testopiccolo">
            Get started with FREE tools, or get more with our premium software.
          </p>
        </div>

        <!-- DESTRA ---------------------->
        <div class="flottati metalarghezza" id="immaginedonna">
          <img src="img/woman.webp" alt="donna" id="donna">

        </div>
      </div>
    </div>
    </section>

@endsection
