<x-layout html>
    <section id="post">
        <a class="back-to-posts" href="/">
            < Back to Posts</a>
                <article class="content">
                    <h1>
                        {{ $post->title }}
                    </h1>
                    <p>
                        By <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>,
                        <span class="post-date">
                            Posted {{ $post->created_at->diffForHumans() }}
                        </span>
                    </p>
                    <div class="post-text">
                        {!! $post->body !!}
                    </div>
                </article>
    </section>
</x-layout>
