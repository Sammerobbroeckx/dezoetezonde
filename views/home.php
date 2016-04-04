<div id="weekMenu">

    <?php
        $array = getWeekmenu();
        
        echo "<h1 class='PaginaTitel'>WEEKMENU</h1>
        <h2 class='weekDagMenu'>WOENSDAG</h2>
        <p class='weekGerecht'>".$array[3]." & ". $array[0] ."</p>";
        echo "<h2 class='weekDagMenu'>DONDERDAG</h2>
        <p class='weekGerecht'>".$array[3]." & ". $array[1] ."</p>";
        echo "<h2 class='weekDagMenu'>VRIJDAG</h2>
        <p class='weekGerecht'>".$array[3]." & ". $array[2] ."</p>";
    ?>  
    
   
    
    <div id='Facebook'>
     <p>Vind ons leuk op Facebook!</p>
    <div  class="fb-like" data-href="https://www.facebook.com/dezoetezondeboom/?fref=ts" data-layout="button" 
    data-action="like" data-show-faces="false" data-share="false">
    </div>
    </div>

    </div>


<div id="fotogallerij">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img id="foto1" alt="Foto" width="100vh" height="100vh">
            </div>

            <div class="item">
                <img id="foto2" alt="Foto" width="100vh" height="100vh">
            </div>

            <div class="item">
                <img id="foto3" alt="Foto" width="100vh" height="100vh">
            </div>

            <div class="item">
                <img id="foto4" alt="Foto" width="100vh" height="100vh">
            </div>
        </div>
    </div>
</div>