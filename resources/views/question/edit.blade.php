<x-layout>
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('questions.index') }}">Questions</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update {{ $question->id }}</li>
            </ol>
        </nav>

        <h1>Update</h1>

        <!-- Way 1: Display All Error Messages -->

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error</strong> <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ url('questions', ['id' => $question->id]) }}">

            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="mb-3">

                <label class="form-label" for="inputName">Name:</label>

                <input
                        type="text"
                        name="name"
                        id="inputName"
                        class="form-control @error('name') is-invalid @enderror"
                        placeholder="Name"
                        value="{{$question->name}}"
                >
                <!-- Way 2: Display Error Message -->

                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="mb-3">
                <button class="btn btn-success btn-submit">Submit</button>
            </div>

        </form>

    </div>

</x-layout>