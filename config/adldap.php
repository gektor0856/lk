<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['account_suffix'] = '@edu.aspu.ru';
$config['base_dn'] = 'dc=edu,dc=aspu,dc=ru';
$config['domain_controllers'] = array ("192.168.100.16"); //edu.aspu.ru
$config['ad_username'] = NULL;
$config['ad_password'] = NULL;
$config['real_primarygroup'] = true;
$config['use_ssl'] = false;
$config['use_tls'] = false;
$config['recursive_groups'] = true;


/* End of file adldap.php */
/* Location: ./system/application/config/adldap.php */