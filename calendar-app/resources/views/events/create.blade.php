@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Создать новое событие</h1>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="start_time">Начало</label>
            <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
        </div>
        <div class="form-group">
            <label for="end_time">Конец</label>
            <input type="datetime-local" class="form-control" id="end_time" name="end_time" required>
        </div>
        <button type="submit" class="btn btn-success">Создать событие</button>
    </form>
</div>
@endsection
