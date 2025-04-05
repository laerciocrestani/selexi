<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="DreamCasa">
    <title>DreamCasa | Lais</title>




    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Favicons -->

    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">


    <style>
        .container {
            max-width: 960px;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        h1 {
            color: #0171c1
        }

        h1 span {
            color: #d76001
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .owl-carousel .owl-item img {
            width: auto;
        }

        .logos {
            border-top: 1px solid #e5e5e5;
            border-bottom: 1px solid #e5e5e5;
            padding-top: 30px;
            padding-bottom: 30px;
            background-color: #FFF;
        }

        .m1 {
            margin-left: 20px;
            color: #d76001;
            font-size: 30px;
        }

        .m2 {
            color: #0171c1;
            font-size: 30px;
        }

        .m3 {
            color: #342357;
            font-size: 30px;
        }
    </style>


</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="mx-auto mb-4" src="dist/logo.svg" alt=""
                    height="40">
                <span class="m1"><i class="bi bi-chevron-right"></i></span>
                <span class="m2"><i class="bi bi-chevron-right"></i></span>
                <span class="m3"><i class="bi bi-chevron-right"></i></span>
                <img class="mx-auto mb-4" src="dist/logo-lais.png" alt=""
                    height="60">

            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    <h1>Aumente sua visibilidade e <span>venda mais imóveis!</span></h1>
                    <h2 class="mt-4">Anuncie por <strong>3 meses grátis</strong>, sem compromisso de contratação.</h2>
                    <h3 class="mt-4"><strong>Preencha o formulário</strong> e comece agora mesmo!</h3>
                    <div class="mt-5">*Válido somente para novos usuários.</div>

                </div>
                <div class="col-lg-6">
                    <form class="needs-validation" novalidate autocomplete="off">
                        <div class="row g-3">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="nome_completo" placeholder="Nome completo" value="" autocomplete="off" required>
                                <div class="invalid-feedback">
                                    Campo obrigatório.
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" name="email" placeholder="E-mail para receber os Leads" value="" autocomplete="off" required>
                                <div class="invalid-feedback">
                                    Campo obrigatório.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="creci" id="firstName" placeholder="CRECI" value="" autocomplete="off" required>
                                <div class="invalid-feedback">
                                    Campo obrigatório.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="cpf_cnpj" id="lastName" placeholder="CPF/CNPJ" value="" autocomplete="off" required>
                                <div class="invalid-feedback">
                                    Campo obrigatório.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="whatsapp" id="lastName" placeholder="Whatsapp" value="" autocomplete="off" required>
                                <div class="invalid-feedback">
                                    Campo obrigatório.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="telefone" id="lastName" placeholder="Telefone" value="" autocomplete="off" required>
                                <div class="invalid-feedback">
                                    Campo obrigatório.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="cep" id="lastName" placeholder="CEP" value="" autocomplete="off" required>
                                <div class="invalid-feedback">
                                    Campo obrigatório.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="numero" id="lastName" placeholder="Número" value="" autocomplete="off" required>
                                <div class="invalid-feedback">
                                    Campo obrigatório.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="senha" class="form-label">Senha</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="senha" id="senha" aria-describedby="senha" autocomplete="off" required>
                                    <span class="input-group-text">
                                        <a href="#" class="toggle-password text-decoration-none">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="confirmar-senha" class="form-label">Confirmar senha</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="confirmar_senha" id="confirmar-senha" aria-describedby="confirmar-senha" autocomplete="off" required>
                                    <span class="input-group-text">
                                        <a href="#" class="toggle-password text-decoration-none">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>


                        <hr class="my-4">

                        <button class="w-100 btn btn-success btn-lg" type="submit">Anunciar</button>
                    </form>
                </div>
            </div>
            <div class="py-5 text-center">
                <h2>Milhares de imobiliárias já anunciam no <strong>DreamCasa</strong></h2>
            </div>

        </main>
    </div>
    <div class="logos">
        <div class="container">
            <div class="owl-carousel owl-theme owl-loaded">
                <?php for ($i = 1; $i <= 39; $i++) : ?>
                    <div class="item"><img class="d-block mx-auto mb-4" src="dist/imobs/<?php echo $i ?>.png" alt="" height="100"></div>
                <?php endfor; ?>

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <main>
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 order-lg-1">
                    <img class="img-fluid mx-auto mb-4" src="dist/img/1.png" alt="">
                </div>
                <div class="col-lg-7 order-lg-0">
                    <h2>*Exclusivo para Profissionais</h2>
                    <p>O DreamCasa só aceita anúncios de corretores e
                        imobiliárias legalizados com CRECI, garantindo um
                        ambiente confiável para compradores e vendedores.
                        Isso reduz a concorrência com proprietários e
                        particulares, aumentando a credibilidade dos anúncios.</p>
                </div>
            </div>
        </main>
    </div>

    <div class="container mt-5">
        <main>
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid mx-auto mb-4" src="dist/img/2.png" alt="">
                </div>
                <div class="col-lg-7">
                    <h2>*Leads Qualificados</h2>
                    <p>O DreamCasa é um portal imobiliário que atrai
                        compradores qualificados, interessados em adquirir
                        imóveis com a intermediação de profissionais.
                        Seus imóveis são exibidos para um público segmentado,
                        aumentando as chances de conversão.</p>
                </div>

            </div>
        </main>
    </div>

    <div class="container mt-5">
        <main>
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 order-lg-1">
                    <img class="img-fluid mx-auto mb-4" src="dist/img/3.png" alt="">
                </div>
                <div class="col-lg-7 order-lg-0">
                    <h2>*Planos Flexíveis e Sem contrato de fidelidade</h2>
                    <p>O DreamCasa oferece planos acessíveis e estratégicos
                        para atender diferentes necessidades.
                        Além de ser pré pago e sem fidelização, você pode fazer
                        upgrade e downgrade sempre que desejar.</p>
                </div>

            </div>
        </main>
    </div>

    <div class="container mt-5">
        <main>
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid mx-auto mb-4" src="dist/img/4.png" alt="">
                </div>
                <div class="col-lg-7">
                    <h2>*Atendimento Personalizado e Suporte Dedicado</h2>
                    <p>Gerente de contas dedicado, para garantir a melhor
                        experiência na plataforma.
                        Equipe de suporte humana, sempre disponível.</p>
                </div>

            </div>
            <div class="py-5 text-center">
                <h2>Integrado com <strong>centenas</strong> de crms e gerenciadores de <strong>Leads...</strong></h2>
            </div>
        </main>
    </div>

    <div class="logos">
        <div class="container">
            <div class="owl-carousel owl-theme owl-loaded">
                <?php for ($i = 1; $i <= 25; $i++) : ?>
                    <div class="item"><img class="d-block mx-auto mb-4" src="dist/crm/<?php echo $i ?>.png" alt="" height="100"></div>
                <?php endfor; ?>

            </div>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; DreamCasa</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        document.querySelector('.needs-validation').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            if (!this.checkValidity()) {
                event.stopPropagation();
                this.classList.add('was-validated');
                return;
            }

            const formData = new FormData(this);

            fetch('email.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Formulário enviado com sucesso!');
                        this.reset();
                        this.classList.remove('was-validated');
                    } else {
                        alert('Erro ao enviar o formulário. Tente novamente.');
                    }
                })
                .catch(error => {
                    console.error('Erro:', error);
                    alert('Erro ao enviar o formulário. Tente novamente.');
                });
        });

        document.querySelectorAll(".toggle-password").forEach(link => {
            link.addEventListener("click", function(event) {
                event.preventDefault(); // Impede o comportamento de link

                const input = this.closest(".input-group").querySelector("input");
                const icon = this.querySelector("i");

                if (input.type === "password") {
                    input.type = "text";
                    icon.classList.remove("bi-eye");
                    icon.classList.add("bi-eye-slash");
                } else {
                    input.type = "password";
                    icon.classList.remove("bi-eye-slash");
                    icon.classList.add("bi-eye");
                }
            });
        });

        $(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                responsive: {
                    0: {
                        items: 3
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 6
                    }
                }
            })
        })

        // Example starter JavaScript for disabling form submissions if there are invalid fields


        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    </script>
</body>

</html>