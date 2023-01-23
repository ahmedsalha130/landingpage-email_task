<div id="blog" class="latest-news-area section" style="background-color: #e1e1e1;">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>latest news</h6>
                        <h2 class="fw-bold">Latest News & Blog</h2>
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
            @foreach ($blogs  as  $blog)


            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single News -->
                <div class="single-news">
                    <div class="image">
                        <a href="javascript:void(0)"><img class="thumb" src="{{ $blog->image }}" alt="Blog" /></a>
                        <div class="meta-details">
                            <img class="thumb" src="{{ $blog->image }}" alt="Author" />
                            <span>BY {{ $blog->author }}</span>
                        </div>
                    </div>
                    <div class="content-body">
                        <h4 class="title">
                            <a href="javascript:void(0)"> {{ $blog->title }} </a>
                        </h4>
                        <p>
                            {{ $blog->body }}.
                        </p>
                    </div>
                </div>
                <!-- End Single News -->
            </div>
            @endforeach
        </div>
    </div>
</div>
