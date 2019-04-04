<header >

    <nav class="navbar navbar-expand-lg navbar-light ">
        <a href="{{route('home')}}"> <img class="logo" src="/images/icons/logo.png" alt="Logo" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <div style="cursor: pointer;" class="btn-group dropleft">
                    <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Apps
                        <span style="content: url(/images/icons/new.svg);width: 20px;height: 20px;" class="new-link"></span>
                    </div>
                    <style>
                        .dropdown-toggle:before  {
                            content: unset !important;
                        }
                        .dropdown-menu li:hover {
                            background-color: #7724ca17;
                            transition: all ease 0.6s;
                        }
                        .dropdown-menu {
                            padding: unset !important;
                        }
                        .dropleft .dropdown-menu {
                            top: 33px !important;
                            right: 0% !important;
                            left: auto !important;
                            margin-top: 0 !important;
                            margin-right: 0.125rem !important;
                        }
                    </style>
                    <div  class="dropdown-menu">
                        <a href="{{route('instaapp')}}">
                            <li style="     padding: 20px 20px 20px 20px;     font-size: 18px;
    ">
                                <img style="width: 30px;margin: 10px 30px 10px 10px;" src="https://instagram.intobi.app/images/setting/logo.svg" alt="">Instagram in Store
                            </li>
                        </a>
                    </div>
                </div>
                <a href="#idea">Idea</a>
                <a href="#technology">Technology</a>
                <a href="#implementation">Implementation</a>
                <a href="#release">Release</a>

                <a style="color: white" href="#contact_us" class="btn btn-primary">Contact Us</a>
            </ul>

            <div class="social-icon">
                <ul class="navbar-nav ml-auto" >
                    <li>
                        <a class="icon youtube" target="_blank" href="https://www.youtube.com/channel/UCTfsH5M5BmgpLW1WrMrNm2A"></a>
                    </li>
                    <li>
                        <a class="icon facebook" target="_blank" href="https://www.facebook.com/intobiapp/" ></a>
                    </li>
                    <li>
                        <a class="icon instagram" target="_blank"  href="https://www.instagram.com/intobiapp/"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>