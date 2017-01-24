<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 		= 'H_beranda';
$route['404_override'] 				= '';
$route['translate_uri_dashes'] 		= FALSE;

//---------konten------------
$route['konten/:any/:num'] 			= "H_konten/view_detail_konten";
$route['konten'] 					= "H_konten";

//---------profil-----------
$route['sejarah']					= "H_profil/view_sejarah";
$route['struktur-organisasi']		= "H_profil/view_struktur";
$route['program-kerja']				= "H_profil/view_proker";
$route['visi-misi']					= "H_profil/view_vm";
$route['anggota']					= "H_profil/view_anggota";

//--------portofolio----------
$route['portofolio']				= "H_portofolio";

//--------tutorial----------
$route['tutorial']					= "H_tutorial";

//--------download----------
$route['download']					= "H_download";


//--------donatur----------
$route['donatur']					= "H_donatur";

//--------developer----------
$route['developer']					= "H_beranda/view_web_dev";


// $route['portfolio']					= "H_homepage/portfolio";
// $route['portfolio/:any']			= "H_homepage/jenis_portfolio";
// $route['portfolio/:num/:any'] 		= "H_homepage/detail_portfolio";

// $route['program-kerja']				= "H_homepage/program_kerja";
// $route['program-kerja/:num/:any']	= "H_homepage/detail_program_kerja";

// $route['download']					= "H_homepage/download";

// $route['sejarah']					= "H_homepage/sejarah";
// $route['visi-misi']					= "H_homepage/visi_misi";

// $route['web-developer']				= "H_homepage/web_developer";

// $route['tutorial']					= "H_homepage/tutorial";
// $route['tutorial/:num/:any'] 		= "H_homepage/detail_tutorial";

// $route['input-komentar']			= "H_homepage/input_komentar";
