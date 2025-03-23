@extends('layouts.app')

@section('content')
<div class="container">
    <h1>События</h1>
    <a href="{{ route('events.create') }}" class="btn btn-primary">Создать новое событие</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Название</th>
                <th>Начало</th>
                <th>Конец</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->start_time }}</td>
                <td>{{ $event->end_time }}</td>
                <td>
                    <a href="{{ route('events.edit', $event) }}" class="btn btn-warning">Редактировать</a>
                    <form action="{{ route('events.destroy', $event) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
