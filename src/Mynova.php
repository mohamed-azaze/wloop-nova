<?php

namespace Mywloop\Mynova;

use Illuminate\Http\Request;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;
use mywloop\nova\Nova\CannedReplies;
use mywloop\nova\Nova\Departments;
use mywloop\nova\Nova\Labels;
use mywloop\nova\Nova\Priorities;
use mywloop\nova\Nova\Statuses;
use mywloop\nova\Nova\Tickets;

class Mynova extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::resources([
            CannedReplies::class,
            Departments::class,
            Labels::class,
            Priorities::class,
            Statuses::class,
            Tickets::class,

        ]);

    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @param  \Illuminate\Http\Request $request
     * @return mixed
     */
    public function menu(Request $request)
    {
        //
    }
}
