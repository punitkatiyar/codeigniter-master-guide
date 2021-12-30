# codeigniter

## basic of php core

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:


- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- xml (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)


## PHP CodeIgniter Framework Module For Developer

- ### Controler

<pre>
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller {
public function index(){
    //print
    }
}
</pre>

- ### View
- ### Models

<pre>
defined('BASEPATH') OR exit('No direct script access allowed');
class Dunit extends CI_Model {
	public function index(){
	   echo "Welcome to Model";
	}
}
</pre>
- ### Helpers
- ### Libraries
- ### Database

