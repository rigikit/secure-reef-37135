{{--練習用--}}


@foreach($article as $article)
{{$article->user->name}}
{{$article->created_at->format('Y/m/d H:i')}}







































