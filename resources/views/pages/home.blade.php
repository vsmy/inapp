@extends ('layouts.app')
@include('layouts.nav')
@section('content')
    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h4>Intobi.App - Allowing you to focus on your other business needs</h4>
                    <p>Why we are good? Very simple. We are on outsource more than 10 years so we have designed and released hundreds of the projects for our Great Clients. In the end of the day we have collected solid experience and now ready to be Client for ourselves. In result we will do great Apps to You!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <img src="/images/illustrations/intro.svg" alt="Illustration">
                </div>
            </div>
        </div>
    </section>
    <section id="idea">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-5">
                    <div><img src="/images/illustrations/idea.svg" alt="Illustration"
                              style=""
                        ></div>
                </div>
                <div class="col-md-7">
                    <div
                            style="text-align: right"
                    >
                        <img src="/images/illustrations/space.svg" alt="Illustration"
                             style="width: 210px;"
                        >
                    </div>

                    <h4 class="text-green">Idea</h4>
                    <p>
                        Intobi.App is the Product department of IT Company Intobi.
                        Doing the oursource in Intobi we are collecting all needed experience to do Tech here.
                        We are in same room has unique chance to see what is missing on a market to build it
                        here and provide you last needed element for your Success Business
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="technology">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4 class="text-green">Technology</h4>
                    <p>Only proven technologies applied here to build  great Apps</p>
                </div>
                <div class="col-md-6">
                    <img src="/images/illustrations/technology.svg" alt="Illustration">
                </div>
            </div>
        </div>
    </section>

    <section id="implementation">
        <div class="container text-center">
            <h4 class="text-green">Implementation</h4>
            <p>We have great Team to build New Product to You</p>
            <div><img src="/images/illustrations/implementation.svg" alt="Illustration"></div>
        </div>
    </section>

    <section id="release">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="title-wrapper"><h4 class="title text-green-light">Release</h4></div>
                    <p>Once all implemented - we are doing few interactions to test the App.
                        Once this is fully tested - we are happy to release it.</p>
                </div>
            </div>

            <div><img src="/images/illustrations/release.svg" alt="Illustration"></div>
        </div>
    </section>

    @endsection
