@extends("layouts.app")

@section('content')
    <div class="container">
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
                            <a href="{{ route('resumes.destroy', $resume->id) }}" class="btn btn-danger">DELETE</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
