<div class="row row-cols-1 row-cols-md-2 mb-2 text-center">
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Leonardo da Vinci</h4>
            </div>
            <div class="card-body">
                <svg class="bd-placeholder-img card-img-top"
                     width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img"
                     aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                     focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>
                    <text x="50%" y="50%" fill="#eceeef"  dominant-baseline="middle" text-anchor="middle">Thumbnail</text></svg>

                <form method="POST" action="/check">
                    @csrf

                    <button type="submit" class="w-100 btn btn-lg btn-outline-primary mt-3">{{ __('home.make_choose') }} </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Michelangelo</h4>
            </div>
            <div class="card-body">
                <svg class="bd-placeholder-img card-img-top"
                     width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img"
                     aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                     focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>
                    <text x="50%" y="50%" fill="#eceeef" dominant-baseline="middle" text-anchor="middle">Thumbnail</text></svg>

                <form method="POST" action="/check">
                    @csrf

                    <button type="submit" class="w-100 btn btn-lg btn-outline-primary mt-3">{{ __('home.make_choose') }} </button>
                </form>
            </div>
        </div>
    </div>
</div>