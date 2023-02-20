<?php

use App\Enums\Naipe;
use App\Http\Controllers\PostController;
use App\Services\ViaCepService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Fluent;
use JetBrains\PhpStorm\NoReturn;


Route::get('/posts', [PostController::class, 'index']);
Route::get('/', function () {

//    $victor = new NaturalPerson('Victor', '123456789');
//    $victor->gender = 'Male';
//
//    dd($victor);

//    $api = '{"name": "Victor", "document": "123123", "gender": "male"}';
//    $person = new PersonDTO(json_decode($api));
//

//    Aula 18 - Classes Anonimas  =========================================================

//    $person = new class(json_decode($api)) {
//        public function __construct(
//            private readonly stdClass $properties,
//            private string            $name = '',
//            private string            $document = '',
//            private string            $gender = ''
//        )
//        {
//            $this->name = $this->properties->name;
//            $this->document = $this->properties->document;
//            $this->gender = $this->properties->gender;
//        }
//
//        /**
//         * @return string
//         */
//        public function getGender(): string
//        {
//            return $this->gender;
//        }
//
//        /**
//         * @return string
//         */
//        public function getName(): string
//        {
//            return $this->name;
//        }
//
//        /**
//         * @return string
//         */
//
//        public function getDocument(): string
//        {
//            return $this->document;
//        }
//    };

//    Aula 19 - Instanceof  =========================================================
//    if ($person instanceof \App\DataTransferObject\Contracts\PersonDTOInterface) {
//        dd('É uma instância de PersonDTO');
//    }
//
//    dd($person);

//    Aula 20 - Métodos Estáticos  =========================================================

//    $response = Http::get("https://jsonplaceholder.typicode.com/posts/1");

//    $response = new Fluent(ViaCepService::handle('01001000'));
//
//    dd($response->cep, $response->logadouro, $response->bairro, $response->localidade, $response->uf, $response->ibge, $response->gia, $response->ddd);

//    Aulas 21 - Enums  =========================================================

    pegarUmaCarta(Naipe::Copas);


});

#[NoReturn] function pegarUmaCarta(Naipe $carta): void
{
    dd('ok', $carta->value);
}
