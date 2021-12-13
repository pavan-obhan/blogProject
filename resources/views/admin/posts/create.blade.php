<x-layout>

    <x-setting heading="Publish New Post">
        <form method="POST" action="/admin/post" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title"/>

            <x-form.input name="thumbnail" type="file"/>

            <x-form.textarea name="excerpt"/>

            <x-form.textarea name="body"/>

            {{-------   Category   --------}}
            <x-form.field>
                <x-form.label name="category"/>
                <select name="category_id" id="" class="p-2 text-xs border border-gray-400">
                    @foreach(App\Models\Category::all() as $category)
                        <option value="{{$category->id}}">{{ucwords($category->name)}}</option>
                    @endforeach
                </select>
            </x-form.field>
            {{-------   Category ends  --------}}

            {{--       Button         --}}
            <x-form.field>
                <x-submit-button>Post</x-submit-button>
            </x-form.field>
            {{--       Button ends         --}}

        </form>
    </x-setting>


</x-layout>
