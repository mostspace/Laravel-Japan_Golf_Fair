<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyTemporary;
use App\Models\LoginInfo;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class MyPageAuthController extends Controller
{
    public function login() {
        return view('mypage.auth.login');
    }

    public function mpLogin(Request $request) {
        $login_info = LoginInfo::where('login_id', $request->input('login_id'))->first();

        if(Hash::check($request->input('login_pass'), $login_info->login_pass)){
            return 0;
        } else {
            return 1;
        }
    }

    // Login ID Forgot

    public function loginIDForgot() {
        return view('mypage.auth.loginIdForgot');
    }

    public function loginIdForgotCheck(Request $request) {
        $data = $request->all();
        return view('mypage.auth.loginIdForgotCheck', ['data' => $data]);
    }

    public function loginIdForgotCheckComplete() {
        // sendingMail();

        return response()->json(['status' => 0]);
    }

    public function loginIDForgotComplete() {
        return view('mypage.auth.loginIdForgotComplete');
    }

    // Register

    public function register() {
        return view('mypage.auth.register');
    }

    public function registerCheck(Request $request) {
        $data = $request->all();
        return view('mypage.auth.registerCheck', ['data' => $data]);
    }

    public function registerCheckComplete(Request $request) {       

        // check exist company
        while (DB::table('company_temporaries')->where('ct_name', $request->input('ct_name'))->exists()) {
            return response()->json(['status' => 0]);
        }

        $ct = new CompanyTemporary;
        $ct->ct_name = $request->input('ct_name');
        $ct->ct_name_kana = $request->input('ct_name_kana');
        $ct->ct_postal_code = $request->input('ct_postal_code');
        $ct->ct_address_1 = $request->input('ct_address_1');
        $ct->ct_address_2 = $request->input('ct_address_2');
        $ct->ct_address_3 = $request->input('ct_address_3');
        $ct->ct_address_4 = $request->input('ct_address_4');
        $ct->ct_phone = $request->input('ct_phone');
        $ct->ct_representative_title = $request->input('ct_representative_title');
        $ct->ct_representative_name = $request->input('ct_representative_name');
        $ct->ct_staff_dept = $request->input('ct_staff_dept');
        $ct->ct_staff_1_name = $request->input('ct_staff_1_name');
        $ct->ct_staff_1_email = $request->input('ct_staff_1_email');
        $ct->ct_staff_1_mobile = $request->input('ct_staff_1_mobile');
        $ct->ct_staff_2_name = $request->input('ct_staff_2_name');
        $ct->ct_staff_2_email = $request->input('ct_staff_2_email');
        $ct->ct_staff_2_mobile = $request->input('ct_staff_2_mobile');
        $ct->ct_staff_fax = $request->input('ct_staff_fax');
        $ct->ct_website = $request->input('ct_website');
        $ct->ct_website_event = $request->input('ct_website_event');
        $ct->ct_products = $request->input('ct_products');
        $ct->ct_jgga_member = $request->input('ct_jgga_member');
        $ct->ct_previous_exhibitor = $request->input('ct_previous_exhibitor');
        $ct->save();

        $this->loginIdAndPassGeneration($ct->id);        
    }

    public function loginIdAndPassGeneration($ct_id) {
        $r_number = mt_rand(100000, 999999);
        $generatedPwd = $this->generateLoginPass();

        print_r($generatedPwd);

        $login_info = new LoginInfo;

        while ($login_info->where('login_id', $r_number)->first()) {
            $r_number = mt_rand(100000, 999999);
        }

        $login_info = new LoginInfo;
        $login_info->c_id = $ct_id;
        $login_info->login_id = $r_number;
        $login_info->login_pass = $this->generateLoginPass();
        $login_info->login_pass = bcrypt($generatedPwd) . "999" .$generatedPwd;
        $login_info->save();

        // $this->sendingMail($login_info->login_id, $generatedPwd);
    }

    public function generateLoginPass() {
        $length = 8;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $code = Str::random($length, $characters);
        return $code;
    }

    public function sendingMail($login_id, $login_pass) {
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->SMTPDebug = 2;
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;
            $mail->CharSet = "UTF-8";
            $mail->setFrom('konno11223344@gmail.com', 'konno');
            $mail->addAddress('konno11223344@gmail.com', 'konno');
            $mail->Username = "konno"; // update with the correct username
            $mail->Password = "mihara0524"; // update with the correct password
            $mail->Subject = "Welcome to JGF";
            $mail->Body = "Login ID: " . $login_id . "\nLogin Password: " . $login_pass;
            $mail->send();

            return "Email sent successfully!";
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public function registerComplete() {
        return view('mypage.auth.register_complete');
    }
}
