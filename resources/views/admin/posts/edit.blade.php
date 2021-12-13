<x-layout>

    <x-setting heading="Edit Post: {{$post->title}}">
        <form method="POST" action="/admin/post/{{$post->id}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title',$post->title)"/>

            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail',$post->thumbnail)"/>
                </div>
                <img src="{{asset('storage/'.$post->thumbnail)}}" alt="" class="rounded-xl ml-6" width="100">
            </div>


            <x-form.textarea name="excerpt"> {{old('excerpt',$post->excerpt)}}</x-form.textarea>
            <x-form.textarea name="body"> {{old('body',$post->body)}}</x-form.textarea>


            {{-------   Category   --------}}
            <x-form.field>
                <x-form.label name="category"/>
                <select name="category_id" id="" class="p-2 text-xs border border-gray-400">
                    @foreach(App\Models\Category::all() as $category)
                        <option
                            value="{{$category->id}}"
                            {{old('category_id',$post->category->id)==$category->id?'selected':''}}
                        >{{ucwords($category->name)}}</option>
                    @endforeach
                </select>
            </x-form.field>
            {{-------   Category ends  --------}}

            {{--       Button         --}}
            <x-form.field>
                <x-submit-button>Update</x-submit-button>
            </x-form.field>
            {{--       Button ends         --}}

        </form>
    </x-setting>


</x-layout>
