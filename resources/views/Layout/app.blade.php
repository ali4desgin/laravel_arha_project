<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset(env("APP_ASSETS_FOLDER")."styles/style.css") }}">
    <link rel="stylesheet" href="{{ asset(env("APP_ASSETS_FOLDER")."styles/content.css") }}">
    <title>Araha Template | Main</title>
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="logo_section">
            <div class="container-fluid">
                <img src="{{ asset(env("APP_ASSETS_FOLDER")."styles/imgs/logo_text.png") }}" class="">
                <!--<span>Delivering essentials, developing opportunities.</span>-->
            </div>


        </div>
        <div class="profile_section">
            <div class="profile_image">
                <img src="{{ asset(env("APP_ASSETS_FOLDER")."styles/imgs/profile_image.png") }}" />
            </div>
            <div CLASS="buttons">
                <button class="btn btn-info btn-block btn-sm profile">PROFILE</button>
                <button class="btn btn-warning btn-block btn-sm logout">LOGOUT</button>
            </div>
        </div>
        <ul class="list-unstyled components">
            <p>My Dashboard</p>
            <p>Programs <button class="new-project-btn">NEW PROJECT</button></p>
            <li class="active">
                <a href="#EducationID" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Education</a>
                <ul class="collapse list-unstyled" id="EducationID">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#EmergencyID" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Emergency</a>
                <ul class="collapse list-unstyled" id="EmergencyID">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#EnvironmentID" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Environment</a>
                <ul class="collapse list-unstyled" id="EnvironmentID">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#FoodID" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Food</a>
                <ul class="collapse list-unstyled" id="FoodID">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#HealthID" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Health</a>
                <ul class="collapse list-unstyled" id="HealthID">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#Self-RelianceID" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Self-Reliance</a>
                <ul class="collapse list-unstyled" id="Self-RelianceID">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#WaterID" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Water</a>
                <ul class="collapse list-unstyled" id="WaterID">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#SponsorshipsID" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Sponsorships</a>
                <ul class="collapse list-unstyled" id="SponsorshipsID">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>

            <!---->
            <!--<li>-->
            <!--<a href="#">Portfolio</a>-->
            <!--</li>-->
            <!--<li>-->
            <!--<a href="#">Contact</a>-->
            <!--</li>-->
        </ul>
    </nav>

    <div  id="content" class="container-fluid">
        <nav class="navbar">
            {{--<div class="container-fluid">--}}

                <button type="button" id="sidebarCollapse" class="pull-right" >
                    <i class="fas fa-bars"></i>
                </button>

        </nav>
        <div class=""  style="margin-top: 20px">
            <div class="container" style="margin-left: 15px;margin-right: 15px">
                @yield("content")
            </div>
        </div>

    </div>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="{{ asset("styles/scripts.js") }}"></script>
</body>
</html>