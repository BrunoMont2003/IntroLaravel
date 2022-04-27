@extends("layouts.app")

@section('content')
    <div class="container">
        @if (session('alert'))
            <div class="alert alert-{{ session('alert')['type'] }} alert-dismissible fade show" role="alert">
                <strong>
                    {{ session('alert')['message'] }}
                </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resumes as $resume)
                    <tr>
                        <td>
                            <a class="link-dark text-decoration-none" href="{{ route('resumes.show', $resume->id) }}">
                                {{ $resume->title }}
                            </a>
                        </td>
                        <td class="d-flex justify-content-end gap-4">
                            <a href="{{ route('resumes.edit', $resume->id) }}" class="btn btn-primary">EDIT</a>
                            <form method="POST" action="{{ route('resumes.destroy', $resume->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
