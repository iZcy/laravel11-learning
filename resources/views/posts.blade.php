<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  @foreach ($posts as $post)
    <article class="py-8 max-w-screen-md border-b border-gray-300">
      <h2 onclick="window.location='/posts/{{ $post['slug'] }}'"
        class="mb-1 text-3xl tracking-tight font-bold text-gray-900 hover:underline cursor-pointer">
        {{ $post['title'] }}</h2>
      <div>
        By
        <a href="/authors/{{ $post->author->username }}"
          class="text-base text-gray-500 hover:underline">{{ $post->author->name }}</a>
        in
        <a href="/categories/{{ $post->category->slug }}"
          class="text-base text-gray-500 hover:underline">{{ $post->category->name }}</a>
        | {{ $post->created_at->diffForHumans() }}
      </div>

      <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}
      </p>

      <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
  @endforeach
</x-layout>
