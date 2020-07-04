<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {







//cours section A


// si ouharni
     DB::table('courses')->insert([
            'course_code' => "XC1",
            'course_nom' =>"SI" ,
            'course_max'=>100,
            'fondamental' =>"oui",
            'type' =>"cour",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>""
            
            
        ]);

 //cour 1 algo zahar 
     DB::table('courses')->insert([
            'course_code' => "XC2",
            'course_nom' =>"ALGO" ,
            'course_max'=>100,
            'fondamental' =>"oui",
            'type' =>"cour",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>""
            
            
        ]);


//cour 2 algo zahar 
         DB::table('courses')->insert([
            'course_code' => "XC3",
            'course_nom' =>"ALGO" ,
            'course_max'=>100,
            'fondamental' =>"oui",
            'type' =>"cour",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>""
            
            
        ]);



//cour boustia 
         DB::table('courses')->insert([
            'course_code'=> "XC4",
            'course_nom' =>"LM" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>""
            
            
        ]);


         //english aida 
         DB::table('courses')->insert([
            'course_code'=> "XC5",
            'course_nom' =>"Anglais" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>""
            
            
        ]);

            //cour poo botomi
                  DB::table('courses')->insert([
            'course_code'=> "XC6",
            'course_nom' =>"POO" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>""
            
            
        ]);

                                    DB::table('courses')->insert([
            'course_code'=> "XC7",
            'course_nom' =>"THL" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>""
            
            
        ]);

                                        DB::table('courses')->insert([
            'course_code'=> "XC8",
            'course_nom' =>"Archi_Ordi" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>""
            
            
        ]);
////////////////les td de la section A 
            //TD  du g1 


                   
                 //td lm riali 
             DB::table('courses')->insert([
            'course_code'=> "XC9",
            'course_nom' =>"td_LM" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g1"
            
            
        ]);

                 //td lm djeddar 
             DB::table('courses')->insert([
            'course_code'=> "XC10",
            'course_nom' =>"td_Algo" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g1"
            
            
        ]);

                 //td poo nahal 
             DB::table('courses')->insert([
            'course_code'=> "XC11",
            'course_nom' =>"td_POO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g1"
            
            
        ]); 

                 //tp algo djeddar
             DB::table('courses')->insert([
            'course_code'=> "XC12",
            'course_nom' =>"tp_algo" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g1"
            
            
        ]); 

                       //td si cherfa 
                 DB::table('courses')->insert([
            'course_code'=> "XC13",
            'course_nom' =>"td_SI" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g1"
            
            
        ]);


                    //tp poo nahal
                 DB::table('courses')->insert([
            'course_code'=> "XC14",
            'course_nom' =>"tp_poo" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g1"
            
            
        ]);

                    //td ferfara thl 
                 DB::table('courses')->insert([
            'course_code'=> "XC15",
            'course_nom' =>"td_thl" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g1"
            
            
        ]);   


                        //td archi ould3issa
                 DB::table('courses')->insert([
            'course_code'=> "XC16",
            'course_nom' =>"tp_Archi" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g1"
            
            
        ]); 


// ///////////////////les td du g2



                   
                 //td lm riali 
             DB::table('courses')->insert([
            'course_code'=> "XC17",
            'course_nom' =>"td_LM" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g2"
            
            
        ]);

                 //td algo djeddar 
             DB::table('courses')->insert([
            'course_code'=> "XC18",
            'course_nom' =>"td_Algo" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g2"
            
            
        ]);

                 //td poo nahal 
             DB::table('courses')->insert([
            'course_code'=> "XC19",
            'course_nom' =>"td_POO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g2"
            
            
        ]); 

                 //tp algo djeddar
             DB::table('courses')->insert([
            'course_code'=> "XC20",
            'course_nom' =>"tp_algo" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g2"
            
            
        ]); 

                       //td si hadj_hani 
                 DB::table('courses')->insert([
            'course_code'=> "XC21",
            'course_nom' =>"td_SI" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g2"
            
            
        ]);


                    //tp poo nahal
                 DB::table('courses')->insert([
            'course_code'=> "XC22",
            'course_nom' =>"tp_poo" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g2"
            
            
        ]);

                    //tp thl ferfara
                 DB::table('courses')->insert([
            'course_code'=> "XC23",
            'course_nom' =>"td_thl" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g2"
            
            
        ]);   


                        //td archi ould3issa
                 DB::table('courses')->insert([
            'course_code'=> "XC24",
            'course_nom' =>"td_Archi" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g2"
            
            
        ]); 



// ///////////////////les td du g3



                   
                 //td lm massoudi 
             DB::table('courses')->insert([
            'course_code'=> "XC25",
            'course_nom' =>"td_LM" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g3"
            
            
        ]);

                 //td algo nassri 
             DB::table('courses')->insert([
            'course_code'=> "XC26",
            'course_nom' =>"td_Algo" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g3"
            
            
        ]);

                 //td poo bey 
             DB::table('courses')->insert([
            'course_code'=> "XC27",
            'course_nom' =>"td_POO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g3"
            
            
        ]); 

                 //tp algo nassri
             DB::table('courses')->insert([
            'course_code'=> "XC28",
            'course_nom' =>"tp_algo" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g3"
            
            
        ]); 

                       //td si hadj_hani 
                 DB::table('courses')->insert([
            'course_code'=> "XC29",
            'course_nom' =>"td_SI" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g3"
            
            
        ]);


                    //tp poo bey 15
                 DB::table('courses')->insert([
            'course_code'=> "XC30",
            'course_nom' =>"tp_poo" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g3"
            
            
        ]);

                    //tp thl ferfara
                 DB::table('courses')->insert([
            'course_code'=> "XC31",
            'course_nom' =>"td_thl" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g3"
            
            
        ]);   


                        //td archi douga
                 DB::table('courses')->insert([
            'course_code'=> "XC32",
            'course_nom' =>"td_Archi" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g3"
            
            
        ]); 







        // SECTION B

                   DB::table('courses')->insert([
            'course_code'=> "XC33",
            'course_nom' =>"td_SI" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g4"
            
            
        ]); 



        DB::table('courses')->insert([
            'course_code'=> "XC34",
            'course_nom' =>"SI" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>""
            
            
        ]); 




        DB::table('courses')->insert([
            'course_code'=> "XC35",
            'course_nom' =>"ALGO" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>""
            
            
        ]); 



        DB::table('courses')->insert([
            'course_code'=> "XC36",
            'course_nom' =>"td_LM" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g1"
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC37",
            'course_nom' =>"tp_ALGO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g2"
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC38",
            'course_nom' =>"td_LM" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g3"
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC39",
            'course_nom' =>"td_ALGO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g4"
            
            
        ]); 



        DB::table('courses')->insert([
            'course_code'=> "XC40",
            'course_nom' =>"tp_ALGO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g1"
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC41",
            'course_nom' =>"td_THL" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g2"
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC42",
            'course_nom' =>"td_ALGO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g3"
            
            
        ]); 



        DB::table('courses')->insert([
            'course_code'=> "XC43",
            'course_nom' =>"LM" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>""
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC44",
            'course_nom' =>"td_LM" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g2"
            
            
        ]); 
                    // POO NAHAL

        DB::table('courses')->insert([
            'course_code'=> "XC45",
            'course_nom' =>"td_POO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g1"
            
            
        ]); 



        DB::table('courses')->insert([
            'course_code'=> "XC46",
            'course_nom' =>"td_SI" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g2"
            
            
        ]); 

             // POO BEY

        DB::table('courses')->insert([
            'course_code'=> "XC47",
            'course_nom' =>"td_POO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g3"
            
            
        ]); 

                // lahiani
        DB::table('courses')->insert([
            'course_code'=> "XC48",
            'course_nom' =>"td_LM" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g4"
            
            
        ]); 


        // GUESSOUM POO


        DB::table('courses')->insert([
            'course_code'=> "XC49",
            'course_nom' =>"td_POO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g3"
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC50",
            'course_nom' =>"Anglais" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>""
            
            
        ]); 



        DB::table('courses')->insert([
            'course_code'=> "XC51",
            'course_nom' =>"td_Archi" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g3"
            
            
        ]); 



        DB::table('courses')->insert([
            'course_code'=> "XC52",
            'course_nom' =>"ALGO" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>""
            
            
        ]); 



        // algo djedar


        DB::table('courses')->insert([
            'course_code'=> "XC53",
            'course_nom' =>"td_ALGO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g1"
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC54",
            'course_nom' =>"td_Archi" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g2"
            
            
        ]); 




        DB::table('courses')->insert([
            'course_code'=> "XC55",
            'course_nom' =>"td_THL" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g3"
            
            
        ]); 


        // algo nasri


        DB::table('courses')->insert([
            'course_code'=> "XC56",
            'course_nom' =>"tp_ALGO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g4"
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC57",
            'course_nom' =>"td_Archi" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g1"
            
            
        ]); 




        DB::table('courses')->insert([
            'course_code'=> "XC58",
            'course_nom' =>"td_ALGO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g2"
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC59",
            'course_nom' =>"tp_ALGO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"L2",
            'section'    =>"s1",
            'groupe'     =>"g3"
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC60",
            'course_nom' =>"POO" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>""
            
            
        ]); 


                // TP NAHAL
        DB::table('courses')->insert([
            'course_code'=> "XC61",
            'course_nom' =>"tp_POO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g1"
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC62",
            'course_nom' =>"td_SI" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g3"
            
            
        ]); 

        // FERFERA
        DB::table('courses')->insert([
            'course_code'=> "XC63",
            'course_nom' =>"td_THL" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g4"
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC64",
            'course_nom' =>"td_SI" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g1"
            
            
        ]); 

              // POO NAHAL
        DB::table('courses')->insert([
            'course_code'=> "XC65",
            'course_nom' =>"td_POO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g2"
            
            
        ]); 


        // POO BEY 


        DB::table('courses')->insert([
            'course_code'=> "XC66",
            'course_nom' =>"tp_POO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g3"
            
            
        ]); 


        // TP POO GUESSOUm


        DB::table('courses')->insert([
            'course_code'=> "XC67",
            'course_nom' =>"tp_POO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g4"
            
            
        ]); 


        // td ferfera


        DB::table('courses')->insert([
            'course_code'=> "XC68",
            'course_nom' =>"td_THL" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g1"
            
            
        ]); 



        DB::table('courses')->insert([
            'course_code'=> "XC69",
            'course_nom' =>"Archi" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>""
            
            
        ]); 

        DB::table('courses')->insert([
            'course_code'=> "XC70",
            'course_nom' =>"THL" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>""
            
            
        ]); 


        // tp nehal


        DB::table('courses')->insert([
            'course_code'=> "XC71",
            'course_nom' =>"tp_POO" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"tp",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g2"
            
            
        ]); 


        // TD DOUGA ARCHI

        DB::table('courses')->insert([
            'course_code'=> "XC72",
            'course_nom' =>"td_Archi" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"L2",
            'section'    =>"s2",
            'groupe'     =>"g4"
            
            
        ]); 



        // L3 : 

        
        DB::table('courses')->insert([
            'course_code'=> "XC73",
            'course_nom' =>"prolog" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC74",
            'course_nom' =>"SE" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 

        DB::table('courses')->insert([
            'course_code'=> "XC75",
            'course_nom' =>"prolog" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 

        DB::table('courses')->insert([
            'course_code'=> "XC76",
            'course_nom' =>"prolog" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 

        DB::table('courses')->insert([
            'course_code'=> "XC77",
            'course_nom' =>"Gl" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 

        DB::table('courses')->insert([
            'course_code'=> "XC78",
            'course_nom' =>"SE" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC79",
            'course_nom' =>"SE" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 


        DB::table('courses')->insert([
            'course_code'=> "XC80",
            'course_nom' =>"SE" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC81",
            'course_nom' =>"IHM" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC82",
            'course_nom' =>"IHM" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC83",
            'course_nom' =>"paradigme" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC84",
            'course_nom' =>"IHM" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC85",
            'course_nom' =>"paradigme" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC86",
            'course_nom' =>"IA" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC87",
            'course_nom' =>"compilation" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 

        
        DB::table('courses')->insert([
            'course_code'=> "XC88",
            'course_nom' =>"prolog" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 

        
        DB::table('courses')->insert([
            'course_code'=> "XC89",
            'course_nom' =>"SE" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC90",
            'course_nom' =>"compilation" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC91",
            'course_nom' =>"SE" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 


          
        DB::table('courses')->insert([
            'course_code'=> "XC92",
            'course_nom' =>"SE" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 


          
        DB::table('courses')->insert([
            'course_code'=> "XC93",
            'course_nom' =>"anglais" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 

          
        DB::table('courses')->insert([
            'course_code'=> "XC94",
            'course_nom' =>"paradigme" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 


          
        DB::table('courses')->insert([
            'course_code'=> "XC95",
            'course_nom' =>"IA" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 


          
        DB::table('courses')->insert([
            'course_code'=> "XC96",
            'course_nom' =>"paradigme" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 


          
        DB::table('courses')->insert([
            'course_code'=> "XC97",
            'course_nom' =>"IA" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 


          
        DB::table('courses')->insert([
            'course_code'=> "XC98",
            'course_nom' =>"compilation" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 


          
        DB::table('courses')->insert([
            'course_code'=> "XC99",
            'course_nom' =>"IHM" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 


          
        DB::table('courses')->insert([
            'course_code'=> "XC100",
            'course_nom' =>"compilation" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 


          
        DB::table('courses')->insert([
            'course_code'=> "XC101",
            'course_nom' =>"IA" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 

          
        DB::table('courses')->insert([
            'course_code'=> "XC102",
            'course_nom' =>"GL" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 


          
        DB::table('courses')->insert([
            'course_code'=> "XC103",
            'course_nom' =>"GL" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 



          
        DB::table('courses')->insert([
            'course_code'=> "XC104",
            'course_nom' =>"compilation" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 


          
        DB::table('courses')->insert([
            'course_code'=> "XC105",
            'course_nom' =>"GL" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 



          
        DB::table('courses')->insert([
            'course_code'=> "XC106",
            'course_nom' =>"compilation" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"Siq",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 



        // ISIL 


        DB::table('courses')->insert([
            'course_code'=> "XC107",
            'course_nom' =>"orga" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 

        
        DB::table('courses')->insert([
            'course_code'=> "XC108",
            'course_nom' =>"PAWEB" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC109",
            'course_nom' =>"SAD" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC110",
            'course_nom' =>"orga" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC111",
            'course_nom' =>"OMSI" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"tp",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC112",
            'course_nom' =>"orga" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC113",
            'course_nom' =>"OMSI" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"tp",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC114",
            'course_nom' =>"SAD" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC115",
            'course_nom' =>"orga" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC116",
            'course_nom' =>"OMSI" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"tp",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC117",
            'course_nom' =>"SAD" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC118",
            'course_nom' =>"PAWEB" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC119",
            'course_nom' =>"BDA" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC120",
            'course_nom' =>"PAWEB" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC121",
            'course_nom' =>"ACOO" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC122",
            'course_nom' =>"ANGLAIS" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC123",
            'course_nom' =>"BDA" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC124",
            'course_nom' =>"Gestion projet" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC125",
            'course_nom' =>"BDA" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC126",
            'course_nom' =>"ACOO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC127",
            'course_nom' =>"ACOO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC128",
            'course_nom' =>"ACOO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"tp",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]);
        
        
        
        DB::table('courses')->insert([
            'course_code'=> "XC129",
            'course_nom' =>"PAWEB" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC130",
            'course_nom' =>"OMSI" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC131",
            'course_nom' =>"OMSI" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC132",
            'course_nom' =>"ACOO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC133",
            'course_nom' =>"OMSI" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC134",
            'course_nom' =>"Gestion projet" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC135",
            'course_nom' =>"OMSI" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC136",
            'course_nom' =>"SAD" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC137",
            'course_nom' =>"ACOO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC138",
            'course_nom' =>"ACOO" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC139",
            'course_nom' =>"SAD" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g3"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC140",
            'course_nom' =>"SAD" ,
            'course_max' =>100,
            'fondamental'=>"oui",
            'type'       =>"cour",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC141",
            'course_nom' =>"SAD" ,
            'course_max' =>30,
            'fondamental'=>"oui",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC142",
            'course_nom' =>"Gestion projet" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g2"
            
            
        ]); 



        
        DB::table('courses')->insert([
            'course_code'=> "XC143",
            'course_nom' =>"Gestion projet" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>""
            
            
        ]); 


        
        DB::table('courses')->insert([
            'course_code'=> "XC144",
            'course_nom' =>"Gestion projet" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"td",
            'specialite' =>"isil",
            'section'    =>"",
            'groupe'     =>"g1"
            
            
        ]); 










































        

































        
        
        
         
































    }

}
