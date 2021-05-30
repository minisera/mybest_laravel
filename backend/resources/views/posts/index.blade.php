
PostIndex
<p>{{$user->name}}</p>

<!-- {{ Form::open(['route' => 'posts.store', 'method' => 'post']) }}
  {{ Form::text('title')}}
  {{ Form::text('text')}}
  {{ Form::submit('登録')}}
{{ Form::close() }} -->

@foreach ($posts as $post)
  <p>{{$post->title}}</p>
  <p>{{$post->text}}</p>
@endforeach

<a href="{{route('posts.create')}}">post新規作成画面へ</a>