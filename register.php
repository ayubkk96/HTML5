<?php
    //PHP functions on my pages
    include('common.php'); 
	
    //Header and navigation outputs
    outputHeader("Akube Games - Register");
    outputBannerNavigation("Register");
?>

<!-- Contents of the page -->
<h1>register</h1>

<p>THE RACE NEEDS RACERS</p>

<div class="loginbox">  
        <form action='login1.php' method='post'/>
    Username : <input type='text' name='username'/><br/>
    Password : <input type='password' name='password'/><br/>
        <input type='submit'/>
    </div>

<?php
    //Footer output
    outputFooter("footer");
