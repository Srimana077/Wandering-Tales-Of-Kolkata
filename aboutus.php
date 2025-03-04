<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wandering Tales</title>
    <link rel="stylesheet" href="aboutus.css">
    <script src="about.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="#"><img src="" width="10%" height="6%"></a>
            <a class="openbtn" onclick="openNav()">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                    <ion-icon name="close-outline"></ion-icon>
                </a>
                <div class="items">
                <a href="index.php">Home</a>
                <a href="aboutus.php">About Us</a>
                <a href="places.php">Place</a>
                <a href="cuisine.php">Cuisine</a>
                <a href="contact.php">Contact</a>
                </div>  
            </div>
        </nav>
    </header>
        
    <section class="mains">
        <img src="pexels-photo-2846216.jpeg">
        <div class="contents">
            <h3>
            Uncover Unique Experiences<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in Kolkata
            </h3>
            <a href="#middle"><input type="button" class="button" value="Explore"></a>   
        </div>
    </section>
    <div class="us">
        <a id="middle" href="#"></a>
        <h3>
        Welcome to our website!<br> 
        We are dedicated to helping newcomers explore and discover the lesser-known places and hidden culinary treasures in Kolkata.
        </h3>
        <hr>
        <h6>
            
        </h6>
        <p>
            Are you tired of visiting the same old tourist spots? Do you crave unique experiences and a taste of the local cuisine? Look no further!
        </p>
        <p>
            We understand that your time is valuable, so we've designed our website to be user-friendly and intuitive. Our search function allows you to easily find the information you need, whether you're looking for a specific place, a particular dish, or general travel advice. We also encourage user engagement through reviews and ratings, allowing you to share your own experiences and recommendations with the community.
        </p>
        <p>
            So, whether you're a traveler seeking unique adventures or a local looking to discover hidden gems in your own city, our website is the perfect companion. Get ready to embark on a journey of exploration, culture, and gastronomy like never before. Let us be your guide to the places and foods that people normally don't know!
        </p>
    </div>
    <div class="team">
        <h2>Introducing Our Team</h2>
    <div class="topics">
        <img src="0fa618cb-8348-4d9e-848c-1d471b9c150c.jpg" width="125" height="125">
        <h3><a href="#">Srimana Maity</a></h3>
        <ion-icon name="call-outline"></ion-icon> 6290169157<br><br>
        <ion-icon name="at-outline"></ion-icon> srimanamaity75@gmail.com
    </div>
    <div class="topics">
        <img src="B612_20230627_124311_285.jpg" width="125" height="125">
        <h3><a href="#">Aashika Raj</a></h3>
        <ion-icon name="call-outline"></ion-icon> 7542018602<br><br>
        <ion-icon name="at-outline"></ion-icon> aashikaanjali567@gmail.com
    </div> 
    <div class="topics">
        <img src="34a0d165-8ebf-4e36-9205-66662946f34f.jpg" width="125" height="125">
        <h3><a href="#">Manjima Bhattacharya</a></h3>
        <ion-icon name="call-outline"></ion-icon> 9836211839<br><br>
        <ion-icon name="at-outline"></ion-icon>bhattacharyyamanjima@gmail.com 
    </div>
    </div>
    <footer>
        <p class="CopyrightText">
            <b>
                &copy;
            </b>-2023
        </p>
        <ul class="seg1">
            <li>
                <a class="aus" href="aboutus.php">
                    About Us
                </a>
            </li>
            <li>
                <a class="cui" href="cuisine.php">
                    Cuisine
                </a>
            </li>
            <li>
                <a class="pla" href="Places.php">
                    Place
                </a>
            </li>
        </ul>
        <ul class="seg2">
            <li>
                <a class="con" href="contact.php">
                    Contact Us
                </a>
            </li>
            <li>
                <a class="ter" href="#">
                    Terms Of Service
                </a>
            </li>
            <li>
                <a class="pri" href="#">
                    Privacy Policy
                </a>
            </li>
        </ul>
        <ul class="sci">
            <li>
                <a class="fb" href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>
            <li>
                <a class="insta" href="#">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>
            <li>
                <a class="twit" href="#">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>
        </ul>
    </footer>
    <script>
        window.watsonAssistantChatOptions = {
        integrationID: "40c44202-d5af-4f07-99f6-b00d4c4f1f9a", // The ID of this integration.
        region: "au-syd", // The region your integration is hosted in.
        serviceInstanceID: "aa1fcd96-179a-4d03-9229-e8c746bffb48", // The ID of your service instance.
        onLoad: async (instance) => { await instance.render(); }
        };
        setTimeout(function(){
        const t=document.createElement('script');
        t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
        document.head.appendChild(t);
        });
    </script>
</body>
</html>