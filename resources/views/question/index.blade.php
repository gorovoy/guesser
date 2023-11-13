<x-layout>
    <div class="container">
        <x-slot:title>
            Question
        </x-slot:title>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Questions </li>
            </ol>
        </nav>

        <h1 class="mt-5 mb-5 text-center"> Questions </h1>

       <a href="{{ URL::to('questions/create') }}" class="btn btn-success mb-3">Create a question</a>


        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($questions as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>
                        <a class="btn btn-small btn-info" href="{{ URL::to('questions/' . $value->id . '/edit') }}">Edit</a>

                        <form method="POST" action="{{ route('questions.destroy', ['question' => $value->id]) }}">
                            @csrf
                            {{ method_field('DELETE') }}

                            <span class="btn btn-small btn-danger">
                                <button type="submit" class="btn"> delete </button>
                            </span>

                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
</x-layout>