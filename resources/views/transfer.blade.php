<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/transfer.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Jamaica Eternal Tours And Airport Transfers</title>
    <script type="module"  src="../js/transfer.js" defer></script>
    <style>
        .services__content{line-height: 3.5rem;}
        h2{text-align: center;}
    </style>
</head>
<body>
  @include("layouts.preloader")
  @include("layouts.header")
  <main>
        
        <section class="section-gallery">
            <h3 class="sub-heading">Choose Your Hotel Location</h3>
            <div class="gallery">
                <figure class="gallery__card">
                <img src="../img/grand-palladium.jpg" alt="Grand Palladium Hotel">
                <h2>Lucea</h2>
                <div class="gallery__card__content">
                    <a href="/book?place=lucea"> <div class="gallery__card__content__btns card-book-btn">Book</div></a>
                    <div class="gallery__card__content__btns card-pricings-btn">Check Pricings</div>
                </div>
                </figure>

                <figure class="gallery__card">
                <img src="../img/hilton-rose-hall-resort.jpg" alt="Hilton Rose Hall Hotel">
                <h2>Montego Bay</h2>
                <div class="gallery__card__content">
                    <a href="/book?place=montego bay"> <div class="gallery__card__content__btns card-book-btn">Book</div></a>
                    <div class="gallery__card__content__btns card-pricings-btn">Check Pricings</div>
                </div>
                </figure>

                 <figure class="gallery__card">
                <img src="../img/ocean-coral-spring.jpg" alt="Ocean Coral Spring Hotel">
                <h2>Falmouth</h2>
                <div class="gallery__card__content">
                    <a href="/book?place=falmouth"> <div class="gallery__card__content__btns card-book-btn">Book</div></a>
                    <div class="gallery__card__content__btns card-pricings-btn">Check Pricings</div>
                </div>
                </figure>
                <figure class="gallery__card">
                    <img src="../img/royalton-negril.jpg" alt="Royalton Negril Hotel">
                    <h2>Negril </h2>
                    <div class="gallery__card__content">
                        <a href="/book?place=negril"> <div class="gallery__card__content__btns card-book-btn">Book</div></a>
                        <div class="gallery__card__content__btns card-pricings-btn">Check Pricings</div>
                    </div>
                    </figure>
                <figure class="gallery__card">
                <img src="../img/royalton-blue-waters.jpg" alt="Royalton Blue Waters Hotel">
                <h2>Ocho Rios</h2>
                <div class="gallery__card__content">
                    <a href="/book?place=ocho rios"> <div class="gallery__card__content__btns card-book-btn">Book</div></a>
                    <div class="gallery__card__content__btns card-pricings-btn">Check Pricings</div>
                </div>
                </figure>

               

                <figure class="gallery__card">
                <img src="../img/s-hotel.jpg" alt="S Hotel">
                <h2>S Hotel</h2>
                <div class="gallery__card__content">
                    <a href="/book?hotel=S Hotel"> <div class="gallery__card__content__btns card-book-btn">Book</div></a>
                    <div class="gallery__card__content__btns card-pricings-btn">Check Pricings</div>
                </div>
                </figure>

                <figure class="gallery__card">
                <img src="../img/jewel-grande-montego.jpg" alt="Jewel Grande Hotel">
                <h2>Jewel Grande</h2>
                <div class="gallery__card__content">
                    <a href="/book?hotel=Jewel Grande"> <div class="gallery__card__content__btns card-book-btn">Book</div></a>
                    <div class="gallery__card__content__btns card-pricings-btn">Check Pricings</div>
                </div>
                </figure>

                <figure class="gallery__card">
                <img src="../img/iberostar-hotel.jpg" alt="Iberostar Grand Rose Hall Hotel">
                <h2>Iberostar Grand </h2>
                <div class="gallery__card__content">
                    <a href="/book?hotel=Iberostar Grand"> <div class="gallery__card__content__btns card-book-btn">Book</div></a>
                    <div class="gallery__card__content__btns card-pricings-btn">Check Pricings</div>
                </div>
            </figure>
            </div>
        </section>
        <section class="section-transfers">
            <h3 class="sub-heading">Popular Hotels</h3>
            <div class="hotels">
                
                @for($i = 0; $i < 21; $i++)
                   <div class="hotels__hotel">
                       <div class="hotels__hotel__name">
                           <span class="right-arrow"></span>
                        <span>{{ $hotels[$i]->name }}</span>
                       </div>
                       <ul class="hotels__hotel__description hotels-hide-description">
                           <li><b>$ {{ $hotels[$i]->smallPrice }} USD</b> : 1- 4  passengers traveling as a private group  </li>
                           <li><b>$ {{ round(intval($hotels[$i]->smallPrice) * 1.7)}} USD</b>  : 5- 9 passengers traveling as a private group </li>
                           <li>Groups of 10 or more please contact us for info on the group rate </li>
                           <a href="/book/?hotel={{ $hotels[$i]->name }}"><li class="hotels__hotel__payment-btn">Checkout</li></a>
                        </ul>
                   </div>
               @endfor
            </div>
            <p style="margin:4rem; text-align: center;font-weight: bold;">Please note that major currencies accepted : £, €, CA$ & USD *</p>

 
        </section>
        @include("layouts.features")
        
    </main>
    @include("layouts.footer")
    <script>
        
      window.addEventListener("load",removeLoader ) 
       function removeLoader(){
        const preloader = document.querySelector(".preloader");
        preloader.style.display = "none"
       }
        
       
    </script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/604faa3cf7ce1827093054f0/1f0rj1v11';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>