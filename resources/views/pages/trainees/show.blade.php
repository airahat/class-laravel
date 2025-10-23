@extends("layout.nav")
@section("title", "Student Details")

@section("content")
    <h1>Trainee Details</h1>
    <p>ID: {{ $trainee['id'] }}</p>
    <p>Name: {{ $trainee['name'] }}</p>
    <p>Email: {{ $trainee['email'] }}</p>
    <p>Department: {{ $trainee['department'] }}</p>
    <p>Status: {{ $trainee['is_active'] ? 'Active' : 'Inactive' }}</p>

@endsection