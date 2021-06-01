
PostIndex
<p>{{$user->name}}</p>

@foreach ($posts as $post)
  <p>{{$post->title}}</p>
  <p>{{$post->text}}</p>
@endforeach

<a href="{{route('posts.create')}}">post新規作成画面へ</a>