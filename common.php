<?php

//Ouputs the header for the page and opening body tag
function outputHeader($title){
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<title>' . $title . '</title>';
    echo '<!-- Link to external style sheet -->';
    echo '<link rel="stylesheet" type="text/css" href="mystyles.css">';
    echo '<img src="images/akube.png" alt="AkubeGamesINC" width="100" height="100">';
    echo '</head>';
    echo '<body>';
}

/* Ouputs the banner and the navigation bar
    The selected class is applied to the page that matches the page name variable */
function outputBannerNavigation($pageName){
    //Output banner and first part of navigation
   
    echo '<div class="topnav">';
    
    //Array of pages to link to
    $linkNames = array("HOME", "GAME", "REGISTER", "LOGIN", "RANKINGS");
    $linkAddresses = array("index.php", "game.php", "register.php", "login.php", "rankings.php");
    
    //Output navigation
    for($x = 0; $x < count($linkNames); $x++){
        echo '<a ';
        if($linkNames[$x] == $pageName){
        }
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a>';
    }
    echo '</div>';
}

//Outputs footer, closing body tag and closing HTML tag
function outputFooter($footer){
    echo '<div class="footer">';
    echo "Akube Games Inc";
    echo " ";
    echo "Contact Information: ak1971@live.mdx.ac.uk";
    echo '</div>';
}
    echo '</body>';
    echo '</html>';
        
 

