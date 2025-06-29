@props([
    'title' => '',
    'bodyClass' => '',
    'formFooter' => '',
])

<x-base-layout :$title :$bodyClass>
    <main>
        <div class="container-small page-login">
            <div class="flex" style="gap: 5rem">
                <div class="auth-page-form">
                    <div class="text-center">
                        <a href="/">
                            <img src="/assets/img/logoipsum-265.svg" alt="" />
                        </a>
                    </div>
                    <h1 class="auth-page-title">{{ $title }}</h1>

                    {{ $slot }}
                    <x-social-login />
                    <div class="login-text-dont-have-account">
                        {{ $formFooter }}
                    </div>
                </div>
                <div class="auth-page-image">
                    <img src="/assets/img/car-png-39071.png" alt="" class="img-responsive" />
                </div>
            </div>
        </div>
    </main>
</x-base-layout>
