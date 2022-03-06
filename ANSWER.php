<?php
 
    if (isset($_COOKIE["loggedin"]))
    {
        echo("LOGGED_IN_COOKIES");
    }
    else
    {

    if (isset($_POST["DO_YOU_LOVE_ME_?"]) )

    {
        if ($_POST["DO_YOU_LOVE_ME_?"] === "YES")
            echo("YOU_ARE_A_DIRTY_LIAR");

        else 
            echo("ANSWER_ME_CORRECTLY");

    }
    

}
?>
