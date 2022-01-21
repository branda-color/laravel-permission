@extends('layouts.app')

@section('content')
姓名：{{ $data->name }} <br />
標題：{{ $data->title }} <br />
內容：{{ $data->body }} <br />
<a href="/post/{{ $data->id }}/edit">
    <button>編輯</button>
</a>

<form action="/post/{{ $data->id }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <a href="">
        <button>刪除</button>
    </a>
</form>
@endsection