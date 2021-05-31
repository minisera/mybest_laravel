PostCreate
<p>{{$user->name}}</p>
{{ Form::open(['route' => 'posts.session', 'method' => 'post']) }}
  <div>タイトル</div>
  {{ Form::text('title')}}
  <div>内容</div>
  {{ Form::text('text')}}
  <div>添付article</div>
  {{ Form::select('article_id',$articles)}}
  <a href="{{route('articles.create')}}">article新規作成画面へ</a>
  <pre>
    {{ Form::submit('登録')}}
  </pre>
{{ Form::close() }}
<pre>
<a href="{{route('posts.index')}}">やっぱやめる</a>
</pre>