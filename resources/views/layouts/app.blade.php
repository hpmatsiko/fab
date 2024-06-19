<!DOCTYPE html>
<html>
<head>
    <title>My Multilingual App</title>
</head>
<body>
  <nav>
    <ul>
        <li><a href="#" onclick="changeLanguage('en')">English</a></li>
        <li><a href="#" onclick="changeLanguage('fr')">French</a></li>
        <!-- Add more languages as needed -->
    </ul>
</nav>

    <div>
        <h1>{{ __('messages.welcome') }}</h1>
    </div>

    @yield('content')

    <script>
        // JavaScript function to dynamically change the language of the content
        function changeLanguage(locale) {
            // Redirect to the content associated with the selected language
            window.location.href = "{{ route('content.show', ['locale' => 'your_locale']) }}".replace('your_locale', locale);
        }
    </script>
</body>
</html>
