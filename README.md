Neste projeto usei PHP para o Back-End, HTML e CSS para o Front-End, MySQL para o banco de dados, e o framework Laravel que usa o padrão MVC.

Recomento o VSCode para vizualização.

Requisitos de sistema para vizualizar o projeto:
PHP 8.1.12 ou uma versão mais recente;
MySQL 8.0.31 ou uma versão mais recente;
Composer 2.4.4 ou uma versão mais recente;

Passo a passo para vizualização: 

-Após baixar o zip do projeto, extrai os arquivos dentro de uma pasta na sua area de trabalho.
-No VScode, abre a pasta cujo os arquivos foram extraidos dentro.
-crie um novo arquivo dentro da pasta e de o nome de ".env"
-copie o conteudo do arquivo ".env.example" e cole dentro do arquivo criado acima. 
-Apos ter criado o arquivo, va para o terminal do VScode, use os seguintes comandos (Em ordem):

"cd Projeto_Magazord_backend"
"composer install"
"php artisan key:generate"
"php artisan migrate"
"php artisan serve"

clique e aproveite.
