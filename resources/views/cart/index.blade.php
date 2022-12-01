@extends('layouts.app')

@section('title')
カート
@endsection

@section('content')
<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-lg px-4 md:px-8 mx-auto">
        <div class="mb-6 sm:mb-10 lg:mb-16">
            <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Your Cart</h2>
        </div>

        <div class="flex flex-col gap-4 md:gap-6 mb-6 sm:mb-8">

            @if(count($line_items) > 0)
            @foreach ($line_items as $item)
            <!-- product - start -->
            <div class="flex flex-wrap border rounded-lg overflow-hidden gap-x-4 sm:gap-y-4 lg:gap-6">
                <a href="#" class="group w-32 sm:w-40 h-48 sm:h-56 block bg-gray-100 overflow-hidden relative">
                    <img
                         src="{{ asset($item->image) }}"
                         loading="lazy"
                         alt="{{ $item->name }}"
                         class="w-full h-full object-cover object-center group-hover:scale-110 transition duration-200" />
                </a>

                <div class="flex flex-col justify-between flex-1 py-4">
                    <div>
                        <a href="#" class="inline-block text-gray-800 hover:text-gray-500 text-lg lg:text-xl font-bold transition duration-100 mb-1">{{ $item->name }}</a>
                        <span class="block text-gray-500">Size: S</span>
                        <span class="block text-gray-500">Color: White</span>
                    </div>

                    <div>
                        <span class="block text-gray-800 md:text-lg font-bold mb-1">￥{{ number_format($item->price) }}</span>

                        <span class="flex items-center text-gray-500 text-sm gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>

                            In stock
                        </span>
                    </div>
                </div>

                <div class="w-full sm:w-auto flex justify-between border-t sm:border-none p-4 sm:pl-0 lg:p-6 lg:pl-0">
                    <div class="pt-3 md:pt-2 ml-4 md:ml-8 lg:ml-16">
                        <span class="block text-gray-400 md:text-lg">quantity × {{ $item->pivot->quantity }}</span>
                    </div>

                    <div class="pt-3 md:pt-2 ml-0 md:ml-4 lg:ml-12">
                        <span class="block text-gray-800 md:text-lg font-bold pb-2">￥{{ number_format($item->price * $item->pivot->quantity) }}</span>
                        <form method="post" action="{{ route('line_item.delete') }}">
                            @csrf
                            <div class="card__btn-trash col-1 text-right">
                                <input type="hidden" name="id" value="{{ $item->pivot->id }}" />
                                <button class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 text-sm font-semibold select-none transition duration-100">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- product - end -->
            @else
            <div class="cart__empty">
                カートに商品が入っていません。
            </div>
            @endif

        </div>

        <!-- totals - start -->
        <div class="flex flex-col items-end gap-4">
            <div class="w-full sm:max-w-xs bg-gray-100 rounded-lg p-4">
                <div class="space-y-1">
                    <div class="flex justify-between text-gray-500 gap-4">
                        <span>Subtotal</span>
                        <span>￥{{ number_format($total_price) }}</span>
                    </div>

                    <div class="flex justify-between text-gray-500 gap-4">
                        <span>Shipping</span>
                        <span>￥0</span>
                    </div>
                </div>

                <div class="border-t pt-4 mt-4">
                    <div class="flex justify-between items-start text-gray-800 gap-4">
                        <span class="text-lg font-bold">Total</span>

                        <span class="flex flex-col items-end">
                            <span class="text-lg font-bold">￥{{ number_format($total_price) }}</span>
                        </span>
                    </div>
                </div>
            </div>

            <button class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Check out</button>
        </div>
        <!-- totals - end -->

    </div>
</div>
@endsection