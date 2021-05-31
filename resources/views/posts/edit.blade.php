<x-layout>
    <form action="/posts/{{$post->id}}" method="POST">
        @method('PATCH')
        <x-form :posts="$post" />
        <button type="submit" class="btn btn-primary" onclick="alert('تم تعديل المقالة بنجاح')">تعديل</button>
    </form>
</x-layout>