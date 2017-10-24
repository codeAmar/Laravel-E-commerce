<?php

use Illuminate\Database\Seeder;

class comicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $comic = new \App\Comics([
            'title'=>'Marvel Minions',
        'imagePath'=>'images/comics/comic1.jpg',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate',
            'category'=>'Action',
            'starring'=>'Hulk',
            'author'=>'Amarjot',
        'price'=>'30.00',
        'pages'=>'120',
        'ISBN'=>'kahdf87f9sa87f9adfdaf'
        ]);
        $comic->save();


        $comic = new \App\Comics([
            'title'=>'Marvel World Art',
            'imagePath'=>'images/comics/comic2.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate',
            'category'=>'Action',
            'starring'=>'Hulk',
            'author'=>'Amarjot',
            'price'=>'30.00',
            'pages'=>'120',
            'ISBN'=>'kahdf87f9sfsa87f9dsfsadfdaf'
        ]);
        $comic->save();


        $comic = new \App\Comics([
            'title'=>'Spidy Rage',
            'imagePath'=>'images/comics/comic3.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate',
            'category'=>'Action',
            'starring'=>'Spiderman',
            'author'=>'Amarjot',
            'price'=>'30.00',
            'pages'=>'120',
            'ISBN'=>'kahdsf87f9sa87f9asaeadfdaf'
        ]);
        $comic->save();


        $comic = new \App\Comics([
            'title'=>'Steel Woman',
            'imagePath'=>'images/comics/comic4.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate',
            'category'=>'Action',
            'starring'=>'Steel Woman',
            'author'=>'Amarjot',
            'price'=>'30.00',
            'pages'=>'120',
            'ISBN'=>'kahdf87sdfsf9sa87f9adfdaf'
        ]);
        $comic->save();


        $comic = new \App\Comics([
            'title'=>'Daredevil',
            'imagePath'=>'images/comics/comic5.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate',
            'category'=>'Action',
            'starring'=>'Daredevil',
            'author'=>'Amarjot',
            'price'=>'30.00',
            'pages'=>'120',
            'ISBN'=>'kahdf8dfs7f9sa87f9adfdaf'
        ]);
        $comic->save();


        $comic = new \App\Comics([
            'title'=>'Haunted Guy',
            'imagePath'=>'images/comics/comic6.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate',
            'category'=>'Action',
            'starring'=>'Haunted',
            'author'=>'Rozal',
            'price'=>'30.00',
            'pages'=>'120',
            'ISBN'=>'kahrdf8et7f9sa87f9adfdaf'
        ]);
        $comic->save();


        $comic = new \App\Comics([
            'title'=>'Catwoman',
            'imagePath'=>'images/comics/comic7.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate',
            'category'=>'Action',
            'starring'=>'CatWoman',
            'author'=>'Amarjot',
            'price'=>'30.00',
            'pages'=>'120',
            'ISBN'=>'kahdf8rthr7f9sa87f9adfdaf'
        ]);
        $comic->save();


        $comic = new \App\Comics([
            'title'=>'Superman',
            'imagePath'=>'images/comics/comic8.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate',
            'category'=>'Action',
            'starring'=>'Superman',
            'author'=>'Rozal',
            'price'=>'30.00',
            'pages'=>'120',
            'ISBN'=>'kahdf87fhyjt9sa87f9adfdaf'
        ]);
        $comic->save();


        $comic = new \App\Comics([
            'title'=>'Helery Jade',
            'imagePath'=>'images/comics/comic9.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate',
            'category'=>'Action',
            'starring'=>'Helery',
            'author'=>'Rozal',
            'price'=>'30.00',
            'pages'=>'120',
            'ISBN'=>'kahdf87jyjf9sa87f9adfdaf'
        ]);
        $comic->save();


        $comic = new \App\Comics([
            'title'=>'Spidy in Rain',
            'imagePath'=>'images/comics/comic10.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate',
            'category'=>'Action',
            'starring'=>'Spiderman',
            'author'=>'Rozal',
            'price'=>'30.00',
            'pages'=>'120',
            'ISBN'=>'kahdf87f9seheha87f9adfdaf'
        ]);
        $comic->save();
    }
}
