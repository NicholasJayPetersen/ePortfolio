<?php

#get user input from the form
$site = mb_substr($_GET['site'],0,8);
$terms = mb_substr($_GET['terms'],0,25);

if ($site == 'google')
    header('Location: https://www.google.com/search?q=' . $terms);
elseif ($site == 'googlei')
    header('Location: https://www.google.com/search?q=' . $terms . "&tbm=isch");
elseif ($site == 'duck')
    header('Location: https://duckduckgo.com/?va=e&t=ho&q=' . $terms);
elseif ($site == 'wiki')
    header('Location: https://en.wikipedia.org/wiki/Special:Search?go=Go&search=' . $terms);
else {
    function relax(){}; }


?>