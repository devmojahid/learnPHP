<?php 
namespace CloudStorage;

include_once 'autoload.php';

use \CloudStorage\Mail\Mailer;
use \CloudStorage\School\Teacher;
class Main{
	function __construct(){
		(new Mailer())->sendMail();
		(new Teacher())->getTeacher();


	}
}

new Main();