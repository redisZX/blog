<?php
    namespace App\Http\Controllers\Home;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;


    class MyCenterController extends Controller
    {

        public function getIndex(Request $request)
        {
            $id = $request->get('id');
            return $id;


        }








    }
?>