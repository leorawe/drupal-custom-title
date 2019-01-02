<?php 

namespace Drupal\lw_contr_title\Controller;
/**
 * Controller with custom title.
 */
class CustomTitleController {
    /**
     * {@inheritdoc}
     */
    public function dummyPage(){
        return [
            '#type' => 'markup',
            '#markup' => 'Hellllllooooo from your custom title controller',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function titleCallback(){
        $randomTitleIndex = rand(0,2);

        $randomTitles = [
            'This is my page',
            'This is another title version',
            'Another Title for the Page'
        ];
        return $randomTitles[$randomTitleIndex];
    }
}