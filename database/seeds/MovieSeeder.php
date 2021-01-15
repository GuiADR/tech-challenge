<?php

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Genre;

class MovieSeeder extends Seeder
{
    private $movies = [
        [
            'name' => 'Bruce Almighty',
            'year' => 2003,
            'synopsis' => 'Bruce Nolan é um jornalista que tem a vida perfeita. Quando as coisas começam a dar errado, Bruce questiona Deus e a forma como ele comanda a Terra. Então, o Todo Poderoso dá a Bruce todos seus poderes. Mas Bruce se dá conta de como é difícil ser onisciente, onipresente e onipotente.',
            'runtime' => 101,
            'released_at' => '2003-05-23',
            'cost' => 81000000,
            'genre' => 'comedy',
        ],
        [
            'name' => 'Avengers: Infinity War',
            'year' => '2018',
            'synopsis' => 'Homem de Ferro, Thor, Hulk e os Vingadores se unem para combater seu inimigo mais poderoso, o maligno Thanos. Em uma missão para coletar todas as seis pedras infinitas, Thanos planeja usá-las para infligir sua vontade maléfica sobre a realidade.',
            'runtime' => '149',
            'released_at' => '2018-04-23',
            'cost' => '400000000',
            'genre' => 'action',
        ],
        [
            'name' => 'Avengers: Endgame',
            'year' => '2019',
            'synopsis' => 'Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.',
            'runtime' => '181',
            'released_at' => '2019-04-22',
            'cost' => '357000000',
            'genre' => 'action',
        ],
        [
            'name' => 'The Texas Chain Saw Massacre',
            'year' => '1974',
            'synopsis' => 'Em 1973, a polícia texana deu como encerrado o caso de um terrível massacre de 33 pessoas provocado por um homem que usava uma máscara feita de pele humana. Nos anos que se seguiram os policiais foram acusados de fazer uma péssima investigação e de terem matado o cara errado. Só que dessa vez, o único sobrevivente do massacre vai contar em detalhes o que realmente aconteceu na deserta estrada do Texas, quando ele e mais 4 amigos estavam indo visitar o seu avô.',
            'runtime' => '84',
            'released_at' => '1974-10-01',
            'cost' => '300000',
            'genre' => 'horror',
        ],
        [
            'name' => 'The Exorcist',
            'year' => '1973',
            'synopsis' => 'Uma atriz vai gradativamente tomando consciência de que a sua filha de doze anos está tendo um comportamento completamente assustador. Deste modo, ela pede ajuda a um padre, que também é um psiquiatra, e este chega a conclusão de que a garota está possuída pelo demônio. Ele solicita então a ajuda de um segundo sacerdote, especialista em exorcismo, para tentar livrar a menina desta terrível possessão.',
            'runtime' => '132',
            'released_at' => '1973-12-26',
            'cost' => '12000000',
            'genre' => 'horror',
        ],
        [
            'name' => 'The Green Mile',
            'year' => '1999',
            'synopsis' => 'Um carcereiro tem um relacionamento incomum e comovente com um preso que está no corredor na morte: Coffey, um negro enorme, condenado por ter matado brutalmente duas gêmeas de nove anos. Ele tem tamanho e força para matar qualquer um, mas seu comportamento é completamente oposto à sua aparência. Além de ser simples, ingênuo e ter pavor do escuro, ele possui um dom sobrenatural. Com o passar do tempo, o carcereiro aprende que, às vezes, os milagres acontecem nos lugares mais inesperados.',
            'runtime' => '189',
            'released_at' => '1999-12-10',
            'cost' => '60000000',
            'genre' => 'drama',
        ],
        [
            'name' => 'La vita è bella',
            'year' => '1997',
            'synopsis' => 'Durante a Segunda Guerra Mundial na Itália, o judeu Guido e seu filho Giosué são levados para um campo de concentração nazista. Afastado da mulher, ele tem que usar sua imaginação para fazer o menino acreditar que estão participando de uma grande brincadeira, com o intuito de protegê-lo do terror e da violência que os cercam.',
            'runtime' => '116',
            'released_at' => '1997-12-20',
            'cost' => '20000000',
            'genre' => 'drama',
        ],
        [
            'name' => 'Forrest Gump',
            'year' => '1994',
            'synopsis' => 'Mesmo com o raciocínio lento, Forrest Gump nunca se sentiu desfavorecido. Graças ao apoio da mãe, ele teve uma vida normal. Seja no campo de futebol como um astro do esporte, lutando no Vietnã ou como capitão de um barco de pesca de camarão, Forrest inspira a todos com seu otimismo. Mas a pessoa que Forrest mais ama pode ser a mais difícil de salvar: seu amor de infância, a doce e perturbada Jenny.',
            'runtime' => '142',
            'released_at' => '1994-07-06',
            'cost' => '55000000',
            'genre' => 'drama',
        ],
        [
            'name' => 'The Shawshank Redemption',
            'year' => '1994',
            'synopsis' => 'Andy Dufresne é condenado a duas prisões perpétuas consecutivas pelas mortes de sua esposa e de seu amante. Porém, só Andy sabe que ele não cometeu os crimes. No presídio, durante dezenove anos, ele faz amizade com Red, sofre as brutalidades da vida na cadeia, se adapta, ajuda os carcereiros, etc.',
            'runtime' => '142',
            'released_at' => '1994-09-23',
            'cost' => '25000000',
            'genre' => 'drama',
        ],
        [
            'name' => 'The Godfather',
            'year' => '1972',
            'synopsis' => 'Após a máfia matar sua família, o jovem Vito foge da sua cidade na Sicília e vai para a América. Vito luta para manter sua família. Ele mata Black Hand Fanucci, que exigia dos comerciantes uma parte dos seus ganhos. Com a morte de Fanucci, o poderio de Vito cresce, mas sua família é o que mais importa para ele. Agora baseado no Lago Tahoe, Michael planeja fazer incursões em Las Vegas e Havana instalando negócios ligados ao lazer, mas descobre que aliados como Hyman Roth estão tentando matá-lo.',
            'runtime' => '175',
            'released_at' => '1972-03-15',
            'cost' => '6500000',
            'genre' => 'drama',
        ],
        [
            'name' => 'Spider-Man: Homecoming',
            'year' => '2017',
            'synopsis' => 'Depois de lutar ao lado dos Vingadores, chegou a hora do jovem Peter Parker voltar para casa em Nova York ao lado de sua tia May. Sob o olhar atento do mentor Tony Stark, Peter começa a abraçar sua nova identidade como Homem-Aranha e combate diariamente pequenos crimes nas redondezas. Ele acredita que encontrou a missão de sua vida quando o terrível vilão Abutre surge ameaçando a cidade. O problema é que a tarefa não será tão fácil como ele imaginava.',
            'runtime' => '133',
            'released_at' => '2017-06-28',
            'cost' => '175000000',
            'genre' => 'action',
        ],
        [
            'name' => 'Sherlock Holmes',
            'year' => '2009',
            'synopsis' => 'Quando uma série de assassinatos brutais aterroriza Londres, não demora muito para o lendário detetive Sherlock Holmes e seu parceiro solucionador de crimes, o Dr. Watson, encontrar o assassino, Lord Blackwood. Um devoto das artes das trevas, Blackwood tem um esquema maior em mente e sua execução está em seus planos. O jogo está em andamento quando Blackwood parece subir da sepultura, levando Holmes e Watson para o mundo das tecnologias ocultas e estranhas.',
            'runtime' => '129',
            'released_at' => '2009-12-25',
            'cost' => '90000000',
            'genre' => 'action',
        ],
        [
            'name' => 'Jack and Jill',
            'year' => '2011',
            'synopsis' => 'Jack, um publicitário de sucesso com uma linda família, enlouquece com a visita de sua irmã gêmea Jill no dia de Ação de Graças. As coisas ficam ainda mais fora de controle quando Jill decide ficar mais tempo.',
            'runtime' => '91',
            'released_at' => '2011-11-11',
            'cost' => '79000000',
            'genre' => 'comedy',
        ],
        [
            'name' => 'The Nutty Professor',
            'year' => '1996',
            'synopsis' => 'Sherman Klump é um professor universitário com grandes conhecimentos de genética, mas que sempre foi ridicularizado por ser extremamente gordo. Porém, quando recebe uma atenção especial de uma bela e jovem professora de matemática, ele decide ingerir uma poção ainda em fase de testes, que altera a cadeia de DNA e faz com que se transforme em um bonitão esbelto, Buddy Love. A partir de então, Sherman passa a levar uma vida dupla, pois o experimento tem um efeito que dura pouco tempo.',
            'runtime' => '95',
            'released_at' => '1996-06-28',
            'cost' => '54000000',
            'genre' => 'comedy',
        ],
        [
            'name' => 'Me, Myself & Irene',
            'year' => '2000',
            'synopsis' => 'Charlie Baileygates é um policial veterano com 17 anos de carreira. Ele é trabalhador, prestativo e um pai devotado. Infelizmente, ele sofre de transtorno de dupla personalidade, e quando deixa de tomar seus remédios, vira Hank, a versão agressiva de Charlie. Os dois lados do agente se apaixonam pela mesma mulher e brigam entre si para conquistar o coração da moça.',
            'runtime' => '116',
            'released_at' => '2000-06-23',
            'cost' => '51000000',
            'genre' => 'comedy',
        ],
        [
            'name' => 'Norbit',
            'year' => '2007',
            'synopsis' => 'Desde que foi abandonado em um orfanato, Norbit sempre teve uma vida muito dura. Agora, casado com Rasputia, sua vida é ainda pior. Mas tudo muda quando sua antiga namorada volta à cidade.',
            'runtime' => '102',
            'released_at' => '2007-02-09',
            'cost' => '60000000',
            'genre' => 'comedy',
        ],
    ];

    public function run()
    {
        foreach ($this->movies as $data) {
            $movie = new Movie();

            $movie->name = $data['name'];
            $movie->year = $data['year'];
            $movie->synopsis = $data['synopsis'];
            $movie->runtime = $data['runtime'];
            $movie->released_at = $data['released_at'];
            $movie->cost = $data['cost'];
            $movie->id_genre = Genre::where('name', $data['genre'])->select('id')->get()[0]['id'];
            $movie->save();
        }
    }
}
