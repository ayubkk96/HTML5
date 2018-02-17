<?php
    //Php functions on my pages
    include('common.php'); 
	
    //Header and navigation output
    outputHeader("My Game Website - HOME");
    outputBannerNavigation("HOME");
?>

<!-- Contents of the page -->
<h1>login</h1>
<P>THE RACE NEEDS RACERS</P>
<!-- Login -->
<div class="loginbox">  
        <form action='login.php' method='post'/>
    Username : <input type='text' name='username'/><br/>
    Password : <input type='password' name='password'/><br/>
        <input type='submit'/>
    </div>

<?php
    //Footer output
    outputFooter("footer");
