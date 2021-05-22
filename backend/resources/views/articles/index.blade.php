
ArticleIndex
<p>{{$user->name}}</p>

@if (isset($articles))
  @foreach ($articles as $article)
    <p>{{$article->title}}</p>
    <p>{{$article->text}}</p>
  @endforeach
@endif

<a href="{{route('article.create')}}">article新規作成画面へ</a>