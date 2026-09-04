<style>
    .site-navbar {
        position: sticky;
        top: 12px;
        z-index: 100;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        width: min(1180px, calc(100% - 40px));
        margin: 14px auto 0;
        padding: 12px 14px;
        color: #fff9fb;
        background: rgba(36, 19, 31, 0.96);
        border: 1px solid rgba(255, 255, 255, 0.18);
        border-radius: 999px;
        box-shadow: 0 20px 70px rgba(20, 8, 16, 0.3), inset 0 1px 1px rgba(255, 255, 255, 0.18);
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
    }

    .site-navbar__brand {
        display: inline-flex;
        min-width: 0;
        align-items: center;
        gap: 12px;
        color: #fff9fb;
        font-family: "Plus Jakarta Sans", "Segoe UI", system-ui, sans-serif;
        font-size: clamp(0.95rem, 1.4vw, 1.05rem);
        font-weight: 700;
        line-height: 1.2;
    }

    .site-navbar__logo {
        width: 42px;
        height: 42px;
        flex: 0 0 42px;
        object-fit: contain;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.92);
        box-shadow: 0 8px 22px rgba(0, 0, 0, 0.16);
    }

    .site-navbar__brand-text {
        overflow: hidden;
        color: #fff9fb;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .site-navbar__links {
        display: flex;
        flex: 0 1 auto;
        align-items: center;
        gap: 4px;
    }

    .site-navbar__link {
        display: inline-flex;
        min-height: 42px;
        align-items: center;
        gap: 7px;
        padding: 9px 11px;
        color: rgba(255, 255, 255, 0.88);
        border-radius: 999px;
        font-family: "Plus Jakarta Sans", "Segoe UI", system-ui, sans-serif;
        font-size: 0.875rem;
        font-weight: 600;
        line-height: 1.2;
        white-space: nowrap;
        transition: color 0.2s ease, background 0.2s ease;
    }

    .site-navbar__link:hover,
    .site-navbar__link:focus-visible,
    .site-navbar__link[aria-current="page"] {
        color: #fff;
        background: rgba(255, 255, 255, 0.16);
        outline: none;
    }

    .site-navbar__toggle {
        display: none;
    }

    @media (max-width: 780px) {
        .site-navbar {
            top: 10px;
            min-height: 64px;
            gap: 10px;
            padding: 9px 10px 9px 12px;
            border-radius: 22px;
            overflow: visible;
        }

        .site-navbar__brand {
            flex: 1 1 auto;
            gap: 9px;
        }

        .site-navbar__logo {
            width: 44px;
            height: 44px;
            flex-basis: 44px;
        }

        .site-navbar__brand-text {
            max-width: calc(100vw - 132px);
            font-size: 0.84rem;
        }

        .site-navbar__toggle {
            position: relative;
            z-index: 2;
            display: inline-grid;
            width: 44px;
            height: 44px;
            flex: 0 0 44px;
            place-items: center;
            padding: 0;
            color: #fff;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: 15px;
            font: inherit;
            cursor: pointer;
            transition: background 0.2s ease, transform 0.2s ease;
            -webkit-tap-highlight-color: transparent;
        }

        .site-navbar__toggle:hover,
        .site-navbar__toggle:focus-visible,
        .site-navbar.is-open .site-navbar__toggle {
            background: rgba(255, 255, 255, 0.2);
            outline: none;
        }

        .site-navbar__toggle:active {
            transform: scale(0.96);
        }

        .site-navbar__toggle i {
            font-size: 1.45rem;
            line-height: 1;
        }

        .site-navbar__links {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            left: 0;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 6px;
            width: 100%;
            padding: 10px;
            background: rgba(36, 19, 31, 0.98);
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 20px;
            box-shadow: 0 24px 60px rgba(25, 10, 20, 0.32);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px) scale(0.98);
            transform-origin: top center;
            pointer-events: none;
            backdrop-filter: blur(22px);
            -webkit-backdrop-filter: blur(22px);
            transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s ease;
        }

        .site-navbar.is-open .site-navbar__links {
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1);
            pointer-events: auto;
        }

        .site-navbar__link {
            min-height: 46px;
            justify-content: flex-start;
            padding: 12px 13px;
            color: rgba(255, 255, 255, 0.9);
            border-radius: 13px;
            font-size: 0.82rem;
        }

        .site-navbar__link i {
            display: grid;
            width: 28px;
            height: 28px;
            place-items: center;
            color: #f4a5c2;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 9px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .site-navbar__links,
        .site-navbar__toggle {
            transition: none;
        }
    }
</style>

@php
    $siteBrandName = $brandName ?? 'Bubba Bloom - Mom & Baby Care';
    $siteBrandLogo = $brandLogo ?? asset('logo/logo.jpeg');
@endphp

<nav class="site-navbar" data-site-navbar aria-label="Navigasi utama">
    <a class="site-navbar__brand" href="{{ url('/') }}" aria-label="{{ $siteBrandName }}">
        <img class="site-navbar__logo" src="{{ $siteBrandLogo }}" alt="Logo {{ $siteBrandName }}">
        <span class="site-navbar__brand-text">{{ $siteBrandName }}</span>
    </a>
    <button class="site-navbar__toggle" type="button" data-site-nav-toggle aria-expanded="false" aria-controls="site-primary-navigation" aria-label="Buka menu navigasi">
        <i class="ri-menu-3-line" aria-hidden="true"></i>
    </button>
    <div id="site-primary-navigation" class="site-navbar__links" data-site-nav-links>
        <a class="site-navbar__link" href="{{ url('/#services') }}"><i class="ri-heart-pulse-line" aria-hidden="true"></i>Layanan</a>
        <a class="site-navbar__link" href="{{ url('/#portfolio') }}"><i class="ri-briefcase-4-line" aria-hidden="true"></i>Portofolio</a>
        <a class="site-navbar__link" href="{{ route('landing.gallery.index') }}" @if(request()->routeIs('landing.gallery.*')) aria-current="page" @endif><i class="ri-image-line" aria-hidden="true"></i>Galeri</a>
        <a class="site-navbar__link" href="{{ route('landing.news.index') }}" @if(request()->routeIs('landing.news.*')) aria-current="page" @endif><i class="ri-newspaper-line" aria-hidden="true"></i>Berita</a>
        <a class="site-navbar__link" href="{{ route('landing.faq.index') }}" @if(request()->routeIs('landing.faq.*')) aria-current="page" @endif><i class="ri-question-answer-line" aria-hidden="true"></i>FAQ</a>
        <a class="site-navbar__link" href="{{ url('/#contact') }}"><i class="ri-phone-line" aria-hidden="true"></i>Kontak</a>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('[data-site-navbar]').forEach(function (navbar) {
            const toggle = navbar.querySelector('[data-site-nav-toggle]');
            const links = navbar.querySelector('[data-site-nav-links]');
            if (!toggle || !links) return;

            const setOpen = function (isOpen) {
                navbar.classList.toggle('is-open', isOpen);
                toggle.setAttribute('aria-expanded', String(isOpen));
                toggle.setAttribute('aria-label', isOpen ? 'Tutup menu navigasi' : 'Buka menu navigasi');
                const icon = toggle.querySelector('i');
                if (icon) {
                    icon.className = isOpen ? 'ri-close-line' : 'ri-menu-3-line';
                    icon.setAttribute('aria-hidden', 'true');
                }
            };

            toggle.addEventListener('click', function () {
                setOpen(toggle.getAttribute('aria-expanded') !== 'true');
            });
            links.addEventListener('click', function (event) {
                if (event.target.closest('a')) setOpen(false);
            });
            document.addEventListener('click', function (event) {
                if (!navbar.contains(event.target)) setOpen(false);
            });
            document.addEventListener('keydown', function (event) {
                if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
                    setOpen(false);
                    toggle.focus();
                }
            });
            window.addEventListener('resize', function () {
                if (window.innerWidth > 780) setOpen(false);
            });
        });
    });
</script>
