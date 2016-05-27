<?php namespace SleepingOwl\Admin\Columns\Column;

use Illuminate\Contracts\Support\Renderable;
use SleepingOwl\Admin\Admin;
use SleepingOwl\Admin\Interfaces\ColumnInterface;
use SleepingOwl\Admin\Model\ModelConfiguration;

abstract class BaseColumn implements Renderable, ColumnInterface
{
<<<<<<< HEAD
	/**
	 * Column field name
	 *
	 * @var string
	 */
	protected $name;
	/**
	 * Column label
	 *
	 * @var string
	 */
	protected $label;
	/**
	 * Is column sortable?
	 *     false|true|'default'
	 *
	 * @var string|boolean
	 */
	protected $sortable;
	protected $sortableDest = 'asc';
	/**
	 * Html builder
	 *
	 * @var \SleepingOwl\Html\HtmlBuilder
	 */
	protected $htmlBuilder;
	/**
	 * Model item, that ownes this column
	 *
	 * @var ModelItem
	 */
	protected $modelItem;
	/**
	 * Appends to this column cells
	 *
	 * @var ColumnInterface[]
	 */
	protected $appends = [];
	/**
	 * Is this column hidden?
	 *
	 * @var bool
	 */
	protected $hidden = false;
=======
>>>>>>> refs/remotes/origin/laravel-5.2

	/**
	 * Column header
	 * @var ColumnHeader
	 */
	protected $header;
	/**
	 * Model instance currently rendering
	 * @var mixed
	 */
	protected $instance;
	/**
<<<<<<< HEAD
	 * Set this column as default sortable for this model item
	 * @param string $dest
	 */
	public function sortableDefault($dest = 'asc')
	{
		$this->sortable = 'default';
		$this->sortableDest = $dest;
	}
=======
	 * Column appendant
	 * @var ColumnInterface
	 */
	protected $append;
>>>>>>> refs/remotes/origin/laravel-5.2

	/**
	 *
	 */
	function __construct()
	{
		$this->header = new ColumnHeader;
	}

	/**
	 * Initialize column
	 */
	public function initialize()
	{
	}

	/**
	 * Get related model configuration
	 * @return ModelConfiguration
	 */
	protected function model()
	{
		return Admin::model(get_class($this->instance));
	}

	/**
	 * Set column header label
	 * @param string $title
	 * @return $this
	 */
	public function label($title)
	{
		$this->header->title($title);
		return $this;
	}

	/**
	 * Enable/disable column orderable feature
	 * @param bool $orderable
	 * @return $this
	 */
	public function orderable($orderable)
	{
<<<<<<< HEAD
		$attributes = [];
		if ( ! $this->isSortable())
		{
			$attributes['data-sortable'] = 'false';
		}
		if ($this->isSortableDefault())
		{
			$attributes['data-sortable-default'] = $this->sortableDest;
		}
		$attributes['style'] = 'width:10px;';
		return $attributes;
=======
		$this->header->orderable($orderable);
		return $this;
>>>>>>> refs/remotes/origin/laravel-5.2
	}

	/**
	 * Check if column is orderable
	 * @return bool
	 */
	public function isOrderable()
	{
		return $this->header()->orderable();
	}

	/**
	 * Get column header
	 * @return ColumnHeader
	 */
	public function header()
	{
		return $this->header;
	}

	/**
	 * Get or set column appendant
	 * @param ColumnInterface|null $append
	 * @return $this|ColumnInterface
	 */
	public function append($append = null)
	{
		if (is_null($append))
		{
			return $this->append;
		}
		$this->append = $append;
		return $this;
	}

	/**
	 * Set currently rendering instance
	 * @param mixed $instance
	 * @return $this
	 */
	public function setInstance($instance)
	{
		$this->instance = $instance;
		if ( ! is_null($this->append()) && ($this->append() instanceof ColumnInterface))
		{
			$this->append()->setInstance($instance);
		}
		return $this;
	}

	/**
	 * @return string
	 */
	function __toString()
	{
		return (string)$this->render();
	}

}