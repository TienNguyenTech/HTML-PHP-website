<?php
namespace App\Controller;

use App\Controller\AppController;

class AboutController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->disableAutoLayout();
        $this->viewBuilder()->setLayout('child_pages');
    }
    
    public function abouthehe()
    {
        // Any logic to prepare data for the view can be added here.
        // For now, this action simply renders the view.
    }
}
?>
