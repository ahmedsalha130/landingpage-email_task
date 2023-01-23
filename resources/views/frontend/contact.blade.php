<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="contact-item-wrapper">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-phone"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Contact</h4>
                                    <p>{{ $setting->phone }}</p>
                                    <p>{{ $setting->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-map-marker"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Address</h4>
                                    <p>{{ $setting->address }}</p>
                                    <p>{{ $setting->city }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-alarm-clock"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Schedule</h4>
                                    <p>{{ $setting->count_of_hour_open }} Hours / {{ $setting->count_of_day_open }} Days Open</p>
                                    <p>Office time: {{ $setting->start_open }} - {{ $setting->start_close }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('partials._session')
            <div class="col-xl-8">
                <div class="contact-form-wrapper">
                    <div class="row">
                        <div class="col-xl-10 col-lg-8 mx-auto">
                            <div class="section-title text-center">
                                <span> Get in Touch </span>
                                <h2>
                                    Ready to Get Started
                                </h2>
                                <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus
                                    quiblanditiis praesentium
                                </p>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('frontend_contacts.store') }}" method="post" name="myform" class="contact-form"  onsubmit="return check_inputs()">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" required id="name" placeholder="Name"  />
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" required id="email" placeholder="Email"  />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="phone" required id="phone" placeholder="Phone"  />
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="subject" required id="subject" placeholder="Subject"  />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea name="message" id="message" required placeholder="Type Message" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="button text-center rounded-buttons">
                                    <button type="submit" class="btn primary-btn rounded-full">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@section('scripts')
<script>

    function check_inputs(){
     var name =document.forms["myForm"]["name"].value;

        if(name ==""){
            alert('Please fill in the fields ! ')
        return false ;
        }

    }

</script>
@endsection
