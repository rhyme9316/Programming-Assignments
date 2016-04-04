<html>
   <body>
   <head>
   <style>
   #header {
      background-color:#eeeeee;
      color:black;
      text-align:center;
      padding:5px;
   }
   #section{
      width:350px;
      float:center;
      padding:10px;
      text-align: :center;
   }
   </style>
   </head>
   <div id='header'>
      <h1>Story you just created!!</h1>
   </div>
   <div id="section">
     @foreach($stories as $story)
      <p>title:{{$story->title}}</p>
      <p>story:{{$story->story}}</p>
      <p>Is published? {{$story->published == 1 ? 'Yes' : 'No'}}</p>
      <p>location:{{$story->location->value}}</p>
      <br>tags:
      <ol>
      	@foreach($story->tags as $tag)
      		<li>{{$tag->value}}</li>
      	@endforeach
      </ol>
     @endforeach
   </div>
   </body>
</html>
