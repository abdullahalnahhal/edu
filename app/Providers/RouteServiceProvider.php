<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
        $this->mapTeacherRoutes();
        $this->mapTeacherLevelsRoutes();
        $this->mapTeacherYearsRoutes();
        $this->mapTeacherTermsRoutes();
        $this->mapTeacherGroupsRoutes();
        $this->mapTeacherSubjectsRoutes();
        $this->mapTeacherUnitsRoutes();
        $this->mapTeacherQuestionTypesRoutes();
        $this->mapTeacherQuestionsRoutes();
        $this->mapTeacherExamsRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    protected function mapTeacherRoutes()
    {
        Route::prefix('/teacher')
             ->middleware(['web', 'auth'])
             ->namespace('App\Http\Controllers\TeachersControllers')
             ->group(base_path('routes/teachers/web.php'));
    }

    protected function mapTeacherLevelsRoutes()
    {
        Route::prefix('/teacher/levels')
             ->middleware(['web', 'auth'])
             ->name('teachers.levels')
             ->namespace('App\Http\Controllers\TeachersControllers')
             ->group(base_path('routes/teachers/levels.php'));
    }
    protected function mapTeacherYearsRoutes()
    {
        Route::prefix('/teacher/years')
             ->middleware(['web', 'auth'])
             ->name('teachers.years')
             ->namespace('App\Http\Controllers\TeachersControllers')
             ->group(base_path('routes/teachers/years.php'));
    }
    protected function mapTeacherTermsRoutes()
    {
        Route::prefix('/teacher/terms')
             ->middleware(['web', 'auth'])
             ->name('teachers.terms')
             ->namespace('App\Http\Controllers\TeachersControllers')
             ->group(base_path('routes/teachers/terms.php'));
    }
    protected function mapTeacherGroupsRoutes()
    {
        Route::prefix('/teacher/groups')
             ->middleware(['web', 'auth'])
             ->name('teachers.groups')
             ->namespace('App\Http\Controllers\TeachersControllers')
             ->group(base_path('routes/teachers/groups.php'));
    }
    protected function mapTeacherSubjectsRoutes()
    {
        Route::prefix('/teacher/subjects')
             ->middleware(['web', 'auth'])
             ->name('teachers.subjects')
             ->namespace('App\Http\Controllers\TeachersControllers')
             ->group(base_path('routes/teachers/subjects.php'));
    }
    protected function mapTeacherUnitsRoutes()
    {
        Route::prefix('/teacher/units')
             ->middleware(['web', 'auth'])
             ->name('teachers.units')
             ->namespace('App\Http\Controllers\TeachersControllers')
             ->group(base_path('routes/teachers/units.php'));
    }
    protected function mapTeacherQuestionTypesRoutes()
    {
        Route::prefix('/teacher/question-types')
             ->middleware(['web', 'auth'])
             ->name('teachers.question-types')
             ->namespace('App\Http\Controllers\TeachersControllers')
             ->group(base_path('routes/teachers/question-types.php'));
    }
    protected function mapTeacherQuestionsRoutes()
    {
        Route::prefix('/teacher/questions')
             ->middleware(['web', 'auth'])
             ->name('teachers.questions')
             ->namespace('App\Http\Controllers\TeachersControllers')
             ->group(base_path('routes/teachers/questions.php'));
    }
    protected function mapTeacherExamsRoutes()
    {
        Route::prefix('/teacher/exams')
             ->middleware(['web', 'auth'])
             ->name('teachers.exams')
             ->namespace('App\Http\Controllers\TeachersControllers')
             ->group(base_path('routes/teachers/exams.php'));
    }

}
