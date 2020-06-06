<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controlador que se encarga de cargar las vistas del dashboard
 * 
 * @author Ivan Acosta Vargas
 * @since 05/06/2020
 */
class Dashboard extends CI_Controller {

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
	function index() {
		$view['header'] = $this->load->view('commons/nav', NULL, TRUE);
		$view['table'] = $this->load->view('dashboard/utils/table', NULL, TRUE);

		$this->load->view('commons/header');

		$this->parser->parse("dashboard/template/dashboard-body", $view);

		$this->load->view('commons/foot-imp');
	}

}