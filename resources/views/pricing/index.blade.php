@extends('base')
@section('title', 'Pricing')
@section('content')
    <script async src="https://js.stripe.com/v3/pricing-table.js"></script>
    <stripe-pricing-table pricing-table-id="prctbl_1OXrN0HQGyb6Mkl89zol6giv"
        publishable-key="pk_test_51OXr3hHQGyb6Mkl859E5G8xIkJzuPSuW1thuPbNWpqawRZKOkoYdrnWfpxhrV6SDL8VUgb0RJQQczz2lBffjknJm00Zagjogrf">
    </stripe-pricing-table>
    {{-- <section class="bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
            <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
                <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                    Prix pour vendeurs sans parrain
                </h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400 sm:text-xl">
                    Foodi restaurant, la reference culinaire 😉😜
                </p>
            </div>
            <div class="space-y-8 sm:gap-6 lg:grid lg:grid-cols-3 lg:space-y-0 xl:gap-10">
                <x-card.pricing title="Bronze" subTitle="3 plats" price="500">
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>-15% benefice par parrainage</span>
                        </li>
                    </ul>
                </x-card.pricing>
                <x-card.pricing title="Silver" subTitle="8 plats" price="1500">
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>-25% benefice par parrainage</span>
                        </li>
                    </ul>
                </x-card.pricing>
                <x-card.pricing title="Gold" subTitle="15 plats" price="2500">
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>-30% benefice par parrainage</span>
                        </li>
                    </ul>
                </x-card.pricing>
                <x-card.pricing title="Diamond" subTitle="Infinite de plats" price="5000">
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>-40% benefice par parrainage</span>
                        </li>
                    </ul>
                </x-card.pricing>
            </div>
        </div>
    </section> --}}
@endsection
