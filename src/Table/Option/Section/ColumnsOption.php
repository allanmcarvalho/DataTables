<?php
/**
 * Copyright (c) Allan Carvalho 2020.
 * Under Mit License
 * php version 7.2
 *
 * link     https://github.com/allanmcarvalho/cakephp-data-renderer
 * author   Allan Carvalho <allan.m.carvalho@outlook.com>
 */
declare(strict_types = 1);

namespace DataTables\Table\Option\Section;

use DataTables\Table\Columns;
use DataTables\Table\Option\ChildOptionAbstract;
use DataTables\Table\Option\MainOption;

/**
 * Class ColumnsOption
 *
 * @author   Allan Carvalho <allan.m.carvalho@outlook.com>
 * @license  MIT License https://github.com/allanmcarvalho/cakephp-datatables/blob/master/LICENSE
 * @link     https://github.com/allanmcarvalho/cakephp-datatables
 */
final class ColumnsOption extends ChildOptionAbstract {

	/**
	 * @var array
	 * @inheritDoc
	 */
	protected $_mustPrint = [];

	/**
	 * @var array
	 * @inheritDoc
	 */
	protected $_config = [
		'columnDefs' => [],
		'columns' => [],
	];

	/**
	 * Setter method.
	 * Set all columns and defColumns options using a Columns class.
	 *
	 * @param \DataTables\Table\Columns $columns
	 * @return \DataTables\Table\Option\MainOption
	 * @link https://datatables.net/reference/option/
	 */
	public function setColumns(Columns $columns): MainOption {
	    return $this->getMainOption();
	}

}
