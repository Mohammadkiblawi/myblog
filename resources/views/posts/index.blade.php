<x-layout>
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">




                @foreach ($posts as $posts)
                <div class="blog-post mb-3">
                    <h2 class="blog-post-title">
                        <a href="/posts/{{  $posts->id }}">
                            {{$posts->title}}
                        </a>
                    </h2>
                    <p class="blog-post-media">بقلم <a href="#"><?php echo ($posts->author) ?></a>
                        <?php echo (Carbon\Carbon::parse($posts->created_at)->diffForHumans()) ?>

                    </p>
                </div>
                @endforeach

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
                </nav>

            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4>مبادئ التسويق الالكتروني</h4>
                    <p>يمكنك الآن شراء نسختك من كتاب مبادئ التسويق الألكتروني بتخفيض 30% ادخل عنوان البريد الالكتروني لتصلك الرسالة بالتفصيل</p>
                    <form action="/mail" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" id="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">ارسال</button>
                        </div>
                    </form>
                    @error('email')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">{{$message}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror
                </div>


                <div class="p-4">
                    <h4 class="font-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="font-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->

</x-layout>