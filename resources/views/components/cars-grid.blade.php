@props(['cars'])

{{-- This component displays a grid of car items. It expects a collection of cars to be passed as a prop. --}}

<section>
    <div class="container">
        <h2>Latest Added Cars</h2>
        <div class="car-items-listing">
            @foreach ($cars as $car)
                <x-car-item :$car />
            @endforeach
            {{-- @for ($i = 0; $i < 15; $i++)
                @php
                    $product_name = 'Lexus RX200t';
                    $product_price = '$45,000';
                    $product_image_url = '/assets/img/cars/Lexus-RX200t-2016/1.jpeg';
                    $product_year = '2020';
                    $product_tags = ['SUV', 'Electric'];
                    $location = 'New Jersey';
                @endphp
                <x-car-item :$location :$product_name :$product_price :$product_image_url :$product_year
                    :$product_tags />
            @endfor --}}
        </div>
    </div>
</section>
