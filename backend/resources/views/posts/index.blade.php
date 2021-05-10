
PostIndex
@foreach ($users as $user)
  <p>{{$user->name}}</p>
@endforeach

{{ Form::open(['route' => 'posts.store', 'method' => 'post']) }}
  {{ Form::text('title')}}
  {{ Form::text('text')}}
  {{ Form::submit('登録')}}
{{ Form::close() }}