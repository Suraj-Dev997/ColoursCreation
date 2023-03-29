@extends('frontend.layouts.main')

@section('main-container')
    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>contact us</h4>
                        <h2>let’s get in touch</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Send us a Message</h2>
                    </div>
                </div>

                <div class="col-md-8">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="contact-form">

                        <form id="contact" action="{{ url('/contact') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                            placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="mobile" type="text" class="form-control" id="mobile"
                                            placeholder="Mobile No" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="accordion">
                        <li>
                            <a>Traditional Photography</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester
                                    consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur
                                    adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.
                                </p>
                            </div>
                        </li>
                        <li>
                            <a>Candid Photography</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester
                                    consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur
                                    adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.
                                </p>
                            </div>
                        </li>
                        <li>
                            <a>Fashion Photography</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester
                                    consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur
                                    adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.
                                </p>
                            </div>
                        </li>
                        <li>
                            <a>Event Photography</a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester
                                    consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur
                                    adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti elite.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection
