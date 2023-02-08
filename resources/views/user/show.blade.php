<x-layout>
    <x-slot name="title">
        user_table
    </x-slot>
    <form action="" method="POST">
        @csrf
        <label>Имя:<input name="name" type="text"></label>
        <label>Возраст:<input name="age" type="text"></label>
        <input type="submit" value="сохранить">
    </form>
    <br>
    <table>
        @foreach($users as $key => $user)
            @if($loop->first)
                <tr>
                    <th>#</th>
                    <th>Имя</th>
                    <th>Возраст</th>
                </tr>    
            @endif
            <tr>
            
                <td>{{$key+1}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->age}}</td>
                @php
                    $total += $user->age;
                @endphp
            </tr>
            
        @endforeach
    </table>

    <p>Переписанно человек: {{count($users)}}</p>
    <p>Общий возраст: {{$total}}</p>

</x-layout>