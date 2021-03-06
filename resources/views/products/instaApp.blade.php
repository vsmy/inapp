<?php
$link = 'https://instagram.intobi.app/';
$color = '#ff4769';
?>
@extends ('layouts.app')
@include('layouts.navapp')

@section('content')

    <section class=" text-center">
        <div class="row justify-content-center">
            <h3 class="title text-center">Instagram In Store</h3>
        </div>
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="input-group mb-3">
                    <input required type="url" class="form-control install_link" placeholder="https://your_instagram_shop"  aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button  style=" padding: 16px 56px;" type="submit" class="btn btn-primary install">Install</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-12 ">
               <h5 class="subtitle text-center" style="text-transform: unset">
                   Nice to have instagram. Great to have your own store. Ideally - use both!
               </h5>

               <div class="sub-list">
                   <ul class="list-style text-left" >
                       <li><p>Fast To Install And Configure</p></li>
                       <hr>
                       <li><p>Can Be Applied To Different Pages</p></li>
                       <hr>
                       <li><p>Smart Validation Rules</p></li>
                       <hr>
                       <li><p>Preview Your Settings</p></li>
                       <hr>
                       <li><p>Redirect To Instagram Post</p></li>
                       <hr>

                   </ul>
               </div>

           </div>
       </div>
   </div>
    </section>

    <section id="faq" class=" faq-section d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="faq-title text-center pb-3 d-flex flex-column">
                        <h2>FAQ
                        </h2>

                    </div>
                </div>
                <div class="col-md-12 ">
                    <div class="faq" id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <div class="badge">1</div><div>How do I install Instagram In Store?</div>
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Simply navigate to the Sign-Up bar on the top of this page, and add your Shopify stores’s details. After, the page redirects to the Shopify Dashboard, just click install! It’s that easy! </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span> How many different gallery I can use at in my store?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can setup as many galleries as you wish. Button Active allows you to decide which one to display on a Store. We have wide list of settings to allow you setup nice gallery based on you own Store styles</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>I’m having a bit of trouble with the interface, is there a way to contact support?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Of course, to contact us, simply click on the bottom right button and send us a message! For us to better understand your issue, please provide us with screenshots/recordings of the issue and a brief breakdown of the problem you are experiencing.
                                        Though, just note, it’s always a good practice to redact any sensitive information that may be included in screen grabs or recordings for the security of your visitor</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span> I changed the layout/design for my gallery but when I load my store the changes are not reflected, how do I fix this?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Simply clear your browser cache as well as stored cookies, close your browser, and then reopen the everything up. Then simply reload the page and the changes should be reflected.
                                        Though, if you are still running into problems, delete the timer in question and re-add it to the page, repeating the above process after.
                                        If you are still experiencing errors after trying both, simply reach out to us!</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">5</span>
                                        How do I know Instagram Ins Store is working and effectively being deployed?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Simply open up an incognito tab, if using Chrome, and view your store’s page to ensure the gallery is properly functioning.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-6">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                        <span class="badge">6</span> How to disable or change instagram account?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can simply do Logout of your Instagram account clicking top right button in Menu</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-7">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                        <span class="badge">7</span> Demo using Instagram in Store
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                <div class="card-body">
                                    <div id="youtube_video_container" class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/Y-I-qZMPiPY" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js" ></script>
    <script >

        $('.install').click(function () {
            let install = $('.install_link');
            let install_url = 'https://instagram.intobi.app/install?shop=' + install.val();
            console.log(install_url);
            window.location.href = install_url;
        })


    </script>
    <style>

        .subtitle {
            font-weight: 400;
            margin: 18px 0 26px;
            font-size: 1rem;
        }
        .list-style {
            color: #7724CA;
            font-size: 19px;
        }

        li p {
            color: black;
            font-size: 15px;
        }
    </style>

@endsection
