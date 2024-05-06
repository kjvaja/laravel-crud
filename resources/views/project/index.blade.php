@extends('project.layouts.app')
 
@section('title', 'Home')

@section('boxed')

<!-- Boxed -->
<div class="boxed">
    @include('project.layouts.topbar')

    @include('project.layouts.header')

    @include('project.layouts.slider')

    <div class="flat-row pad-top40px pad-bottom40px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="no-margin-top no-margin-bottom f-size16px">IDEX has designed a professional training curriculum that is a perfect blend of theory.
                          <a class="link" href="about.html">Learn more</a></h3>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.flat-row -->

    <div class="flat-row pad-top0px">
        <div class="container">
            <div class="row">
                <div class="flat-wrapper">
                    <div class="flat-imagebox clearfix">
                        <div class="item-three-column">
                            <div class="imagebox">
                                <div class="box-wrapper">
                                    <div class="box-image">
                                        <img src="{{asset('storage/assets/images/imagebox/1.png')}}" alt="images">
                                    </div>
                                    <div class="box-header">
                                        <h5 class="box-title">
                                            <a href="course-1.html">Course 1</a>
                                        </h5>
                                    </div>
                                    <div class="box-content">
                                        <div class="box-desc">IDEX has designed a professional training curriculum
                                            that is a perfect
                                            blend of theory, practical sessions and the latest industrial practices.
                                        </div>
                                        <a class="button style1" href="course-1.html">Learn more</a>
                                    </div>
                                </div>
                            </div><!-- /.imagebox -->
                        </div><!-- /.item-three-column -->

                        <div class="item-three-column">
                            <div class="imagebox">
                                <div class="box-wrapper">
                                    <div class="box-image">
                                        <img src="{{asset('storage/assets/images/imagebox/2.png')}}" alt="images">
                                    </div>
                                    <div class="box-header">
                                        <h5 class="box-title">
                                            <a href="course-2.html">Course 2</a>
                                        </h5>
                                    </div>
                                    <div class="box-content">
                                        <div class="box-desc">IDEX was conceive and created with a vision to become
                                            a premium world class organisation for the training and skill evaluation
                                            of construction workers
                                            .</div>
                                        <a class="button style1" href="course-2.html">Learn more</a>
                                    </div>
                                </div>
                            </div><!-- /.imagebox -->
                        </div><!-- /.item-three-column -->

                        <div class="item-three-column">
                            <div class="imagebox">
                                <div class="box-wrapper">
                                    <div class="box-image">
                                        <img src="{{asset('storage/assets/images/imagebox/3.png')}}" alt="images">
                                    </div>
                                    <div class="box-header">
                                        <h5 class="box-title">
                                            <a href="course-3.html">Course 3</a>
                                        </h5>
                                    </div>
                                    <div class="box-content">
                                        <div class="box-desc">IDEX have excellent pool of experienced and
                                            knowledgeable faculties for versatile disciplines
                                            who can analyse, educate and trained the workforce of an organisation.
                                        </div>
                                        <a class="button style1" href="course-3.html">Learn more</a>
                                    </div>
                                </div>
                            </div><!-- /.imagebox -->
                        </div><!-- /.item-three-column -->
                    </div><!-- /.flat-imagebox -->
                </div><!-- /.flat-wrapper -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.flat-row -->



    <div class="bg-themes">
        <div class="flat-row parallax parallax5 pad165px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="home-title">Quality exhibits in every aspect of IDEX. We will leave no stone unturned to support
                            industry as well as manpower to create win-win situation for both!
                        </h3>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.flat-row -->
    </div>

    <d

    <div class="flat-row pad-bottom0px background-20242e">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title-section style1">
                        <h3 class="title"><span>Why choose IDEX FIRE & SAFETY?</span></h3>
                    </div>

                    <div class="list-about">
                        <h4>
                            <span>
                                <i class="fa fa-check border"></i>
                                Awarded Top Training Company
                            </span>
                        </h4>
                        <p><span>since 1990, over 400,000 salespeople have been certified on the skills of Cosine.
                                These skills are proven to produce the greatest gains in sales performance. Cosine
                                has been recognized by industry leaders and many business publications.</span></p>
                    </div><!-- /.list-about -->

                    <div class="list-about">
                        <h4>
                            <span>
                                <i class="fa fa-check border"></i>
                                Tailored training solutions, delivered cost-effectively
                            </span>
                        </h4>
                        <p><span>In fact, we designed our programs and materials to be quickly and economically
                                adaptable for any audience, without sacrificing the quality or integrity of the
                                training solution.</span></p>
                    </div><!-- /.list-about -->

                    <div class="list-about">
                        <h4>
                            <span>
                                <i class="fa fa-check border"></i>
                                Smart planning and execution around change
                            </span>
                        </h4>
                        <p><span>We take a broader, more holistic view of all of the factors that influence the
                                desired changes, and help clients develop and execute the strategies and processes
                                needed to implement these changes and ensure lasting results.</span></p>
                    </div><!-- /.list-about -->
                </div><!-- /.col-md-6 -->

                <div class="col-md-6">
                    <div class="title-section style1">
                        <h3 class="title"><span>Training Video</span></h3>
                    </div>

                    <div class="flat-divider d30px"></div>

                    <div class="flat-video-fancybox">
                        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/At2jHpw5buk" title="Emergency Rescue Training In Hindi" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->


            <div class="clients-image style1 clearfix">


            </div><!-- /.clients-image -->
        </div><!-- /.container -->
    </div><!-- /.flat-row -->

    <div class="flat-row">
        <div class="container">
            
            @include('project.layouts.testimonial')

        </div><!-- /.container -->
    </div><!-- /.flat-row -->

    @include('project.layouts.footer')

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-chevron-up"></i>
    </a>

</div>

@endsection