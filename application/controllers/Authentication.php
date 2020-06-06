<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controlador que se encarga de cargar las vistas del login y del registro
 * 
 * @author Ivan Acosta Vargas
 * @since 05/06/2020
 */
class Authentication extends CI_Controller {

	/**
	 * [__construct Constructor de la clase]
	 */
	function __construct() {
		parent::__construct();
	}

	/**
	 * [auth Metodo encargado de cargar la vista del login]
	 * 
	 * @return [view] [vista de login]
	 */
	function auth() {
		$view['header'] = $this->load->view('commons/nav', NULL, TRUE);
		$view['form'] = $this->load->view('auth/utils/login-form', NULL, TRUE);

		$this->load->view('commons/header');

		$this->parser->parse("auth/template/auth-body", $view);

		$this->load->view('commons/foot-imp');
	}

	/**
	 * [registro Funcion encargada de cargar la vista del registro]
	 * 
	 * @return [view] [vista del registro]
	 */
	public function registro() {
		$view['header'] = $this->load->view('commons/nav', NULL, TRUE);
		$view['form'] = $this->load->view('auth/utils/registro-form', NULL, TRUE);

		$this->load->view('commons/header');

		$this->parser->parse("auth/template/auth-body", $view);

		$this->load->view('commons/foot-imp');
	}

}