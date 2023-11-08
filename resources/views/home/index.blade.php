<x-layout>
    <div class="container">
        <x-slot:title>
            Custom Title
        </x-slot:title>

        <h1 class="mt-5 mb-5 text-center"> Choose the correct option </h1>

        <div class="">

            <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Leonardo da Vinci</h1>

                            <form method="POST" action="/check">
                                @csrf

                                <button type="submit" class="w-100 btn btn-lg btn-outline-primary">{{ __('home.make_choose') }} </button>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">

                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Michelangelo</h1>
                            <form method="POST" action="/check">
                                @csrf

                                <button type="submit" class="w-100 btn btn-lg btn-outline-primary">{{ __('home.make_choose') }} </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--        <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">--}}
{{--            <div class="col">--}}
{{--                <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                    <div class="card-header py-3">--}}
{{--                        <h4 class="my-0 fw-normal">Leonardo da Vinci</h4>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <svg class="bd-placeholder-img card-img-top"--}}
{{--                             width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img"--}}
{{--                             aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"--}}
{{--                             focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>--}}
{{--                            <text x="50%" y="50%" fill="#eceeef"  dominant-baseline="middle" text-anchor="middle">Thumbnail</text></svg>--}}

{{--                        <form method="POST" action="/">--}}
{{--                            @csrf--}}

{{--                            <button type="submit" class="w-100 btn btn-lg btn-outline-primary mt-3">{{ __('home.make_choose') }} </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                    <div class="card-header py-3">--}}
{{--                        <h4 class="my-0 fw-normal">Michelangelo</h4>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <svg class="bd-placeholder-img card-img-top"--}}
{{--                             width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img"--}}
{{--                             aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"--}}
{{--                             focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>--}}
{{--                            <text x="50%" y="50%" fill="#eceeef" dominant-baseline="middle" text-anchor="middle">Thumbnail</text></svg>--}}

{{--                        <form method="POST" action="/home.make_choose">--}}
{{--                            @csrf--}}

{{--                            <button type="submit" class="w-100 btn btn-lg btn-outline-primary mt-3">{{ __('home.make_choose') }} </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">--}}
{{--            <div class="col">--}}
{{--                <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                    <div class="card-header py-3">--}}
{{--                        <h4 class="my-0 fw-normal">Leonardo da Vinci</h4>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>--}}
{{--                        <ul class="list-unstyled mt-3 mb-4">--}}
{{--                            <li>10 users included</li>--}}
{{--                            <li>2 GB of storage</li>--}}
{{--                            <li>Email support</li>--}}
{{--                            <li>Help center access</li>--}}
{{--                        </ul>--}}
{{--                        <form method="POST" action="/home.make_choose">--}}
{{--                            @csrf--}}

{{--                            <button type="submit" class="w-100 btn btn-lg btn-outline-primary">{{ __('home.make_choose') }} </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                    <div class="card-header py-3">--}}
{{--                        <h4 class="my-0 fw-normal">Michelangelo</h4>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>--}}
{{--                        <ul class="list-unstyled mt-3 mb-4">--}}
{{--                            <li>20 users included</li>--}}
{{--                            <li>10 GB of storage</li>--}}
{{--                            <li>Priority email support</li>--}}
{{--                            <li>Help center access</li>--}}
{{--                        </ul>--}}
{{--                        <form method="POST" action="/home.make_choose">--}}
{{--                            @csrf--}}

{{--                            <button type="submit" class="w-100 btn btn-lg btn-outline-primary">{{ __('home.make_choose') }} </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
</x-layout>