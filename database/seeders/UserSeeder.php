<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Yuwono M.D',
            'username' => 'yuwono_md',
            'password' => bcrypt('yuwono_md'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('judges')->insert([
            'user_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Mychael M.',
            'username' => 'mychael_m',
            'password' => bcrypt('mychael_m'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('judges')->insert([
            'user_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Evan T',
            'username' => 'evan_t',
            'password' => bcrypt('evan_t'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('judges')->insert([
            'user_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Stephanus Eko',
            'username' => 'stephanus_eko',
            'password' => bcrypt('stephanus_eko'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('judges')->insert([
            'user_id' => 4,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 5,
            'name' => 'David S.',
            'username' => 'david_s',
            'password' => bcrypt('david_s'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('judges')->insert([
            'user_id' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 6,
            'name' => 'Theresia',
            'username' => 'theresia',
            'password' => bcrypt('theresia'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('judges')->insert([
            'user_id' => 6,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 7,
            'name' => 'Laura',
            'username' => 'laura',
            'password' => bcrypt('laura'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('judges')->insert([
            'user_id' => 7,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 8,
            'name' => 'Caecilia Citra',
            'username' => 'caecilia_citra',
            'password' => bcrypt('caecilia_citra'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('judges')->insert([
            'user_id' => 8,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 9,
            'name' => 'Team 1',
            'username' => 'team_1',
            'password' => bcrypt('team_1'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('teams')->insert([
            'user_id' => 9,
            'mentors' => 'Lanovia Liem, Atallah Dafa',
            'members' => 'Ileene Trinia Santoso, Rifqie Tilqa Reamizard, Nick Devano Sulistio, William Johnson Wongge, Kenneth Raffelino Sugianto',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 10,
            'name' => 'Team 2',
            'username' => 'team_2',
            'password' => bcrypt('team_2'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('teams')->insert([
            'user_id' => 10,
            'mentors' => 'Bryan, Albert Gavra Septiawan',
            'members' => 'M. Yusrizal, Dave Nathaniel Yoseph, Kevin Christian ,Fadhil Muhammad Rizki Bahri, Adriel Alessandro Christian',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 11,
            'name' => 'Team 3',
            'username' => 'team_3',
            'password' => bcrypt('team_3'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('teams')->insert([
            'user_id' => 11,
            'mentors' => 'Daniel Aprillio, Jeffrey Verdianto',
            'members' => 'Joseph Karunia Wijaya, Risky, Marcell Jeremy Wiradinata, Darell Aditya Sean Darmayasa, Edward Hartantio',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 12,
            'name' => 'Team 4',
            'username' => 'team_4',
            'password' => bcrypt('team_4'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('teams')->insert([
            'user_id' => 12,
            'mentors' => 'Kezia Ferdinandus, Feliza Faizal',
            'members' => 'I Gede Nengah Rama Adi Nugraha, Vebrillia Santoso, Nuzulul Salsabila, Putri Buana Ningtyas, Jovan Louis Lemuel',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 13,
            'name' => 'Team 5',
            'username' => 'team_5',
            'password' => bcrypt('team_5'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('teams')->insert([
            'user_id' => 13,
            'mentors' => 'Timothyus Kevin Dewanto, Ferdy Putra Asmara',
            'members' => 'Bryan Anthony, Hagen Kwik, Dhammiko Dharmawan, Stefanus Reynaldo, Owen indrawan',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 14,
            'name' => 'Team 6',
            'username' => 'team_6',
            'password' => bcrypt('team_6'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('teams')->insert([
            'user_id' => 14,
            'mentors' => 'Sintya, Armaida, Gholia Lestari',
            'members' => 'Alfonsus Reklin Natanael, Muhammad Irsyaad Nurrahman, Michelle Alvera Lolang, Michelle Swastika Bianglala Nusantara, Rivas Mardani',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 15,
            'name' => 'Team 7',
            'username' => 'team_7',
            'password' => bcrypt('team_7'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('teams')->insert([
            'user_id' => 15,
            'mentors' => 'Nur Azizah, Haning Galih Rani Kumbara',
            'members' => 'Jeshaiah Jesse, Devano Anggara Putra Herwanto, Ardhitya Herdiansyah Pranata, Vincent Farellio Gunawan, Nicholas Dylan Lienardi',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 16,
            'name' => 'Team 8',
            'username' => 'team_8',
            'password' => bcrypt('team_8'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('teams')->insert([
            'user_id' => 16,
            'mentors' => 'Selyandaru Riskanadi, Enrico Almer Tahara',
            'members' => 'Kenneth Winston Tjandra, Jevon Cledwyn Subagio, Steven Rafael Sunarto, Jason Emanuel Susanto, Evan Aradhy Cahyono',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 17,
            'name' => 'Team 9',
            'username' => 'team_9',
            'password' => bcrypt('team_9'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('teams')->insert([
            'user_id' => 17,
            'mentors' => 'Achmad Rijalu Arianindita, Syamsuddin Putra Riefli',
            'members' => 'Tegar Marino, Gabriela Bernice Handoko, Miranda Utami, Kathlyne Sarah Fania Panggabean, Ilham Risqi Rudyansyach',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 18,
            'name' => 'Team 10',
            'username' => 'team_10',
            'password' => bcrypt('team_10'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('teams')->insert([
            'user_id' => 18,
            'mentors' => 'Kenny Jinhiro Wibowo, Joey Wiryawan',
            'members' => 'Nicholas Christian Irawan, Hans Joachim Wiryonoputro, Arya Winesa Sipayung, Davina Teresa Wijaya, Marsha Alexis Likorawung',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'id' => 19,
            'name' => 'Team 11',
            'username' => 'team_11',
            'password' => bcrypt('team_11'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('teams')->insert([
            'user_id' => 19,
            'mentors' => 'Timothy, Billy Jason',
            'members' => 'Muhammad Gathfan Fasha, Evelyn Callista Yaurentius, Micheila Jiemesha, Alexander Hartono, Muhammad Ghifari Febriansyah',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
