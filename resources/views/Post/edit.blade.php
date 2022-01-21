@extends('layouts.app')

@section('content')
<form action="/post/{{ $data->id }}" method="POST">
    標題：<input type="text" name="title" value="{{ $data->title }}" /> <br />
    內容：<textarea name="body">{{ $data->body }}</textarea>
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <input type="submit" value="送出" />
</form>
@endsection