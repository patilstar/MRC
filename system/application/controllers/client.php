<?php
/**
 * Mundu Radio Classic
 *
 * API & backend development with CodeIgniter framework
 *
 * @package 		Mundu Radio Classic API
 * @subpackage          CodeIgniter Controller
 * @class		Client	
 * @author              Deepak Patil (deepak.patil@geodesic.com) Web Enterprise Dev Team 
 * createdate           Nov 09, 2010
 * @copyright   	Copyright (c) 2010 - 2011, Geodesic Ltd.
 * @link		http://troy.geodesic.net/mrc/client/
 */

class Client extends Controller {
        function __construct()
        {
               parent::__construct();
        }
        function index()
        {

        }
	function register()
	{
	

	}
	function login()
	{
		
	
	}
	function auto_login()
	{


	}
	function password()
        {


        }
	function upgrade()
	{

	}
	function download()
	{

	}

	function testcases()
	{
echo "<pre>";
//$this->load->helper('mysqli');
/*$query = $this->db->query("select * from product_builds ".
"WHERE  build_id = 1  AND    platform_cd ='Android OS'  AND    release_type = 'R'");*/
//$query = $this->db->query("call IsValidBuild ('1', 'TutisTV',  'Android OS'  , 'R',@p_status)");
$query = $this->db->query("call GetUrls (2, 'TutisTV')");
//$query = " CALL add_movie(?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";
// $data = array('1', 'TutisTV',  'Android OS'  , 'R'
//print_r($query);
foreach ($query->result() as $row)
{
print_r($row);
}
$this->load->library('user_agent');

if ($this->agent->is_browser())
{
    $agent = $this->agent->browser().' '.$this->agent->version();
}
elseif ($this->agent->is_robot())
{
    $agent = $this->agent->robot();
}
elseif ($this->agent->is_mobile())
{
    $agent = $this->agent->mobile();
}
else
{
    $agent = 'Unidentified User Agent';
}

//echo $agent;

//echo $this->agent->platform(); 
//$msg = 'Welcome to Mundu Radio';//My secret message';
$DATA = "c1f425d39394097257e7394740155c8c92d17faa2d6918";
$EncData = substr($DATA, 0, strlen($DATA)-2);
$RandomNo = substr($DATA, strlen($DATA)- 2, 2);
$this->load->library('encrypt');
$key = 'MUNDU:'.$RandomNo;//super-secret-key';
$this->encrypt->set_key($key);
echo "<hr>111--->".  $decryptData = $this->encrypt->encode_rc4($EncData);
echo "<hr >";



//		$this->load->view('testcases');
	}

}
?>

