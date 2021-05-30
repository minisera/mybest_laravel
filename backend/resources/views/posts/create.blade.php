PostCreate
<p>{{$user->name}}</p>
{{ Form::open(['route' => 'posts.store', 'method' => 'post']) }}
  <div>タイトル</div>
  {{ Form::text('title')}}
  <div>内容</div>
  {{ Form::text('text')}}
  <div>添付article</div>
  {{ Form::select('article_id',$articles)}}
  {{ Form::submit('登録')}}
{{ Form::close() }}

<a href="{{route('posts.index')}}">post一覧画面へ</a>