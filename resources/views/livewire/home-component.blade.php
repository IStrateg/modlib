<main class="flex-grow">
    <!-- Carousel -->
    <section class="relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">
                <x-partials.carousel :sliders="$sliders" />
            </div>
        </div>
    </section>

    <section class="relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <!-- Popular -->
            <div class="pb-12 md:pb-20">
                <x-sections.popular :popular="$popular" />
            </div>
        </div>
    </section>

    <!--  Last Update -->
{{--    <x-sections.last-update-list :data="$data" />--}}

    <!-- Footer -->
    {{--    <x-partials.footer />--}}
</main>
