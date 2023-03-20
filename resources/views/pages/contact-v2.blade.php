@extends('includes.layout')

@section('main-content')
    @include('includes.pagetitle')

    <section class="tf-contact tf-section">
        <div class="themesflat-container">
            <div class="row">
                <div class="col-12">
                    <div class="flat-form">
                        <h2 class="tf-title-heading ct style-2 mg-bt-12">
                            Drop Up A Message
                        </h2>
                        <h5 class="sub-title ct style-1 pad-0-15">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.
                        </h5>
                        <div class="form-inner">
                            <form action="contact/contact-process2.php"  method="post" id="contactform" novalidate="novalidate" class="form-submit">
                                <input id="name" name="name" tabindex="1" value="" aria-required="true" required type="text" placeholder="Your Full Name">
                                <input id="email" name="email" tabindex="2"  value="" aria-required="true" required type="email" placeholder="Your Email Address">
                                    <div class="row-form style-2">
                                    <select id="subject">
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
        </div>
    </section>
@endsection 