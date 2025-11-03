@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2x1">Add review for {{ $book->title }}</h1>

    @if ($errors->any())
        <div class="bg-red-500/10 border border-red-400 text-red-400 p-3 rounded mb-6">
            <strong>There were some problems with your input:</strong>
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('books.reviews.store', $book) }}">
        @csrf
        <label for="review">Review</label>
        <textarea name="review" id="review" cols="3 rows="6" required class="input mb-4"></textarea>
        @error('review')

        @enderror

        <label for="rating">Rating</label>
        <select name="rating" id="rating" class="input mb-4" required>
            <option value="">Select a Rating</option>
            @for($i = 1 ; $i <= 5 ; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>

        <button type="submit" class="btn">Add Review</button>
    </form>
@endsection