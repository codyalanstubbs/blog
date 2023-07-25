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
