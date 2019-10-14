<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Candidato;
use App\Empresa;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\User');

        for($i=1;$i<=40;$i++){
            User::create([
                'name'              =>  $faker->name,
                'email'             =>  $faker->email,
                'password'          =>  bcrypt('candidato123'),
                'email_verified_at' =>  now(),
            ]);
        }
        for($i=1;$i<=20;$i++){
            Candidato::create([
                'user_id'               =>  $i,
                'nome_completo'         =>  $faker->name,
                'cpf'                   =>  "00000000001",
                'email'                 =>  $faker->email,
                'telefone'              =>  $faker->tollFreePhoneNumber,
                'celular'               =>  $faker->tollFreePhoneNumber,
                'nivel_de_formacao'     =>  "superior completo",
                'tipo_de_deficiencia'   =>  " ",
                'data_de_nascimento'    =>  now(),
            ]);
        }
        for($i=21;$i<=40;$i++){
            Empresa::create([
                'user_id'               =>  $i,
                'nome_empresa'          =>  strtolower($faker->company),
                'cnpj'                  =>  "00000000001",
                'email'                 =>  $faker->email,
                'telefone'              =>  $faker->tollFreePhoneNumber,
            ]);
        }
        User::create([
            'name'                      =>  "Danillo",
            'email'                     =>  "danillo@gmail.com",
            'password'                  =>  bcrypt('12345678'),
            'email_verified_at'         =>  now(),
        ]);
        User::create([
            'name'                      =>  "Alixandre",
            'email'                     =>  "alixandre@gmail.com",
            'password'                  =>  bcrypt('12345678'),
            'email_verified_at'         =>  now(),
        ]);
    }
}
