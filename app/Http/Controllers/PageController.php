<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\City;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

class PageController extends Controller
{
    function showHome(Request $request)  {
        // $data = DB::table('posts')->where('name', '=', 'Nelle Reinger V')->select('name as username')->get();


        // $data = DB::table('posts')->find(1);

        // $data = DB::table('posts')->pluck('name');

        // $data = DB::table('posts')->where('name', 'LIKE', '%M%')->get();

        // $data = DB::table('posts')->where(
        //     [
        //         ['name', '=', 'Mr. Gene Leffler III'],
        //         ['id', '=', '10']
        //     ])->get();


        // $data = DB::table('posts')->where('name', '=', 'Mr. Gene Leffler III')->orWhere('id', '=', '19')->orderBy('id', 'desc')->get();

        // dd($data);


        // $data = DB::table('posts')->whereBetween('id', [3, 5])->get();

        // $data = DB::table('posts')->whereIn('id', [5, 6,8])->get();

        // $data = DB::table('posts')->whereNotIn('id', [1, 3,10])->get();

        // $data = DB::table('posts')->whereNotNull('name')->get();

        // $data = DB::table('posts')->whereNull('name')->get();


        // $data = DB::table('posts')->whereName('Hilario Koch')->get();


        // $data = DB::table('posts')->whereDay('created_at', '25')->get();


        // $data = DB::table('posts')->whereTime('created_at', '08:01:34')->get();

        // $data = DB::table('posts')->where('name', 'Hilario Koch')->exists();


        // $data = DB::table('posts')->orderBy('name', 'desc')->get();

        // $data = DB::table('posts')->first();

        // $data = DB::table('posts')->select('name');

        // $data->where('id', 1);
     

        // dd( $data->get());


        // $data = DB::table('posts')->inRandomOrder()->first();

        // dd($data);



        // $data = DB::table('posts')->limit(3)->get();

        // dd($data);


        // $data = DB::table('posts')->limit(3)->offset(2)->get();

        // dd($data);




        //       $data = DB::table('posts')->take(5)->skip(3)->get();

        // dd($data);


        // $data = DB::table('posts')->count();
        //max  min avg sum
        // dd($data);



        //CRUD

        //CREATE

        // DB::table('posts')->insert(
        //     [
        //         'name' => 'test post',
        //         'descrition' => 'desc'
        //     ]);


        //  $newPost = DB::table('posts')->insertOrIgnore(
        //     [
        //         'name' => 'test post',
        //         'descrition' => 'desc', 
        //         'jk' => 'lol'
        //     ]);


        //UPDATE if exsist with unique key  or CRATE if not data with target unique key
        // $newPost = DB::table('posts')->upsert([
        //          'id' => '12',
        //         'name' => 'test post',
        //         'descrition' => 'asc', 
        //     ], ['id']) ;


        //insert and get id
        // $newPostId = DB::table('posts')->insertGetId(
        //     [
        //         'name' => 'rop', 
        //         'descrition' => 'asc', 

        //     ]);

        //     dd($newPostId);


        //UPDATE

        // DB::table('posts')->where('id', 11)->update(
        //     [
        //         'name' => 'update name'
        //     ]);
        //     dd('success');



        //update if exsist or insert
        //   DB::table('posts')->updateOrInsert(
        //     [
        //         'name' => 'rop', 
             

        //     ], [   'descrition' => 'asc' ]);
        //     dd('success');




        //increment and decrement 
        //   DB::table('posts')->increment('age');
        //   DB::table('posts')->increment('age', 4);

        //   DB::table('posts')->decrement('age');
        //   DB::table('posts')->decrement('age', 7);


        // DB::table('posts')->decrement('age', 7, ['name' => 'new name (updated)']);


            // dd('success');





        //DELETE

            //   DB::table('posts')->where('id', 11)->delete()
            
            //DELETE ALL ;

            // DB::table('posts')->delete()

            //and 

            //truncate deleted all and delete state id
            // DB::table('posts')->truncate()




            // dd($newPost);




            // $data = DB::table('posts')->orderBy('name')->simplePaginate(5);

            // return view('pagination', ['data' => $data]);


            //    $data = DB::table('posts')->paginate(6);

            // return view('pagination', ['data' => $data]);


            // $data = DB::table('posts')->paginate(3, ['name']);

            // $data = DB::table('posts')->paginate(3, ['name'], 'customPage');

            // $data = DB::table('posts')->paginate(3, ['name'], 'customPage');


            // $data = DB::table('posts')->paginate(3)->appends(['sort' => 'votes']);

            // $data = DB::table('posts')->paginate(3)->fragment('user');

            // $data = DB::table('posts')->orderBy('id')->cursorPaginate(3);
            // exemple: ?cursor=eyJpZCI6NywiX3BvaW50c1RvTmV

            // return view('pagination', ['data' => $data]);

            //required
            // {{ $data->links() }}







            //join

            // $students = DB::table('students')->join('cities', 'students.city_id', '=', 'cities.id')->select('students.name', 'cities.city')->get();

            
            // $students = DB::table('students')->join('cities', 'students.city_id', '=', 'cities.id')->select('students.name', 'cities.city')->whereCity( 'Mumbai')->get();


            // $students = DB::table('students')->join('cities', 'students.city_id', '=', 'cities.id')->select('students.name', 'cities.city')->where('city', 'Mumbai')->get();




            
            // $students = DB::table('students')->join('cities', 'students.city_id', '=', 'cities.id')->select('students.name', 'cities.city')->where('city', 'LIKE', 'F%')->get();




            //use agreagts function

            // $students = DB::table('students')->join('cities', 'students.city_id', '=', 'cities.id')->count();


            // $students = DB::table('students')->join('cities', 'students.city_id', '=', 'cities.id')->select(DB::raw('count(*) as student_count'))->get();




        //    $students = DB::table('students')->join('cities', 'students.city_id', '=', 'cities.id')->select(DB::raw('count(*) as student_count'), 'age')->groupBy('age')->get();

        // $students = DB::table('students')->join('cities', 'students.city_id', '=', 'cities.id')->select( 'cities.city',  DB::raw('COUNT(*) as student_count'))->groupBy('cities.city')->get();


        // $students = DB::table('students')->join('cities', 'students.city_id', '=', 'cities.id')->select( 'cities.city',  DB::raw('COUNT(*) as student_count'))->groupBy('cities.city')->orderBy('cities.city', 'desc')->whereCity('Yella')->get();




        //         Основные отличия между having и where
        // where применяется перед группировкой: where используется для фильтрации строк до того, как происходит GROUP BY. Это значит, что where применяется ко всем данным таблицы и выбирает те строки, которые соответствуют условиям.

        // having применяется после группировки: having используется для фильтрации уже сгруппированных данных. Таким образом, вы можете задать условия для агрегированных значений.

        
        // $students = DB::table('students')->join('cities', 'students.city_id', '=', 'cities.id')->select( 'cities.city',  DB::raw('COUNT(*) as student_count'))->groupBy('cities.city')->orderBy('cities.city', 'desc')->having('student_count', '>', 2)->get();

        // havingBetween('student_count', [1, 9])


        //left join

        //with use Illuminate\Database\Query\JoinClause;
        // $students = DB::table('students')->leftJoin('cities', function(JoinClause $join){
        //     $join->on('students.city_id', '=', 'cities.id');
        // })->get();


        // return response()->json($students);




        //union

        // $posts = DB::table('posts')->select('id', 'name', DB::raw('NULL as age'));

        // $students = DB::table('students')->select('id', 'name', 'age');


        // $data = $posts->union($students)->get();


        // return dd($data);


        //in laravel

        // $posts = DB::table('posts');

        // $students = DB::table('students')->union($posts)->get();

        // dd($students);



        //when method

        // $Students = DB::table('students')->when(false, function($query) {
        //     $query->where('age', '>', '20');
        // }, function ($query)  {
        //     $query->where('age', '<', 20);
        // })->get();

        //or return all if false

        // $Students = DB::table('students')->when(false, function($query) {
        //     $query->where('age', '>', '20');
        // })->get();

        // dd($Students);


        //chunk


        // В общем, chunkById более устойчив к изменениям данных во время выполнения запроса, так как использует идентификаторы для разбивки на чанки, что помогает избежать повторения или пропуска записей. Это делает его более надежным для работы с динамически изменяющимися наборами данных.

        // $students = DB::table('students')->orderBy('id')->chunk(3, function($students)  {
        //     echo "<div style='border: 1px solid red; margin-bottom:15px;'>";

        //     foreach ($students as $student) {
        //         echo $student->name . "<br>";
        //     }

        //     echo "</div>";
        // });
    


        //use DB::select('SQL');



        // $students = DB::select('SELECT * FROM students');



        // $students = DB::select('SELECT name, age FROM students where name like  ?', ['J%']);

        // foreach ($students as $student) {
        //     echo $student->name. '|'. $student->age  . '</br>';
        // }



        // $students = DB::select('SELECT name, age FROM students where id = :id and name = :name', ['id' => 1, 'name' =>  'John']);


        //insert
        // $students = DB::insert('insert into students (name, age, city_id) values(?, ?, ?)', ['Salaman', 12, 3]);





        //update
        // $students = DB::insert('update students set name = "Salaman (updated TWdO)" where id = 2');
        // return $students;


        //delete
        // $students = DB::delete('delete from students where id = ?', [1]);



        // $students = DB::table('students')->selectRaw('name, age')->whereRaw('age > ?', [20])->get();


        // $students = DB::table('students')->selectRaw('name, age')->whereRaw('age > ? and name like ?', [20, 'S%'])->get();



        
        // $students = DB::table('students')->selectRaw('name, age')->orderByRaw('age, name')->get();



        // $students = DB::table('students')->selectRaw('count(*) as student_count, age')->groupBy('age')->get();




        // $students = DB::table('students')->selectRaw('count(*) as student_count, age')->groupBy('age')->get();
        // return $students;



        //ORM

        //select all data

        // $users = Student::all();

        // return dd($users);

        //select data

        // $users = Student::select('name', 'age')->get();

        // return dd($users);


        //select with stetment

        // $users = Student::where('age', '>', '18')->get();
        // return dd($users);

        // $users = Student::where('age', '<', '5')->orWhere('age', '=', 67)->get();
        // return dd($users);



        //get simple user 
        // $users = Student::find(2, ['name', 'age']);


        //or more data
        // $users = Student::find([2, 6], ['name', 'age']);
        // return dd($users);




        //agregats

        //count
        // $users = Student::count();

        //min and max
        // $users = Student::min('age');
        // $users = Student::max('age');

        //sum
        // $users = Student::sum('age');


        // $users = Student::where(
        //   [
        //     ['age', 67],
        //     ['city_id', 1]
        //   ]
        // )->get();



        //get returned array , first object
        // $users = Student::select('name', 'age as ages')->whereAge(67)->get();



        // $users = Student::select('name', 'age as ages')->whereAge(67)->first();

     // <> - не равно
        // $users = Student::select('name', 'age')->where('age', '<>', 67)->get();

        // $users = Student::whereNot('age', 12)->get();


        // $users = Student::whereBetween('age', [10, 18])->get();


        // $users = Student::whereIn('age', [10, 18])->get();

        // $users = Student::whereNotIn('age', [67, 12])->get();



        //RAW methods
        // $users = Student::selectRaw('name, count(name)')->groupBy('name')->get();

        // $users = Student::whereRaw('age > ?', [20])->get();

        // $users = Student::whereAge(67)->exists();



        //GET SPECIFIC DATA

            // $users = Student::whereAge(67)->get(['name', 'age']);



            // $users = Student::all(['name', 'age']);




            // $users = Student::pluck('name');



            // $users = Student::whereAge(67)->first()->name;

            // $users = Student::whereAge(12)->value('age');

            // $users = Student::with('city:city, id as ids')->get();



            // $users = Student::with(['city' => function($query){
            //     $query->select('city');
            // }])->get();




              // $users = Student::select('name')->withWhereHAs(['city' => function($query){
            //     $query->select('city')->where('id', 2);
            // }])->get();






            //  $users = Student::with([
            //     ['city' => function($query){
            //         $query->select('city');
            //         }
            //     ],

            //     ['posts' => function($query){
            //         $query->select('name');
            //         }
            //     ]
                
                
            //     ])->get();



            //model protected varibl $with 
            // $users = Student::get();

            //only student data
            // $users = Student::without('city')->get();

            //only with 
            // $users = Student::withOnly('city')->get();


            $users = Student::find(2);
            // $users->load('city');






        return response()->json(
            $users);







    }


    function showBlog(Request $request)  {
        return view('welcome');
    }


    function showUser(Request $request)  {
        return view('welcome');
    }
}
