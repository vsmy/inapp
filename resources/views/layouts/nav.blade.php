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
                    </div>
                    <span style="content: url(/images/icons/new.svg);width: 20px;height: 20px;" class="new-link"></span>
                    <div style=" min-width: 17em; border: unset; box-shadow: 0 0 20px rgba(0,0,0,0.08);"  class="dropdown-menu">
                    <a href="{{route('instaapp')}}"><img style="width: 30px;margin: 10px;" src="https://instagram.intobi.app/images/setting/logo.svg" alt="">Instagram in Store</a>
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