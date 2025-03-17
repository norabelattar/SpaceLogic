<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SpaceLogic - Coming Soon</title>
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: #ffffff;
            font-family: 'Inter', sans-serif;
            color: #1a1a1a;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
        }

        .grid-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(to right, rgba(0, 123, 255, 0.1) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(0, 123, 255, 0.1) 1px, transparent 1px);
            background-size: 40px 40px;
            opacity: 0.8;
            z-index: 0;
        }

        .container {
            text-align: left;
            z-index: 1;
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .content {
            max-width: 600px;
        }

        .logo-container {
            display: inline-block;
            background: white;
            padding: 1.5rem;
            border-radius: 1rem;
            margin-bottom: 2rem;
            position: relative;
        }

        .logo {
            font-size: 4rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #000000;
            position: relative;
            display: inline-block;
        }

        .logo span {
            font-weight: 700;
        }

        .logo::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 4px;
            background: #007bff;
            transition: width 0.3s ease;
        }

        .logo:hover::after {
            width: 100%;
        }

        .logo-grid {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                linear-gradient(to right, rgba(0, 0, 0, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(0, 0, 0, 0.05) 1px, transparent 1px);
            background-size: 8px 8px;
            border-radius: 1rem;
            pointer-events: none;
        }

        .coming-soon {
            font-size: 1.5rem;
            margin: 2rem 0;
            color: #007bff;
            font-weight: 500;
        }

        .description {
            font-size: 1.25rem;
            line-height: 1.6;
            color: #444;
            margin-bottom: 2rem;
        }

        .subscription-form {
            margin-top: 2rem;
        }

        .form-group {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .subscription-form input[type="email"] {
            padding: 1rem 1.5rem;
            width: 100%;
            max-width: 400px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            background: #fff;
            color: #1a1a1a;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .subscription-form input[type="email"]:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.1);
        }

        .subscription-form button {
            padding: 1rem 2rem;
            border: none;
            border-radius: 4px;
            background: #007bff;
            color: white;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .subscription-form button:hover {
            background: #0056b3;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 123, 255, 0.2);
        }

        .message {
            margin-top: 1rem;
            font-size: 0.9rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .message.success {
            color: #28a745;
            opacity: 1;
        }

        .message.error {
            color: #dc3545;
            opacity: 1;
        }

        .visual-element {
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .geometric-shapes {
            position: relative;
            width: 100%;
            height: 400px;
        }

        .shape {
            position: absolute;
            background: rgba(0, 123, 255, 0.05);
            border: 1px solid rgba(0, 123, 255, 0.2);
        }

        .shape-1 {
            width: 200px;
            height: 200px;
            top: 0;
            right: 0;
            transform: rotate(45deg);
        }

        .shape-2 {
            width: 150px;
            height: 150px;
            bottom: 50px;
            left: 50px;
            transform: rotate(30deg);
        }

        .shape-3 {
            width: 100px;
            height: 100px;
            top: 50%;
            right: 100px;
            transform: rotate(15deg);
        }

        @media (max-width: 968px) {
            .container {
                grid-template-columns: 1fr;
                text-align: center;
                padding: 2rem 1rem;
            }

            .content {
                margin: 0 auto;
            }

            .logo::after {
                left: 0;
                transform: none;
                width: 100%;
            }

            .form-group {
                flex-direction: column;
                align-items: center;
            }

            .subscription-form input[type="email"] {
                max-width: 100%;
            }

            .visual-element {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .logo {
                font-size: 2.5rem;
            }
            .description {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <div class="grid-pattern"></div>
    <div class="container">
        <div class="content">
            <h1 class="logo">SpaceLogic</h1>
            <div class="coming-soon">Lancement bientôt!</div>
            <p class="description">
                Accélérez vos projets d'architecture avec notre plateforme web conçue pour simplifier le développement de projets avec vos clients.
            </p>
            <form class="subscription-form" id="subscriptionForm">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Entrez votre email" required>
                    <button type="submit">Notifiez-moi</button>
                </div>
                <div class="message" id="message"></div>
            </form>
        </div>
        <div class="visual-element">
            <div class="geometric-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
            </div>
        </div>
    </div>

    <script>
        // Handle form submission
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('subscriptionForm');
            const messageDiv = document.getElementById('message');

            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                const email = form.email.value;
                
                try {
                    const response = await fetch('/subscribe', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: JSON.stringify({ email })
                    });

                    const data = await response.json();
                    
                    if (response.ok) {
                        messageDiv.textContent = data.message;
                        messageDiv.className = 'message success';
                        form.reset();
                    } else {
                        throw new Error(data.message || 'Quelque chose s’est mal passé');
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
