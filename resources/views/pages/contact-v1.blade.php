@extends('includes.layout')

@section('main-content')
    @include('includes.pagetitle')

    <section class="tf-contact tf-section">
        <div class="themesflat-container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="box-feature-contact">
                        <img src="{{asset ('images/blog/thumb-8.png') }}" alt="Axies">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="tf-title-heading style-2 mg-bt-12">
                        Drop Up A Message
                    </h2>
                    <h5 class="sub-title style-1">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.
                    </h5>
                    <div class="form-inner">
                        <form action="contact/contact-process2.php"  method="post" id="contactform" novalidate="novalidate" class="form-submit">
                            <input id="name" name="name" tabindex="1" value="" aria-required="true" required type="text" placeholder="Your Full Name">
                            <input id="email" name="email" tabindex="2"  value="" aria-required="true" required type="email" placeholder="Your Email Address">
                            <div class="row-form style-2" id="subject">
                                <select>
                                    <option value="1">Select subject</option>
                                    <option value="2">Select subject</option>
                                    <option value="3">Select subject</option>
                                </select>
                                <i class="icon-fl-down"></i>
                            </div>
                            <textarea id="message" name="message" tabindex="3" aria-required="true" required placeholder="Message"></textarea>
                            <button class="submit">Send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 