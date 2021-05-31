<form action="/posts/{{ $posts->id }}/comments" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">الاسم</label>
        <input class="form-control" id="name" name="name">

    </div>
    @error('name')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <label for="body">التعليق</label>
        <textarea class="form-control" id="body" name="body" rows="3"></textarea>
    </div>
    @error('body')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <button type="submit" class="btn btn-primary">حفظ</button>

</form>