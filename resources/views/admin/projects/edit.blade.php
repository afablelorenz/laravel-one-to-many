@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Project') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.projects.update', $project->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">{{ __('Title') }}</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">{{ __('Description') }}</label>
                            <textarea class="form-control" id="description" name="description" required>{{ $project->description }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
