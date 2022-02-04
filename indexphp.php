<html>
          <!-- Google Tag Manager -->
          <script>
                (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-T2BCRDM');
            </script>
            <!-- End Google Tag Manager -->
<body>
<?php

if(isset($_POST['submit']))
{
    $nume = $_POST['nume'];
    echo "Nume: " .$nume . "<br/>";

    $email = $_POST ["email"];  
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
    if (!preg_match ($pattern, $email) )
    {  
        $ErrMsg = "Email is not valid.";  
        echo $ErrMsg;  
    } 
    else {  
        echo "Your valid email address is: " .$email;  
}
    
    $telefon = strlen ($_POST ["telefon"]);  
    $length = strlen ($telefon);  
    
    if ( $length < 10 && $length > 10) {  
        $ErrMsg = "Phone must have 10 digits.";  
        echo $ErrMsg;  
    } else {  
        echo "Your Mobile number is: " .$telefon;  
    }  

 

    $comment = $_POST['comment'];
    echo "Comment: " .$comment . "<br/>";

}
?>
</body>
</html>