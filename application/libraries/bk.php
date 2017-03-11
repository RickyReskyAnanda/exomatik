<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bk
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function breadcumb($data){
		echo '<section class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="breadcrumb">
								<li><a href="'.$data['url'].'">Beranda</a></li>
								<li><a href="'.$data['url2'].'">'.ucfirst($data['b2']).'</a></li>
								<li><a href="'.$data['url3'].'">'.$data['b3'].'</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h1>'.$data['b2'].'</h1>
						</div>
					</div>
				</div>
			</section>
			';
	}

}

/* End of file bk.php */
/* Location: ./application/libraries/bk.php */

?>