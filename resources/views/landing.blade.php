@extends('partials.app')
@section('konten')
    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">
        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container" style="">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h2><strong>Z Voxe Books</strong></h2>
                        <p><strong>
                            the more you know about knowledge, the more you will realize how stupid you are.</p>
                        </strong>
                        <a href="{{ route('login') }}" class="btn btn-secondary" style="border-radius: 10px">Login Here</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">

                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
@endsection
