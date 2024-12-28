@extends('layouts.ap')

@section('content')
        <!-- page-title -->
        <div class="tf-page-title style-2">
            <div class="container-full">
                <div class="heading text-center">Contact</div>
            </div>
        </div>
        <!-- /page-title -->
        <!-- map -->
        <div class="w-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.8558785041982!2d49.8605446!3d40.3898867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d147ebe9949%3A0xbd1a03c2dc213e11!2sLuxen%20Plaza!5e0!3m2!1sru!2saz!4v1734005215390!5m2!1saz!2" width="100%" height="646" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- /map -->
        <!-- form -->
        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success mb_15">
                {{ session('success') }}
            </div>
        @endif
        <div class="container">
        <section class="flat-spacing-21">
                <div class="tf-grid-layout gap30 lg-col-2">
                    <div class="tf-content-left">
                        <h5 class="mb_20">Visit Out Store</h5>
                        <div class="mb_20">
                            <p class="mb_15"><strong>Adress</strong></p>
                            <p>66 Mott St, New York, New York, Zip Code: 10006, AS</p>
                        </div>
                        <div class="mb_20">
                            <p class="mb_15"><strong>Phone</strong></p>
                            <p>(623) 934-2400</p>
                        </div>
                        <div class="mb_20">
                            <p class="mb_15"><strong>Email</strong></p>
                            <p>EComposer@example.com</p>
                        </div>
                        <div class="mb_36">
                            <p class="mb_15"><strong>Message</strong></p>
                            <p class="mb_15">Subject</p>
                        </div>
                        <div>
                            <ul class="tf-social-icon d-flex gap-20 style-default">
                                <li><a href="#" class="box-icon link round social-facebook border-line-black"><i class="icon fs-14 icon-fb"></i></a></li>
                                <li><a href="#" class="box-icon link round social-twiter border-line-black"><i class="icon fs-12 icon-Icon-x"></i></a></li>
                                <li><a href="#" class="box-icon link round social-instagram border-line-black"><i class="icon fs-14 icon-instagram"></i></a></li>
                                <li><a href="#" class="box-icon link round social-tiktok border-line-black"><i class="icon fs-14 icon-tiktok"></i></a></li>
                                <li><a href="#" class="box-icon link round social-pinterest border-line-black"><i class="icon fs-14 icon-pinterest-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tf-content-right">
                        <h5 class="mb_20">Get in Touch</h5>
                        <p class="mb_24"></p>
                        <div>
                            <form class="form-contact" id="contactform" action="{{ route('contact.store') }}" method="post">
                                @csrf
                                <div class="d-flex gap-15 mb_15">
                                    <fieldset class="w-100">
                                        <input type="text" name="name" id="name" required placeholder="Name *" value="{{ old('name') }}"/>
                                        @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </fieldset>
                                    <fieldset class="w-100">
                                        <input type="email" name="email" id="email" required placeholder="Email *" value="{{ old('email') }}"/>
                                        @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </fieldset>
                                </div>
                                <div class="mb_15">
                                    <textarea placeholder="Message" name="message" id="message" required cols="30" rows="10">{{ old('message') }}</textarea>
                                    @error('message')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="send-wrap">
                                    <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
