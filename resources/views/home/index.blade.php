<x-app-layout title="Home">

    <!-- Home Slider -->
    <x-home-hero-slider />
    <!--/ Home Slider -->

    <main>
        <!-- Find a car form -->
        <x-search-form action="/search.php" method="GET" />
        <!--/ Find a car form -->

        <!-- New Cars -->
        <x-cars-grid />
        <!--/ New Cars -->
    </main>

    <x-slot:footerLinks>
        <div class="container">
            <div class="footer-links">
                <a href="/about.html">About Us</a>
                <a href="/contact.html">Contact Us</a>
                <a href="/privacy-policy.html">Privacy Policy</a>
                <a href="/terms-of-service.html">Terms of Service</a>
            </div>
        </div>
    </x-slot:footerLinks>
</x-app-layout>
