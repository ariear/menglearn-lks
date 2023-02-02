@extends('dashboard.template')
@section('content')
    <div class="text-white m-7">
        <p class="text-4xl font-semibold mb-10">Dashboard User</p>

        <div class="overflow-auto">
        <table class="border md:block hidden">
                <thead>
                    <tr class="bg-blue-400">
                        <th class="p-3">No</th>
                        <th class="p-3">Nama</th>
                        <th class="p-3">Email</th>
                        <th class="p-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="my-2 px-3">{{$loop->iteration}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="flex px-3 py-7 flex-wrap items-center">
                        <form action="/dashboard/users/{{$user->id}}/admin" method="post">
                                @csrf
                                <button class="py-2 px-5 rounded-full bg-blue-500 mr-3" type="submit">Jadikan Admin</button>
                            </form>
                            <form action="/dashboard/users/{{$user->id}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="py-2 px-5 rounded-full bg-red-500" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="md:hidden block">
                @foreach($users as $user)
                <div class="bg-blue-400 mb-5 p-3 rounded-lg">
                    <p class="mb-2">Nama : {{$user->name}}</p>
                    <p class="mb-2">Email : {{$user->email}}</p>
                    <div>
                            <form action="/dashboard/users/{{$user->id}}/admin" method="post">
                                @csrf
                                <button class="py-2 px-5 rounded-full bg-blue-500 mb-4 w-full" type="submit">Jadikan Admin</button>
                            </form>
                            <form action="/dashboard/users/{{$user->id}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="py-2 px-5 rounded-full bg-red-500 w-full" type="submit">Hapus</button>
                            </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection