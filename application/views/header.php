    <header id="header">
    <base href="<?php echo site_url();?>">
        <link rel="stylesheet" type="text/css" href="css/style.css">

    <div class="wrapper">
        <a href="#">
            <img src="img/logo.png" alt= "">
        </a>
<!--        <div id="search-box">-->
<!--            <input type="search" id="search-input" placeholder="Enter your search term..">-->
<!--            <button type="submit" id="search-btn"></button>-->
<!--        </div>-->
       <div id="header-menu">
           <a href="#header-menu" id="btn-show" class="btn btn-show"><span class="glyphicon glyphicon-align-justify"></span></a>
           <a href="#" id="btn-hide" class="btn btn-hide"><span class="glyphicon glyphicon-remove-circle"></span></a>
           <ul id="header-nav" class="header-nav">
               <li><a href="#">Home</a></li>
               <li><a href="#">Services</a></li>
               <li><a href="#">Portfolio</a></li>
               <li><a href="#">Blog</a></li>
               <li><a href="#">Contact</a></li>
               <li class="search">
                   <div id="search-box">
                       <input type="search" id="search-input" placeholder="Enter your search term..">
                       <button type="submit" id="search-btn"></button>
                   </div>
               </li>
           </ul>
       </div>
    </div>

</header>