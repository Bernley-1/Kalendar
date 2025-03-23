@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Редактировать событие</h1>
    <form action="{{ route('events.update', $event) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control" id="description" name="description">{{ $event->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="start_time">Начало</label>
            <input type="datetime-local" class="form-control" id="start_time" name="start_time" value="{{ $event->start_time }}" required>
        </div>
        <div class="form-group">
            <label for="end_time">Конец</label>
            <input type="datetime-local" class="form-control" id="end_time" name="end_time" value="{{ $event->end_time }}" required>
        </div>
        <button type="submit" class="btn btn-success">Сохранить изменения</button>
    </form>
</div>
@endsection
