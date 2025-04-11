{{-- Collapsible divs to group exercises by body parts (e.g chest, legs, arms etc.) --}}
<!-- Accordion Item 1 -->
<div class="border-b border-slate-200">
    <button onclick="toggleAccordion(1)" class="w-full flex justify-between items-center py-5 text-slate-800 font-bold">
        <span>{{ $slot }}</span>
        <span id="icon-1" class="text-slate-800 transition-transform duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    </span>
    </button>
    <x-exercises-item>Bicep curls</x-exercises-item>
    <x-exercises-item>Hammer curls</x-exercises-item>
    <x-exercises-item>Bicep curls</x-exercises-item>
    <x-exercises-item>Bicep curls</x-exercises-item>
</div>

{{--<!-- Accordion Item 2 -->--}}
{{--<div class="border-b border-slate-200">--}}
{{--    <button onclick="toggleAccordion(2)" class="w-full flex justify-between items-center py-5 text-slate-800">--}}
{{--        <span>How to use Material Tailwind?</span>--}}
{{--        <span id="icon-2" class="text-slate-800 transition-transform duration-300">--}}
{{--      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">--}}
{{--        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />--}}
{{--      </svg>--}}
{{--    </span>--}}
{{--    </button>--}}
{{--    <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">--}}
{{--        <div class="pb-5 text-sm text-slate-500">--}}
{{--            You can use Material Tailwind by importing its components into your Tailwind CSS project.--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!-- Accordion Item 3 -->--}}
{{--<div class="border-b border-slate-200">--}}
{{--    <button onclick="toggleAccordion(3)" class="w-full flex justify-between items-center py-5 text-slate-800">--}}
{{--        <span>What can I do with Material Tailwind?</span>--}}
{{--        <span id="icon-3" class="text-slate-800 transition-transform duration-300">--}}
{{--      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">--}}
{{--        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />--}}
{{--      </svg>--}}
{{--    </span>--}}
{{--    </button>--}}
{{--    <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">--}}
{{--        <div class="pb-5 text-sm text-slate-500">--}}
{{--            Material Tailwind allows you to quickly build modern, responsive websites with a focus on design.--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<script>
    function toggleAccordion(index) {
        const content = document.getElementById(`content-${index}`);
        const icon = document.getElementById(`icon-${index}`);

        // SVG for Minus icon
        const minusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
      </svg>
    `;

        // SVG for Plus icon
        const plusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    `;

        // Toggle the content's max-height for smooth opening and closing
        if (content.style.maxHeight && content.style.maxHeight !== '0px') {
            content.style.maxHeight = '0';
            icon.innerHTML = plusSVG;
        } else {
            content.style.maxHeight = content.scrollHeight + 'px';
            icon.innerHTML = minusSVG;
        }
    }
</script>


