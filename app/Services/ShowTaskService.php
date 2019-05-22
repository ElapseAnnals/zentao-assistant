<?php

namespace App\Services;

use App\Respositories\ShowTaskRepository;

/**
 * Class ShowTaskService
 * @package App\Services
 */
class ShowTaskService extends Service
{
    /**
     * @var ShowTaskRepository
     */
    protected $repository;

    /**
     * ShowTaskService constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->repository = new ShowTaskRepository();
    }

}
