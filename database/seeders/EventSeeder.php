<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Event::create(['id'=> 1,'title'=>'Fecha entrega último proyecto','description'=>'Se entrega la última parte del proyecto de Interactivas II el próximo lunes','status'=>'Activo','image'=>'/img/default-image.png','tag_id'=> 3,'course_id'=> 1,'user_specific_id'=> 1]);
        Event::create(['id'=> 2,'title'=>'Proyecto Integrador','description'=>'Reunión de varios cursos para exponer el proyecto integrador','status'=>'Activo','image'=>'/img/default-image.png','tag_id'=> 1,'course_id'=> 1,'user_specific_id'=> 1]);
        Event::create(['id'=> 3,'title'=>'Entregar esquema de Caja Blanca','description'=>'Ver el video de ISTQB en YouTube, el link está en el PDF','status'=>'Activo','image'=>'/img/default-image.png','tag_id'=> 2,'course_id'=> 2,'user_specific_id'=> 1]);
        Event::create(['id'=> 4,'title'=>'ExpoMedia 2024','description'=>'Participa en las actividades y presentaciones de los trabajos de los estudiantes de ITM','status'=>'Activo','image'=>'/img/default-image.png','tag_id'=> 3,'course_id'=> 2,'user_specific_id'=> 1]);
        Event::create(['id'=> 5,'title'=>'Respuesta diseño de página web','description'=>'Va de nuevo Joiner','status'=>'Activo','image'=>'/img/default-image.png','tag_id'=> 3,'course_id'=> 3,'user_specific_id'=> 1]);
        Event::create(['id'=> 6,'title'=>'English Test','description'=>'Topics: Rhetorical patterns, Comparatives and Superlatives, Typographical clues, Vocabulary from Chapters 3-4 English for IT book, Reading comprehension','status'=>'Activo','image'=>'/img/default-image.png','tag_id'=> 2,'course_id'=> 5,'user_specific_id'=> 1]);
        Event::create(['id'=> 7,'title'=>'Realizar premisa y sipnosis del proyecto','description'=>'Traer para la próxima clase la premisa y la sipnosis terminada','status'=>'Activo','image'=>'/img/default-image.png','tag_id'=> 2,'course_id'=> 4,'user_specific_id'=> 1]);

    }
}
