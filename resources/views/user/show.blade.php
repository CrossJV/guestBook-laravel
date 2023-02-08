<x-layout>
    <x-slot name="title">
        user_table
    </x-slot>
    <p class="editing_user"></p>
    <form action="" method="POST">
        @csrf
        <label>Имя:<input name="name" type="text"></label>
        <label>Возраст:<input name="age" type="text"></label>
        <input type="hidden" name="update_user" class="update_user" value="">
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
                    <td>
                        <form action="" method="POST">
                            @csrf
                            <input name="delete" type="hidden" value="{{$user->id}}">
                            <input type="submit" value="удалить">
                        </form> 
                    </td>
                    <td>
                        <button class="edit" data-id="{{$user->id}}" data-key="{{$key+1}}">Редактировать</button>
                    </td>
                    @php
                        $total += $user->age;
                    @endphp
                    
                    
                </tr>
            
        @endforeach
    </table>

    <p>Переписанно человек: {{count($users)}}</p>
    <p>Общий возраст: {{$total}}</p>

</x-layout>
<script src="/user.js"></script>