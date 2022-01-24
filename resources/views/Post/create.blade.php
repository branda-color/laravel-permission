@extends('layouts.app')

@section('content')
<form action="/post" method="POST">

    標題：<input type="text" name="title" /><br />
    內容：<textarea name="body"></textarea>

    <input type="submit" value="送出" />
</form>
@endsection