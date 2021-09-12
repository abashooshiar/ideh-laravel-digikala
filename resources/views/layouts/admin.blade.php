<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

</head>
<body>

<div class="container-fluid">

    <div class="page_sidebar">

        <span class="fa fa-bars" id="sidebarToggle"></span>
        <ul id="sidebar_menu">

            <li>
                <a>
                    <span class="fa  fa-globe"></span>
                    <span class="sidebar_menu_text">zum Shop</span>

                </a>

            </li>
            <li>
                <a>
                    <span class="fa fa-shopping-cart"></span>
                    <span class="sidebar_menu_text">Produkt</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">Produkt Management</a>
                    <a href="">Produkt hinzufügen</a>
                    <a href="">Kategorieverwaltung</a>

                </div>
            </li>
            <li>
                <a>
                    <span class="fa fa-sliders"></span>
                    <span class="sidebar_menu_text">Sliders</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-location-arrow"></span>
                    <span class="sidebar_menu_text">Regionen</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-list"></span>
                    <span class="sidebar_menu_text">Bestellungen</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-percent"></span>
                    <span class="sidebar_menu_text">Rabatte</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-line-chart"></span>
                    <span class="sidebar_menu_text">Mitteilungen</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-envelope"></span>
                    <span class="sidebar_menu_text">Nachrichten</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa  fa-file"></span>
                    <span class="sidebar_menu_text">Dokumentenverwaltung</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-users"></span>
                    <span class="sidebar_menu_text">Benutzern</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-comment-o"></span>
                    <span class="sidebar_menu_text">Benutzerkommentare</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-question"></span>
                    <span class="sidebar_menu_text">Benutzerfragen</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-shopping-basket"></span>
                    <span class="sidebar_menu_text">Verkäufer</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-ambulance"></span>
                    <span class="sidebar_menu_text">Lager</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-gift"></span>
                    <span class="sidebar_menu_text">Tolles Angebot</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-question"></span>
                    <span class="sidebar_menu_text">Häufige Fragen</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-file-o"></span>
                    <span class="sidebar_menu_text">Andere Seiten</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>

            <li>
                <a>
                    <span class="fa fa-cogs"></span>
                    <span class="sidebar_menu_text">Einstellungen</span>
                    <span class="fa fa-angle-right"></span>
                </a>
                <div class="child_menu">
                    <a href="">مدیریت اسلایدرها</a>
                    <a href="">افزودن اسلایدر</a>

                </div>
            </li>
        </ul>
    </div>

    <div class="page_content">
        <div class="content_box" id="app">
            @yield('content')
        </div>
    </div>
</div>
<div class="message_div">
    <div class="message_box">

        <p id="msg"></p>
        <a class="alert alert-danger" onclick="delete_row()">Ja</a>
        <a class="alert alert-success" onclick="hide_box()">Nein</a>

    </div>

</div>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/admin.js') }}" defer></script>
</body>
</html>
