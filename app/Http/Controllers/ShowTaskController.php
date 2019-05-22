<?php

namespace App\Http\Controllers;

use App\Services\ShowTaskService;
use App\Presenters\ShowTaskPresenter;
use App\Transformers\ShowTaskTransformer;
use App\Formatters\ShowTaskFormatter;

/**
 * Class ShowTaskController
 * @package App\Http\Controllers
 */
class ShowTaskController extends Controller
{
    /**
     * @var ShowTaskService
     */
    protected $service;

    /**
     * ShowTaskController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->service = new ShowTaskService();
    }

    /**
     *
     */
    public function handle(): void
    {
    }
}
