<x-layout html>
    <section id="int-hero">
        <h1 id="home-h">MPF Blog</h1>
        <picture>
            <source media="(max-width: 600px)" srcset="/images/meal-prep-container-hero-m.png" />
            <source media="(min-width: 601px)" srcset="/images/meal-prep-container-hero.png" />
            <img aria-hidden="true" loading="lazy" decoding="async" src="/images/meal-prep-container-hero.webp"
                alt="meal prep container" width="2000" height="1536" />
        </picture>
    </section>
    <section id="blog-posts">


        <div class="filters">
            <x-dropdown>
                <x-slot name="trigger">
                    <button class="categories-selector">
                        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
                        <x-icon name="down-arrow"></x-icon>
                    </button>
                </x-slot>

                <x-dropdown-item href="/">All</x-dropdown-item>

                @foreach ($categories as $category)
                    @if (isset($currentCategory))
                        @if ($currentCategory->name === $category->name)
                            <!-- If there is a category selected, then do not show as an option-->
                        @else
                            <x-dropdown-item href="/?category={{ $category->slug }}">
                                {{ ucwords($category->name) }}
                            </x-dropdown-item>
                        @endif
                    @else
                        <x-dropdown-item href="/?category={{ $category->slug }}">
                            {{ ucwords($category->name) }}
                        </x-dropdown-item>
                    @endif
                @endforeach
            </x-dropdown>

            <div>
                <form action="#" method="get">
                    <input class="search" type="text" name="search" placeholder="Search posts">
                </form>
            </div>
        </div>



        @if ($posts->count())
            @foreach ($posts as $post)
                <article class="content">
                    <h2>
                        <a href="/posts/{{ $post->slug }}">
                            {!! $post->title !!}
                        </a>
                    </h2>
                    <div class="details">
                        <p>
                            By
                            <a href="authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in
                            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>,
                            <span class="post-date">
                                Posted {{ $post->created_at->diffForHumans() }}
                            </span>
                        </p>
                    </div>
                </article>
            @endforeach
        @else
            <article class="content">
                <h2>No posts found.</h2>
            </article>
        @endif
    </section>
</x-layout>
