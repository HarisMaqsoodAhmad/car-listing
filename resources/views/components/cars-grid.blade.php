<section>
    <div class="container">
        <h2>Latest Added Cars</h2>
        <div class="car-items-listing">
            @for ($i = 0; $i < 15; $i++)
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
            @endfor
        </div>
    </div>
</section>
