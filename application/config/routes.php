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
$route['tutorial/kategori/:any/:num']= "H_tutorial/view_tutorial_kategori";
$route['tutorial/:any/:num']		= "H_tutorial/view_detail_tutorial";

//--------download----------
$route['download']					= "H_download";


//--------donatur----------
$route['donatur']					= "H_donatur";

//--------developer----------
$route['developer']					= "H_beranda/view_web_dev";


$route['input/komentar']			= "H_beranda/insert_komentar";
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


/**
|-----------------------------------------------------------------------------------
|				DASHBOARD
|---------------------------------------------------------------------------------
*/
$route['admin/struktur']				= "A_struktur";
//===anggota===
$route['admin/anggota']				= "A_anggota";
$route['admin/anggota/tambah']		= "A_anggota/tambah_data_anggota";
$route['admin/anggota/edit/:num']		= "A_anggota/edit_data_anggota";
$route['admin/anggota/delete']		= "A_anggota/delete_data_anggota";
$route['admin/anggota/status']		= "A_anggota/status_data_anggota";
//===portofolio===
$route['admin/portofolio']			= "A_portofolio";
$route['admin/portofolio/tambah']	= "A_portofolio/tambah_data_portofolio";
$route['admin/portofolio/detail/:num']	= "A_portofolio/edit_data_portofolio";

//===tutorial===
$route['admin/tutorial']			= "A_tutorial";
$route['admin/tutorial/tambah']		= "A_tutorial/tambah_data_tutorial";
$route['admin/tutorial/insert']		= "A_tutorial/insert_data_tutorial";
$route['admin/tutorial/update']		= "A_tutorial/update_data_tutorial";
$route['admin/tutorial/edit/:num']	= "A_tutorial/edit_data_tutorial";
$route['admin/tutorial/delete']		= "A_tutorial/delete_data_tutorial";

//===kategori tutorial===
$route['admin/tutorial/kategori/tambah']		= "A_tutorial/tambah_data_kategori";
$route['admin/tutorial/kategori/edit/:num']		= "A_tutorial/edit_data_kategori";
$route['admin/tutorial/kategori/insert']		= "A_tutorial/insert_data_kategori";
$route['admin/tutorial/kategori/update']		= "A_tutorial/update_data_kategori";
$route['admin/tutorial/kategori/delete']		= "A_tutorial/delete_data_kategori";

//===jenis tutorial===
$route['admin/tutorial/jenis/tambah']			= "A_tutorial/tambah_data_jenis";
$route['admin/tutorial/jenis/edit/:num']		= "A_tutorial/edit_data_jenis";
$route['admin/tutorial/jenis/insert']			= "A_tutorial/insert_data_jenis";
$route['admin/tutorial/jenis/update']			= "A_tutorial/update_data_jenis";
$route['admin/tutorial/jenis/delete']			= "A_tutorial/delete_data_jenis";

