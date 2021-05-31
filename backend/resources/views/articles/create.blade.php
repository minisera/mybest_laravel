ArticleCreate
<p>{{$user->name}}</p>

{{ Form::open(['route' => 'articles.store', 'method' => 'post']) }}
  {{ Form::text('text')}}
  {{ Form::submit('登録')}}
{{ Form::close() }}

<a href="{{route('articles.index')}}">article一覧画面へ</a>