<section class="section-reviews" class="p-t-150 p-b-100">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-lg-9">
                <div class="heading-text heading-section">
                    <h2 class="text-center">{{ __('home.dicono.title')}}</h2>
                    <div class="lead text-center">{{ __('home.dicono.p')}}</div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="mt-5 carousel testimonial testimonial-box" data-margin="20" data-arrows="false" data-items="3" data-equalize-item=".testimonial-item">
            @foreach(__('home.dicono.clients') as $client)
            <div class="testimonial-item">
                <p class="mt-0 stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
                <p>{{$client['text']}}</p>
                <div class="author">
                    <!-- <div class="mt-4 text-bold">Alan Monre</div> -->
                    <div>{{$client['name']}}</div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- end: Testimonials -->
    </div>
    <div class="triangle-divider-bottom"></div>
</section>