<html>
    <head></head>
    <body>
        <form action="/contact" method="post">
            @csrf
            <input type="text" name="email">
            @error('email')
            <span style="color:red">{{ $message }}</span>
            @enderror
            <button>submit</button>
        </form>
        @if(session('message'))
        <div style="color:green">{{ session('message') }}</div>
        @endif
    </body>
</html>
