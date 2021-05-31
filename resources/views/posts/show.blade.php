@section('title',$posts->title)
<x-layout>
    <x-post :posts="$posts" :comments="$comments" class="font-weight-bold" />
    <a class="btn btn-primary" href="/posts/{{$posts->id}}/edit">تعديل المقالة</a>
    <h3>اضف تعليق</h3>
    <x-createComments :posts="$posts" />

</x-layout>