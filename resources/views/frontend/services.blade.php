<section id="services" class="services-area services-eight">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Services</h6>
                        <h2 class="fw-bold">Our Best Services</h2>
                        <p>
                            There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
        <div class="row">
            @foreach ($services as $service )


            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        @if($service->icon =='')
                        <i class="lni lni-capsule"></i>
                            @else
                            <i class="lni lni-{{ $service->icon }}"></i>

                        @endif
                        <i class="lni lni-capsule"></i>
                    </div>
                    <div class="service-content">
                        <h4>{{ $service->title }}</h4>
                        <p>
                            {{ $service->body }}.
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
