<?php
/**
 * Mundu Radio Classic
 *
 * API & backend development with CodeIgniter framework
 *
 * @package             Mundu Radio Classic API
 * @subpackage          CodeIgniter Model
 * @class               Auth_model  
 * @author              Deepak Patil (deepak.patil@geodesic.com) Web Enterprise Dev Team 
 * createdate           Nov 09, 2010
 * @copyright           Copyright (c) 2010 - 2011, Geodesic Ltd.
 */


class Auth_model extends Model{
	function _constuct()
	{
		parent::Model();
	}
	 function addUser ($uid, $authusr, $prid, $lid, $dvci, $blid) {
                if($uid == 9876543210){
                        return "1";
                }else{
                        return "0";
                }
        }

}
?>
