# Cursos Abertos - IFES
## Vitrine de MOOC's
Trabalho em desenvolvimento dentro da Coordenadoria Geral De Tecnologias Educacionais - CGTE, situada no Centro de Referência em Formação e em Educação a Distância - Cefor do Instituto Federal do Espírito Santo.

[Acessar Cursos Abertos ifes](http://mooc.cefor.ifes.edu.br)

**ano:** início em 2019

### **Lançamento MVP**

Para dar início ao projeto optou-se por lançar um MVP como canal de acesso para os cursos MOOC oferecidos, monstrando as facilidades e benefícios da realização dos cursos e as ferramentas disponíveis para os alunos.

**Tecnologias aplicadas:** Bootstrap, JavaScript, PHP.

![Alt ou título da imagem](/vitrine_small.png)

### Integração Moodle - Wordpress
Após o lançamento da Vitrine deu-se início ao processo de integração o LMS(Learning Management System) Moodle, plataforma dos ambientes virtuais de aprendizagem, com o CMS (content management system) Wordpress.

Nesta parte do projeto buscou-se otimizar e dar autonomia para os professores na inserção de conteúdo atraves de um painel admnistrativo de fácil uso.

#### Por que o moodle?
O moodle é um software multiplataforma, livre e gratuito de apoio à aprendizagem. Pode ser utilizado não só como ambiente de suporte à Educação a Distância mas também como apoio a cursos presenciais, formação de grupos de estudo, treinamento de professores e equipes.

#### Por que o wordpress?
Assim como o moodle, o WordPress é livre e gratuito, possui uma comunidade grande e ativa, além de oferecer uma interface de uso simples e amigável quando comparada à outros sistemas de gerenciamento de conteúdo.

#### Como integrar as duas plataformas?
Para integrar o Moodle com o Wordpress adotou-se o plugin [Edwiser Bridge](https://edwiser.org/bridge/) por ser de fácil utilização, customisável, dar suporte para outros idiomas e ter uma versão grátis.

Podemos destacar 2 funcionalidades importantes para o nosso projeto:

1. Possibilitar a inscrição ou cancelamento da inscrição de alunos, permitindo, ou não, o registro nos cursos através do WordPress e refletir as mudanças no Moodle;
2. Criação de categorias de cursos no wordpress e Sincronização com as categorias criadas no moodle;

### Projetando tema wordpress
A idéia geral do projeto é proporcionar uma plataforma onde o usuário possa encontrar todas as informações necessárias sobre os cursos abertos oferecidos.

- **Responsivo**, adaptando-se facilmente em qualquer resolução de tela;
- **SEO-friendly**, possibiitando que os mecanismos de busca consigam encontrar o conteúdo da aplicação;
- **compartilhavel**, facilitando ao compartilhar conteúdo ao enviar o link para alguém.

#### Arquitetura de informação
Para garantir que as informações sejam acessíveis e fáceis para os usuários se faz necessário uma estruturação de conteúdo que possibilite aos usuários encontrarem tudo para conhecer os cursos, se inscreverem e cursarem. 

Definir uma estrutura de como as informações devam ser acessadas, apresentadas e conectadas, facilitando o acesso ao conteúdo no seu contexto de uso, porporcionando aos usuários uma visão clara de onde eles estão e os caminhos possíveis a seguir ao escolher determinado caminho de navegação.

- tipos de conteúdo

	O WordPress já disponibiliza alguns tipos padrões de conteúdo, mas para ampliar a subdivisão e suas relações, a criação de custom post types facilita a administração de conteúdo e o design de front-end.

	Inicialmente foram criados 4 Custom Post Types: 
	- Cursos;
	- F.A.Q;
	- Ferramentas;
	- Como Funciona;
	
- organização de conteúdo

	Assim como podemos criar tipos de conteúdo personalizados, podemos criar taxanomias personalizadas e relacionarmos com tipos de conteúdo específicos, aumentando assim a organização do conteúdo.

	Para a categorização do custom post type *"Cursos"* incialmente escolheu-se 3 taxonomias iniciais, sendo elas:
	- Tecnolgias Educacionais;
	- Ciências e Matemática;
	- Computação;

	Para a categorização das perguntas frequentes, *"F.A.Q"*incialmente escolheu-se 2 taxonomias iniciais, sendo elas:
	- Cadastro;
	- Certificação;


#### Identidade Visual
Etapa responsável pela camada visual do projeto. Preocupou-se em manter um padrão visual na vitrine e as salas de aula do Moodle.
- Navegação

	Criar um padrão de navegação tanto para a vitrine quanto para o AVA(Ambiente Virtual de Aprendizagem) é de suma importância para que o usuário consiga compreender onde ele se encontre e navegue pela plataforma de uma maneira amigável, consistente e objetiva.
- Tipografia

	Apesar dos cursos se basearem em vídeos, a escolha de tipografia nas plataformas ajudam que o aluno identifique a hierarquia de informação e crie/identifique padrões no conteúdo;
- Iconografia

	A escolha de bons elementos iconográficos, que sejam universais e legiveis, auxilia na identificação de conteúdos e elementos nas páginas tanto da vitrine quanto no Ava;

### Desenvolvimento
O tema "Vitrine Mooc" foi pensado para ser de fácil customização e inserção de conteúdo e será composdto por apenas um modelo/template de página, a index, e nela serão adcionados, via painel administrativo, os blocos de conteúdo, podem ser inseridos em qualquer posição ou ordem da página.

**Widgets:**
- Banner

	Agilizar a inserção de imagens e legendas; 
	- Escolher imagem da web(url) ou do computador;
	- Legenda com 2 opções de formatação.

- Cursos

	Criar uma listagem de cursos e filtros por taxonomias;
	- Inserir thumbnail;
	- Nome;
	- Descrição;
	- url do curso

- F.A.Q;

	Possibilitar uma fácil inserção de perguntas frequentes e suas respostas;

- Como funciona

	Inserção de informações relevantes sobre a plataforma;

- Ferramentas

	Mostrar as ferramentas disponíveis para a realização dos cursos;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       














