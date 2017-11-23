//logout.php

<?php include('server.php') ?>
<?php

    //try with commenting and uncommenting the session_start() 
    //start session
    session_start();

    //check if it exists and if it is set
    if(isset($_SESSION['username']) && $_SESSION['username'] == 1)
    {
        //unset it
        $_SESSION['username'] = 0;
        header('Location: index.php');
    }    
    //destroy the session
    session_destroy();
?>
    

