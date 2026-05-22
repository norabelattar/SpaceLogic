<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SpaceLogic - Coming Soon</title>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/welcome.css', 'resources/js/app.js'])
</head>
<body>
    <div class="page">
        <header class="topbar">
            @php($locale = app()->getLocale())
            <a class="brand" href="#">
                <span class="brand-logo-wrap">
                    <img
                        class="brand-logo"
                        src="{{ asset($locale === 'fr' ? 'images/roomstack-fr-transparent.png' : 'images/roomstack-en-transparent.png') }}"
                        alt="SpaceLogic"
                    >
                </span>
            </a>
            <div class="top-actions">
                <a class="lang-toggle" href="{{ route('lang.switch', ['locale' => $locale === 'fr' ? 'en' : 'fr']) }}">
                    {{ $locale === 'fr' ? 'EN' : 'FR' }}
                </a>
                <a class="cta-button" href="#signup">{{ __('cta') }}</a>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="badge">{{ __('badge') }}</div>
                <h1>{{ __('heroTitle') }}</h1>
                <p class="text-balance">{{ __('heroSubtitle') }}</p>

                <div class="mockup" aria-hidden="true">
                    <div class="mockup-header">
                        <span class="dot" style="background:var(--terracotta)"></span>
                        <span class="dot" style="background:var(--mustard)"></span>
                        <span class="dot" style="background:var(--sage)"></span>
                        <span style="margin-left: 1rem; font-size: 0.75rem; color: #8c837a;">spacelogic.app/dashboard</span>
                    </div>
                    <div class="mockup-body">
                        <div class="mockup-sidebar">
                            <div class="pill" style="width: 70%"></div>
                            <div class="pill wide"></div>
                            <div class="pill light" style="width: 80%"></div>
                            <div class="pill light" style="width: 65%"></div>
                            <div class="pill light" style="width: 90%"></div>
                            <div class="pill light" style="width: 75%"></div>
                        </div>
                        <div class="mockup-content">
                            <div class="mockup-heading">
                                <div class="mockup-title"></div>
                                <div class="mockup-subtitle"></div>
                            </div>
                            <div class="mockup-row">
                                <div class="mockup-card">
                                    <div class="avatar"></div>
                                    <div class="line"></div>
                                    <div class="line short"></div>
                                    <div class="badge"></div>
                                </div>
                                <div class="mockup-card">
                                    <div class="avatar"></div>
                                    <div class="line"></div>
                                    <div class="line short"></div>
                                    <div class="badge"></div>
                                </div>
                                <div class="mockup-card">
                                    <div class="avatar"></div>
                                    <div class="line"></div>
                                    <div class="line short"></div>
                                    <div class="badge"></div>
                                </div>
                            </div>
                            <div class="mockup-rail">
                                <div class="pill dark" style="width: 140px"></div>
                                <div class="pill" style="width: 180px"></div>
                            </div>
                            <div class="mockup-rail">
                                <div class="mockup-card-large">
                                    <div class="line dark long"></div>
                                    <div class="line short"></div>
                                    <div class="mockup-pill"></div>
                                    <div class="progress"><span></span></div>
                                    <div class="line" style="width: 40%"></div>
                                </div>
                                <div class="mockup-sidepanel">
                                    <div class="item">
                                        <span class="dot"></span>
                                        <div class="line dark"></div>
                                    </div>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <div class="line"></div>
                                    </div>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <div class="line dark"></div>
                                    </div>
                                    <div class="item">
                                        <span class="dot"></span>
                                        <div class="line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mockup-card-large">
                                <div class="line dark long"></div>
                                <div class="line short"></div>
                                <div class="mockup-pill"></div>
                                <div class="progress light"><span></span></div>
                                <div class="line" style="width: 45%"></div>
                            </div>
                            <div class="mockup-card-large">
                                <div class="line dark long"></div>
                                <div class="line short"></div>
                                <div class="mockup-pill"></div>
                                <div class="progress"><span></span></div>
                                <div class="line" style="width: 38%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features">
                <div class="features-heading">
                    <h2>{{ __('featuresTitleNew') }}</h2>
                </div>
                <div class="features-grid">
                    <div class="features-card">
                        <h3>{{ __('featuresGroupOneTitle') }}</h3>
                        <ul class="feature-list">
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>{{ __('featuresGroupOneItem1') }}</span>
                            </li>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>{{ __('featuresGroupOneItem2') }}</span>
                            </li>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>{{ __('featuresGroupOneItem3') }}</span>
                            </li>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>{{ __('featuresGroupOneItem4') }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="features-card">
                        <h3>{{ __('featuresGroupTwoTitle') }}</h3>
                        <ul class="feature-list">
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>{{ __('featuresGroupTwoItem1') }}</span>
                            </li>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>{{ __('featuresGroupTwoItem2') }}</span>
                            </li>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>{{ __('featuresGroupTwoItem3') }}</span>
                            </li>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>{{ __('featuresGroupTwoItem4') }}</span>
                            </li>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M20 6L9 17L4 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>{{ __('featuresGroupTwoItem5') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="signup" id="signup">
                <h2>{{ __('formTitle') }}</h2>
                <p>{{ __('formSubtitle') }}</p>
                <div class="form-card">
                    <form class="subscription-form" id="subscriptionForm">
                        <label for="full_name">{{ __('labelName') }}</label>
                        <input id="full_name" name="name" type="text" placeholder="{{ __('placeholderName') }}" required>

                        <label for="email">{{ __('labelEmail') }}</label>
                        <input id="email" name="email" type="email" placeholder="{{ __('placeholderEmail') }}" required>

                        <label for="company">{{ __('labelCompany') }}</label>
                        <input id="company" name="company" type="text" placeholder="{{ __('placeholderCompany') }}">

                        <button class="submit-button" type="submit">
                            <span>{{ __('submit') }}</span> <span aria-hidden="true">→</span>
                        </button>
                        <div class="message" id="message"></div>
                    </form>
                </div>
            </section>
        </main>

        <footer>
            <span>{{ __('footerCopy') }}</span>
            <a href="mailto:nora@belattar.com">{{ __('footerContact') }}</a>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('subscriptionForm');
            const messageDiv = document.getElementById('message');

            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                const formData = new FormData(form);
                const payload = {
                    name: formData.get('name'),
                    email: formData.get('email'),
                    company: formData.get('company')
                };

                try {
                    const response = await fetch('/subscribe', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: JSON.stringify(payload)
                    });

                    const responseText = await response.text();
                    let data = null;
                    if (responseText) {
                        try {
                            data = JSON.parse(responseText);
                        } catch (error) {
                            data = null;
                        }
                    }

                    if (response.ok && data) {
                        messageDiv.textContent = data.message || 'Merci de vous être abonné(e)!';
                        messageDiv.className = 'message success';
                        form.reset();
                    } else {
                        const fieldErrors = data && data.errors
                            ? Object.values(data.errors).flat().join(' ')
                            : null;
                        throw new Error(fieldErrors || (data && data.message) || 'Quelque chose s’est mal passé');
                    }
                } catch (error) {
                    messageDiv.textContent = error.message;
                    messageDiv.className = 'message error';
                }
            });
        });
    </script>
</body>
</html>
