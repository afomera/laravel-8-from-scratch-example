<x-layout>
    <x-setting heading="New Post">

        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="thumbnail" type="file" />
            <x-form.textarea name="excerpt" rows="3" />
            <x-form.textarea name="body" rows="10" />

            <x-form.field>
                <x-form.label name="category">Category</x-form.label>

                <select name="category_id" id="category_id">
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category" />
            </x-form.field>

            <x-form.button>Publish</x-form.button>
        </form>
    </x-setting>
</x-layout>
