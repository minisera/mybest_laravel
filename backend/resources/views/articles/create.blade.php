ArticleCreate
<p>{{$user->name}}</p>

{{ Form::open(['route' => 'article.store', 'method' => 'post']) }}
  {{ Form::text('text')}}
  {{ Form::submit('登録')}}
{{ Form::close() }}