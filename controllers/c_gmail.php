<?php

class C_GuiMail
{
    //Want to send ? just add paramaters ? into function
    public function Gui_Mail_Dang_Ky($ho_ten,$email,$tai_khoan,$mat_khau)
    {
        require_once("public/smtpgmail/src/Exception.php");
				require_once("public/smtpgmail/src/PHPMailer.php");
				require_once("public/smtpgmail/src/OAuth.php");
				require_once("public/smtpgmail/src/SMTP.php");
				require_once("public/smtpgmail/src/POP3.php");
				$mail=new PHPMailer\PHPMailer\PHPMailer();
				$mail->IsSMTP(); // Chứng thực SMTP
				$mail->SMTPAuth=TRUE;
				$mail->Host="smtp.gmail.com";
				$mail->Port=465;
				$mail->SMTPSecure="ssl";
				/* Server google*/
				$mail->Username="dotcomguy7@gmail.com"; // Nhập mail 
				$mail->Password="01222047655aAa"; // Mật khẩu
				/* Server google*/
				$mail->CharSet="utf-8";


				$noidung="<p>Chào <b>$ho_ten</b>, bạn đã đăng ký thành công tài khoản Đại Lý Nước Ngọt</p>";
				$noidung.="<p>Tài khoản: <b>$tai_khoan</b></p>";
                $noidung.="<p>Mật khẩu: <b>$mat_khau</b></p>";
                $noidung.="Mua hàng ngay <a href='http://dailynuocngot.com' target='_blank' />";
                
				$mail->SetFrom("dailynuocngot115@gmail.com","Đại Lý Nước Ngọt");
				$mail->Subject="Liên hệ";
				$mail->MsgHTML($noidung);
				$mail->AddAddress("dotcomguy7@gmail.com","Quản trị viên"); // Mail người nhận
				$mail->AddBCC($email,$tai_khoan);
				$mail->Send();
	}
	
	public function Guil_Mail_Dang_Ky_Mail($email)
	{
		require_once("public/smtpgmail/src/Exception.php");
		require_once("public/smtpgmail/src/PHPMailer.php");
		require_once("public/smtpgmail/src/OAuth.php");
		require_once("public/smtpgmail/src/SMTP.php");
		require_once("public/smtpgmail/src/POP3.php");
		$mail=new PHPMailer\PHPMailer\PHPMailer();
		$mail->IsSMTP(); // Chứng thực SMTP
		$mail->SMTPAuth=TRUE;
		$mail->Host="smtp.gmail.com";
		$mail->Port=465;
		$mail->SMTPSecure="ssl";
		/* Server google*/
		$mail->Username="dailynuocngot115@gmail.com"; // Nhập mail 
		$mail->Password="0903083306aAa"; // Mật khẩu
		/* Server google*/
		$mail->CharSet="utf-8";

		$noidung="<p>Chúc mừng, bạn đã đăng ký thành công nhận mail tại Đại Lý Nước Ngọt 115</p>";
		$noidung.="<p>Email đăng ký: <b>$email</b></p>";
			
		$mail->SetFrom("dailynuocngot115@gmail.com","Đại Lý Nước Ngọt");
		$mail->Subject="Đăng Ký Nhận Mail";
		$mail->MsgHTML($noidung);
		$mail->AddAddress("dailynuocngot115@gmail.com","Quản trị viên"); // Mail người nhận
		$mail->AddBCC($email);//Khách hàng nhận
		$mail->Send();
	}
}


?>