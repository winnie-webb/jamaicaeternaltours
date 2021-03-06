<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Jamaica Eternal Tours And Transportation</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/about-us.css">
    <script type="module" defer src="../js/about-us.js"></script>
</head>
<body>
    @include("layouts.preloader") 

    @include("layouts.header")  
    <main>
    @include("layouts.features")
    <section class="section-services">
        <h1 style="font-size: 3rem;" class="services__heading">Our Shuttle Services</h1>
        <div class="services">
                <h2> Why choose us ?</h2>
            <p class="services__content services__content1" >
               We pride ourselves in having safe, reliable and enjoyable 
            travel . We value your safety and ensure that you are always comfortable.
            When you arrive here, there will be no hassle. We guarantee a smooth transition from airport to hotel.                
           We decided that our passengers should not wait for shuttles but have the shuttles wait for them.
           We also support island-wide airport transfers so now you can visit any hotel you would like.
        </p>
            <p class="services__content services__content2">As a customer you would think for a service like this it would be for a hefty price
                but for us , this is just not the case. We offer high quality for a low price. When you have experienced Eternal Tours and Airport Transfers you will be <b>Eternally pleased.</b>
            </p>
        </div>
    </section>
    <section class="section-cofounder">
        <div class="cofounder">
            <div class="cofounder__content">
        <img class="cofounder__image" src="../img/cofounder.jpg"/>
        <p>
            We have an amazing leader who spent 10 years making travelers happy and overjoyed to return.
            He is well-known for his expertise in handling tourists. He has over 30 reviews from on tripadvisor 
            which he obtained from his previous role with all
            reviews being 5 star except for one. You can visit tripadvisor
            and search his name , Desmond Brown , to read them.
        </p>
        </div>
        <div class="cofounder__footer">
        <h2 class="cofounder__footer__heading">Desmond Brown</h2>
        <h3 class="cofounder__footer__description">Founder and CEO of Jamaica Eternal Tours And Transportation</h3>
       <a target="_blank" href="https://www.tripadvisor.com/ShowUserReviews-g147311-d6439811-r509280283-Kiuki_Tours_and_Transportation-Montego_Bay_Saint_James_Parish_Jamaica.html">
        <div class="check-reviews"> 
        <span>See reviews</span>
        <img src="../img/tripadv.svg" />
    </div>
</a>

    </div>
    </div>
    </section>
    </main>
    @include("layouts.footer")
    <script>
        
        window.addEventListener("load",removeLoader ) 
         function removeLoader(){
          const preloader = document.querySelector(".preloader");
          preloader.style.display = "none"
         }
          
         
      </script>
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
      </script>
</body>
</html>