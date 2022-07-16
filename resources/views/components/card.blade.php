@props(['link', 'image'])

<div class="flex flex-col rounded shadow overflow-hidden">
    <div class="carousel-dark flex-shrink-0">
        <a href="{{  $link }}">
            <img class="h-48 w-full object-cover" src="{{ asset('images/sliders/0.jpg') }}" alt="Category Sliders">
        </a>
    </div>
</div>
