<!DOCTYPE html>
<html>

<head>
    <title>Stampy Collection</title>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css" />
    <link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<style>
.logo {
    font-family: 'Dancing Script', cursive;
    font-weight: bold;
}

.font {
    font-family: 'Courgette', cursive;
}

.shadow {
    -moz-box-shadow: 3px 3px 5px 6px #ccc;
    -webkit-box-shadow: 3px 3px 5px 6px #ccc;
    box-shadow: 3px 3px 5px 6px #ccc;
}

.stamp-img {
    width: 70px;
    height: 80px;
}

.margin {
    margin-top: 5em;
}

.column-pad-marg {
    margin: 2rem auto;
    padding: 25px;
}
</style>

<body>
    <nav class="navbar shadow" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item logo is-size-2" href="/">
                Stampy
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="main-nav" class="navbar-menu">
            <div class="navbar-end">
                <a href="addstamp" class="navbar-item font is-size-4">
                    <i class="large blue material-icons">add_box</i>
                </a>
            </div>
        </div>
    </nav>