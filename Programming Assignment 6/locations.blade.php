<html>
    <body>
        @foreach ($locations as $location)
        <p>{{$location->value}}</p>
        <ol>
        	@foreach($location->storys as $story)
        		<li>{{$story->title}}</li>
        	@endforeach
        </ol>
        @endforeach
    </body>
</html>
