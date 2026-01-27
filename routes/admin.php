<?php

declare(strict_types=1);

use TentaPress\SystemInfo\Http\Admin\SystemInfoController;
use TentaPress\SystemInfo\Http\Admin\DiagnosticsDownloadController;
use Illuminate\Support\Facades\Route;
use TentaPress\System\Support\AdminRoutes;

AdminRoutes::group(function (): void {
    Route::get('/system-info', SystemInfoController::class)
        ->name('system-info')
        ->middleware('tp.can:manage_plugins');

    Route::get('/system-info/diagnostics', DiagnosticsDownloadController::class)
        ->name('system-info.diagnostics')
        ->middleware('tp.can:manage_plugins');
});
