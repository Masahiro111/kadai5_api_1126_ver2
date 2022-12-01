@extends('layouts.app')

@section('title', $product->name )


@section('content')

<form method="POST" action="{{ route('line_item.create') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $product->id }}" />

    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-lg px-4 md:px-8 mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- images - start -->
                <div class="space-y-4">
                    <div class="bg-gray-100 rounded-lg overflow-hidden relative">
                        <img src="{{ asset($product->image) }}" loading="lazy" alt="Photo by Himanshu Dewangan" class="w-full h-full object-cover object-center" />

                        <span class="bg-red-500 text-white text-sm tracking-wider uppercase rounded-br-lg absolute left-0 top-0 px-3 py-1.5">sale</span>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-100 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/flagged/photo-1571366992791-2ad2078656cb?auto=format&q=75&fit=crop&w=250" loading="lazy" alt="Photo by Himanshu Dewangan" class="w-full h-full object-cover object-center" />
                        </div>

                        <div class="bg-gray-100 rounded-lg overflow-hidden">
                            <img src="https://images.unsplash.com/flagged/photo-1571366992968-15b65708ee76?auto=format&q=75&fit=crop&w=250" loading="lazy" alt="Photo by Himanshu Dewangan" class="w-full h-full object-cover object-center" />
                        </div>
                    </div>
                </div>
                <!-- images - end -->

                <!-- content - start -->
                <div class="md:py-8">
                    <!-- name - start -->
                    <div class="mb-2 md:mb-3">
                        <span class="inline-block text-gray-500 mb-0.5">G's BRAND</span>
                        <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold">{{ $product->name }}</h2>
                    </div>
                    <!-- name - end -->

                    <!-- rating - start -->
                    <div class="flex items-center mb-6 md:mb-10">
                        <div class="flex gap-0.5 -ml-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>

                        <span class="text-gray-500 text-sm ml-2">4.2</span>

                        <a href="#" class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 text-sm font-semibold transition duration-100 ml-4">view all 47 reviews</a>
                    </div>
                    <!-- rating - end -->

                    <!-- color - start -->
                    <div class="mb-4 md:mb-6">
                        <span class="inline-block text-gray-500 text-sm md:text-base font-semibold mb-3">Color</span>

                        <div class="flex flex-wrap gap-2">
                            <span class="w-8 h-8 bg-gray-800 border ring-2 ring-offset-1 ring-gray-800 rounded-full transition duration-100"></span>
                            <button type="button" class="w-8 h-8 bg-gray-500 border ring-2 ring-offset-1 ring-transparent hover:ring-gray-200 rounded-full transition duration-100"></button>
                            <button type="button" class="w-8 h-8 bg-gray-200 border ring-2 ring-offset-1 ring-transparent hover:ring-gray-200 rounded-full transition duration-100"></button>
                            <button type="button" class="w-8 h-8 bg-white border ring-2 ring-offset-1 ring-transparent hover:ring-gray-200 rounded-full transition duration-100"></button>
                        </div>
                    </div>
                    <!-- color - end -->

                    <!-- size - start -->
                    <div class="mb-4 md:mb-6">
                        <span class="inline-block text-gray-500 text-sm md:text-base font-semibold mb-3">Size</span>

                        <div class="flex flex-wrap gap-3">
                            <button type="button" class="w-12 h-8 flex justify-center items-center bg-white hover:bg-gray-100 active:bg-gray-200 text-gray-800 text-sm font-semibold text-center border rounded-md transition duration-100">XS</button>
                            <button type="button" class="w-12 h-8 flex justify-center items-center bg-white hover:bg-gray-100 active:bg-gray-200 text-gray-800 text-sm font-semibold text-center border rounded-md transition duration-100">S</button>
                            <span class="w-12 h-8 flex justify-center items-center bg-indigo-500 text-white text-sm font-semibold text-center border border-indigo-500 rounded-md cursor-default">M</span>
                            <button type="button" class="w-12 h-8 flex justify-center items-center bg-white hover:bg-gray-100 active:bg-gray-200 text-gray-800 text-sm font-semibold text-center border rounded-md transition duration-100">L</button>
                            <span class="w-12 h-8 flex justify-center items-center bg-white text-gray-400 text-sm font-semibold text-center border border-transparent rounded-md cursor-not-allowed">XL</span>
                        </div>
                    </div>
                    <!-- size - end -->

                    <!-- quantity - start -->
                    <div class="mb-8 md:mb-10">
                        <span class="inline-block text-gray-500 text-sm md:text-base font-semibold mb-3">Quantity</span>

                        <div class="flex flex-wrap gap-3">
                            <div class="relative">
                                <select
                                        name="quantity"
                                        class="bg-white h-8 rounded border appearance-none border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                                    @for ($i = 1; $i < 11; $i++)
                                      @if ($i==1)
                                      <option value="{{ $i }}" selected="selected">{{ $i }}</option>
                                        @else
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        @endif
                                        @endfor
                                </select>
                                <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- quantity - end -->

                    <!-- price - start -->
                    <div class="mb-4">
                        <div class="flex items-end gap-2">
                            <span class="text-gray-800 text-xl md:text-2xl font-bold">¥{{ number_format($product->price) }}</span>
                        </div>
                    </div>
                    <!-- price - end -->

                    <!-- shipping notice - start -->
                    <div class="flex items-center text-gray-500 gap-2 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                        </svg>

                        <span class="text-sm">2-4 day shipping</span>
                    </div>
                    <!-- shipping notice - end -->

                    <!-- buttons - start -->
                    <div class="flex gap-2.5">
                        <button
                                type="submit"
                                class="inline-block flex-1 sm:flex-none bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Add to cart</button>
                    </div>
                    <!-- buttons - end -->

                    <!-- description - start -->
                    <div class="mt-10 md:mt-16 lg:mt-20">
                        <div class="text-gray-800 text-lg font-semibold mb-3">Description</div>

                        <p class="text-gray-500">
                            {{ $product->description }}
                        </p>
                    </div>
                    <!-- description - end -->
                </div>
                <!-- content - end -->
            </div>
        </div>
    </div>

</form>
@endsection