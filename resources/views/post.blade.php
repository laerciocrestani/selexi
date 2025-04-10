@extends('main')
@section('content')
<!-- SECTION IMAGE FULLSCREEN -->
<section class="halfscreen-contatti" id="post-header">
    <div class="dark-overlay"></div>
    <div class="container container-fullscreen text-light">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-middle">
                    <h1 class="text-medium"></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content background-grey">
    <div class="container">
        <div class="heading-text heading-section">
            <h2 class="text-center" id="post-title"></h2>
        </div>

        <div class="row">
            <div id="post-content" class="col-lg-12">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="share-buttons">
                    <h4 class="text-center mb-3">{{ __('blog.share') }}</h4>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-facebook" id="share-facebook">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </a>
                        <a href="#" class="btn btn-instagram" id="share-instagram">
                            <i class="fab fa-instagram"></i> Instagram
                        </a>
                        <a href="#" class="btn btn-twitter" id="share-twitter">
                            <i class="fab fa-twitter"></i> X
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .halfscreen-contatti {
        position: relative;
        height: 40vh;
    }
    .dark-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }
    .halfscreen-contatti .container {
        position: relative;
        z-index: 2;
    }
    .share-buttons {
        padding: 20px 0;
    }
    .btn-facebook {
        background-color: #1877f2;
        color: white;
    }
    .btn-instagram {
        background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        color: white;
    }
    .btn-twitter {
        background-color: #000000;
        color: white;
    }
    .share-buttons .btn {
        padding: 8px 20px;
        border-radius: 4px;
        text-decoration: none;
        transition: opacity 0.3s;
    }
    .share-buttons .btn:hover {
        opacity: 0.9;
        color: white;
    }
    .share-buttons .btn i {
        margin-right: 5px;
    }
</style>

<script>
    const slug = '{{ $slug }}'; 
    const apiUrl = `https://www.selexi.it/blog/wp-json/wp/v2/posts?slug=${slug}&_embed`;
    const currentUrl = window.location.href;

    fetch(apiUrl)
        .then(response => response.json())
        .then(posts => {
            if (posts.length === 0) {
                document.getElementById('post-content').innerHTML = '<p>Post não encontrado.</p>';
                return;
            }

            const post = posts[0];
            const imageUrl = post._embedded?.['wp:featuredmedia']?.[0]?.media_details?.sizes?.full?.source_url ||
                'https://via.placeholder.com/600x400?text=Sem+Imagem';

            // Set the background image for the header section
            document.getElementById('post-header').style.backgroundImage = `url('${imageUrl}')`;
            document.getElementById('post-header').style.backgroundSize = 'cover';
            document.getElementById('post-header').style.backgroundPosition = 'center';

            const content = `
                <div class="post-detalhe">
                    <div>${post.content.rendered}</div>
                </div>
            `;

            document.getElementById('post-content').innerHTML = content;
            document.getElementById('post-title').innerHTML = post.title.rendered;

            // Set up share buttons
            const shareTitle = encodeURIComponent(post.title.rendered);
            const shareUrl = encodeURIComponent(currentUrl);

            document.getElementById('share-facebook').href = `https://www.facebook.com/sharer/sharer.php?u=${shareUrl}`;
            document.getElementById('share-instagram').href = `https://www.instagram.com/`;
            document.getElementById('share-twitter').href = `https://twitter.com/intent/tweet?text=${shareTitle}&url=${shareUrl}`;
        })
        .catch(error => {
            console.error('Erro ao buscar o post:', error);
        });
</script>

@endsection