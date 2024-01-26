@props(['title', 'subTitle', 'price'])
<div
    class="mx-auto flex max-w-lg flex-col rounded-lg border border-link-500 bg-white p-6 text-center text-link-900 shadow-xl dark:border-gray-600 dark:bg-gray-800 dark:text-white xl:p-8">
    <h3 class="mb-4 text-2xl font-semibold">{{ $title }}</h3>
    <p class="font-light text-gray-500 dark:text-gray-400 sm:text-lg">{{ $subTitle }}</p>
    <div class="my-8 flex items-baseline justify-center">
        <span class="mr-2 text-5xl font-extrabold">{{ $price }} HTG</span>
        <span class="text-gray-500 dark:text-gray-400">/month</span>
    </div>
    {{ $slot }}
    <!-- List -->
    {{-- <ul role="list" class="mb-8 space-y-4 text-left">
        <li class="flex items-center space-x-3">
            <!-- Icon -->
            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <span>Individual configuration</span>
        </li>
        <li class="flex items-center space-x-3">
            <!-- Icon -->
            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <span>No setup, or hidden fees</span>
        </li>
        <li class="flex items-center space-x-3">
            <!-- Icon -->
            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <span>Team size: <span class="font-semibold">1 developer</span></span>
        </li>
        <li class="flex items-center space-x-3">
            <!-- Icon -->
            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <span>Premium support: <span class="font-semibold">6 months</span></span>
        </li>
        <li class="flex items-center space-x-3">
            <!-- Icon -->
            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <span>Free updates: <span class="font-semibold">6 months</span></span>
        </li>
    </ul> --}}
    <x-button.secondary link href="https://buy.stripe.com/test_8wM9CPbAHdTY7u07ss">Get started</x-button.secondary>
</div>
