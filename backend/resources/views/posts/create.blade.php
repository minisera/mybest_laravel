PostCreate
<p>{{$user->name}}</p>
{{ Form::open(['route' => 'posts.session', 'method' => 'post']) }}
  <div>タイトル</div>
  {{ Form::text('title',$session['title']?? '')}}
  <div>内容</div>
  {{ Form::text('text',$session['text']?? '')}}
  <div>添付article</div>
  {{ Form::select('article_id',$articles,$session['article_id']?? '')}}
  <a href="{{route('articles.create')}}">article新規作成画面へ</a>
  <div>{{ Form::text('url',url()->current())}}</div>
  <pre>
    {{ Form::submit('登録')}}
  </pre>
{{ Form::close() }}
<pre>
<a href="{{route('posts.index')}}">やっぱやめる</a>
</pre>