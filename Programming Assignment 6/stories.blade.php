<html>
   <body>
     @foreach($stories as $story)
      <p>{{$story->title}}</p>
      <p>{{$story->story}}</p>
      <p>{{$story->published}}</p>
      <ol>
      	@foreach($story->tags as $tag)
      		<li>{{$tag->value}}</li>
      	@endforeach
      </ol>
     @endforeach
   </body>
</html>
