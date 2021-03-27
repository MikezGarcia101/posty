@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class="p-6">
                <h1 class="text-2xl font-medium mb-1"> Posts of {{  $user->name }}</h1>
                <p>Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and received {{ $user->receivedLikes->count() }} {{ Str::plural('like', $user->receivedLikes->count()) }}</p>
            </div>
           
            <div class="bg-white p-6 rounded-lg">
                {{-- List of posts --}}
                @if ($posts->count())
                {{-- iterate post content here as loop --}}
                    @foreach ($posts as $post)
                        <x-post :post="$post"/>
                    @endforeach
                    {{-- Call pagination here --}}
                    {{ $posts->links() }}
                    {{-- end of pagination --}}
                @else
                    <p>{{ $user->name }} does not have any posts.</p>
                @endif
            </div>
             
        </div>
    </div>
@endsection