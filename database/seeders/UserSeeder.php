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
            'password' => bcrypt('Nwj4Zn'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('judges')->insert([
            'user_id' => 1,
            'field' => 'IoT, FnB, & Angel Investor',
            'about' => 'I am interested in technology. I am interested in companies that have a clear vision and mission.
            projects that can be useful for human life. All members have the same heart and support each other.',
            'img_portrait' => 'pak_yuwono/pak_yuwono.png',
            'img_portfolio' => 'pak_yuwono/portfolio_pak_yuwono.png',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Mychael M.',
            'username' => 'mychael_m',
            'password' => bcrypt('eL49yf'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('judges')->insert([
            'user_id' => 2,
            'field' => 'FnB, Service Tech, & Angel Investor',
            'about' => 'I like a business that has a clear purpose. The vision and mission are built in accordance
            with the principle of continously improving the quality of services, growing the country\'s economy,
            and creating job opportunities for many people.',
            'img_portrait' => 'pak_mychael/pak_mychael.png',
            'img_portfolio' => 'pak_mychael/portfolio_pak_mychael.png',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Evan T',
            'username' => 'evan_t',
            'password' => bcrypt('N58v37'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('judges')->insert([
            'user_id' => 3,
            'field' => 'Deep Learning, Game, Self Driving Car, & Imaginary Tech',
            'about' => 'Future, is about implementing your imaginary and make it sustain for the entire time.
            To make something from unreal became real, I\'m here to help and support your dream not just to become real
            but beyond.',
            'img_portrait' => 'pak_evan/pak_evan.png',
            'img_portfolio' => 'pak_evan/portfolio_pak_evan.png',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Stephanus Eko',
            'username' => 'stephanus_eko',
            'password' => bcrypt('5s7eKs'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('judges')->insert([
            'user_id' => 4,
            'field' => 'Multi-sided Platforms & Angel Investor',
            'about' => 'I love businesses that solve people\'s problems, support them, and make their lives easier!',
            'img_portrait' => 'pak_eko/pak_eko.png',
            'img_portfolio' => 'pak_eko/portfolio_pak_eko.png',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 5,
            'name' => 'David S.',
            'username' => 'david_s',
            'password' => bcrypt('uSxs8d'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('judges')->insert([
            'user_id' => 5,
            'field' => 'IoT, Internet Security, FnB, Healthcare, Angel Investor, & Education',
            'about' => 'Have interest in Data Communication, IT Security, Education and Healthcare. Love travelling
            for a new place and culinary.',
            'img_portrait' => 'pak_david/pak_david.png',
            'img_portfolio' => 'pak_david/portfolio_pak_david.png',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 6,
            'name' => 'Theresia',
            'username' => 'theresia',
            'password' => bcrypt('EvmN55'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('judges')->insert([
            'user_id' => 6,
            'field' => 'Renewable Energy, Healthcare & Wellbeing',
            'about' => 'A sustainability development evangelist who also takes great interest in Healthcare and well-being
            product especially concerning with senior and marginilized citizen.',
            'img_portrait' => 'bu_theresia/bu_theresia.png',
            'img_portfolio' => 'bu_theresia/portfolio_bu_theresia.png',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 7,
            'name' => 'Laura',
            'username' => 'laura',
            'password' => bcrypt('WVwP7E'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('judges')->insert([
            'user_id' => 7,
            'field' => 'Edu Tech, Retail, SaaS, & Angel Investor',
            'about' => 'I like business ideas that are out of the box and i like it even more when they make tons of money.',
            'img_portrait' => 'bu_laura/bu_laura.png',
            'img_portfolio' => 'bu_laura/portfolio_bu_laura.png',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 8,
            'name' => 'Caecilia Citra',
            'username' => 'caecilia_citra',
            'password' => bcrypt('Nv75k2'),
            'role' => 'judge',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('judges')->insert([
            'user_id' => 8,
            'field' => 'Angel Investor',
            'about' => 'I like a business that has a balance between goodwill purpose and making money. I appreciate
            business that has members who dedicated to the business and know what they\'re doing.',
            'img_portrait' => 'bu_citra/bu_citra.png',
            'img_portfolio' => 'bu_citra/portfolio_bu_citra.png',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 9,
            'name' => 'Team 1',
            'username' => 'team_1',
            'password' => bcrypt('Veh8zB'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('teams')->insert([
            'user_id' => 9,
            'qr_judge' => 'judge_1.png',
            'qr_game' => 'log_1.png',
            'mentors' => 'Lanovia Liem, Atallah Dafa',
            'members' => 'Ileene Trinia Santoso, Rifqie Tilqa Reamizard, Nick Devano Sulistio, William Johnson Wongge, Kenneth Raffelino Sugianto',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 10,
            'name' => 'Team 2',
            'username' => 'team_2',
            'password' => bcrypt('c7HgqZ'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('teams')->insert([
            'user_id' => 10,
            'qr_judge' => 'judge_2.png',
            'qr_game' => 'log_2.png',
            'mentors' => 'Bryan, Albert Gavra Septiawan',
            'members' => 'M. Yusrizal, Dave Nathaniel Yoseph, Kevin Christian ,Fadhil Muhammad Rizki Bahri, Adriel Alessandro Christian',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 11,
            'name' => 'Team 3',
            'username' => 'team_3',
            'password' => bcrypt('G9rjMY'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('teams')->insert([
            'user_id' => 11,
            'qr_judge' => 'judge_3.png',
            'qr_game' => 'log_3.png',
            'mentors' => 'Daniel Aprillio, Jeffrey Verdianto',
            'members' => 'Joseph Karunia Wijaya, Risky, Marcell Jeremy Wiradinata, Darell Aditya Sean Darmayasa, Edward Hartantio',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 12,
            'name' => 'Team 4',
            'username' => 'team_4',
            'password' => bcrypt('2CMQhW'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('teams')->insert([
            'user_id' => 12,
            'qr_judge' => 'judge_4.png',
            'qr_game' => 'log_4.png',
            'mentors' => 'Kezia Ferdinandus, Feliza Faizal',
            'members' => 'I Gede Nengah Rama Adi Nugraha, Vebrillia Santoso, Nuzulul Salsabila, Putri Buana Ningtyas, Jovan Louis Lemuel',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 13,
            'name' => 'Team 5',
            'username' => 'team_5',
            'password' => bcrypt('Pc4T9L'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('teams')->insert([
            'user_id' => 13,
            'qr_judge' => 'judge_5.png',
            'qr_game' => 'log_5.png',
            'mentors' => 'Timothyus Kevin Dewanto, Ferdy Putra Asmara',
            'members' => 'Bryan Anthony, Hagen Kwik, Dhammiko Dharmawan, Stefanus Reynaldo, Owen indrawan',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 14,
            'name' => 'Team 6',
            'username' => 'team_6',
            'password' => bcrypt('v6U6Mn'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('teams')->insert([
            'user_id' => 14,
            'qr_judge' => 'judge_6.png',
            'qr_game' => 'log_6.png',
            'mentors' => 'Sintya, Armaida, Gholia Lestari',
            'members' => 'Alfonsus Reklin Natanael, Muhammad Irsyaad Nurrahman, Michelle Alvera Lolang, Michelle Swastika Bianglala Nusantara, Rivas Mardani',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 15,
            'name' => 'Team 7',
            'username' => 'team_7',
            'password' => bcrypt('PEz6Cj'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('teams')->insert([
            'user_id' => 15,
            'qr_judge' => 'judge_7.png',
            'qr_game' => 'log_7.png',
            'mentors' => 'Nur Azizah, Haning Galih Rani Kumbara',
            'members' => 'Jeshaiah Jesse, Devano Anggara Putra Herwanto, Ardhitya Herdiansyah Pranata, Vincent Farellio Gunawan, Nicholas Dylan Lienardi',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 16,
            'name' => 'Team 8',
            'username' => 'team_8',
            'password' => bcrypt('YKj7Qu'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('teams')->insert([
            'user_id' => 16,
            'qr_judge' => 'judge_8.png',
            'qr_game' => 'log_8.png',
            'mentors' => 'Selyandaru Riskanadi, Enrico Almer Tahara',
            'members' => 'Kenneth Winston Tjandra, Jevon Cledwyn Subagio, Steven Rafael Sunarto, Jason Emanuel Susanto, Evan Aradhy Cahyono',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 17,
            'name' => 'Team 9',
            'username' => 'team_9',
            'password' => bcrypt('yq39UE'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('teams')->insert([
            'user_id' => 17,
            'qr_judge' => 'judge_9.png',
            'qr_game' => 'log_9.png',
            'mentors' => 'Achmad Rijalu Arianindita, Syamsuddin Putra Riefli',
            'members' => 'Tegar Marino, Gabriela Bernice Handoko, Miranda Utami, Kathlyne Sarah Fania Panggabean, Ilham Risqi Rudyansyach',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 18,
            'name' => 'Team 10',
            'username' => 'team_10',
            'password' => bcrypt('3bNL8J'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('teams')->insert([
            'user_id' => 18,
            'qr_judge' => 'judge_10.png',
            'qr_game' => 'log_10.png',
            'mentors' => 'Kenny Jinhiro Wibowo, Joey Wiryawan',
            'members' => 'Nicholas Christian Irawan, Hans Joachim Wiryonoputro, Arya Winesa Sipayung, Davina Teresa Wijaya, Marsha Alexis Likorawung',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 19,
            'name' => 'Team 11',
            'username' => 'team_11',
            'password' => bcrypt('aV2wjV'),
            'role' => 'team',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
        DB::table('teams')->insert([
            'user_id' => 19,
            'qr_judge' => 'judge_11.png',
            'qr_game' => 'log_11.png',
            'mentors' => 'Timothy, Billy Jason',
            'members' => 'Muhammad Gathfan Fasha, Evelyn Callista Yaurentius, Micheila Jiemesha, Alexander Hartono, Muhammad Ghifari Febriansyah',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 20,
            'name' => 'Minigames 1',
            'username' => 'minigames_1',
            'password' => bcrypt('2uewLk'),
            'role' => 'game',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 21,
            'name' => 'Minigames 2',
            'username' => 'minigames_2',
            'password' => bcrypt('x6DDxN'),
            'role' => 'game',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 22,
            'name' => 'Minigames 3',
            'username' => 'minigames_3',
            'password' => bcrypt('eeCf3F'),
            'role' => 'game',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 23,
            'name' => 'Minigames 4',
            'username' => 'minigames_4',
            'password' => bcrypt('EZ9GxZ'),
            'role' => 'game',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 24,
            'name' => 'Minigames 5',
            'username' => 'minigames_5',
            'password' => bcrypt('me7YS8'),
            'role' => 'game',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 25,
            'name' => 'Minigames 6',
            'username' => 'minigames_6',
            'password' => bcrypt('HPWx3Y'),
            'role' => 'game',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 26,
            'name' => 'Minigames 7',
            'username' => 'minigames_7',
            'password' => bcrypt('N9dHHs'),
            'role' => 'game',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 27,
            'name' => 'Minigames 8',
            'username' => 'minigames_8',
            'password' => bcrypt('8X5Apb'),
            'role' => 'game',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);

        DB::table('users')->insert([
            'id' => 28,
            'name' => 'Minigames 9',
            'username' => 'minigames_9',
            'password' => bcrypt('vt4CAX'),
            'role' => 'game',
            'created_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => \Carbon\Carbon::now()->timezone('Asia/Jakarta')
        ]);
    }
}
