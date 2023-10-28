<!-- 
認証機能　ログインのページ 
このファイルは、Laravel UIとBootstrapをインストールし、認証機能作成と同時にインストールしたもの
https://terakoya.sejuku.net/programs/88/chapters/1057
3.4 Bootstrapと認証機能用の各種ファイルをインストール 
-->

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('/css/style.css')  }}" >
</head>

<body style="padding: 60px 0;">
    <div id="app">
        <!--↓ atマークinclude＝他のビューファイルを呼び出すディレクティブ。
              引数には［フォルダ名+ファイル名の省略形］を書く -->
        @include('layouts.header')  <!--部品化したヘッダーを呼びだす -->
            <main class="py-4">
              @yield('content')
            </main>

        @include('layouts.footer')  <!--部品化したフッターを呼びだす -->
    </div>
</body>
</html>
