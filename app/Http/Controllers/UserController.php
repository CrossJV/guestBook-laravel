<?php
    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\DB;
    use App\Models\User;
    use Illuminate\Http\Request;

    class UserController extends Controller
    {
        public function show(Request $request)
        {
            if(!is_null($request->input('update_user')) && $request->has('name') && $request->has('age'))
            {
                $user = User::find($request->input('update_user'));
                $user->name = $request->input('name');
                $user->age = $request->input('age');
                
                $user->save();
                return redirect()->back();
            }
            if($request->has('name') && $request->has('age'))
            {
                $user = new User;

                $user->name = $request->input('name');
                $user->age = $request->input('age');

                $user->save();
                return redirect()->back();
            }
            if($request->has('delete'))
            {
                $user = User::find($request->input('delete'));
                $user->delete();
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