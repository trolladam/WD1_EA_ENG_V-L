@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="display-4">{{ __('Publish') }}</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('post.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <x-form.input name="title" label="{{ __('Title') }}" />
            </div>
            <div class="mb-3">
                <label for="topic_id">{{ __('Topic') }}</label>
                <select name="topic_id" class="form-control">
                    <option>{{ __('Please choose a topic') }}</option>
                    @foreach($topics as $topic)
                        <option value="{{ $topic->id }}">
                            {{ $topic->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description">{{ __('Description') }}</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="content">{{ __('Content') }}</label>
                <textarea name="content" class="form-control" rows="3"></textarea>
            </div>
            <div>
                <button class="btn btn-primary btn-lg">{{ __('Publish') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection
