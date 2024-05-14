<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $username = $request->input('name');
            $password = $request->input('pass');

            $servername = "localhost:3306";
            $username_db = "root";
            $password_db = "";
            $database = "ecommerce";

            $conn = new \mysqli($servername, $username_db, $password_db, $database);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $error = '';

            if (empty($username) || empty($password)) {
                $error = "Username and password are required.";
            } else {
                $hashed_password = md5($password);

                $sql = "SELECT * FROM login WHERE username='$username' AND password='$hashed_password'";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    session()->put('username', $username);
                    return redirect()->route('index');
                } else {
                    $error = "Invalid username or password. Please try again.";
                }
            }
            echo $error;
        } else {
            return "Method not allowed.";
        }
    }
}
