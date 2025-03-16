<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SpaceLogic - Coming Soon</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            font-family: 'Space Grotesk', sans-serif;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        .stars {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .star {
            position: absolute;
            background: #fff;
            border-radius: 50%;
            animation: twinkle 1s infinite;
        }

        @keyframes twinkle {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }

        .container {
            text-align: center;
            z-index: 1;
            padding: 2rem;
        }

        .logo {
            font-size: 4rem;
            font-weight: 600;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #00ff88, #00a1ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 10px rgba(0, 255, 136, 0.2),
                           0 0 20px rgba(0, 161, 255, 0.2);
            }
            to {
                text-shadow: 0 0 20px rgba(0, 255, 136, 0.4),
                           0 0 30px rgba(0, 161, 255, 0.4);
            }
        }

        .coming-soon {
            font-size: 2rem;
            margin: 2rem 0;
            opacity: 1;
            animation: fadeIn 1s ease-out;
        }

        .description {
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
            opacity: 1;
            animation: fadeIn 1s ease-out 0.3s;
        }

        .subscription-form {
            margin-top: 2rem;
            opacity: 1;
            animation: fadeIn 1s ease-out 0.6s;
        }

        .subscription-form input[type="email"] {
            padding: 1rem 1.5rem;
            width: 300px;
            max-width: 80%;
            border: none;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1rem;
            transition: all 0.3s ease;
            margin-right: 10px;
        }

        .subscription-form input[type="email"]:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 0 15px rgba(0, 255, 136, 0.3);
        }

        .subscription-form button {
            padding: 1rem 2rem;
            border: none;
            border-radius: 25px;
            background: linear-gradient(45deg, #00ff88, #00a1ff);
            color: white;
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .subscription-form button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 255, 136, 0.4);
        }

        .message {
            margin-top: 1rem;
            font-size: 0.9rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .message.success {
            color: #00ff88;
            opacity: 1;
        }

        .message.error {
            color: #ff4444;
            opacity: 1;
        }

        @keyframes fadeIn {
            from { 
                opacity: 0; 
                transform: translateY(20px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }

        @media (max-width: 768px) {
            .logo {
                font-size: 3rem;
            }
            .coming-soon {
                font-size: 1.5rem;
            }
            .description {
                font-size: 0.9rem;
                padding: 0 1rem;
            }
            .subscription-form {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 1rem;
            }
            .subscription-form input[type="email"] {
                margin-right: 0;
            }
        }
    </style>
</head>
<body>
    <div class="stars" id="stars"></div>
    <div class="container">
        <h1 class="logo">SpaceLogic</h1>
        <div class="coming-soon">Lancement bientôt!</div>
        <p class="description text-balance">
             Accélérez vos projets d'architecture avec notre plateforme web conçue pour simplifier le développement de projets avec vos clients.
        </p>
        <form class="subscription-form" id="subscriptionForm">
            <input type="email" name="email" placeholder="Entrez votre email" required>
            <button type="submit">Notifiez-moi</button>
            <div class="message" id="message"></div>
        </form>
    </div>

    <script>
        // Create animated stars background
        function createStars() {
            const stars = document.getElementById('stars');
            const numberOfStars = 100;

            for (let i = 0; i < numberOfStars; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                
                // Random position
                const x = Math.random() * 100;
                const y = Math.random() * 100;
                
                // Random size
                const size = Math.random() * 3;
                
                // Random animation delay
                const delay = Math.random() * 1;
                
                star.style.left = `${x}%`;
                star.style.top = `${y}%`;
                star.style.width = `${size}px`;
                star.style.height = `${size}px`;
                star.style.animationDelay = `${delay}s`;
                
                stars.appendChild(star);
            }
        }

        // Initialize stars on page load
        document.addEventListener('DOMContentLoaded', () => {
            createStars();

            // Handle form submission
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
                        throw new Error(data.message || 'Something went wrong');
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
