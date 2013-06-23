<?php
namespace Rocketeer\Tasks;

use Closure as AnonymousFunction;

/**
 * A task formatted as a Closure
 */
class Closure extends Task
{

	/**
	 * A Closure to execute at runtime
	 *
	 * @var Closure
	 */
	protected $closure;

	/**
	 * Create a Task from a Closure
	 *
	 * @param  Closure $closure
	 */
	public function setClosure(AnonymousFunction $closure)
	{
		$this->closure = $closure;
	}

	/**
	 * Run the Task
	 *
	 * @return  void
	 */
	public function execute()
	{
		if ($this->closure) {
			$closure = $this->closure;
			return $closure($this);
		}
	}

}