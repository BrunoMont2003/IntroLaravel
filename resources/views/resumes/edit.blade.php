@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Resume') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('resumes.update', $resume) }}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row mb-3">
                                <label for="title" class=" col-form-label">{{ __('Title') }}</label>

                                <div>
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" value="{{ old('title') ?? $resume->title }}" required
                                        autocomplete="title" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class=" col-form-label">{{ __('Name') }}</label>

                                <div>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') ?? $resume->name }}" required
                                        autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class=" col-form-label">{{ __('Email') }}</label>

                                <div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') ?? $resume->email }}" required
                                        autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="website" class=" col-form-label">{{ __('Website') }}</label>

                                <div>
                                    <input id="website" type="url"
                                        class="form-control @error('website') is-invalid @enderror" name="website"
                                        value="{{ old('website') ?? $resume->website }}" autocomplete="website"
                                        autofocus>

                                    @error('website')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="picture" class=" col-form-label">{{ __('Picture') }}</label>

                                <div>
                                    <input id="picture" type="file"
                                        class="form-control @error('picture') is-invalid @enderror" name="picture"
                                        value="{{ old('picture') }}" autocomplete="picture" autofocus>

                                    @error('picture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="about" class=" col-form-label">{{ __('About') }}</label>

                                <div>
                                    <textarea id="about" class="form-control @error('about') is-invalid @enderror" name="about" autocomplete="about"
                                        autofocus>
                                        {{ old('about') ?? trim($resume->about) }}
                                    </textarea>

                                    @error('about')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <skills :skills={{ $resume->skills ?? '[]' }} />
                            </div>
                            <div class="row mb-0">
                                <div class="container">
                                    <button type="submit" class="btn btn-primary w-100">
                                        SUBMIT
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
