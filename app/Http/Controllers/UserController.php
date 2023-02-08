<?php
    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\DB;
    use App\Models\User;
    use Illuminate\Http\Request;

    class UserController extends Controller
    {
        public function show(Request $request)
        {
            if($request->has('name') && $request->has('age'))
            {
                $user = new User;

                $user->name = $request->input('name');
                $user->age = $request->input('age');

                $user->save();
                return redirect()->back();
            }
            $users = User::all();

            $arr = [];
            foreach($users as $user)
            {
                $arr[] = $user;
            }
            $total = 0;
            return view('user.show', ['users' => $arr, 'total' => $total]);
        }

    }