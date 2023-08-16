<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FilmesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert([
            'nome' => 'Carros',
            'categoria' => 'Animação, comédia, aventura e corrida',
            'sinopse' => 'Relâmpago McQueen (Owen Wilson) é um carro de corridas ambicioso, que já em sua 1ª temporada na Copa Pistão torna-se um astro. Ele sonha em se tornar o 1º estreante a vencer o campeonato, o que possibilitaria que assinasse um patrocínio com a cobiçada Dinoco.',
            'ano' => '2006-06-30',
            'link_trailer' => 'https://www.youtube.com/watch?v=mFp_L0Wqv8s',
            'imagem_capa' => 'https://www.cafecomfilme.com.br/media/k2/items/cache/e13ee4b62d3db96de4569a439ec6257c_XL.jpg'
        ]);

        DB::table('filmes')->insert([
            'nome' => 'Carros 2',
            'categoria' => 'Animação, comédia, aventura e corrida',
            'sinopse' => 'O astro das corridas, Relâmpago McQueen, e o carro-guincho, Mate, viajam para disputar o primeiro Grand Prix Mundial, que irá revelar o carro mais veloz do planeta. Nessa jornada imperdível, Mate se envolve com um grupo de espionagem e vive grandes aventuras com seus amigos.',
            'ano' => '2011-06-23',
            'link_trailer' => 'https://www.youtube.com/watch?v=lg5hj2c5Nkk',
            'imagem_capa' => 'https://upload.wikimedia.org/wikipedia/pt/thumb/7/7e/Carros_2_P%C3%B4ster.jpg/250px-Carros_2_P%C3%B4ster.jpg'
        ]);

        DB::table('filmes')->insert([
            'nome' => 'Carros 3',
            'categoria' => 'Animação, comédia, aventura e corrida',
            'sinopse' => 'Durante mais uma disputa eletrizante nas pistas, o campeão Relâmpago McQueen acelerou demais e acabou perdendo o controle. Agora, após ter capotando várias vezes e quase ter partido dessa para melhor, o vermelinho vai ter sua vida alterada para sempre. O acidente foi tão grave que, com os estragos, McQueen pode ter que se aposentar de vez.',
            'ano' => '2017-07-13',
            'link_trailer' => 'https://www.youtube.com/watch?v=2LeOH9AGJQM',
            'imagem_capa' => 'https://br.web.img2.acsta.net/pictures/17/03/10/15/25/441162.jpg'
        ]);
    }
}
