<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin - INSTI</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .login-header {
            background: #0d4293;
            color: white;
            padding: 1.5rem;
            text-align: center;
        }
        .login-body {
            padding: 2rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.375rem;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .form-input:focus {
            border-color: #0d4293;
            box-shadow: 0 0 0 3px rgba(13, 66, 147, 0.1);
            outline: none;
        }
        .btn-login {
            background: #0d4293;
            color: white;
            width: 100%;
            padding: 0.75rem;
            border-radius: 0.375rem;
            font-weight: 600;
            transition: background 0.2s;
        }
        .btn-login:hover {
            background: #0a3375;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1 class="text-xl font-bold">Espace Administrateur</h1>
            <p class="text-sm opacity-80">Veuillez vous connecter pour continuer</p>
        </div>
        <div class="login-body">
            @if(session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                    <p class="font-bold">Erreur</p>
                    <p>{{ session('error') }}</p>
                </div>
            @endif
            
            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <div class="form-group">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input type="email" name="email" id="email" required
                           class="form-input"
                           placeholder="votre@email.com">
                </div>
                
                <div class="form-group">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" required
                           class="form-input"
                           placeholder="••••••••">
                </div>
                
                <div class="mt-8">
                    <button type="submit" class="btn-login">
                        Se connecter
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
