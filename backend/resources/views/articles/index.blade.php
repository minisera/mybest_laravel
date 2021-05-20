
Article index
<p>{{$user->name}}</p>

@foreach ($articles as $article)
  <p>{{$article->title}}</p>
  <p>{{$article->text}}</p>
@endforeach