@extends('admin.layout.nav')
@section('title', 'Users List')
@section('content')
    <h2>Users List</h2>

    <table class="table table-striped">
        <thead>

            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
<tbody>

    @foreach ($users as $i => $user)
        <tr>
            <td>{{ $i +1 }}</td>
            <td>{{ $user['first_name'] }}</td>
            <td>{{ $user['email'] }}</td>
            <td>{{ $user['role'] }}</td>
            <td>
                <x-button href="{{ route('users.show', $user['id']) }}" :anchor="true">

                    View

                </x-button></td>

        </tr>
    @endforeach
</tbody>

<tfoot>
    <tr>
        <th  colspan="5">
            {{ $users->links() }}
        </th>
    </tr>
</tfoot>
    </table>




@endsection
