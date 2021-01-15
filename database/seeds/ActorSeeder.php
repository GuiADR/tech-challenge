<?php

use Illuminate\Database\Seeder;
use App\Models\Actor;

class ActorSeeder extends Seeder
{
    private $actors = [
        [
            'name' => 'Paul A. Partain',
            'bio' => 'Paul A. Partain (Austin, Texas, 03 de maio de 1946 — Austin, Texas, 27 de janeiro de 2005) foi um ator norte-americano, mais conhecido pela sua participação no filme de terror clássico cult The Texas Chain Saw Massacre de 1974, interpretando o deficiente cadeirante Franklin Hardesty.',
            'born_at' => '1946-05-03'
        ],
        [
            'name' => 'Marilyn Burns',
            'bio' => 'Mary Lynn Ann Burns (7 de maio de 1949 – 5 de agosto de 2014), mais conhecida por Marilyn Burns, foi uma atriz norte-americana, célebre principalmente pela sua participação em The Texas Chain Saw Massacre, filme de 1974 pelo qual ficou conhecida como "rainha do grito" nos anos 1970.',
            'born_at' => '1949-05-07'
        ],
        [
            'name' => 'Linda Blair',
            'bio' => 'Linda era considerada, quando pequena, uma criança prodígio pelas suas aparições em comerciais de televisão, em filmes e em uma série (Hidden Faces, 1968). Foram essas aparições que chamaram a atenção de vários executivos da Warner Brothers. Em 1973, Linda foi selecionada para atuar em um filme, O Exorcista, da Warner Brothers. Este foi um clássico, que até hoje obtêm o maior destaque na filmografia de Linda e é um dos mais lembrados filmes quando se fala do gênero "Terror". O Exorcista conta a história de Regan McNeil, uma menina que era doce e meiga até ficar possuída pelo demônio pazuzu e para exorcizá-la, são chamados dois padres. O filme contou com efeitos especiais, novidade naquela época. Chocou a todos que assistiram, prova disso era que até ameaças e perseguições Linda recebeu.[carece de fontes] O filme, em sua sequência, veio seguido de O Exorcista 2 - O Herege, que ao contrário do primeiro, fracassou.',
            'born_at' => '1959-01-22'
        ],
        [
            'name' => 'Ellen Burstyn',
            'bio' => "Atriz premiada com o Óscar de melhor atriz de 1975 por seu trabalho no filme Alice Não Mora Mais Aqui. Foi a primeira mulher a se tornar presidente do The Actor's Studio em New York. É uma das seletas atrizes a ter os principais prêmios americanos Emmy Awards, Academy Awards e Tony Awards, além de vários internacionais.",
            'born_at' => '1932-12-07'
        ],
        [
            'name' => 'Roberto Benigni',
            'bio' => 'Benigni é provavelmente mais conhecido pela sua tragicomédia A Vida é Bela (La vita è bella), filmado em Cortona e Arezzo, sobre um homem que tenta proteger seu filho durante seu internamento em um campo de concentração nazista, fazendo-o acreditar que o Holocausto é um jogo elaborado e que ele tem que seguir fielmente as regras para vencer. O pai de Benigni perdeu dois anos de sua vida num campo de concentração em Bergen-Belsen, e a "A Vida é Bela" é baseado em parte nas experiências de seu pai. O filme foi nomeado em 1998 para sete prêmios da Academia e ganhou na categoria de Melhor Filme Estrangeiro, Melhor Ator (dirigido por ele mesmo) e Melhor Trilha Original, composta e executada por Nicola Piovani. Benigni é um dos dois únicos atores que dirigiram a si mesmo no filme em que ganhou um Oscar de atuação; o outro foi Laurence Olivier, com sua versão de Hamlet.[2]',
            'born_at' => '1952-10-27'
        ],
        [
            'name' => 'Nicoletta Braschi',
            'bio' => "Antes de se casar com Benigni, Nicoletta fez seu primeiro filme que se chamou Tu me Turbi. Casam-se em 1991. Nicoletta fez vários filmes com seu marido. Foi vítima da atriz Paola Minaccioni que fez uma imitação dela, com a colaboração de seu marido, que também participou. Ela é considerada por Roberto Benigni sua musa. Seu ultimo trabalho no cinema foi 'La tigre e la neve (O Tigre e a neve)' estrelado por seu marido e com Jean Reno no elenco. Foi indicada ao prêmio Nastro d'Argento de 1998 como melhor atriz coadjuvante.[1]",
            'born_at' => '1960-08-10'
        ],
        [
            'name' => 'Tom Hanks',
            'bio' => "Thomas Jeffrey Hanks (Concord, 9 de julho de 1956)[2] é um ator e cineasta norte-americano. Destacou-se em diversos filmes de sucesso, como: Forrest Gump, Apollo 13, That Thing You Do!, The Green Mile, The Terminal, Inferno, Saving Private Ryan, You've Got Mail, Sleepless In Seattle. Charlie Wilson's War, Catch Me If You Can, Cast Away, A League Of Their Own, The Da Vinci Code, Captain Phillips, Angels & Demons, Splash, Big, Road To Perdition, Philadelphia e como a voz do personagem Woody na série de filmes de animação Toy Story e também pelas vozes em The Polar Express.",
            'born_at' => '1956-06-09'
        ],
        [
            'name' => 'Morgan Freeman',
            'bio' => 'Morgan Porterfield Freeman Jr. ( Memphis, Tennessee, 1 de junho de 1937) é um premiado ator, produtor, narrador e diretor de cinema estadunidense. Ele é mais conhecido pelas atuações em Driving Miss Daisy, Glory, Robin Hood: Prince of Thieves, Unforgiven, Se7en, Bruce Almighty, Evan Almighty, Million Dollar Baby, Shawshank Redemption, Batman Begins, The Dark Knight , The Dark Knight Rises e Invictus. Atualmente, é o produtor executivo do drama Madam Secretary, da CBS. [1]',
            'born_at' => '1937-06-01'
        ],
        [
            'name' => 'Tim Robbins',
            'bio' => 'Timothy Francis "Tim" Robbins (West Covina, 16 de outubro de 1958), é um ator, roteirista, produtor, cineasta e músico norte-americano, vencedor do Óscar de Melhor Ator Coadjuvante pela sua atuação em Mystic River, de Clint Eastwood. .[1]',
            'born_at' => '1958-10-16'
        ],
        [
            'name' => 'Al Pacino',
            'bio' => 'Alfredo James Pacino (Nova Iorque, 25 de abril de 1940) é um ator, produtor, roteirista e cineasta norte-americano de origem italiana. Conhecido, especialmente, por interpretar Michael Corleone na trilogia O Poderoso Chefão e Tony Montana em Scarface. Ganhou o Oscar de Melhor Ator no 65ª Prêmio da Academia por sua atuação como Frank Slade em Perfume de Mulher. Antes de sua vitória já havia recebido sete indicações ao Oscar, incluindo uma naquele mesmo ano.',
            'born_at' => '1940-04-25'
        ],
        [
            'name' => 'Marlon Brando',
            'bio' => 'Marlon Brando, Jr. (Omaha, 3 de abril de 1924 – Los Angeles, 1 de julho de 2004) foi um ator de cinema e teatro e diretor norte-americano. É saudado por trazer um estilo realista e emocionante na atuação em seus filmes, e é amplamente considerado um dos maiores e mais influentes atores de todos os tempos.[1][2]. Brando também foi um ativista por muitas causas, notadamente o movimento pelos direitos civis e vários movimentos indígenas americanos. Tendo estudado com Stella Adler nos anos 1940, ele é considerado um dos primeiros atores a trazer o sistema Stanislavski de atuação e método de atuação, derivado do sistema Stanislavski, para o público mainstream.',
            'born_at' => '1928-04-03'
        ],
        [
            'name' => 'Tom Holland',
            'bio' => 'Thomas Stanley “Tom” Holland (Kingston upon Thames, 1 de junho de 1996)[3] é um ator, dançarino e dublador britânico. É mais conhecido por interpretar Peter Parker / Homem-Aranha no Universo Cinematográfico Marvel, até agora aparecendo ou estrelando cinco filmes: Capitão América: Guerra Civil (2016), Spider-Man: Homecoming (2017), Avengers: Infinity War (2018), Avengers: Endgame (2019) e Homem-Aranha: Longe de Casa (2019). Holland apareceu anteriormente no palco no papel de Billy Elliot,The Musical no West End de Londres em 2008. Seus outros grandes filmes incluem O Impossível (2012), No Coração do Mar (2015) e The Lost City of Z (2016). Ele também estrelou sua voz como o cachorro Jip em Dolittle (2020), e nas animações Spies in Disguise (2019) como Walter Beckett e Onward (2020) como Ian Lightfoot. Também estrelará os filmes The Devil All The Time, e Uncharted como o protagonista Nathan Drake. Em 2017, Tom recebeu o prêmio BAFTA de Melhor Ator em Ascensão.',
            'born_at' => '1996-06-01'
        ],
        [
            'name' => 'Robert Downey Jr.',
            'bio' => 'Robert John Downey, Jr. (Nova Iorque, 4 de abril de 1965) é um ator, cantor, compositor e pianista[2] americano. Estreou como ator em 1970 aos 5 anos, no filme Pound, dirigido por seu pai, Robert Downey, Sr., e desde então tem atuado constantemente em trabalhos para televisão, cinema e ópera. Durante os anos 80, ele participou de diversos filmes associado a Brat Pack. Less than Zero (br: Abaixo de Zero) foi um filme particularmente notável, não apenas porque foi a primeira atuação de Downey aclamada pela crítica, mas também porque impulsionou o já existente problema com drogas do ator. Após este filme, Downey passou a atuar em filmes de maior escala, como Air America, Soapdish e Natural Born Killers (Assassinos por Natureza). Ele interpretou Charlie Chaplin em 1992 no filme Chaplin, pelo qual foi indicado ao Oscar de melhor ator. Porém, foi como o bilionário Tony Stark / Homem de Ferro que ganhou maior notoriedade, interpretando-o no Universo Cinematográfico Marvel. Foi o ator mais bem pago do mundo durante três anos seguidos (2013, 2014, 2015), com ganhos de $50, $75, e $80 milhões de dólares, respectivamente.',
            'born_at' => '1965-04-04'
        ],
        [
            'name' => 'Adam Sandler',
            'bio' => 'Adam Richard Sandler (Brooklyn, Nova York, 9 de setembro de 1966) é um ator, comediante, produtor, roteirista, dublador e músico norte-americano, de origem judaica. Depois de entrar para o elenco do Saturday Night Live, Sandler passou a estrelar vários filmes de Hollywood que juntos arrecadaram mais de US$ 2 bilhões de dólares nas bilheterias.',
            'born_at' => '1966-09-09'
        ],
        [
            'name' => 'Jim Carrey',
            'bio' => 'James Eugene "Jim" Carrey (Newmarket, 17 de janeiro de 1962) é um ator, comediante, dublador, roteirista, produtor e pintor canadense. Conhecido por seu estilo enérgico e pastelão, além das muitas caretas, que tornaram-se sua marca registrada. É conhecido por interpretar papéis cômicos em filmes como Ace Ventura, Debi e Loide, O Máscara, O Pentelho, O Mentiroso, Eu, Eu Mesmo e Irene, Todo Poderoso, Desventuras em Série e As Loucuras de Dick e Jane. Carrey atingiu sucesso de críticas em interpretações dramáticas em filmes como: The Truman Show, Man on the Moon e Eternal Sunshine of the Spotless Mind.',
            'born_at' => '1962-01-17'
        ],
        [
            'name' => 'Eddie Murphy',
            'bio' => 'Edward "Eddie" Regan Murphy (Brooklyn, 3 de abril de 1961) é um ator, dublador, diretor, produtor, comediante e cantor estadunidense indicado ao Oscar. Em 1980, aos dezenove anos de idade, pouco depois de se graduar no ensino médio, participou do programa da NBC Saturday Night Live. Na temporada de 1983-1984, Murphy salvou o programa que apesar de contar com figuras como John Belushi e Chevy Chase, não alcançava boas audiências, depois de apenas 2 temporadas, Eddie Murphy já era grande demais para a televisão, e abandonou o programa para poder consolidar sua carreira como ator de cinema. Em 1984 foi premiado com um Grammy por seu álbum de comédia intitulado Eddie Murphy: Comedian de 1983. Murphy fez uma quantidade enorme de sucessos no gênero de comédia, mais que qualquer outro comediante, incluindo a bem-sucedida série Beverly Hills Cop (conhecida no Brasil como Um Tira da Pesada e em Portugal como O Caça Polícias), Coming to America (Um Principe Em Nova York), The Nutty Professor (O Professor Aloprado/Chanfrado) e Dr. Dolittle. Murphy foi indicado ao prêmio Globo de Ouro de melhor ator em comédia ou musical por sua performance nos filmes Beverly Hills Cop, Trading Places (Trocando as Bolas / Os Ricos e os Pobres) e The Nutty Professor. Em 2007, ganhou o prêmio Globo de Ouro de melhor ator coadjuvante pelo filme Dreamgirls. Murphy também é reconhecido como ator de voz (dublador), fazendo a voz do burro falante na trilogia Shrek e do dragão Mushu no filme da Disney Mulan. Murphy tem a distinção de ter estrelado em mais continuações do que qualquer outro ator de Hollywood. Tal lista inclui os filmes: Beverly Hills Cop II (1987), Another 48 h. (1990), Beverly Hills Cop III (1994), Dr. Dolittle 2 (2001), Nutty Professor II: The Klumps (2000), Shrek 2 (2004), Shrek The Third (2007) e Shrek Forever After (2010)',
            'born_at' => '1961-04-03',
        ],
        [
            'name' => 'Jada Pinkett Smith',
            'bio' => 'Atriz que participou da sitcom A Different World e estrelou diversos sucessos, como O Professor Aloprado e Matrix. Como dubladora, emprestou sua voz para a franquia de filmes Madagascar. Além de viver a vilã Fish Mooney na série Gotham, da Fox, também integrou o elenco do filme Magic Mike XXL, em 2015.',
            'born_at' => '1971-09-18',
        ],
    ];

    public function run()
    {
        foreach ($this->actors as $data) {
            $actor = new Actor();

            $actor->name = $data['name'];
            $actor->bio = $data['bio'];
            $actor->born_at = $data['born_at'];
            $actor->save();
        }
    }
}
