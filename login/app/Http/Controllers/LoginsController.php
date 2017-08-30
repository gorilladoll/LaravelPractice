<?php
//
// namespace App\Http\Controllers;
//
// use Illuminate\Http\Request;
// use App\User;
// class LoginsController extends Controller
// {
//     //
//     private $user;
//     protected $redirectTo = '/';
//     public function __construct(){
//       $this->user = new User();
//     }
//     public function show(Request $request){
//       $session = $request->session()->get('login');
//       if(isset($session)){
//           return view('logins.main')->with('session',$session);
//       }
//       return view('logins.main');
//     }
//
//     public function showSignup(){
//       return view('logins.signup');
//     }
//
//
//     public function storeSignup(Request $request){
//       $name = $request->input('name');
//       $password = $request->input('password');
//       $email = $request->input('email');
//
//       $name_conf = $this->user->where('name',$name)->pluck('name');
//       $name_conf_bool = isset($name_conf[0]) ? true : false;
//
//       if(!$name_conf_bool){
//         $this->update($name,$password,$email);
//         $request->session()->put('login',$name);
//         return redirect()->action('LoginsController@show');
//       }
//       return redirect()->action('LoginsController@showSignup');
//     }
//     public function update($name,$password,$email){
//       $this->user->name = $name;
//       $this->user->password = bcrypt($password);
//       $this->user->email = $email;
//       $this->user->save();
//     }
//
//     public function storeLogin(Request $request){
//       $name = $request->input('name');
//       $password = $request->input('password');
//
//       if(isset($name) && isset($password)){
//         $account_conf = $this->user->where([
//           'name' => $name,
//           'password' => bcrypt($password)
//         ])->first();
//
//         if(isset($account_conf->name)){
//           $request->session()->put('login',$name);
//           return redirect()->action('LoginsController@show');
//         } else {
//           return redirect()->action('LoginsController@show');
//         }
//       }else {
//           return redirect()->action('LoginsController@show');
//       }
//     }
//
//     public function storeLogout(Request $request){
//       $request->session()->forget('login');
//       return redirect()->action('LoginsController@show');
//     }
//
//     public function exampleAuth(Request $request){
//       $name = $request->input('name');
//       $password = $request->input('password');
//       $hash = bcrypt($password);
//       $verify = password_verify($password,$hash);
//       echo $hash;
//     }
// }
?>
