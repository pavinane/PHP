<div>




    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <h1>This is Header Component</h1>
    <h3>Hi, {{$name}}</h3>
    <h3>Fruits are:</h3>
    <ul>
        @foreach ($fruits as $value)
            <li>{{$value}}</li>
        @endforeach
    </ul>
    
</div>