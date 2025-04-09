<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yachay</title>
    <link rel="icon" href="{{ asset('image/ite.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="/" class="logo">Yachay</a>
            <div class="nav-links">
                <!-- Cambiar el enlace de contacto por WhatsApp -->
                <a href="https://wa.me/59171039910" target="_blank" class="whatsapp-link">Contacto</a>
                @auth
                    <a href="/admin" class="btn-admin">Sistema</a>
                @else
                    <a href="/admin/login" class="btn-admin">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-container">
        <h1>Regístrate como cliente potencial</h1>
        
        <!-- Mensajes -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        {{-- @if($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        
        <!-- Formulario -->
        <div class="form-container">
            <form action="{{ route('clientes.store') }}" method="POST" class="form-container">
                @csrf
                
                <!-- Campo Nombre -->
                <div class="form-group">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" id="nombre" name="nombre" 
                           value="{{ old('nombre') }}"
                           class="@error('nombre') input-error @enderror">
                    @error('nombre')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                
                <!-- Campo Correo -->
                <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" id="correo" name="correo" 
                           value="{{ old('correo') }}"
                           class="@error('correo') input-error @enderror">
                    @error('correo')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                
                <!-- Campo Teléfono -->
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" 
                           value="{{ old('telefono') }}"
                           class="@error('telefono') input-error @enderror">
                    @error('telefono')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                
                <button type="submit" class="btn-submit">Enviar registro</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-top">
                <div>
                    <div class="footer-logo">Yachay</div>
                    <p>Transformando ideas en realidad</p>
                </div>
                <div class="footer-links">
                    <a href="#">Términos y condiciones</a>
                    <a href="#">Política de privacidad</a>
                    <a href="/admin">Área administrativa</a>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; {{ date('Y') }} Yachay. Todos los derechos reservados.
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>