<section id="hero-area" class="header-area header-eight">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-content">
                    <h1>{{ $main_section->title }}.</h1>
                    <p>
                        {{ $main_section->body }}.
                    </p>
                    <div class="button">
                        <a href="  {{ $main_section->link }}"
                           class="glightbox video-button">
                <span class="btn icon-btn rounded-full">
                  <i class="lni lni-play"></i>
                </span>
                            <span class="text">Watch Intro</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-image">
                    {{-- <img src="{{asset('frontend/assets/images/header/hero-image.jpg')}}" alt="#" /> --}}
                    <img src="{{ $main_section->image }}" alt="#" />
                </div>
            </div>
        </div>
    </div>
</section>
