@foreach($students as $student)
    <h1>{{ $student['name'] }}</h1>
    <h1>{{ $student['email'] }}</h1>
@endforeach

