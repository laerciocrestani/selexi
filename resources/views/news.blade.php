@extends('main')
@section('content')
<!-- SECTION IMAGE FULLSCREEN -->
<section class="halfscreen-contatti">
    <div class="container container-fullscreen text-light">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-middle">
                    <h1 class="text-medium">{!! __('blog.title') !!}</h1>
                    <p class="lead">{{ __('blog.p') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content background-grey">
    <div class="container">
        <div class="heading-text heading-section">
            <h2 class="text-center">{{ __('blog.h2') }}</h2>
        </div>

        <div id="news" class="grid-layout post-3-columns m-b-30" data-item="post-item">

        </div>
    </div>
</section>

<script>
    const apiUrl = 'https://www.selexi.it/blog/wp-json/wp/v2/posts?_embed';

    fetch(apiUrl)
        .then(response => response.json())
        .then(posts => {
            const container = document.getElementById('news');


            const postElement = document.createElement('div');
                postElement.classList.add('post-item');

            posts.forEach(post => {


                let imageUrl = 'https://via.placeholder.com/300x200?text=Sem+Imagem';

                if (
                    post._embedded &&
                    post._embedded['wp:featuredmedia'] &&
                    post._embedded['wp:featuredmedia'][0].media_details &&
                    post._embedded['wp:featuredmedia'][0].media_details.sizes
                ) {
                    const sizes = post._embedded['wp:featuredmedia'][0].media_details.sizes;
                    imageUrl = sizes.medium ?
                        sizes.medium.source_url :
                        post._embedded['wp:featuredmedia'][0].source_url; // Fallback para o original
                }

                const postElement = document.createElement('div');
                postElement.classList.add('post-item');
                postElement.innerHTML = `

                <div class="post-item-wrap">
                    <div class="post-image p-4">
                        <a target="_blank" href="/news/${post.slug}">
                            <img alt="${post.title.rendered}" class="rounded" src="${imageUrl}">
                        </a>
                    </div>
                    <div class="post-item-description">
                        <h2><a target="_blank" href="#">${post.title.rendered}</a></h2>
                        <p>${post.excerpt.rendered}</p>

                        <a href="/news/${post.slug}" class="btn btn-rounded pull-right" class="item-link">{{ __('btn.leggi-larticolo')}}</a>

                    </div>
                </div>

        `;
                container.appendChild(postElement);
            });
            container.style.height = null;
        })
        .catch(error => {
            console.error('Erro ao buscar posts:', error);
        });
</script>



@endsection