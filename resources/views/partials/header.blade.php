<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">MegaShop</div>
            <nav>
    <ul>
        @foreach($navigation as $item)
            <li>
                {{-- On utilise une condition simple pour les liens --}}
                <a href="{{ $item['label'] == 'Accueil' ? route('home') : '#' }}">
                    {{ $item['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
        </div>
    </header>
</body>
</html>