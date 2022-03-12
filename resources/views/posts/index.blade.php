<x-layout>
    @include("posts._header")

    <sction class="px-6 py-8">
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if ($posts->count())
                <x-posts-grid :posts="$posts" />

                <div class="mt-6">
                    {{ $posts->links() }}
                </div>
            @else
                <p class="text-center">No posts yet, check back later</p>
            @endif
        </main>
    </section>
</x-layout>
