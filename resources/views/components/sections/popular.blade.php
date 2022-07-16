@props(['popular'])

<section class="relative">
    <h3 class="px-4 text-left text-2xl font-semibold text-gray-900 dark:text-white-text">Популярное</h3>
    <div class="pt-10 max-w-4xl mx-auto">
        <x-partials.carousel :sliders="$popular" />
    </div>
</section>
