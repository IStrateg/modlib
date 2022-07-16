@props(['sliders'])

{{-- @dump($sliders) --}}
<div class="carousel" data-flickity='{"contain": true, "freeScroll": true, "prevNextButtons": false, "pageDots": false }'>
    @foreach($sliders as $slider)
        <div class="carousel-cell p-2">
            <x-card link="{{ $slider->slug }}" image="{{ $slider->image }}" />
        </div>
    @endforeach
</div>


