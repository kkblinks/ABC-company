<html>
    @foreach($blogs as $blog)
        <div>
            <h1>{{$blog->title}}</h1>
            <p>{{$blog->content}}<p>
        </div>
    @endforeach
</html>