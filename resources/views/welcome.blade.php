<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo-head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/remixicon/remixicon.css') }}">
    <style>
        :root {
            color-scheme: light;
            --font-sans: "Plus Jakarta Sans", "Segoe UI", system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
            --font-heading: "DM Serif Display", Georgia, serif;
            --color-ink: #2b1825;
            --color-copy: #60485a;
            --color-brand: #8a2d56;
            --color-brand-dark: #762546;
            --color-brand-soft: #fbe8f0;
            --color-surface: #fff9fb;
            --color-surface-strong: #ffffff;
            --color-dark: #24131f;
            --color-on-dark: #fff9fb;
            --color-on-dark-muted: #eedde6;
            --text-xs: 0.75rem;
            --text-sm: 0.875rem;
            --text-base: 1rem;
            --text-md: 1.0625rem;
            --text-lg: 1.125rem;
            --text-xl: 1.35rem;
            --text-2xl: clamp(1.85rem, 3vw, 2.6rem);
            --text-hero: clamp(2.65rem, 5vw, 4.65rem);
            --leading-tight: 1.08;
            --leading-snug: 1.28;
            --leading-normal: 1.55;
            --leading-relaxed: 1.75;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: var(--font-sans);
            font-size: var(--text-base);
            font-weight: 400;
            line-height: var(--leading-normal);
            background: radial-gradient(circle at top, #fff1f6 0%, #fbe8ef 45%, #fdeff5 100%);
            color: var(--color-ink);
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
        }

        html {
            scroll-behavior: smooth;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .page {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px 56px;
        }

        .navbar {
            position: sticky;
            top: 12px;
            z-index: 20;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            margin: 14px 0 0;
            padding: 16px 24px;
            background: rgba(255, 248, 250, 0.95);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(244, 171, 202, 0.35);
            border-radius: 18px;
            box-shadow: 0 16px 50px rgba(157, 80, 122, 0.08);
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            font-size: clamp(1rem, 1.4vw, 1.15rem);
            line-height: 1.2;
            color: #622e43;
            min-width: 0;
        }

        .brand-logo {
            width: 48px;
            height: 48px;
            object-fit: contain;
            border-radius: 12px;
            background: #fff;
            box-shadow: 0 10px 28px rgba(157, 80, 122, 0.12);
            flex: 0 0 48px;
        }

        .brand-text {
            letter-spacing: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .nav-links {
            display: flex;
            flex: 0 1 auto;
            flex-wrap: nowrap;
            gap: 6px;
            align-items: center;
        }

        .nav-toggle {
            display: none;
        }

        .nav-link {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            color: #7f5564;
            font-weight: 600;
            font-size: var(--text-sm);
            line-height: 1.2;
            padding: 9px 11px;
            border-radius: 999px;
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            background: rgba(255, 228, 238, 0.72);
            color: #b44774;
        }

        .nav-link i,
        .btn i,
        .card-link i {
            font-size: 1.05rem;
            line-height: 1;
        }

        .hero {
            display: grid;
            gap: 32px;
            align-items: center;
            padding: 64px 0 40px;
            min-height: 760px;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(254, 229, 240, 0.35);
            pointer-events: none;
            border-radius: 64px;
        }

        .hero-content {
            max-width: 600px;
            animation: fadeInUp 0.9s ease both;
            position: relative;
            z-index: 2;
        }

        .eyebrow {
            display: inline-flex;
            margin: 18px 0 10px;
            color: #9f5a7a;
            font-weight: 700;
            font-size: var(--text-sm);
            line-height: 1.5;
            letter-spacing: 0;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 18px;
            border-radius: 999px;
            font-weight: 700;
            font-size: var(--text-sm);
            line-height: 1.35;
            margin-bottom: 20px;
            box-shadow: 0 24px 60px rgba(190, 99, 149, 0.14);
        }

        .heading {
            font-size: var(--text-hero);
            line-height: var(--leading-tight);
            margin: 0 0 20px;
            letter-spacing: 0;
            color: #482438;
            font-weight: 800;
        }

        .description {
            margin: 22px 0 30px;
            color: #664a5c;
            font-size: var(--text-md);
            line-height: var(--leading-relaxed);
            max-width: 700px;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-bottom: 32px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            min-width: 170px;
            padding: 15px 24px;
            border-radius: 999px;
            font-weight: 700;
            font-size: var(--text-sm);
            line-height: 1.2;
            transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #f67e9b, #f5b0d2);
            color: white;
            box-shadow: 0 18px 45px rgba(246, 126, 155, 0.24);
        }

        .btn-secondary {
            background: #fff1f6;
            color: #8f5872;
            border: 1px solid #f7c9dd;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 50px rgba(157, 80, 122, 0.18);
        }

        .hero-media {
            position: relative;
            min-height: 640px;
            border-radius: 42px;
            overflow: hidden;
            box-shadow: 0 40px 120px rgba(181, 106, 153, 0.2);
            animation: floatImage 10s ease-in-out infinite;
            z-index: 1;
        }

        .hero-ornaments {
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: 1;
        }

        .floating-ornament {
            position: absolute;
            border-radius: 999px;
            opacity: 0.7;
            pointer-events: none;
            filter: blur(1px);
            transition: transform 0.2s ease-out;
            mix-blend-mode: screen;
        }

        .ornament-a {
            width: 140px;
            height: 140px;
            top: 8%;
            left: 5%;
            background: radial-gradient(circle, rgba(255,255,255,0.92) 0%, rgba(246,126,155,0.28) 80%);
        }

        .ornament-b {
            width: 160px;
            height: 160px;
            top: 20%;
            right: 12%;
            background: radial-gradient(circle, rgba(255,214,236,0.75) 0%, rgba(246,126,155,0.22) 90%);
        }

        .ornament-c {
            width: 112px;
            height: 112px;
            bottom: 16%;
            left: 16%;
            background: rgba(255,255,255,0.55);
            border: 1px solid rgba(246,126,155,0.22);
        }

        .ornament-d {
            width: 120px;
            height: 120px;
            bottom: 18%;
            right: 20%;
            background: radial-gradient(circle, rgba(255,255,255,0.9) 0%, rgba(254,215,243,0.4) 80%);
        }

        .hero-decor-1 {
            width: 180px;
            height: 180px;
            background: rgba(246, 126, 155, 0.35);
            top: 16%;
            right: 12%;
        }

        .hero-decor-2 {
            width: 240px;
            height: 240px;
            background: rgba(254, 215, 232, 0.35);
            bottom: 10%;
            left: 8%;
        }

        .hero-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            filter: saturate(1.05) brightness(1.05);
        }

        .hero-media::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.22), rgba(255, 215, 240, 0.14));
            pointer-events: none;
        }

        .section {
            padding: 72px 0;
        }

        .section-heading {
            display: grid;
            gap: 10px;
            margin-bottom: 28px;
        }

        .section-kicker {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            width: fit-content;
            color: #9f5a7a;
            font-size: var(--text-sm);
            font-weight: 800;
            line-height: 1.2;
        }

        .section-title {
            font-size: var(--text-2xl);
            line-height: var(--leading-snug);
            margin-bottom: 16px;
            color: #482438;
            font-weight: 800;
            letter-spacing: 0;
        }

        .section-copy {
            color: #735664;
            max-width: 720px;
            font-size: var(--text-md);
            line-height: var(--leading-relaxed);
            margin-bottom: 28px;
        }

        .grid-3 {
            display: grid;
            gap: 24px;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        }

        .card {
            padding: 28px;
            border-radius: 28px;
            background: #fff4f9;
            border: 1px solid rgba(243, 189, 216, 0.4);
            box-shadow: 0 24px 60px rgba(181, 106, 153, 0.12);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .card-icon {
            display: inline-grid;
            width: 44px;
            height: 44px;
            place-items: center;
            margin-bottom: 16px;
            border-radius: 16px;
            background: #ffe5f1;
            color: #9f3765;
            font-size: 1.35rem;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 30px 70px rgba(181, 106, 153, 0.18);
        }

        .card h3 {
            margin-top: 0;
            color: #5d2e48;
            font-size: var(--text-xl);
            line-height: var(--leading-snug);
            letter-spacing: 0;
        }

        .card p {
            margin: 14px 0 0;
            color: #6f4d61;
            font-size: var(--text-base);
            line-height: var(--leading-relaxed);
        }

        .card-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 18px;
            color: #8b3f62;
            font-size: var(--text-sm);
            font-weight: 800;
        }

        .empty-state {
            grid-column: 1 / -1;
            padding: 28px;
            border-radius: 24px;
            background: rgba(255, 255, 255, 0.76);
            border: 1px dashed rgba(180, 71, 116, 0.28);
            color: #765568;
        }

        .empty-state strong {
            display: block;
            margin-bottom: 6px;
            color: #5d2e48;
            font-size: var(--text-lg);
            line-height: var(--leading-snug);
        }

        .empty-state p {
            margin: 0;
            line-height: var(--leading-relaxed);
        }

        .service-list {
            margin: 16px 0 0;
            padding: 0;
            list-style: none;
            display: grid;
            gap: 11px;
        }

        .service-list li {
            display: flex;
            gap: 10px;
            color: #6f4d61;
            line-height: var(--leading-normal);
        }

        .service-list li::before {
            content: "\eb7b";
            font-family: "remixicon";
            color: #d95f89;
            font-size: 1rem;
            margin-top: 1px;
            flex: 0 0 auto;
        }

        .service-card {
            display: flex;
            flex-direction: column;
        }

        .service-card-image {
            width: calc(100% + 56px);
            max-width: none;
            aspect-ratio: 16 / 9;
            object-fit: cover;
            display: block;
            margin: -28px -28px 22px;
            border-radius: 28px 28px 18px 18px;
            background: #f7dce7;
        }

        .service-card-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 16px;
        }

        .service-price {
            flex: 0 0 auto;
            padding: 6px 10px;
            border-radius: 999px;
            background: #fff;
            color: #8b3f62;
            font-size: var(--text-xs);
            font-weight: 800;
            box-shadow: 0 10px 28px rgba(181, 106, 153, 0.12);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
        }

        .portfolio-card {
            overflow: hidden;
            padding: 0;
        }

        .portfolio-card-image {
            width: 100%;
            aspect-ratio: 4 / 3;
            object-fit: cover;
            object-position: center;
            display: block;
            background: #f7dce7;
        }

        .portfolio-card-body {
            display: flex;
            min-height: 270px;
            flex-direction: column;
            align-items: flex-start;
            padding: 24px;
        }

        .portfolio-card-body h3 {
            margin-bottom: 0;
        }

        .portfolio-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 18px;
        }

        .portfolio-tag {
            display: inline-flex;
            align-items: center;
            padding: 6px 10px;
            border-radius: 999px;
            background: #fff1f7;
            color: #8b3f62;
            font-size: var(--text-xs);
            font-weight: 800;
        }

        .portfolio-card .card-link {
            margin-top: auto;
            padding-top: 20px;
        }

        .media-card {
            overflow: hidden;
            padding: 0;
        }

        .media-card img {
            width: 100%;
            aspect-ratio: 16 / 10;
            object-fit: cover;
            display: block;
            background: #f7dce7;
        }

        .media-card-body {
            padding: 22px;
        }

        .gallery-feed {
            display: grid;
            grid-template-columns: repeat(12, minmax(0, 1fr));
            grid-auto-flow: dense;
            grid-auto-rows: 72px;
            gap: 16px;
        }

        .gallery-feed-item {
            position: relative;
            grid-column: span 4;
            grid-row: span 4;
            min-height: 260px;
            margin: 0;
            overflow: hidden;
            border-radius: 26px;
            background: #2b1825;
            box-shadow: 0 22px 54px rgba(75, 28, 54, 0.16);
        }

        .gallery-feed-item:nth-child(8n + 1),
        .gallery-feed-item:nth-child(8n + 6) {
            grid-column: span 7;
            grid-row: span 5;
        }

        .gallery-feed-item:nth-child(8n + 2),
        .gallery-feed-item:nth-child(8n + 5) {
            grid-column: span 5;
            grid-row: span 3;
        }

        .gallery-feed-item:nth-child(8n + 3),
        .gallery-feed-item:nth-child(8n + 8) {
            grid-column: span 5;
            grid-row: span 4;
        }

        .gallery-feed-item:nth-child(8n + 4),
        .gallery-feed-item:nth-child(8n + 7) {
            grid-column: span 7;
            grid-row: span 3;
        }

        .gallery-feed-media,
        .gallery-feed-media img,
        .gallery-feed-media video {
            width: 100%;
            height: 100%;
        }

        .gallery-feed-media img,
        .gallery-feed-media video {
            display: block;
            object-fit: cover;
            transition: transform 0.45s ease;
        }

        .gallery-feed-item:hover .gallery-feed-media img {
            transform: scale(1.035);
        }

        .gallery-feed-caption {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 2;
            padding: 54px 20px 18px;
            color: #ffffff;
            background: linear-gradient(180deg, transparent, rgba(20, 8, 16, 0.9));
            pointer-events: none;
        }

        .gallery-feed-item.is-video .gallery-feed-caption {
            bottom: 42px;
        }

        .gallery-feed-caption h3 {
            margin: 0;
            color: #ffffff;
            font-family: var(--font-sans);
            font-size: clamp(1rem, 1.5vw, 1.25rem);
            font-style: normal;
            font-weight: 700;
            line-height: 1.3;
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.55);
        }

        .gallery-feed-caption p {
            display: -webkit-box;
            margin: 6px 0 0;
            overflow: hidden;
            color: #f4e8ee;
            font-size: var(--text-sm);
            line-height: 1.5;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.55);
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        .gallery-media-kind {
            position: absolute;
            top: 14px;
            right: 14px;
            z-index: 3;
            display: inline-grid;
            width: 36px;
            height: 36px;
            place-items: center;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 999px;
            background: rgba(36, 19, 31, 0.72);
            color: #ffffff;
            backdrop-filter: blur(10px);
        }

        .chip {
            display: inline-flex;
            align-items: center;
            width: fit-content;
            margin-bottom: 12px;
            padding: 6px 10px;
            border-radius: 999px;
            background: #ffe5f1;
            color: #7f2f53;
            font-size: var(--text-xs);
            font-weight: 800;
            line-height: 1.2;
        }

        .faq-list {
            display: grid;
            gap: 14px;
        }

        .faq-item {
            padding: 22px 24px;
            border-radius: 24px;
            background: #fff;
            border: 1px solid rgba(244, 171, 202, 0.35);
        }

        .faq-item h3 {
            margin: 0 0 8px;
            color: #5d2e48;
            font-size: var(--text-lg);
            line-height: var(--leading-snug);
        }

        .faq-item p {
            margin: 0;
            color: #6f4d61;
            line-height: var(--leading-relaxed);
        }

        .stat-grid {
            display: grid;
            gap: 18px;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        }

        .stat-card {
            padding: 30px;
            border-radius: 28px;
            background: #ffe5f1;
            text-align: center;
            border: 1px solid rgba(243, 189, 216, 0.5);
        }

        .stat-value {
            color: #7f2f53;
            font-size: clamp(2rem, 4vw, 2.6rem);
            line-height: var(--leading-tight);
            font-weight: 800;
            margin: 0;
        }

        .stat-label {
            color: #6f4d61;
            margin: 10px 0 0;
            font-size: var(--text-base);
            line-height: var(--leading-normal);
        }

        .testimonial-grid {
            display: grid;
            gap: 24px;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }

        .testimonial-card {
            padding: 30px;
            border-radius: 32px;
            background: #ffffff;
            border: 1px solid rgba(244, 171, 202, 0.35);
            box-shadow: 0 24px 60px rgba(181, 106, 153, 0.08);
        }

        .testimonial-quote {
            margin: 0 0 18px;
            font-size: var(--text-md);
            line-height: var(--leading-relaxed);
            color: #62425b;
        }

        .testimonial-author {
            margin: 0;
            font-weight: 700;
            font-size: var(--text-base);
            line-height: var(--leading-snug);
            color: #5d2e48;
        }

        .testimonial-role {
            margin: 6px 0 0;
            color: #8a5f7a;
            font-size: var(--text-sm);
            line-height: var(--leading-normal);
        }

        .contact-card {
            display: grid;
            gap: 18px;
            padding: 34px;
            border-radius: 32px;
            background: linear-gradient(135deg, #fcdce7, #f8c6d8);
            border: 1px solid rgba(244, 171, 202, 0.35);
        }

        .contact-card h3 {
            margin: 0;
            font-size: clamp(1.55rem, 3vw, 1.9rem);
            line-height: var(--leading-snug);
            color: #5d2e48;
        }

        .contact-card a {
            display: inline-block;
            color: #7f2f53;
            font-weight: 700;
            line-height: var(--leading-normal);
        }

        .contact-socials {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding-top: 4px;
        }

        .contact-card .contact-social-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-height: 42px;
            padding: 9px 14px;
            border: 1px solid rgba(118, 37, 70, 0.16);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.72);
            text-decoration: none;
            transition: transform 0.2s ease, border-color 0.2s ease, background 0.2s ease;
        }

        .contact-card .contact-social-link:hover,
        .contact-card .contact-social-link:focus-visible {
            transform: translateY(-2px);
            border-color: rgba(118, 37, 70, 0.32);
            background: #fff;
            text-decoration: none;
        }

        .contact-social-link i {
            font-size: 1.15rem;
        }

        .footer {
            text-align: center;
            padding: 28px 0 12px;
            color: #8c6b82;
            font-size: var(--text-sm);
            line-height: var(--leading-normal);
        }

        .highlight-list {
            margin: 28px 0 0;
            display: grid;
            gap: 16px;
        }

        .highlight-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
        }

        .highlight-dot {
            width: 10px;
            height: 10px;
            margin-top: 10px;
            border-radius: 999px;
            background: #f47b9c;
            flex-shrink: 0;
        }

        /* Cinematic care-journey treatment inspired by the reference prompt. */
        body {
            background: #fff7fa;
        }

        .page {
            max-width: none;
            padding: 0 0 56px;
            overflow: hidden;
        }

        .navbar {
            position: fixed;
            top: 16px;
            left: 50%;
            z-index: 50;
            width: min(1120px, calc(100% - 32px));
            margin: 0;
            padding: 10px 12px;
            transform: translateX(-50%);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.08);
            background-blend-mode: luminosity;
            border: none;
            color: #fff;
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            box-shadow: 0 20px 70px rgba(0, 0, 0, 0.22), inset 0 1px 1px rgba(255,255,255,0.18);
            overflow: hidden;
        }

        .navbar::before,
        .badge::before,
        .card::before,
        .testimonial-card::before,
        .faq-item::before,
        .contact-card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: inherit;
            padding: 1px;
            background: linear-gradient(180deg, rgba(255,255,255,0.55), rgba(255,255,255,0.10) 35%, rgba(255,255,255,0.04) 65%, rgba(255,255,255,0.32));
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
        }

        .brand {
            color: #fff;
            font-weight: 700;
        }

        .brand-logo {
            width: 44px;
            height: 44px;
            flex-basis: 44px;
            border-radius: 999px;
            background: rgba(255,255,255,0.78);
            box-shadow: none;
        }

        .brand-text {
            color: rgba(255,255,255,0.94);
            font-size: 0.98rem;
            font-weight: 700;
        }

        .nav-link {
            color: rgba(255,255,255,0.86);
            font-weight: 600;
        }

        .nav-link:hover {
            background: rgba(255,255,255,0.16);
            color: #fff;
        }

        .hero {
            width: 100%;
            min-height: 100svh;
            display: grid;
            grid-template-columns: 1fr;
            place-items: center;
            gap: 0;
            padding: 140px clamp(20px, 5vw, 72px) 64px;
            overflow: hidden;
            isolation: isolate;
        }

        .hero::before {
            z-index: 1;
            border-radius: 0;
            background: var(--hero-overlay, linear-gradient(180deg, rgba(23, 11, 20, 0.18) 0%, rgba(23, 11, 20, 0.58) 68%, rgba(23, 11, 20, 0.94) 100%));
        }

        .hero-ornaments,
        .hero-decor {
            display: none;
        }

        .hero-content {
            width: min(940px, 100%);
            max-width: 940px;
            text-align: center;
            color: #fff;
            animation: cinematicReveal 0.95s ease both;
        }

        .hero-layout-leftRight,
        .hero-layout-rightLeft {
            grid-template-columns: minmax(0, 0.98fr) minmax(260px, 0.72fr);
            justify-content: space-between;
            place-items: center;
        }

        .hero-layout-leftRight .hero-content {
            justify-self: start;
            text-align: left;
            max-width: 680px;
        }

        .hero-layout-leftRight .eyebrow {
            justify-content: flex-start;
        }

        .hero-layout-leftRight .heading,
        .hero-layout-leftRight .description {
            margin-left: 0;
        }

        .hero-layout-leftRight .buttons {
            justify-content: flex-start;
        }

        .hero-layout-rightLeft .hero-content {
            order: 2;
            justify-self: end;
            text-align: left;
            max-width: 680px;
        }

        .hero-layout-rightLeft .eyebrow {
            justify-content: flex-start;
        }

        .hero-layout-rightLeft .heading,
        .hero-layout-rightLeft .description {
            margin-left: 0;
        }

        .hero-layout-rightLeft .buttons {
            justify-content: flex-start;
        }

        .hero-mascot-stage {
            position: relative;
            z-index: 2;
            display: flex;
            width: min(420px, 100%);
            min-height: 460px;
            pointer-events: none;
        }

        .hero-layout-rightLeft .hero-mascot-stage {
            order: 1;
        }

        .hero-mascot-stage.mascot-left {
            justify-content: flex-start;
        }

        .hero-mascot-stage.mascot-center {
            justify-content: center;
        }

        .hero-mascot-stage.mascot-right {
            justify-content: flex-end;
        }

        .hero-mascot-stage.mascot-top {
            align-items: flex-start;
        }

        .hero-mascot-stage.mascot-middle,
        .hero-mascot-stage.mascot-center {
            align-items: center;
        }

        .hero-mascot-stage.mascot-bottom {
            align-items: flex-end;
        }

        .hero-mascot-stage img {
            width: min(var(--mascot-width, 180px), 42vw);
            max-height: 72vh;
            object-fit: contain;
            filter: drop-shadow(0 28px 60px rgba(0,0,0,0.28));
        }

        .hero-media {
            position: absolute;
            inset: 0;
            z-index: 0;
            min-height: auto;
            border-radius: 0;
            box-shadow: none;
            overflow: hidden;
            animation: none;
        }

        .hero-media img {
            width: 100%;
            height: 100%;
            min-height: 100svh;
            object-fit: var(--hero-bg-size, cover);
            object-position: var(--hero-bg-position, center);
            filter: saturate(1.05) contrast(1.02) brightness(0.78);
            transform: scale(1.04);
        }

        .hero-media::after {
            background: linear-gradient(180deg, rgba(255,255,255,0.08), rgba(248,151,189,0.13));
        }

        .badge {
            position: relative;
            margin-bottom: 22px;
            background: rgba(255,255,255,0.10) !important;
            color: rgba(255,255,255,0.94) !important;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            box-shadow: inset 0 1px 1px rgba(255,255,255,0.16);
        }

        .eyebrow {
            display: inline-flex;
            justify-content: center;
            width: 100%;
            margin: 0 0 14px;
            color: rgba(255,255,255,0.78);
            font-weight: 400;
        }

        .heading,
        .section-title,
        .card h3,
        .contact-card h3 {
            font-family: var(--font-heading);
            font-style: italic;
            font-weight: 400;
            letter-spacing: 0;
        }

        .heading {
            margin: 0 auto;
            max-width: 860px;
            color: #fff;
            font-size: clamp(2.5rem, 5vw, 4.75rem);
            line-height: 1;
            text-wrap: balance;
        }

        .description {
            margin: 26px auto 32px;
            max-width: 680px;
            color: rgba(255,255,255,0.84);
            font-size: clamp(1rem, 1.8vw, 1.2rem);
            font-weight: 300;
            line-height: 1.55;
        }

        .buttons {
            justify-content: center;
            margin-bottom: 34px;
        }

        .btn {
            min-width: auto;
            padding: 13px 18px;
            backdrop-filter: blur(28px);
            -webkit-backdrop-filter: blur(28px);
        }

        .btn-primary {
            background: rgba(255,255,255,0.14);
            color: #fff;
            box-shadow: 0 18px 45px rgba(0,0,0,0.16), inset 0 1px 1px rgba(255,255,255,0.18);
        }

        .btn-secondary {
            background: rgba(255,255,255,0.86);
            color: #321725;
            border: none;
        }

        .section {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
            padding: 92px 0;
        }

        #services {
            width: 100%;
            min-height: 92svh;
            margin: 0;
            padding: 96px max(24px, calc((100vw - 1180px) / 2)) 110px;
            background:
                linear-gradient(180deg, #170b14 0%, #2b1424 60%, #fff7fa 100%);
            color: #fff;
        }

        #services .section-kicker,
        #services .section-title,
        #services .section-copy {
            color: #fff;
        }

        #services .section-copy {
            color: rgba(255,255,255,0.74);
        }

        .section-heading {
            gap: 8px;
            margin-bottom: 34px;
        }

        .section-kicker {
            color: #a14f73;
            font-weight: 700;
        }

        .section-title {
            margin: 0;
            color: #3e1d31;
            font-size: clamp(2.7rem, 6vw, 5.8rem);
            line-height: 0.92;
        }

        .section-copy {
            margin: 8px 0 0;
            color: #725568;
            font-weight: 300;
        }

        .card,
        .testimonial-card,
        .faq-item,
        .contact-card,
        .stat-card,
        .empty-state {
            position: relative;
            border: none;
            border-radius: 26px;
            background: rgba(255,255,255,0.74);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            box-shadow: 0 24px 70px rgba(75, 28, 54, 0.10), inset 0 1px 1px rgba(255,255,255,0.16);
            overflow: hidden;
        }

        #services .card {
            min-height: 360px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            background: rgba(255,255,255,0.08);
            color: #fff;
            box-shadow: inset 0 1px 1px rgba(255,255,255,0.16);
        }

        #services .card h3,
        #services .service-list li {
            color: #fff;
        }

        #services .service-list li {
            color: rgba(255,255,255,0.84);
            font-weight: 300;
        }

        #about,
        #advantages,
        #why-us,
        #events {
            position: relative;
            border-top: 1px solid rgba(118, 37, 70, 0.1);
            border-radius: 0;
            padding-inline: 0;
            background: transparent;
            box-shadow: none;
        }

        #about .section-kicker,
        #advantages .section-kicker,
        #why-us .section-kicker,
        #events .section-kicker {
            color: #9a315f;
        }

        #about .section-title,
        #advantages .section-title,
        #why-us .section-title,
        #events .section-title {
            color: #321725;
            text-shadow: 0 1px 0 rgba(255,255,255,0.72);
        }

        #about .section-copy,
        #advantages .section-copy,
        #why-us .section-copy,
        #events .section-copy {
            color: #5a3d50;
            font-weight: 400;
        }

        .about-layout {
            display: grid;
            grid-template-columns: minmax(0, 1.05fr) minmax(320px, 0.8fr);
            gap: clamp(36px, 6vw, 76px);
            align-items: center;
        }

        .about-layout:not(.has-image) {
            grid-template-columns: minmax(0, 780px);
        }

        .about-layout .section-heading {
            margin-bottom: 0;
        }

        .about-copy {
            display: grid;
            gap: 14px;
            max-width: 720px;
            margin-top: 18px;
        }

        .about-copy p {
            margin: 0;
            color: var(--color-copy);
            font-size: var(--text-md);
            font-weight: 400;
            line-height: var(--leading-relaxed);
        }

        .about-media {
            position: relative;
            min-height: 440px;
            margin: 0;
            border-radius: 30px;
            background: var(--color-brand-soft);
            box-shadow: 0 28px 70px rgba(75, 28, 54, 0.14);
            overflow: hidden;
        }

        .about-media::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 55%, rgba(36, 19, 31, 0.72));
            pointer-events: none;
        }

        .about-media img {
            width: 100%;
            height: 100%;
            min-height: 440px;
            object-fit: cover;
            display: block;
        }

        .about-media figcaption {
            position: absolute;
            right: 24px;
            bottom: 22px;
            left: 24px;
            z-index: 1;
            color: #fff;
            font-size: var(--text-sm);
            line-height: 1.5;
        }

        .card-icon {
            position: relative;
            width: 48px;
            height: 48px;
            margin-bottom: auto;
            border-radius: 16px;
            background: rgba(255,255,255,0.15);
            color: #fff;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .card h3 {
            color: #4e233b;
            font-size: clamp(1.85rem, 3vw, 2.65rem);
            line-height: 0.95;
        }

        .media-card img {
            aspect-ratio: 16 / 11;
            filter: saturate(1.02);
        }

        .chip {
            background: rgba(255,255,255,0.52);
            color: #7f2f53;
            border: 1px solid rgba(180, 71, 116, 0.12);
            backdrop-filter: blur(10px);
        }

        .stat-value {
            font-family: var(--font-heading);
            font-style: italic;
            font-weight: 400;
        }

        .contact-card {
            background:
                linear-gradient(135deg, rgba(255,255,255,0.76), rgba(255,231,241,0.82)),
                #fff;
        }

        .footer {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
        }

        /* Readability layer: keep type and contrast predictable across dark and light sections. */
        body {
            letter-spacing: -0.006em;
        }

        .heading,
        .section-title,
        .card h3,
        .contact-card h3,
        .stat-value {
            font-style: normal;
        }

        .navbar {
            background: rgba(36, 19, 31, 0.96);
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 20px 70px rgba(20, 8, 16, 0.3);
        }

        .brand,
        .brand-text,
        .nav-link {
            color: var(--color-on-dark);
        }

        .nav-link {
            font-weight: 600;
        }

        .nav-link:hover,
        .nav-link:focus-visible {
            background: rgba(255, 255, 255, 0.16);
            color: #ffffff;
        }

        .hero,
        #services {
            color: var(--color-on-dark);
        }

        .hero::before {
            background:
                linear-gradient(180deg, rgba(23, 11, 20, 0.52) 0%, rgba(23, 11, 20, 0.72) 64%, rgba(23, 11, 20, 0.94) 100%),
                var(--hero-overlay, transparent);
        }

        .hero .heading {
            text-shadow: 0 3px 24px rgba(16, 6, 13, 0.55);
        }

        .hero .eyebrow,
        .hero .description,
        #services .section-copy,
        #services .card p,
        #services .service-list li {
            color: var(--color-on-dark-muted);
            font-weight: 400;
        }

        .hero .heading,
        #services .section-kicker,
        #services .section-title,
        #services .card h3 {
            color: var(--color-on-dark);
        }

        .badge {
            background: rgba(36, 19, 31, 0.72) !important;
            border: 1px solid rgba(255, 255, 255, 0.22);
        }

        .btn-primary {
            background: var(--color-brand);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.28);
        }

        .btn-primary:hover,
        .btn-primary:focus-visible {
            background: var(--color-brand-dark);
            color: #ffffff;
        }

        .btn-secondary {
            background: var(--color-surface-strong);
            color: var(--color-ink);
        }

        #services .card {
            background: rgba(36, 19, 31, 0.88);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        #services .card-icon {
            background: rgba(255, 255, 255, 0.14);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        #services .service-price {
            background: var(--color-brand-soft);
            color: var(--color-brand-dark);
        }

        #services .service-list li::before {
            color: #ffadc9;
        }

        .section:not(#services) {
            color: var(--color-ink);
        }

        #portfolio {
            padding: 92px 0;
            border: 0;
            border-top: 1px solid rgba(118, 37, 70, 0.1);
            border-radius: 0;
            background: transparent;
            box-shadow: none;
        }

        section#portfolio > .section-heading .section-kicker {
            color: #9a315f;
        }

        section#portfolio > .section-heading .section-title {
            color: var(--color-ink);
            text-shadow: none;
        }

        section#portfolio > .section-heading .section-copy {
            color: var(--color-copy);
            font-weight: 400;
        }

        .section:not(#services) .section-title,
        .section:not(#services) .card h3,
        .section:not(#services) .faq-item h3,
        .section:not(#services) .empty-state strong,
        .contact-card h3 {
            color: var(--color-ink);
        }

        .section:not(#services) .section-copy,
        .section:not(#services) .card p,
        .section:not(#services) .faq-item p,
        .section:not(#services) .empty-state,
        .section:not(#services) .stat-label,
        .section:not(#services) .testimonial-quote,
        .section:not(#services) .testimonial-role,
        .contact-card p {
            color: var(--color-copy);
            font-weight: 400;
        }

        .section:not(#services) .card,
        .section:not(#services) .faq-item,
        .section:not(#services) .testimonial-card,
        .section:not(#services) .empty-state {
            background: rgba(255, 255, 255, 0.94);
            border: 1px solid rgba(118, 37, 70, 0.14);
        }

        .section:not(#services) .card-icon {
            background: var(--color-brand-soft);
            color: var(--color-brand-dark);
            border: 1px solid rgba(118, 37, 70, 0.12);
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: clamp(18px, 2.4vw, 28px);
        }

        #advantages .section-heading,
        #why-us .section-heading {
            max-width: 760px;
            margin-bottom: clamp(34px, 4vw, 48px);
        }

        #advantages .feature-card,
        #why-us .feature-card {
            --feature-accent: #8a2d56;
            position: relative;
            display: flex;
            min-width: 0;
            min-height: 245px;
            flex-direction: column;
            padding: clamp(24px, 2.8vw, 30px);
            border: 1px solid rgba(118, 37, 70, 0.1);
            border-radius: 26px;
            background:
                radial-gradient(circle at 100% 0, rgba(138, 45, 86, 0.09), transparent 38%),
                linear-gradient(155deg, #ffffff 0%, #fffafd 100%);
            box-shadow: 0 18px 48px rgba(75, 28, 54, 0.08);
            isolation: isolate;
            overflow: hidden;
            transition: transform 240ms ease, box-shadow 240ms ease, border-color 240ms ease;
        }

        #advantages .feature-card:nth-child(3n + 2),
        #why-us .feature-card:nth-child(3n + 2) {
            --feature-accent: #a35378;
        }

        #advantages .feature-card:nth-child(3n),
        #why-us .feature-card:nth-child(3n) {
            --feature-accent: #6f315d;
        }

        #advantages .feature-card::after,
        #why-us .feature-card::after {
            content: '';
            position: absolute;
            right: -52px;
            bottom: -68px;
            z-index: -1;
            width: 170px;
            height: 170px;
            border-radius: 50%;
            background: color-mix(in srgb, var(--feature-accent) 7%, transparent);
            pointer-events: none;
        }

        #advantages .feature-card:hover,
        #why-us .feature-card:hover {
            transform: translateY(-6px);
            border-color: rgba(118, 37, 70, 0.2);
            box-shadow: 0 28px 64px rgba(75, 28, 54, 0.14);
        }

        .feature-card__heading {
            display: grid;
            grid-template-columns: 54px minmax(0, 1fr);
            align-items: center;
            gap: 18px;
            padding-right: 34px;
            margin-bottom: 24px;
        }

        #advantages .feature-card .card-icon,
        #why-us .feature-card .card-icon {
            width: 54px;
            height: 54px;
            margin: 0;
            border: 0;
            border-radius: 17px;
            background: color-mix(in srgb, var(--feature-accent) 11%, #ffffff);
            color: var(--feature-accent);
            font-size: 1.4rem;
            box-shadow: inset 0 0 0 1px color-mix(in srgb, var(--feature-accent) 14%, transparent);
        }

        .feature-card__number {
            position: absolute;
            top: clamp(26px, 3vw, 32px);
            right: clamp(24px, 2.8vw, 30px);
            color: color-mix(in srgb, var(--feature-accent) 48%, #ffffff);
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 0.16em;
        }

        #advantages .feature-card h3,
        #why-us .feature-card h3 {
            max-width: none;
            margin: 0;
            color: var(--color-ink);
            font-size: clamp(1.55rem, 2.25vw, 2rem);
            line-height: 1.08;
            text-wrap: balance;
        }

        #advantages .feature-card p,
        #why-us .feature-card p {
            margin: auto 0 0;
            padding-top: 8px;
            color: var(--color-copy);
            font-size: 0.98rem;
            line-height: 1.75;
        }

        .section:not(#services) .card-link,
        .section:not(#services) .contact-card a {
            color: var(--color-brand-dark);
            text-decoration-color: rgba(118, 37, 70, 0.35);
            text-underline-offset: 0.2em;
        }

        .section:not(#services) .card-link:hover,
        .section:not(#services) .card-link:focus-visible,
        .section:not(#services) .contact-card a:hover,
        .section:not(#services) .contact-card a:focus-visible {
            text-decoration: underline;
        }

        .chip,
        .portfolio-tag {
            background: var(--color-brand-soft);
            color: var(--color-brand-dark);
            border-color: rgba(118, 37, 70, 0.14);
        }

        .stat-card {
            background: var(--color-brand-soft);
            border: 1px solid rgba(118, 37, 70, 0.16);
        }

        .stat-value,
        .testimonial-author {
            color: var(--color-brand-dark);
        }

        .contact-card {
            background: linear-gradient(135deg, #ffffff, var(--color-brand-soft));
            border: 1px solid rgba(118, 37, 70, 0.16);
        }

        .footer {
            color: var(--color-copy);
        }

        a:focus-visible,
        button:focus-visible,
        input:focus-visible,
        select:focus-visible,
        summary:focus-visible {
            outline: 3px solid #ffb3d0;
            outline-offset: 3px;
        }

        .reveal-item {
            opacity: 0;
            filter: blur(10px);
            transform: translateY(28px);
        }

        .reveal-item.is-visible {
            opacity: 1;
            filter: blur(0);
            transform: translateY(0);
            transition: opacity 0.75s ease, filter 0.75s ease, transform 0.75s ease;
        }

        @keyframes cinematicReveal {
            from { opacity: 0; filter: blur(12px); transform: translateY(24px); }
            to { opacity: 1; filter: blur(0); transform: translateY(0); }
        }

        @media (min-width: 900px) {
            .page { padding: 0 0 56px; }
        }

        @media (min-width: 641px) and (max-width: 899px) {
            .about-layout {
                grid-template-columns: 1fr;
            }

            .about-media,
            .about-media img {
                min-height: 380px;
            }

            .portfolio-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .feature-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 640px) {
            :root {
                --text-hero: clamp(2.2rem, 11vw, 3rem);
                --text-2xl: clamp(1.65rem, 7vw, 2rem);
                --text-md: 1rem;
            }

            .navbar {
                align-items: flex-start;
                flex-direction: column;
                top: 8px;
                margin-top: 10px;
                padding: 14px 16px;
            }

            .brand {
                width: 100%;
            }

            .brand-logo {
                width: 42px;
                height: 42px;
                flex-basis: 42px;
            }

            .brand-text {
                white-space: normal;
            }

            .nav-links {
                width: 100%;
                flex-wrap: wrap;
                gap: 6px;
            }

            .nav-link {
                padding: 8px 10px;
            }

            .hero {
                min-height: 100svh;
                padding: 128px 18px 46px;
            }

            .hero-layout-leftRight,
            .hero-layout-rightLeft {
                grid-template-columns: 1fr;
                place-items: center;
            }

            .hero-layout-leftRight .hero-content,
            .hero-layout-rightLeft .hero-content {
                order: 1;
                justify-self: center;
                text-align: center;
            }

            .hero-layout-leftRight .eyebrow,
            .hero-layout-rightLeft .eyebrow,
            .hero-layout-leftRight .buttons,
            .hero-layout-rightLeft .buttons {
                justify-content: center;
            }

            .hero-mascot-stage {
                order: 2;
                min-height: 220px;
                width: min(320px, 100%);
            }

            .heading {
                font-size: clamp(2.15rem, 10vw, 3rem);
                line-height: 1.06;
            }

            .about-layout {
                grid-template-columns: 1fr;
                gap: 28px;
            }

            .about-media,
            .about-media img {
                min-height: 320px;
            }

            .about-media {
                border-radius: 22px;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }

            #advantages .feature-card,
            #why-us .feature-card {
                min-height: 230px;
                border-radius: 22px;
            }

            .feature-card__heading {
                grid-template-columns: 54px minmax(0, 1fr);
                gap: 16px;
                margin-bottom: 22px;
            }

            #services {
                padding: 76px 20px 84px;
            }

            #portfolio {
                padding: 68px 0;
                border-radius: 0;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
            }

            .gallery-feed {
                grid-template-columns: 1fr;
                grid-auto-rows: auto;
            }

            .gallery-feed-item,
            .gallery-feed-item:nth-child(n) {
                grid-column: 1;
                grid-row: auto;
                min-height: 0;
                aspect-ratio: 4 / 5;
            }

            .section {
                width: min(100% - 28px, 1180px);
                padding: 68px 0;
            }

            #about,
            #advantages,
            #why-us,
            #events {
                padding-inline: 0;
                border-radius: 0;
            }

            .section-title {
                font-size: clamp(2.45rem, 14vw, 3.6rem);
            }
        }

        /* Hero background and side image are both sourced from the Hero Section API. */
        .hero {
            min-height: 680px;
            grid-template-columns: minmax(0, 1.08fr) minmax(320px, 0.82fr);
            place-items: center;
            gap: clamp(36px, 5vw, 72px);
            padding: 120px max(20px, calc((100vw - 1180px) / 2)) 56px;
            color: #482438;
            background-color: #fff0f6;
            background-image:
                radial-gradient(circle at 12% 18%, rgba(255, 255, 255, 0.96) 0 7%, transparent 24%),
                radial-gradient(circle at 88% 14%, rgba(255, 210, 225, 0.72) 0 8%, transparent 27%),
                radial-gradient(circle at 76% 88%, rgba(213, 238, 218, 0.68) 0 9%, transparent 30%),
                linear-gradient(135deg, rgba(255, 250, 245, 0.9) 0%, rgba(255, 240, 246, 0.82) 47%, rgba(248, 243, 232, 0.86) 100%),
                var(--hero-background-image, none);
            background-position: center, center, center, center, var(--hero-bg-position, center);
            background-repeat: no-repeat;
            background-size: auto, auto, auto, auto, var(--hero-bg-size, cover);
        }

        .hero:not(.has-hero-side-image) {
            grid-template-columns: minmax(0, 760px);
            justify-content: center;
        }

        .hero::before {
            z-index: 0;
            border-radius: 0;
            background:
                linear-gradient(var(--hero-overlay-color, rgba(255, 250, 252, 0.72)), var(--hero-overlay-color, rgba(255, 250, 252, 0.72))),
                linear-gradient(120deg, rgba(255, 255, 255, 0.38), transparent 44%),
                repeating-linear-gradient(135deg, rgba(194, 104, 145, 0.025) 0 1px, transparent 1px 13px);
        }

        .hero::after {
            content: '';
            position: absolute;
            z-index: 0;
            width: 340px;
            height: 340px;
            left: -150px;
            bottom: -170px;
            border: 54px solid rgba(246, 126, 155, 0.1);
            border-radius: 50%;
            pointer-events: none;
        }

        .hero-ornaments,
        .hero-decor {
            display: block;
        }

        .hero .floating-ornament {
            opacity: 0.55;
            filter: blur(0);
            mix-blend-mode: normal;
        }

        .hero-content,
        .hero-layout-leftRight .hero-content,
        .hero-layout-rightLeft .hero-content {
            width: 100%;
            max-width: 680px;
            justify-self: start;
            text-align: left;
            color: #482438;
        }

        .hero-layout-rightLeft .hero-content {
            justify-self: end;
        }

        .hero .badge {
            margin-bottom: 20px;
            color: #9f3f69 !important;
            background: rgba(255, 255, 255, 0.86) !important;
            border: 1px solid rgba(190, 99, 149, 0.18);
            box-shadow: 0 16px 40px rgba(181, 106, 153, 0.13);
        }

        .hero .eyebrow,
        .hero-layout-leftRight .eyebrow,
        .hero-layout-rightLeft .eyebrow {
            width: auto;
            justify-content: flex-start;
            margin-bottom: 14px;
            color: #9f5a7a;
            font-weight: 700;
        }

        .hero .heading {
            max-width: 700px;
            margin: 0;
            color: #3d2031;
            font-size: clamp(3rem, 5vw, 5.1rem);
            line-height: 0.98;
            text-shadow: none;
        }

        .hero .description {
            max-width: 620px;
            margin: 24px 0 30px;
            color: #72566a;
            font-weight: 400;
        }

        .hero .buttons,
        .hero-layout-leftRight .buttons,
        .hero-layout-rightLeft .buttons {
            justify-content: flex-start;
            margin-bottom: 0;
        }

        .hero .btn-primary {
            color: #ffffff;
            background: linear-gradient(135deg, #e85d8e, #f28cab);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 18px 38px rgba(220, 74, 126, 0.24);
        }

        .hero .btn-secondary {
            color: #7d3d5d;
            background: rgba(255, 255, 255, 0.82);
            border: 1px solid rgba(190, 99, 149, 0.2);
            box-shadow: 0 14px 34px rgba(134, 81, 111, 0.1);
        }

        .hero-media {
            position: relative;
            inset: auto;
            z-index: 2;
            width: min(420px, var(--hero-side-width, 100%));
            min-height: 0;
            aspect-ratio: 4 / 5;
            justify-self: end;
            padding: 10px;
            overflow: visible;
            border: 1px solid rgba(190, 99, 149, 0.14);
            border-radius: 46px;
            background: rgba(255, 255, 255, 0.82);
            box-shadow: 0 36px 90px rgba(151, 87, 125, 0.2);
            animation: floatImage 9s ease-in-out infinite;
        }

        .hero-layout-rightLeft .hero-media {
            order: 1;
            justify-self: start;
        }

        .hero-side-top {
            align-self: start;
        }

        .hero-side-center,
        .hero-side-left,
        .hero-side-right {
            align-self: center;
        }

        .hero-side-bottom {
            align-self: end;
        }

        .hero-media img {
            width: 100%;
            height: 100%;
            min-height: 0;
            border-radius: 37px;
            object-fit: cover;
            object-position: center;
            filter: saturate(1.04) contrast(0.98) brightness(1.04);
            transform: none;
        }

        .hero-media::after {
            inset: 10px;
            border-radius: 37px;
            background: linear-gradient(180deg, rgba(255, 244, 248, 0.04), rgba(246, 126, 155, 0.08));
        }

        .hero-decor {
            position: absolute;
            z-index: -1;
            border-radius: 50%;
            filter: blur(2px);
        }

        .hero-decor-1 {
            top: -28px;
            right: -32px;
            width: 150px;
            height: 150px;
            background: rgba(246, 126, 155, 0.24);
        }

        .hero-decor-2 {
            bottom: -35px;
            left: -40px;
            width: 190px;
            height: 190px;
            background: rgba(188, 220, 194, 0.38);
        }

        .hero-visual-note {
            position: absolute;
            z-index: 4;
            display: flex;
            align-items: center;
            gap: 11px;
            min-width: 225px;
            padding: 12px 15px;
            border: 1px solid rgba(190, 99, 149, 0.16);
            border-radius: 18px;
            color: #593147;
            background: rgba(255, 255, 255, 0.92);
            box-shadow: 0 18px 45px rgba(111, 63, 91, 0.16);
            backdrop-filter: blur(18px);
            pointer-events: none;
        }

        .hero-visual-note--top {
            top: 42px;
            right: -38px;
        }

        .hero-visual-note--bottom {
            left: -42px;
            bottom: 54px;
        }

        .hero-note-icon {
            display: grid;
            width: 38px;
            height: 38px;
            flex: 0 0 38px;
            place-items: center;
            border-radius: 13px;
            color: #b44774;
            background: #ffe7f0;
            font-size: 1.15rem;
        }

        .hero-visual-note span:last-child {
            display: grid;
            gap: 2px;
        }

        .hero-visual-note strong {
            font-size: 0.88rem;
            line-height: 1.2;
        }

        .hero-visual-note small {
            color: #8a7180;
            font-size: 0.72rem;
            line-height: 1.35;
        }

        .hero-mascot-stage {
            position: absolute;
            z-index: 3;
            right: clamp(20px, 4vw, 70px);
            bottom: 22px;
            width: auto;
            min-height: 0;
        }

        @media (max-width: 960px) {
            .hero,
            .hero-layout-leftRight,
            .hero-layout-rightLeft {
                min-height: auto;
                grid-template-columns: 1fr;
                gap: 44px;
                padding: 116px max(20px, 6vw) 60px;
            }

            .hero-content,
            .hero-layout-leftRight .hero-content,
            .hero-layout-rightLeft .hero-content {
                order: 1;
                max-width: 760px;
                justify-self: center;
                text-align: center;
            }

            .hero .eyebrow,
            .hero-layout-leftRight .eyebrow,
            .hero-layout-rightLeft .eyebrow,
            .hero .buttons,
            .hero-layout-leftRight .buttons,
            .hero-layout-rightLeft .buttons {
                justify-content: center;
            }

            .hero .heading,
            .hero .description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-media,
            .hero-layout-rightLeft .hero-media {
                order: 2;
                width: min(680px, calc(100% - 54px));
                aspect-ratio: 16 / 11;
                justify-self: center;
            }

            .hero-mascot-stage {
                display: none;
            }
        }

        @media (max-width: 640px) {
            .hero,
            .hero-layout-leftRight,
            .hero-layout-rightLeft {
                gap: 36px;
                padding: 104px 20px 48px;
            }

            .hero .heading {
                font-size: clamp(2.35rem, 11vw, 3.25rem);
                line-height: 1.02;
            }

            .hero .description {
                margin-top: 20px;
            }

            .hero-media,
            .hero-layout-rightLeft .hero-media {
                width: calc(100% - 18px);
                aspect-ratio: 4 / 5;
                border-radius: 34px;
            }

            .hero-media img,
            .hero-media::after {
                border-radius: 26px;
            }

            .hero-visual-note {
                min-width: 0;
                max-width: 205px;
                padding: 10px 12px;
            }

            .hero-visual-note--top {
                top: 28px;
                right: -12px;
            }

            .hero-visual-note--bottom {
                left: -12px;
                bottom: 34px;
            }

            .hero-visual-note small {
                display: none;
            }
        }

        /* Compact, accessible navigation for phones and small tablets. */
        @media (max-width: 780px) {
            .navbar {
                top: 10px;
                width: calc(100% - 20px);
                min-height: 64px;
                align-items: center;
                flex-direction: row;
                gap: 10px;
                padding: 9px 10px 9px 12px;
                border-radius: 22px;
                overflow: visible;
            }

            .navbar::before {
                border-radius: 22px;
            }

            .brand {
                width: auto;
                min-width: 0;
                flex: 1 1 auto;
                gap: 9px;
            }

            .brand-logo {
                width: 44px;
                height: 44px;
                flex-basis: 44px;
            }

            .brand-text {
                max-width: calc(100vw - 132px);
                overflow: hidden;
                color: #ffffff;
                font-size: 0.84rem;
                line-height: 1.25;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .nav-toggle {
                position: relative;
                z-index: 2;
                display: inline-grid;
                width: 44px;
                height: 44px;
                flex: 0 0 44px;
                place-items: center;
                padding: 0;
                border: 1px solid rgba(255, 255, 255, 0.18);
                border-radius: 15px;
                color: #ffffff;
                background: rgba(255, 255, 255, 0.1);
                font: inherit;
                cursor: pointer;
                transition: background 0.2s ease, transform 0.2s ease;
                -webkit-tap-highlight-color: transparent;
            }

            .nav-toggle:hover,
            .nav-toggle:focus-visible,
            .navbar.is-open .nav-toggle {
                background: rgba(255, 255, 255, 0.2);
            }

            .nav-toggle:active {
                transform: scale(0.96);
            }

            .nav-toggle i {
                font-size: 1.45rem;
                line-height: 1;
            }

            .nav-links {
                position: absolute;
                top: calc(100% + 10px);
                right: 0;
                left: 0;
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 6px;
                width: 100%;
                padding: 10px;
                border: 1px solid rgba(255, 255, 255, 0.16);
                border-radius: 20px;
                background: rgba(36, 19, 31, 0.97);
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

            .navbar.is-open .nav-links {
                opacity: 1;
                visibility: visible;
                transform: translateY(0) scale(1);
                pointer-events: auto;
            }

            .nav-link {
                min-height: 46px;
                justify-content: flex-start;
                padding: 12px 13px;
                border-radius: 13px;
                color: rgba(255, 255, 255, 0.9);
                font-size: 0.82rem;
            }

            .nav-link:hover,
            .nav-link:focus-visible {
                color: #ffffff;
                background: rgba(255, 255, 255, 0.12);
                outline: none;
            }

            .nav-link i {
                display: grid;
                width: 28px;
                height: 28px;
                place-items: center;
                border-radius: 9px;
                color: #f4a5c2;
                background: rgba(255, 255, 255, 0.08);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .nav-links,
            .nav-toggle {
                transition: none;
            }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(26px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes floatImage {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body>
    <div class="page">
        @include('partials.landing-navbar')

        @php
            $heroLayoutType = $hero['layout']['type'] ?? 'center';
            $heroMascot = $hero['layout']['mascot'] ?? [];
            $heroMascotImage = $mediaUrl($heroMascot['image'] ?? null);
            $heroMascotWidth = max(20, min(100, (int) ($heroMascot['width'] ?? 100)));
            $heroMascotAlignment = $heroMascot['alignment'] ?? 'center';
            $heroBgImage = $mediaUrl($hero['background']['image'] ?? null);
            $heroBgPosition = $hero['background']['position'] ?? 'center';
            $heroBgSize = $hero['background']['size'] ?? 'cover';
            $heroOverlay = $hero['background']['overlay'] ?? 'rgba(255, 250, 252, 0.72)';
        @endphp
        <main
            id="home"
            class="hero hero-layout-{{ $heroLayoutType }}{{ $heroMascotImage ? ' has-hero-side-image' : '' }}"
            style="@if($heroBgImage)--hero-background-image: url('{{ $heroBgImage }}');@endif --hero-overlay-color: {{ $heroOverlay }}; --hero-bg-position: {{ $heroBgPosition }}; --hero-bg-size: {{ $heroBgSize }}; --hero-side-width: {{ $heroMascotWidth }}%;"
        >
            <div class="hero-ornaments">
                <div class="floating-ornament ornament-a"></div>
                <div class="floating-ornament ornament-b"></div>
                <div class="floating-ornament ornament-c"></div>
                <div class="floating-ornament ornament-d"></div>
            </div>
            <div class="hero-content">
                <div class="badge" style="background: {{ $hero['badge']['bgColor'] ?? '#fef3c7' }}; color: {{ $hero['badge']['textColor'] ?? '#92400e' }};">
                    <span>{{ $hero['badge']['emoji'] ?? '🌸' }}</span>
                    <span>{{ $hero['badge']['text'] ?? 'Bubba Bloom - Mom & Baby Care' }}</span>
                </div>
                <p class="eyebrow">Homecare pijat ibu hamil, nifas, newborn, bayi & anak oleh Bdn. Nuning J S N, S.Keb., CHE.</p>
                <h1 class="heading">{{ $hero['heading']['part1'] ?? 'Bubba Bloom - Mom & Baby Care' }}<br>{{ $hero['heading']['part2'] ?? 'Pregnancy, Postnatal, Baby & Kids Treatment' }}</h1>
                <p class="description">{{ $hero['description'] ?? 'Melayani Pregnancy Treatment, Postnatal Treatment, dan Baby & Kids Treatment dengan sentuhan profesional dan homecare yang nyaman.' }}</p>

                <div class="buttons">
                    @if(!empty($hero['buttons']) && is_array($hero['buttons']))
                        @foreach($hero['buttons'] as $button)
                            <a href="{{ $button['link'] ?? '#contact' }}" class="btn {{ ($button['type'] ?? 'primary') === 'secondary' ? 'btn-secondary' : 'btn-primary' }}">
                                <i class="{{ ($button['type'] ?? 'primary') === 'secondary' ? 'ri-arrow-down-line' : 'ri-whatsapp-line' }}" aria-hidden="true"></i>
                                <span>{{ $button['text'] ?? 'Pelajari Lebih Lanjut' }}</span>
                            </a>
                        @endforeach
                    @else
                        <a href="#contact" class="btn btn-primary"><i class="ri-whatsapp-line" aria-hidden="true"></i><span>Reservasi WA</span></a>
                        <a href="#services" class="btn btn-secondary"><i class="ri-arrow-down-line" aria-hidden="true"></i><span>Lihat Layanan</span></a>
                    @endif
                </div>

            </div>

            @if($heroMascotImage)
                <div class="hero-media hero-side-{{ $heroMascotAlignment }}">
                    <div class="hero-decor hero-decor-1"></div>
                    <div class="hero-decor hero-decor-2"></div>
                    <img src="{{ $heroMascotImage }}" alt="Gambar pendukung {{ $brandName ?? 'Bubba Bloom Mom & Baby Care' }}" fetchpriority="high" decoding="async">
                    <div class="hero-visual-note hero-visual-note--top">
                        <span class="hero-note-icon"><i class="ri-home-heart-line" aria-hidden="true"></i></span>
                        <span><strong>Homecare nyaman</strong><small>Perawatan langsung di rumah</small></span>
                    </div>
                    <div class="hero-visual-note hero-visual-note--bottom">
                        <span class="hero-note-icon"><i class="ri-shield-check-line" aria-hidden="true"></i></span>
                        <span><strong>Aman & profesional</strong><small>Untuk ibu, bayi, dan anak</small></span>
                    </div>
                </div>
            @endif
        </main>

        <section id="services" class="section">
            <div class="section-heading">
                <span class="section-kicker"><i class="ri-heart-pulse-line" aria-hidden="true"></i>Layanan</span>
                <h2 class="section-title">Melayani</h2>
                <p class="section-copy">Pilih perawatan yang sesuai untuk ibu, bayi, dan anak dengan pendampingan homecare yang nyaman.</p>
            </div>
            <div class="grid-3">
                @if(!empty($services))
                    @foreach($services as $service)
                        @php
                            $serviceImage = $mediaUrl($service['image'] ?? null);
                            $serviceFeatures = array_values(array_filter($service['features'] ?? []));
                            $servicePrice = (float) ($service['price'] ?? 0);
                        @endphp
                        <article class="card service-card">
                            @if($serviceImage)
                                <img class="service-card-image" src="{{ $serviceImage }}" alt="{{ $service['title'] ?? 'Layanan Bubba Bloom' }}" loading="lazy" decoding="async">
                            @else
                                <span class="card-icon"><i class="{{ $service['icon'] ?? 'ri-heart-pulse-line' }}" aria-hidden="true"></i></span>
                            @endif
                            <div class="service-card-header">
                                <h3>{{ $service['title'] ?? 'Layanan' }}</h3>
                                @if($servicePrice > 0)
                                    <span class="service-price">Rp {{ number_format($servicePrice, 0, ',', '.') }}</span>
                                @endif
                            </div>
                            @if(!empty($service['description']))
                                <p>{{ $service['description'] }}</p>
                            @endif
                            @if(!empty($serviceFeatures))
                                <ul class="service-list">
                                    @foreach($serviceFeatures as $feature)
                                        <li>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </article>
                    @endforeach
                @else
                    <div class="card">
                        <span class="card-icon"><i class="ri-parent-line" aria-hidden="true"></i></span>
                        <h3>Pregnancy Treatment</h3>
                        <ul class="service-list">
                            <li>Pregnancy Massage (Pijat Hamil) UK&gt;12 Minggu</li>
                            <li>Induksi Akupresure</li>
                            <li>Pijat Laktasi</li>
                            <li>Perawatan Payudara</li>
                        </ul>
                    </div>
                    <div class="card">
                        <span class="card-icon"><i class="ri-women-line" aria-hidden="true"></i></span>
                        <h3>Postnatal Treatment</h3>
                        <ul class="service-list">
                            <li>Postnatal Massage (Pijat ibu nifas)</li>
                            <li>Pijat Laktasi</li>
                            <li>Newborn Care (Perawatan Bayi Baru Lahir)</li>
                        </ul>
                    </div>
                    <div class="card">
                        <span class="card-icon"><i class="ri-emotion-happy-line" aria-hidden="true"></i></span>
                        <h3>Baby & Kids Treatment</h3>
                        <ul class="service-list">
                            <li>Massage (Pijat Bayi & Pijat Anak)</li>
                            <li>Massage + Stimulasi (Pijat + Stimulasi, Bayi & Anak)</li>
                            <li>Pediatric Massage (Pijat bayi dengan keluhan)</li>
                        </ul>
                    </div>
                @endif
            </div>
        </section>

        @if(!empty($portfolios))
            <section id="portfolio" class="section">
                <div class="section-heading">
                    <span class="section-kicker"><i class="ri-briefcase-4-line" aria-hidden="true"></i>Portofolio</span>
                    <h2 class="section-title">Sentuhan Nyata untuk Ibu & Anak</h2>
                    <p class="section-copy">Dokumentasi layanan homecare Bubba Bloom dengan pendampingan bidan profesional di rumah keluarga.</p>
                </div>
                <div class="portfolio-grid">
                    @foreach($portfolios as $portfolio)
                        @php
                            $portfolioImages = array_values(array_filter($portfolio['images'] ?? []));
                            $portfolioImage = $mediaUrl($portfolioImages[0] ?? null);
                            $portfolioTags = array_values(array_filter($portfolio['technologies'] ?? []));
                        @endphp
                        <article class="card portfolio-card">
                            @if($portfolioImage)
                                <img class="portfolio-card-image" src="{{ $portfolioImage }}" alt="{{ $portfolio['title'] ?? 'Portofolio Bubba Bloom' }}" loading="lazy">
                            @endif
                            <div class="portfolio-card-body">
                                @if(!empty($portfolio['category']))
                                    <span class="chip">{{ $portfolio['category'] }}</span>
                                @endif
                                <h3>{{ $portfolio['title'] ?? 'Layanan Bubba Bloom' }}</h3>
                                @if(!empty($portfolio['description']))
                                    <p>{{ $portfolio['description'] }}</p>
                                @endif
                                @if(!empty($portfolioTags))
                                    <div class="portfolio-tags" aria-label="Tag portofolio">
                                        @foreach($portfolioTags as $tag)
                                            <span class="portfolio-tag">{{ $tag }}</span>
                                        @endforeach
                                    </div>
                                @endif
                                @if(!empty($portfolio['url']))
                                    <a class="card-link" href="{{ $portfolio['url'] }}" target="_blank" rel="noopener noreferrer">
                                        Reservasi layanan <i class="ri-arrow-right-line" aria-hidden="true"></i>
                                    </a>
                                @endif
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif

        @php
            $aboutStory = is_array($about['story'] ?? null) ? $about['story'] : [];
            $aboutParagraphs = array_values(array_filter(array_map(
                fn ($item) => trim((string) ($item['text'] ?? '')),
                is_array($aboutStory['content'] ?? null) ? $aboutStory['content'] : []
            )));
            $aboutTitle = trim((string) ($aboutStory['title'] ?? '')) ?: 'Tentang Kami';
            $aboutBadge = trim((string) ($aboutStory['badge'] ?? '')) ?: 'Tentang';
            $aboutFallbackCopy = $about['companyInfo']['description']
                ?? $about['companyInfo']['tagline']
                ?? 'Bubba Bloom menghadirkan layanan homecare untuk ibu dan anak dengan pendekatan lembut, aman, dan profesional.';
            $aboutImageData = is_array($aboutStory['image'] ?? null) ? $aboutStory['image'] : [];
            $aboutImage = $mediaUrl($aboutImageData['url'] ?? null);
        @endphp
        <section id="about" class="section">
            <div class="about-layout{{ $aboutImage ? ' has-image' : '' }}">
                <div class="about-content">
                    <div class="section-heading">
                        <span class="section-kicker"><i class="ri-home-heart-line" aria-hidden="true"></i>{{ $aboutBadge }}</span>
                        <h2 class="section-title">{{ $aboutTitle }}</h2>
                    </div>
                    <div class="about-copy">
                        @forelse($aboutParagraphs as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @empty
                            <p>{{ $aboutFallbackCopy }}</p>
                        @endforelse
                    </div>
                </div>

                @if($aboutImage)
                    <figure class="about-media">
                        <img
                            src="{{ $aboutImage }}"
                            alt="{{ $aboutImageData['alt'] ?? $aboutTitle }}"
                            loading="lazy"
                            onerror="this.closest('figure').hidden = true"
                        >
                        @if(!empty($aboutImageData['caption']))
                            <figcaption>{{ $aboutImageData['caption'] }}</figcaption>
                        @endif
                    </figure>
                @endif
            </div>
        </section>

        <section id="advantages" class="section">
            <div class="section-heading">
                <span class="section-kicker"><i class="ri-shield-check-line" aria-hidden="true"></i>Keunggulan</span>
                <h2 class="section-title">Keunggulan</h2>
                <p class="section-copy">Layanan dirancang untuk menghadirkan perawatan yang aman, nyaman, dan personal bagi setiap keluarga.</p>
            </div>
            <div class="feature-grid">
                @if(!empty($superiorities))
                    @foreach($superiorities as $item)
                        <article class="card feature-card">
                            <div class="feature-card__heading">
                                <span class="card-icon"><i class="{{ $item['class_icon'] ?? 'ri-shield-heart-line' }}" aria-hidden="true"></i></span>
                                <h3>{{ $item['title'] ?? 'Keunggulan' }}</h3>
                            </div>
                            <span class="feature-card__number" aria-hidden="true">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <p>{{ $item['description'] ?? '' }}</p>
                        </article>
                    @endforeach
                @else
                    <article class="card feature-card">
                        <div class="feature-card__heading">
                            <span class="card-icon"><i class="ri-user-heart-line" aria-hidden="true"></i></span>
                            <h3>Terapi Profesional</h3>
                        </div>
                        <span class="feature-card__number" aria-hidden="true">01</span>
                        <p>Dipandu oleh tenaga berpengalaman untuk ibu, bayi, dan anak.</p>
                    </article>
                    <article class="card feature-card">
                        <div class="feature-card__heading">
                            <span class="card-icon"><i class="ri-shield-check-line" aria-hidden="true"></i></span>
                            <h3>Higienis dan Aman</h3>
                        </div>
                        <span class="feature-card__number" aria-hidden="true">02</span>
                        <p>Peralatan dan proses layanan disiapkan untuk kenyamanan keluarga.</p>
                    </article>
                    <article class="card feature-card">
                        <div class="feature-card__heading">
                            <span class="card-icon"><i class="ri-home-heart-line" aria-hidden="true"></i></span>
                            <h3>Homecare Nyaman</h3>
                        </div>
                        <span class="feature-card__number" aria-hidden="true">03</span>
                        <p>Perawatan dilakukan di rumah agar ibu dan anak tetap merasa tenang.</p>
                    </article>
                @endif
            </div>
        </section>

        @if(!empty($whyChooseUs))
            <section id="why-us" class="section">
                <div class="section-heading">
                    <span class="section-kicker"><i class="ri-sparkling-2-line" aria-hidden="true"></i>Mengapa Kami</span>
                    <h2 class="section-title">Mengapa Kami</h2>
                    <p class="section-copy">Pendampingan yang dekat, fleksibel, dan disesuaikan dengan kebutuhan ibu, bayi, serta anak.</p>
                </div>
                <div class="feature-grid">
                    @foreach($whyChooseUs as $item)
                        <article class="card feature-card">
                            <div class="feature-card__heading">
                                <span class="card-icon"><i class="{{ $item['class_icon'] ?? 'ri-star-smile-line' }}" aria-hidden="true"></i></span>
                                <h3>{{ $item['title'] ?? 'Mengapa Kami' }}</h3>
                            </div>
                            <span class="feature-card__number" aria-hidden="true">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <p>{{ $item['description'] ?? '' }}</p>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif

        @if(!empty($events))
            <section id="events" class="section">
                <div class="section-heading">
                    <span class="section-kicker"><i class="ri-calendar-event-line" aria-hidden="true"></i>Event</span>
                    <h2 class="section-title">Event & Promo</h2>
                    <p class="section-copy">Informasi terbaru dari modul Event yang sudah dipublikasikan.</p>
                </div>
                <div class="grid-3">
                    @foreach($events as $event)
                        @php
                            $eventImage = $mediaUrl($event['media']['thumbnail']['url'] ?? null);
                        @endphp
                        <article class="card media-card">
                            @if($eventImage)
                                <img src="{{ $eventImage }}" alt="{{ $event['title'] ?? 'Event Bubba Bloom' }}" loading="lazy" decoding="async">
                            @endif
                            <div class="media-card-body">
                                @if(!empty($event['badge']['label']))
                                    <span class="chip">{{ $event['badge']['label'] }}</span>
                                @endif
                                <h3>{{ $event['title'] ?? 'Event' }}</h3>
                                <p>{{ $event['description'] ?? '' }}</p>
                                @if(!empty($event['cta']['url']))
                                    <a class="card-link" href="{{ $event['cta']['url'] }}"><i class="ri-whatsapp-line" aria-hidden="true"></i>{{ $event['cta']['label'] ?? 'Hubungi Kami' }}</a>
                                @endif
                                <a class="card-link" href="{{ route('landing.event.detail', ['id' => $event['_id']]) }}"><i class="ri-arrow-right-line" aria-hidden="true"></i>Lihat detail</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif

        <section id="gallery" class="section">
            <div class="section-heading">
                <span class="section-kicker"><i class="ri-image-line" aria-hidden="true"></i>Galeri</span>
                <h2 class="section-title">Koleksi Foto & Video</h2>
                <p class="section-copy">Momen perawatan, aktivitas, dan cerita Bubba Bloom dalam koleksi visual.</p>
                <a class="card-link" href="{{ route('landing.gallery.index') }}"><i class="ri-arrow-right-line" aria-hidden="true"></i>Lihat semua galeri</a>
            </div>
            <div class="gallery-feed">
                @if(!empty($galleryItems))
                    @foreach($galleryItems as $item)
                        @php
                            $galleryImage = $mediaUrl($item['image'] ?? null);
                            $galleryPath = $galleryImage ? (parse_url($galleryImage, PHP_URL_PATH) ?? '') : '';
                            $galleryIsVideo = (bool) preg_match('/\.(mp4|webm|ogg|mov|m4v)$/i', $galleryPath);
                        @endphp
                        <figure class="gallery-feed-item{{ $galleryIsVideo ? ' is-video' : '' }}">
                            <div class="gallery-feed-media">
                                @if($galleryIsVideo)
                                    <video controls playsinline preload="metadata" aria-label="{{ $item['title'] ?? 'Video Galeri Bubba Bloom' }}">
                                        <source src="{{ $galleryImage }}">
                                        Browser Anda belum mendukung pemutar video.
                                    </video>
                                @else
                                    <img src="{{ $galleryImage ?? asset('images/hero-mom-baby-care.jpg') }}" alt="{{ $item['title'] ?? 'Galeri Bubba Bloom' }}" loading="lazy">
                                @endif
                            </div>
                            <span class="gallery-media-kind" aria-label="{{ $galleryIsVideo ? 'Video' : 'Foto' }}">
                                <i class="{{ $galleryIsVideo ? 'ri-play-fill' : 'ri-image-line' }}" aria-hidden="true"></i>
                            </span>
                            <figcaption class="gallery-feed-caption">
                                <h3>{{ $item['title'] ?? 'Galeri' }}</h3>
                                @if(!empty($item['description']))
                                    <p>{{ $item['description'] }}</p>
                                @endif
                            </figcaption>
                        </figure>
                    @endforeach
                @else
                    <div class="empty-state">
                        <strong>Galeri belum tampil.</strong>
                        <p>Pastikan backend GraphQL aktif dan modul Galeri memiliki data aktif untuk instansi ini.</p>
                    </div>
                @endif
            </div>
        </section>

        @if(!empty($teamMembers))
            <section id="team" class="section">
                <div class="section-heading">
                    <span class="section-kicker"><i class="ri-team-line" aria-hidden="true"></i>Team</span>
                    <h2 class="section-title">Team</h2>
                    <p class="section-copy">Tim yang mendampingi layanan Bubba Bloom.</p>
                </div>
                <div class="grid-3">
                    @foreach($teamMembers as $member)
                        @php
                            $profileImage = $mediaUrl($member['profileImage']['url'] ?? null);
                        @endphp
                        <article class="card media-card">
                            @if($profileImage)
                                <img src="{{ $profileImage }}" alt="{{ $member['currentContent']['name'] ?? 'Team Bubba Bloom' }}" loading="lazy" decoding="async">
                            @endif
                            <div class="media-card-body">
                                <h3>{{ $member['currentContent']['name'] ?? 'Team Bubba Bloom' }}</h3>
                                <p class="testimonial-role">{{ $member['currentContent']['position'] ?? $member['currentContent']['department'] ?? '' }}</p>
                                <p>{{ $member['currentContent']['bio'] ?? '' }}</p>
                                <a class="card-link" href="{{ route('landing.team.detail', ['id' => $member['_id']]) }}"><i class="ri-arrow-right-line" aria-hidden="true"></i>Lihat profil</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif

        <section id="testimonials" class="section">
            <div class="section-heading">
                <span class="section-kicker"><i class="ri-chat-smile-2-line" aria-hidden="true"></i>Testimoni</span>
                <h2 class="section-title">Testimoni</h2>
                <p class="section-copy">Kisah keluarga yang merasakan layanan Bubba Bloom.</p>
            </div>
            <div class="testimonial-grid">
                @if(!empty($testimonials))
                    @foreach($testimonials as $testimonial)
                        <div class="testimonial-card">
                            <p class="testimonial-quote">"{{ $testimonial['content'] ?? '' }}"</p>
                            <p class="testimonial-author">{{ $testimonial['author_name'] ?? 'Pelanggan Bubba Bloom' }}</p>
                            <p class="testimonial-role">{{ $testimonial['author_position'] ?? $testimonial['university'] ?? '' }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="testimonial-card">
                        <p class="testimonial-quote">"Anak kami tidur lebih nyenyak dan terlihat lebih tenang setelah sesi pertama. Terapisnya sangat sabar dan ramah."</p>
                        <p class="testimonial-author">Mira</p>
                        <p class="testimonial-role">Ibu dari bayi 6 bulan</p>
                    </div>
                    <div class="testimonial-card">
                        <p class="testimonial-quote">"Suasana layanan sangat hangat, dan kami merasa aman karena semua peralatan disiapkan dengan teliti."</p>
                        <p class="testimonial-author">Fajar</p>
                        <p class="testimonial-role">Ayah dari bayi 8 bulan</p>
                    </div>
                    <div class="testimonial-card">
                        <p class="testimonial-quote">"Paket bonding membantu saya belajar pijat bayi yang benar. Sekarang saya lebih percaya diri saat merawat si kecil."</p>
                        <p class="testimonial-author">Siti</p>
                        <p class="testimonial-role">Ibu dari bayi 10 bulan</p>
                    </div>
                @endif
            </div>
        </section>

        <section id="news" class="section">
            <div class="section-heading">
                <span class="section-kicker"><i class="ri-newspaper-line" aria-hidden="true"></i>Berita</span>
                <h2 class="section-title">Berita</h2>
                <p class="section-copy">Artikel dan kabar terbaru dari modul Berita.</p>
                <a class="card-link" href="{{ route('landing.news.index') }}"><i class="ri-arrow-right-line" aria-hidden="true"></i>Lihat semua berita</a>
            </div>
            <div class="grid-3">
                @if(!empty($news))
                    @foreach($news as $article)
                        @php
                            $newsImage = $mediaUrl($article['featured_image']['url'] ?? null);
                            $newsRoute = route('landing.news.detail', ['id' => $article['_id'], 'slug' => $article['slug'] ?? null]);
                        @endphp
                        <article class="card media-card">
                            @if($newsImage)
                                <img src="{{ $newsImage }}" alt="{{ $article['featured_image']['alt'] ?? $article['title'] ?? 'Berita Bubba Bloom' }}" loading="lazy" decoding="async">
                            @endif
                            <div class="media-card-body">
                                <span class="chip">{{ !empty($article['reading_time']) ? $article['reading_time'] . ' menit baca' : 'Berita' }}</span>
                                <h3>{{ $article['title'] ?? 'Berita' }}</h3>
                                <p>{{ $article['excerpt'] ?? '' }}</p>
                                <a class="card-link" href="{{ $newsRoute }}"><i class="ri-arrow-right-line" aria-hidden="true"></i>Baca detail</a>
                            </div>
                        </article>
                    @endforeach
                @else
                    <div class="empty-state">
                        <strong>Berita belum tampil.</strong>
                        <p>Pastikan backend GraphQL aktif dan modul Berita memiliki artikel published-public untuk instansi ini.</p>
                    </div>
                @endif
            </div>
        </section>

        @if(!empty($faqs))
            <section id="faq" class="section">
                <div class="section-heading">
                    <span class="section-kicker"><i class="ri-question-answer-line" aria-hidden="true"></i>FAQ</span>
                    <h2 class="section-title">FAQ</h2>
                    <p class="section-copy">Pertanyaan yang sering diajukan, diambil dari modul FAQ.</p>
                    <a class="card-link" href="{{ route('landing.faq.index') }}"><i class="ri-arrow-right-line" aria-hidden="true"></i>Lihat semua FAQ</a>
                </div>
                <div class="faq-list">
                    @foreach($faqs as $faq)
                        <div class="faq-item">
                            <h3>{{ $faq['question'] ?? 'Pertanyaan' }}</h3>
                            <p>{{ $faq['answer'] ?? '' }}</p>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        <section id="stats" class="section">
            <div class="section-heading">
                <span class="section-kicker"><i class="ri-bar-chart-box-line" aria-hidden="true"></i>Statistik</span>
                <h2 class="section-title">Statistik</h2>
                <p class="section-copy">Angka-angka yang mencerminkan tingkat kepuasan, pengalaman, dan hasil perawatan bayi di tempat kami.</p>
            </div>
            <div class="stat-grid">
                @if(!empty($hero['stats']) && is_array($hero['stats']))
                    @foreach($hero['stats'] as $stat)
                        <div class="stat-card">
                            <p class="stat-value">{{ $stat['value'] ?? 0 }}{{ $stat['suffixLabel'] ?? '' }}</p>
                            <p class="stat-label">{{ $stat['label'] ?? 'Pencapaian' }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="stat-card">
                        <p class="stat-value">120+</p>
                        <p class="stat-label">Anak Bahagia</p>
                    </div>
                    <div class="stat-card">
                        <p class="stat-value">10+</p>
                        <p class="stat-label">Tahun Pengalaman</p>
                    </div>
                    <div class="stat-card">
                        <p class="stat-value">98%</p>
                        <p class="stat-label">Kepuasan Orang Tua</p>
                    </div>
                @endif
            </div>
        </section>

        <section id="contact" class="section">
            <div class="section-heading">
                <span class="section-kicker"><i class="ri-phone-line" aria-hidden="true"></i>Kontak</span>
                <h2 class="section-title">Hubungi Kami</h2>
            </div>
            <div class="contact-card">
                <h3>Pesan sesi homecare sekarang</h3>
                @php
                    $primaryPhone = $contact['phones'][0] ?? null;
                    $primaryEmail = $contact['emails'][0] ?? null;
                    $phoneNumber = $primaryPhone['whatsappUrl'] ?? $primaryPhone['number'] ?? $hero['contact']['whatsapp'] ?? $hero['contact']['phone'] ?? '+6282280449967';
                    $emailAddress = $primaryEmail['email'] ?? $hero['contact']['email'] ?? 'bubba.bloom@gmail.com';
                    $socialPlatformMeta = [
                        'instagram' => ['label' => 'Instagram', 'icon' => 'ri-instagram-line'],
                        'facebook' => ['label' => 'Facebook', 'icon' => 'ri-facebook-circle-line'],
                        'tiktok' => ['label' => 'TikTok', 'icon' => 'ri-tiktok-line'],
                        'youtube' => ['label' => 'YouTube', 'icon' => 'ri-youtube-line'],
                        'linkedin' => ['label' => 'LinkedIn', 'icon' => 'ri-linkedin-box-line'],
                        'x' => ['label' => 'X / Twitter', 'icon' => 'ri-twitter-x-line'],
                        'twitter' => ['label' => 'Twitter', 'icon' => 'ri-twitter-x-line'],
                        'telegram' => ['label' => 'Telegram', 'icon' => 'ri-telegram-line'],
                        'whatsapp' => ['label' => 'WhatsApp', 'icon' => 'ri-whatsapp-line'],
                        'website' => ['label' => 'Website', 'icon' => 'ri-global-line'],
                    ];
                    $contactSocialLinks = [];
                    foreach (($contact['socialMedia'] ?? []) as $social) {
                        $socialUrl = trim((string) ($social['url'] ?? ''));
                        $socialScheme = strtolower((string) parse_url($socialUrl, PHP_URL_SCHEME));
                        if (!$socialUrl || !in_array($socialScheme, ['http', 'https'], true)) {
                            continue;
                        }

                        $platform = strtolower((string) ($social['platform'] ?? ''));
                        $meta = $socialPlatformMeta[$platform] ?? ['label' => ucfirst($platform ?: 'Social Media'), 'icon' => 'ri-links-line'];
                        $contactSocialLinks[] = [
                            'url' => $socialUrl,
                            'label' => $social['label'] ?: $meta['label'],
                            'icon' => $social['icon'] ?: $meta['icon'],
                        ];
                    }
                @endphp
                <p>Hubungi {{ $hero['contact']['name'] ?? 'Bdn. Nuning J S N, S.Keb., CHE.' }} untuk jadwal perawatan kehamilan, nifas, dan bayi.</p>
                @if(!empty($contact['address']['fullAddress']))
                    <p>{{ $contact['address']['fullAddress'] }}</p>
                @endif
                <a href="mailto:{{ $emailAddress }}">Email: {{ $emailAddress }}</a>
                <a href="{{ str_starts_with($phoneNumber, 'http') ? $phoneNumber : 'tel:' . $phoneNumber }}">Telepon/WA: {{ $primaryPhone['displayNumber'] ?? $phoneNumber }}</a>
                @if(!empty($contact['address']['googleMapsLink']))
                    <a href="{{ $contact['address']['googleMapsLink'] }}">Buka Google Maps</a>
                @endif
                @if(!empty($contactSocialLinks))
                    <div class="contact-socials" aria-label="Sosial media">
                        @foreach($contactSocialLinks as $socialLink)
                            <a
                                class="contact-social-link"
                                href="{{ $socialLink['url'] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Buka {{ $socialLink['label'] }}"
                            >
                                <i class="{{ $socialLink['icon'] }}" aria-hidden="true"></i>
                                <span>{{ $socialLink['label'] }}</span>
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>

        <footer class="footer">
            &copy; {{ date('Y') }} Bubba Bloom - Mom & Baby Care. Semua hak dilindungi.
        </footer>
    </div>
    @include('partials.floating-buttons', ['floatingButtons' => $floatingButtons ?? []])
    @include('partials.active-popups', ['activePopups' => $activePopups ?? []])
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ornaments = document.querySelectorAll('.floating-ornament');
            const revealItems = document.querySelectorAll('.section, .card, .testimonial-card, .faq-item, .stat-card, .contact-card');
            const navbar = document.querySelector('.navbar');
            const navToggle = document.querySelector('.nav-toggle');
            const navLinks = document.querySelector('.nav-links');

            function setNavigationOpen(isOpen) {
                if (!navbar || !navToggle) {
                    return;
                }

                navbar.classList.toggle('is-open', isOpen);
                navToggle.setAttribute('aria-expanded', String(isOpen));
                navToggle.setAttribute('aria-label', isOpen ? 'Tutup menu navigasi' : 'Buka menu navigasi');

                const icon = navToggle.querySelector('i');
                if (icon) {
                    icon.className = isOpen ? 'ri-close-line' : 'ri-menu-3-line';
                    icon.setAttribute('aria-hidden', 'true');
                }
            }

            if (navToggle && navbar && navLinks) {
                navToggle.addEventListener('click', function () {
                    setNavigationOpen(navToggle.getAttribute('aria-expanded') !== 'true');
                });

                navLinks.addEventListener('click', function (event) {
                    if (event.target.closest('a')) {
                        setNavigationOpen(false);
                    }
                });

                document.addEventListener('click', function (event) {
                    if (!navbar.contains(event.target)) {
                        setNavigationOpen(false);
                    }
                });

                document.addEventListener('keydown', function (event) {
                    if (event.key === 'Escape' && navToggle.getAttribute('aria-expanded') === 'true') {
                        setNavigationOpen(false);
                        navToggle.focus();
                    }
                });

                window.addEventListener('resize', function () {
                    if (window.innerWidth > 780) {
                        setNavigationOpen(false);
                    }
                });
            }

            revealItems.forEach((item) => item.classList.add('reveal-item'));

            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

            revealItems.forEach((item, index) => {
                item.style.transitionDelay = `${Math.min(index * 35, 220)}ms`;
                revealObserver.observe(item);
            });

            function animateOrnaments() {
                if (!ornaments.length) {
                    return;
                }

                const time = Date.now() * 0.0008;
                ornaments.forEach((ornament, index) => {
                    const speed = 0.95 + index * 0.06;
                    const offsetX = Math.sin(time * (1.1 + index * 0.3)) * (14 + index * 4);
                    const offsetY = Math.cos(time * (1.2 + index * 0.25)) * (10 + index * 3);
                    const rotate = Math.sin(time * (0.9 + index * 0.4)) * 12;
                    ornament.style.transform = `translate(${offsetX}px, ${offsetY}px) rotate(${rotate}deg)`;
                });
                requestAnimationFrame(animateOrnaments);
            }

            animateOrnaments();
        });
    </script>
</body>
</html>
