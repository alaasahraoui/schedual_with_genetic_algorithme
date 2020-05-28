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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
            'section'    =>"s1",
            'groupe'     =>""
            
            
        ]);

                                    DB::table('courses')->insert([
            'course_code'=> "XC7",
            'course_nom' =>"THL" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"l3_siq",
            'section'    =>"s1",
            'groupe'     =>""
            
            
        ]);

                                        DB::table('courses')->insert([
            'course_code'=> "XC8",
            'course_nom' =>"Archi_Ordi" ,
            'course_max' =>100,
            'fondamental'=>"non",
            'type'       =>"cour",
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
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
            'specialite' =>"l3_siq",
            'section'    =>"s1",
            'groupe'     =>"g3"
            
            
        ]); 






    }

}
