<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 		= 'H_beranda';
$route['404_override'] 				= 'H_beranda/not_found';
$route['translate_uri_dashes'] 		= FALSE;

//---------konten------------
$route['konten/:any/:num'] 			= "H_konten/view_detail_konten";
$route['konten'] 					= "H_konten";

//---------profil-----------
$route['tentang-kami']				= "H_profil/view_sejarah";
$route['struktur-organisasi']		= "H_profil/view_struktur";
$route['program-kerja']				= "H_profil/view_proker";
$route['visi-misi']					= "H_profil/view_vm";
$route['anggota']					= "H_profil/view_anggota";

//--------portofolio----------
$route['portofolio']				= "H_portofolio";
$route['portofolio/:any']			= "H_portofolio";
$route['portofolio/:any/:num']		= "H_portofolio/view_portofolio";

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

/**
|-----------------------------------------------------------------------------------
|				DASHBOARD
|---------------------------------------------------------------------------------
*/
$route['akses/masuk']				= "A_login";
$route['admin']						= "A_dashboard";
//===konten===
$route['admin/donatur']				= "A_donatur";
$route['admin/donatur/tambah']		= "A_donatur/tambah_data_donatur";
$route['admin/donatur/detail/:num']		= "A_donatur/detail_data_donatur";
//===konten===
$route['admin/konten']				= "A_konten";
$route['admin/konten/tambah']		= "A_konten/tambah_data_konten";
$route['admin/konten/edit/:num']	= "A_konten/edit_data_konten";

//===struktur organisasi===
$route['admin/struktur']			= "A_struktur";

//===program kerja===
$route['admin/proker']				= "A_proker";
$route['admin/proker/tambah']		= "A_proker/tambah_data_proker";
$route['admin/proker/edit/:num']	= "A_proker/edit_data_proker";

//===anggota===
$route['admin/anggota']				= "A_anggota";
$route['admin/anggota/tambah']		= "A_anggota/tambah_data_anggota";
$route['admin/anggota/edit/:num']	= "A_anggota/edit_data_anggota";
$route['admin/anggota/delete']		= "A_anggota/delete_data_anggota";
$route['admin/anggota/status']		= "A_anggota/status_data_anggota";
//===portofolio===
$route['admin/portofolio']			= "A_portofolio";
$route['admin/portofolio/tambah']	= "A_portofolio/tambah_data_portofolio";
$route['admin/portofolio/edit/:num']= "A_portofolio/edit_data_portofolio";
$route['admin/portofolio/hapus/:num']= "A_portofolio/delete_data_portofolio";

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

