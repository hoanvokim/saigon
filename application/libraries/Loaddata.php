<?php

/**
 * Created by IntelliJ IDEA.
 * User: hvo
 * Date: 3/16/18
 * Time: 5:53 PM
 */
class Loaddata
{
    public function view_all($model)
    {
        $result = $model->show_all_data();
        if ($result != false) {
            return $result;
        }
        else {
            return 'Empty';
        }
    }

    public function view_by_slug($model,$slug)
    {
        $result = $model->show_by_slug($slug);
        if ($result != false) {
            return $result;
        }
        else {
            return 'Empty';
        }
    }
}