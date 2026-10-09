<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'TechStore — Магазин Комп\'ютерної Техніки')</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; background-color: #f4f6f9;">

<!-- Шапка та Головне меню магазину комп'ютерної техніки -->
<header style="background-color: #0d1b2a; color: white;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 15px 20px; display: flex; align-items: center; justify-content: space-between;">
        <div style="font-size: 22px; font-weight: bold; color: #00b4d8; letter-spacing: 1px;">
            💻 TechStore
        </div>
        <nav>
            <a href="{{ url('/') }}" style="color: white; margin-right: 20px; text-decoration: none; font-weight: 500;">Головна</a>
            <a href="{{ url('/catalog') }}" style="color: #e0e1dd; margin-right: 20px; text-decoration: none;">Каталог товарів</a>
            <a href="{{ url('/laptops') }}" style="color: #e0e1dd; margin-right: 20px; text-decoration: none;">Ноутбуки та ПК</a>
            <a href="{{ url('/components') }}" style="color: #e0e1dd; margin-right: 20px; text-decoration: none;">Комплектуючі</a>
            <a href="{{ url('/cart') }}" style="color: #00b4d8; text-decoration: none; font-weight: bold;">🛒 Кошик</a>
        </nav>
    </div>
</header>

<!-- Основний контент -->
<main style="padding: 40px 20px; min-height: 450px; max-width: 1100px; margin: 0 auto;">
    @yield('content')
</main>

<!-- Підвал (Footer) магазину -->
<footer style="background-color: #0d1b2a; border-top: 3px solid #00b4d8; color: #778da9; padding: 30px 20px;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
        <div>
            <h4 style="color: white; margin-top: 0; margin-bottom: 10px;">TechStore</h4>
            <p style="font-size: 14px; margin: 0;">Ваш надійний магазин комп'ютерної техніки та комплектуючих.</p>
        </div>
        <div>
            <h4 style="color: white; margin-top: 0; margin-bottom: 10px;">Категорії</h4>
            <p style="font-size: 14px; margin: 0;">Процесори | Відеокарти | ОЗП | SSD накопичувачі</p>
        </div>
        <div>
            <h4 style="color: white; margin-top: 0; margin-bottom: 10px;">Контакти</h4>
            <p style="font-size: 14px; margin: 0;">м. Київ, вул. Політехнічна | info@techstore.ua</p>
        </div>
    </div>
    <hr style="border: 0; border-top: 1px solid #1b263b; margin: 20px 0 15px 0;">
    <div style="text-align: center; font-size: 13px; color: #778da9;">
        &copy; {{ date('Y') }} TechStore. Усі права захищено | Розробив: Марочко Єгор (Група РС-42)
    </div>
</footer>

</body>
</html>
