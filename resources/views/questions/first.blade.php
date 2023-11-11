<div class="container">
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
