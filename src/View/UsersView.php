<?php
namespace App\View;

use Cake\View\View;

/**
 * Users View
 */
class UsersView extends AppView
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize()
    {
        $this->loadHelper('Paginator', [
            'templates' => 'paginator-templates'
        ]);
    }
}
