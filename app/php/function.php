<?php
function menu($masyvas)
{
    print '<nav class="navbar navbar-expand-lg navbar-light bg-light"><a class="navbar-brand" href="#">LOGO</a><button class="navbar-toggler" type="button" 
data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">';
    foreach ($masyvas['menu'] as $menu_name => $link) {
        print '<li class="nav-item"><a class="nav-link" href="' . $link . '">' . $menu_name . '</a></li>';
    }
    print '</ul></div></nav>';
}

function gallery($masyvas)
{
    print '<div class="row"><div class="col-12 d-flex flex-wrap justify-content-center align-items-center">';
    foreach ($masyvas['images'] as $alt => $link) {
        print '<div class="card m-3" style="width: 18rem;">';
        print '<img src ="' . $link . '" class="card-img-top" alt = "' . $alt . '" >';
        print '</div>';
    }
    '</div></div>';

}

function about_us($masyvas)
{
    print '<div class="row d-flex justify-content-center align-items-center">';
    print '<div class="col-6">';
    foreach ($masyvas['about_us']['logo'] as $alt => $src) {
        print '<img src="' . $src . '" alt="' . $alt . '">';
    }
    print '</div>';
    print '<div class="col-6 text-justify" >' . $masyvas['about_us']['text'] . '</div></div>';
}

function contact($masyvas)
{
    print '<form method="post" action="app/php/404.php">';
    foreach ($masyvas['form']['inputs'] as $input) {
        if ($input['name'] == 'user_name' || $input['name'] == 'user_email') {
            print '<input type="' . $input['type'] . '" placeholder="' . $input['placeholder'] . '" name="' . $input['name'] . '">';
        } else {
            print '<textarea name="' . $input['name'] . '" placeholder="' . $input['placeholder'] . '"></textarea>';
        }
    }
    foreach ($masyvas['form']['buttons'] as $button) {
        print '<input type="' . $button['type'] . '" value="' . $button['value'] . '">';
    }
    print '</form>';
}

?>