<style>
    .fade-in-bottom {
        opacity: 0;
        transform: translateY(50px) scale(0.9);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .fade-in-bottom.show {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    
</style>

<section class="position-relative d-flex align-items-center min-vh-100 px-3 pt-5" id="banner">
    <div class="bg-glow top-0 end-0"></div>

    <div class="container py-5 fade-in-bottom">
        <div class="row align-items-center gy-4">

            <div class="col-lg-7 text-center text-lg-start order-2 order-lg-1">
                <span class="badge-pink mb-3 text-uppercase small">Streaming Video Pendek #1</span>

                <h1 class="display-4 mb-4">
                    Serunya Nonton Miniseri <br>
                    <span class="text-magenta-gradient">Kapan Saja.</span>
                </h1>

                <p class="lead text-secondary mb-4 pe-lg-5 fs-6 fs-md-5">
                    Nikmati keseruan menonton miniseri favorit kapan saja dan di mana saja. Temukan berbagai cerita
                    menarik dalam format pendek.
                </p>

                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
                    <a href="https://play.google.com/store/apps/details?id=id.miniseri.mobile">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                             height="40" alt="Play Store">
                    </a>
                    <a href="https://apps.apple.com/id/app/miniseri/id6575369357?l=id">
                        <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
                             height="40" alt="App Store">
                    </a>
                </div>
            </div>

            <div class="col-lg-5 d-flex justify-content-center position-relative order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="phone-mockup">
                    <img
                        src="https://images.unsplash.com/photo-1616469829581-73993eb86b02?q=80&w=1000&auto=format&fit=crop"
                        class="w-100 h-100 object-fit-cover opacity-75"
                        alt="Preview">

                    <div class="position-absolute bottom-0 start-0 p-4 w-100 text-start"
                         style="background:linear-gradient(transparent,rgba(0,0,0,0.9))">
                        <p class="text-magenta-gradient fw-bold mb-0 small">Episode 05</p>
                        <h3 class="h6 fw-bold m-0 text-white">123</h3>
                    </div>
                </div>

                <div class="bg-glow translate-middle start-50 top-50 d-none d-md-block"
                     style="width:300px;height:300px;opacity:0.5;"></div>
            </div>

        </div>
    </div>
</section>

<script>
    const el = document.querySelector('.fade-in-bottom');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                el.classList.add('show');
            }
        });
    }, { threshold: 0.2 });

    observer.observe(el);
</script>
