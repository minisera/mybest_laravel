<x-app-layout>
  PostCreate
  <p>{{$user->name}}</p>
  {{ Form::open(['route' => 'posts.store', 'method' => 'post', 'id' => 'post_form']) }}
    <div>タイトル</div>
    {{ Form::text('title',$session['title']?? '')}}
    <div>内容</div>
    {{ Form::text('text',$session['text']?? '')}}
    <div>添付article</div>
    {{ Form::select('article_id',$articles,$session['article_id']?? '')}}
    <div>{{ Form::text('url',url()->current())}}</div>
    <pre>
      {{ Form::submit('articleを新規作成する',['id' => 'put_post_session'])}}
      {{ Form::submit('登録')}}
    </pre>
  {{ Form::close() }}
  <pre>
  <a href="{{route('posts.index')}}">やっぱやめる</a>
  </pre>
</x-app-layout>

<script>
  let putPostSession = document.getElementById('put_post_session');
  let postForm = document.getElementById('post_form');
  putPostSession.addEventListener('mouseover',function(){
    postForm.setAttribute('action',"{{route('posts.session')}}")
  });
  putPostSession.addEventListener('mouseout',function(){
    postForm.setAttribute('action',"{{route('posts.store')}}")
  });
</script>